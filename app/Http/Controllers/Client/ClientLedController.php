<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Led;
use App\Models\LedImages;
use Illuminate\Support\Facades\Storage;

class ClientLedController extends BaseClientController
{

    public function addLed()
    {
        return view('client-dashboard.led-add-page');
    }

    public function storeLed(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:500'],
            'location' => ['required', 'string', 'max:500'],
            'price' => ['required', 'numeric'],
            'tax' => ['required', 'numeric'],
            'images' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg,bmp|max:2048'
        ]);

        $led = Led::create([
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
            'price' => $request->price,
            'tax' => $request->tax,
        ]);

        foreach($request->file('images') as $image)
        {
            $image->store('led-images/'.Auth::user()->id.'/'.$led->id,'public');
            $filePath = 'led-images/'.Auth::user()->id.'/'.$led->id .'/'. $image->hashName();
            $images = new LedImages(['path' => $filePath, 'name' => $image->getClientOriginalName()]);
            $led->images()->save($images);
        }

        if($led)
        {
            return back()->with('message', 'Led Created Successfully' );
        }
        else
        {
            return back()->with('message', 'Unable to create New Led' );
        }
    }

    public function viewLed()
    {
        $leds=Led::with('images')->where('user_id',Auth::user()->id)->get();
        //return count($leds);
        return view('client-dashboard.led-view-page',['leds' => $leds,'srNo'=>0]);
    }

    public function ledDelete(Request $request)
    {
        Led::find($request->led_id)->delete();
        LedImages::where('led_id',$request->led_id)->delete();
        Storage::deleteDirectory('public/led-images/'.Auth::user()->id.'/'.$request->led_id);
        return back()->with('success', 'Led Deleted Successfully');
    }
   
}










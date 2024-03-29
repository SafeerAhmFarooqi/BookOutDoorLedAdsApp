<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Orders;
use App\Models\Led;
use App\Models\User;
use Auth;

class SubOrders extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'sub_orders';
    protected $dates = ['deleted_at','startDate','endDate'];
    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'led_id',
        'order_id',
        'price',
        'no_of_days',
        'tax',
        'startDate',
        'endDate',
        'cancel_status',
        'cancel_detail',
        'response',
        'buyer_id',
        'token',
    ];

    

    public function order()
    {
        return $this->belongsTo(Orders::class, 'order_id');
    }

    public function led()
    {
        return $this->belongsTo(Led::class, 'led_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function buyer()
    {
        return $this->belongsTo(User::class, 'buyer_id');
    }

    public function images()
    {
        return $this->hasMany(OrderImage::class, 'sub_order_id');
    }

    public function payment()
    {
        return $this->hasOne(OrderPayment::class, 'sub_order_id');
    }

    public function getAndSaveUniqueToken()
    {
        while (true) {
            $token = bin2hex(random_bytes(50));
            if (self::where('token',$token)->first()) {
                continue;
            } else {
                break;
            }   
        }

        $this->update([
            'token' => $token,
        ]);
    }

}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class AdminApprovalPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function __invokeUser(Request $request)
    {
        return $request->user()->isUserApproved()
                    ? redirect()->intended(RouteServiceProvider::HOME)
                    : view('auth.user-auth.pending-approval-user');
    }

    public function __invokePartner(Request $request)
    {
        return $request->user()->isPartnerApproved()
                    ? redirect()->intended(RouteServiceProvider::HOME)
                    : view('auth.client-auth.pending-approval-partner');
    }

    public function __invokeDashboard(Request $request)
    {
        return $request->user()->isDashboardApproved()
                    ? redirect()->intended(RouteServiceProvider::HOME)
                    : view('auth.pending-approval-dashboard');
    }
}

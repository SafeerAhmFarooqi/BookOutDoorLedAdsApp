<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\AdminApprovalPromptController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::get('client-register', [RegisteredUserController::class, 'createClient'])
                ->name('client.register');

    Route::get('user-register/{redirectUrl?}', [RegisteredUserController::class, 'createUser'])
                ->name('user.register');

    Route::post('register', [RegisteredUserController::class, 'store'])
                ->name('register');

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::get('user-login/{redirectUrl?}', [AuthenticatedSessionController::class, 'createUser'])
                ->name('user.login');

    Route::get('client-login', [AuthenticatedSessionController::class, 'createClient'])
                ->name('client.login');

    Route::get('admin-login', [AuthenticatedSessionController::class, 'createAdmin'])
                ->name('admin.login');

    Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('login');

    Route::get('forgot-password/{page?}', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.update');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

                Route::get('/pending-admin-user-approval', [AdminApprovalPromptController::class, '__invokeUser'])
    ->name('admin.user.approval.notice');
    Route::get('/pending-admin-dashboard-approval', [AdminApprovalPromptController::class, '__invokeDashboard'])
    ->name('admin.dashboard.approval.notice');
    Route::get('/pending-admin-partner-approval', [AdminApprovalPromptController::class, '__invokePartner'])
    ->name('admin.partner.approval.notice');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});

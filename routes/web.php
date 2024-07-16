<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
require __DIR__.'/auth.php';

// Route::get('/', function () {
//     return view('firstpage');
// })->middleware('guest')->name('first');

Route::get('/dashboard', function(){
    return view('admin.dashboard.index');
})->middleware('auth')->name('admin.dashboard');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/trigger_test', [NotificationController::class, 'index']);

Route::get('/send_to_mail', function(){
    $data = [
            'ipAddress' => Request()->ip(),
            'userAgent' => Request()->userAgent()
        ];
    \Mail::send('emails.basic',$data, function($mail){
        $mail->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
        $mail->to('vincentius.yudha23@gmail.com');
    });

    echo 'Terimakasih!';
})->name('email');

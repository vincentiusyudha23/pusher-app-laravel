<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\NotificationEvent;

class NotificationController extends Controller
{
    public function index(Request $request)
    {

        event(new NotificationEvent('Card ID : '.$request->card_id.' Berhasil Masuk'));

        echo 'Done';
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\NotificationEvent;

class NotificationController extends Controller
{
    public function index()
    {
        event(new NotificationEvent('Card ID : #12345 Berhasil Masuk.'));

        echo 'Done';
    }
}

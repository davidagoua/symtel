<?php

namespace Davidagoua\Symtel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SymtelController extends Controller
{

    public function index(SymtelSender $sender)
    {
        return view('symtel::home', [
            'credits'=> $sender->credit()
        ]);
    }
}

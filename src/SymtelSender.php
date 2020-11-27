<?php

namespace Davidagoua\Symtel;

use  Illuminate\Support\Facades\Http;

class SymtelSender
{

    public function __construct()
    {
        $this->username = env('SYMTEl_USERNAME');
        $this->password = env('SYMTEL_PASSWORD');
        $this->pseudo = env('SYMTEl_SHORT_NAME');
    }

    public function send($contact, $message)
    {
        $reponse = Http::get('https://mmg3.symtel.biz:8443/AMMG/SymtelMMG',
            [
                'username'=>$this->username,
                'password'=>$this->password,
                'from'=>$this->pseudo,
                'to'=>$contact,
                'dlr_mask'=>31,
                'text'=>$message
            ]
        );
        return $reponse;
    }

    public function credit()
    {
        $reponse = Http::get('https://mmg3.symtel.biz:8443/AMMG/Account', [
            'username'=>$this->username,
            'password'=>$this->password
        ]);
        return $reponse;
    }
}

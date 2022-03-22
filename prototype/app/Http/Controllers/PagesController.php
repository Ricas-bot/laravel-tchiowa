<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\VisitorContact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function submitContactForm(Request $request){

        $data = [
            'name' => $request ->name,
            'email' => $request ->email,
            'subject' => $request ->subject,
            'message' =>$request ->message
        ];

        Mail::to('geral@tchiowacorpit.co.ao')->send(new VisitorContact($data));

        return redirect('/')->with('msg','Obrigado pelo seu email');;
    }
}

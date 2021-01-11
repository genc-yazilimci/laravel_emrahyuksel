<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function index()
    {
        return view('mailsend');
    }
    public function sendMail(Request $request)
    {
        $data=$request->only(['name','email']);
        Mail::to('laravel@emrahyuksel.com.tr')
            ->send(new SendMail($data));

        return back()->with('success','Mail Başarıyla Gönderildi');
    }
}

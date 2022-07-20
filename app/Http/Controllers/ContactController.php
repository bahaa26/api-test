<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function  send(Request $req) {

        // $req->validate([
        //     'name' => 'required|max:24',
        //     'email' => 'required|max:50|email|regex:/^\S*$/',
        //     'message' => 'required',
        // ]);

        $details = [
            'name' => $req->name,
            'email' => $req->email,
            'message' => $req->message,
        ];
        Mail::to('info@deeb-egypt.com')->send(new ContactMail($details));

        return redirect('ar/contact')->with('success',"<script> Swal.fire(
            'Good job!',
            'Your massege has been sent',
            'success'
          ) </script>");

    }
}

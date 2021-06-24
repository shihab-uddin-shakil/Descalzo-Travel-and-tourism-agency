<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailBoxController extends Controller
{
    public function message()
    {
        return view('mailbox.message');
    }
    public function inbox()
    {
        return view('mailbox.inbox');
    }
    public function compose()
    {
        return view('mailbox.compose');
      }
}
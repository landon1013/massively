<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
  public function store()
  {

    $this->validate(request(), [
      'name' => 'required',
      'email' => 'required',
      'message' => 'required'
    ]);

    Contact::create(request(['name', 'email', 'message']));

    return redirect('/');
  }
}

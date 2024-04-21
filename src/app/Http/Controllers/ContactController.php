<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
  public function index()
  {
    return view('index');
  }

  public function confirm(Request $request)
     {
    $contact = $request->only(['family_name', 'given_name', 'email', 'tel', 'address','building_name', 'content']);
    return view('confirm', compact('contact'));
    return view('thanks');
  }
   public function store()
      {
        $contact = $request->only(['family_name', 'given_name', 'email', 'tel', 'address', 'building_name', 'content']);
        Contact::create($contact);
        return view('thanks');
      }
}
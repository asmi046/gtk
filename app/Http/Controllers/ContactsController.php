<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        $contacts = Contact::allFromCacheName();
        return view('contacts', ['contacts' => $contacts]);
    }
}

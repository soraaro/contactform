<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\http\Facades\DB;

class ContactsController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function confirm(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'postcode' => 'required|numeric',
            'address' => 'required',
            'building_name' => 'nullable',
            'opinion' => 'required',
        ]);
        $inputs = $request->all();
        return view('contacts.confirm');
    }
    public function complete()
    {
        return view('contacts.complete');
    }
    public function management()
    {
        return view('contacts.management');
    }
}

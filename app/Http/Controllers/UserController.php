<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreRequest;

class UserController extends Controller
{
    
    public function store(StoreRequest $request){
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),

            'document_type'=>$request['document_type'],
            'document_number'=>$request['document_number'],
            'surnames'=>$request['surnames'],
            'cell_number'=>$request['cell_number'],
        ]);
        return view('home');
    }
}

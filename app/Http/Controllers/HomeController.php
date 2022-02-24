<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    public function index()
    {
        return view('home');
    }
    public function update(User $user,Request $request)
    {
        $user = User::find( Auth::user()->id );
        $user->update($request->all());
        return back();
    }
}

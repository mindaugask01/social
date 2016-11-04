<?php
namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller {
    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('home');
    }


}
<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UsersController extends Controller
{
    //
    public function index()
    {   
        # code insert User
        User::create([
            'name'=> 'komeil',
            'email' => 'k@gmail.com',
            'password'=>'123'
        ]);
    }
}

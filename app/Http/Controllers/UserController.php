<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Categories;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    private $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        // $users= Categories::all();
        $users = User::create([
            'name' => "phuong",
            'mail_address' => "phuong@gmail.com",
            'password' => Hash::make("dksjfkdsjf"),
            'phone' => "0976594507",
            'created_at' => "2005-11-11 22:29:41",
            'updated_at' => "2005-11-11 22:29:41",
            'deleted_at' => "2005-11-11 22:29:41",
        ]);
        dd($users);
        return view('user');
    }
}

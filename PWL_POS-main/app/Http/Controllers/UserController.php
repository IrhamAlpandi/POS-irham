<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // $data = [
        //     'username'=>'izmi',
        //     'nama'=>'izmi',
        //     'password'=>Hash::make('123'),
        //     'user_id'=>4,
        //     'level_id'=>1
        // ];
        // UserModel::insert($data);

        $data = [
            'nama'=>'ukhti',
        ];
        //UserModel::where('username', 'izmi')->update($data);

        UserModel::where('username', 'izmi')->delete();

        $user = UserModel::with('level')->get();
        return view('user', ['data' => $user]);
    }
}
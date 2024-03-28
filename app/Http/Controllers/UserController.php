<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index()
    
    {
        $user = UserModel::all();
        return view('user', ['data' => $user]);
    }

                //'username' => 'manager50',
                //'nama' => 'Manager50',
                //'password' => Hash::make('12345'),
                //'level_id' => 2,
        //]);

        //$user->username = 'manager51';
        //$user->save();

        //$user->wasChanged();
        //$user->wasChanged('username');
        //$user->wasChanged(['username', 'level_id']);
        //$user->wasChanged('nama');
        //$user->wasChanged(['nama', 'username']);
        //dd($user->wasChanged(['nama', 'username']));
        
        public function tambah()
        {
            return view('user_tambah');
        } 
}
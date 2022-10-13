<?php

namespace App\Http\Controllers;

use App\Models\Places;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $users = User::all();
        return view('admin.index',[
            'users' => $users
        ]);
    }

    public function places() {
        $places = Places::all();
        return view('admin.places', [
            'places'=>$places
        ]);
    }

    public function users() {
        $users = User::all();
        return view('admin.users', [
            'users'=>$users
        ]);
    }
}

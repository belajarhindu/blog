<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use App\Models\User;



class AdminController extends Controller
{
    //
    public function show($id){
        $admin = User::whereHas('roles', function (Builder $query) {
            $query->where('level', '=', 2);
        })->first();

        return $admin;
    }
    
    public function list(){
        $admins = User::whereHas('roles', function (Builder $query) {
            $query->where('level', '=', 2);
        })->get();

        return $admins;
    }

    
}

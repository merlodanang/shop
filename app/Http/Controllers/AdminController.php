<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Illuminate\Pagination\LengthAwarePaginator;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::paginate(15);
        return view('admin.index',['users' => $users]);
    }
}

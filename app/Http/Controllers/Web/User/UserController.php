<?php

namespace App\Http\Controllers\Web\User;

use App\DataTables\UsersDataTable;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(UsersDataTable $usersDataTable){
       return $usersDataTable->render('users.index');
    }
}

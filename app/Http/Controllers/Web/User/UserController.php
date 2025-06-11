<?php

namespace App\Http\Controllers\Web\User;

use App\DataTables\UsersDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Web\User\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index(UsersDataTable $usersDataTable)
    {
        return $usersDataTable->render('users.index');
    }
    public function edit($id)
    {
        $user = User::where('id', $id)->firstOrFail();
        return view('users.edit', [
            'user' => $user
        ]);
    }
    public function update(UserUpdateRequest $request, $id)
    {
        $user = User::where('id', $id)->firstOrFail();
        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'occupation' => $request->occupation
        ]);
        return Redirect::route('users.edit', $user)->with('success', 'User Updated Successfully');
    }
    public function destroy($id)
    {
        $user = User::where('id', $id)->firstOrFail();
        $user->delete();
        return Redirect::back()->with('success', 'User Deleted Successfully');
    }
}

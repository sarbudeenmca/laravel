<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller {
    public function create() {
        return view('create_user');
    }

    public function store(Request $request) {
        #method 1
        // $name = $request->input('name');
        // $email = $request->input('email');
        // $mobile = $request->input('mobile');
        // $age = $request->input('age');
        // $user = new User;
        // $user->name = $name;
        // $user->email = $email;
        // $user->mobile = $mobile;
        // $user->age = $age;
        // $user->save();

        $data = $request->only('name', 'mobile', 'email', 'age');
        $user = User::create($data);
        return "User has beed created! User Id is:" . $user->id;
    }

    public function list() {
        $users = User::all();
        return view('list_user', compact('users'));
    }

    public function edit($id) {
        $user = User::find($id);
        return view('edit_user', compact('user'));
    }

    public function update(Request $request, $id) {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->mobile = $request->input('mobile');
        $user->email = $request->input('email');
        $user->age = $request->input('age');
        $user->save();
        return "User Successfully Updated! <a href='" . url('list_user') . "'>User List</a>";
    }

    public function delete($id) {
        $user = User::find($id);
        $user->delete();
        return "User Deleted!<a href='" . url('list_user') . "'> View User</a>";
    }
}

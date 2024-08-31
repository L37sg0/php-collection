<?php

namespace L37sg0\Rbac\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use L37sg0\Rbac\Models\Role;

class UsersController
{
    public function index()
    {
        $users = User::all();
        return view('rbac::admin.users.index', compact('users'));
    }

    public function edit()
    {
        $roles = Role::all() ?? [];
        $user = User::find(request()->query('id'));
        return view('rbac::admin.users.edit', compact('user', 'roles'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $user = User::create($data);
        if (isset($data['roles'])) {
            $user->roles()->sync(array_keys($data['roles']));
        }
        return response()->redirectToRoute('admin.users.list')->with('success', trans('User saved successfully!'));
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $user = User::find($data['id']);
        $user->update($data);

        $newRoles = isset($data['roles']) ? array_keys($data['roles']) : [];
        $user->roles()->sync($newRoles);

        return response()->redirectToRoute('admin.users.list')->with('success', trans('User updated successfully!'));
    }

    public function destroy()
    {
        User::find(request()->query('id'))->delete();
        return response()->redirectToRoute('admin.users.list')->with('info', trans('User deleted successfully!'));
    }
}

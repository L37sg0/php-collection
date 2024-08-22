<?php

namespace L37sg0\Rbac\Controllers;

use Illuminate\Http\Request;
use L37sg0\Rbac\Models\Permission;
use L37sg0\Rbac\Models\Role;

class RolesController
{
    public function index()
    {
        $roles = Role::all();
        return view('rbac::admin.roles.index', compact('roles'));
    }

    public function edit()
    {
        $permissions = Permission::all() ?? [];
        $role = Role::find(request()->query('id'));
        return view('rbac::admin.roles.edit', compact('role', 'permissions'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $role = Role::create($data);
        if (isset($data['permissions'])) {
            $role->permissions()->sync(array_keys($data['permissions']));
        }
        return response()->redirectToRoute('admin.roles.list');
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $role = Role::find($data['id']);
        $role->update($data);

        $newPermissions = isset($data['permissions']) ? array_keys($data['permissions']) : [];
        $role->permissions()->sync($newPermissions);

        return response()->redirectToRoute('admin.roles.list');
    }

    public function destroy()
    {
        Role::find(request()->query('id'))->delete();
        return response()->redirectToRoute('admin.roles.list');
    }
}

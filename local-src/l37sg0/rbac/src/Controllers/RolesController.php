<?php

namespace L37sg0\Rbac\Controllers;

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
        $permissions = Permission::all();
        $role = Role::find(request()->query('id'));
        return view('rbac::admin.roles.edit', compact('role', 'permissions'));
    }

    public function store()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}

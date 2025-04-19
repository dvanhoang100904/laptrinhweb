<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    public function role(Request $request)
    {
        $role_id = $request->get('id');
        $role = Role::find($role_id);

        $data = [
            'role' => $role,
            'users' => $role->users
        ];

        return view('role.view', $data);
    }

    public function readRole(Request $request)
    {
        $role_id = $request->get('id');
        $role = Role::find($role_id);

        return view('role.view', ['role' => $role]);
    }
}

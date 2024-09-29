<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\RoleGroup;
use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function createRole(Request $request)
    {
        Role::create(['name' => $request->name]);
        return back();
    }

    public function createRoleGroup(Request $request)
    {
        RoleGroup::create(['name' => $request->name]);
        return back();
    }

    public function assignRole(Request $request, $userId)
    {
        $user = User::find($userId);
        $user->role_id = $request->role_id;
        $user->save();

        return back();
    }

    public function assignRoleGroup(Request $request, $userId)
    {
        $user = User::find($userId);
        $user->role_group_id = $request->role_group_id;
        $user->save();

        return back();
    }
}

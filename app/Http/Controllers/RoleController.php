<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{

public function list(Request $request)
{
    $roles = Role::all();
    return view('roles.list', [
            'roles' => $roles,
        ]);
}

public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|unique:roles|max:255',
    ]);

    $role = Role::create(['name' => $validatedData['name']]);
    
    // You can also assign permissions at creation time
    // $role->givePermissionTo('edit articles'); 
    
    return redirect()->back()->with('message', 'Role created successfully.');
}
}

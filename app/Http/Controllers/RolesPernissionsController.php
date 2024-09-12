<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesPernissionsController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('roles-permissions.index');
    }

    public function get_roles_table()
    {
        $roles = Role::withCount('users')->withCount('permissions')->get();
        return view('roles-permissions.partials.roles-permissions-table')->with('roles', $roles)->render() ;
    }

    /**
     * Store a newly created resource in storage.
     */  
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:255', 'unique:roles'],
        ] , [
            'name.required' => __('please_enter_name'),
            'name.unique' => __('Name already exists'),
            'name.max' => __('Name is too long'),
        ]);
        $role = Role::create(['name' => $request->name]);
        if ($role) {
            $data = [
                'status' => true
            ];
            return  $data ;
        }
    }
    public function store_permission(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:255', 'unique:permissions'],
        ] , [
            'name.required' => __('please_enter_name'),
            'name.unique' => __('Name already exists'),
            'name.max' => __('Name is too long'),
        ]);
        $permission = Permission::create(['name' => $request->name]);
        if ($permission) {
            $data = [
                'status' => true
            ];
            return  $data ;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $role = Role::with('permissions')->withCount('users')->where('id', $id)->first();
        return view('roles-permissions.partials.show-role')->with('role',$role)->render();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $role = Role::where('id', $id)->first();
        $selected_permissions = $role->permissions()->pluck('name')->toArray();
        $permissions = Permission::get();
        return view('roles-permissions.edit', compact('role', 'permissions','selected_permissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $role = Role::where('id', $id)->first();
        $role->syncPermissions($request->permissions);
        return $this->edit($role->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role = Role::where('id', $id)->first();
        $role->delete();
        return redirect()->route('roles-permissions.index');
    }
}

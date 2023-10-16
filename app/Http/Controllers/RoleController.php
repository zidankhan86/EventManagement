<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
   public function userRoleForm(){

    $permissions = Permission::all();
    $users = User::all();
    return view('backend.pages.userRole',compact('permissions','users'));
   }

   public function userRoleStore(Request $request){
    try {
        $validatedData = $request->validate([
            'permission_id' => 'required',
            'user_id' => 'required',
           
        ]);

        Role::create($validatedData);

        return response()->json(['message' => 'Role created successfully']);
    } catch (\Exception $e) {
        return response()->json(['message' => 'Role Create failed. Please try again.']);
    }

}
   
}

<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function permissionForm(){
        return view('backend.pages.permission');
    }

    public function permissionCreate(Request $request)
    {
        try {
            Permission::create([
                "name" =>$request->name
            ]);


            return response()->json([
                'status' => 'success',
                'message' => 'Permission created successfully'
            ], 201); // 201 indicates "Created" status
        } catch (\Exception $e) {

            return response()->json([
                'status' => 'error',
                'message' => 'Failed to create permission'
            ], 400); // 400 indicates "Bad Request" status
        }
    }

}

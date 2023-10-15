<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
   public function userRoleForm(){
    return view('backend.pages.userRole');
   }
}

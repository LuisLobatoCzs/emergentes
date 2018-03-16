<?php

namespace Emergentes\Http\Controllers;

use Illuminate\Http\Request;

class AdministratorsController extends Controller
{
   use AuthenticatUsers;
	protected $loginView = 'administrator.login'; 
	protected $guard = 'admins';
}

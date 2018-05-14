<?php

namespace Legobox\QuickTraits\Controllers;

use Illuminate\Http\Request;
use Legobox\QuickTraits\Http\RequestHelpers;
use App\Http\Controllers\Controller;

class SuperController extends Controller
{
	use RequestHelpers;
	//
	
	public function model(){
		return $this->model;
	}
}

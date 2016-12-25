<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function getIndex(){
		return view('opalubka');
	}

	public function getContacts(){
		return view('pages.contacts');
	}

	public function getAbout(){
		return view('pages.about');
	}
}

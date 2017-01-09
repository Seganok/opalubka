<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


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

	public function getgoogle4d6b7f4dfee43ef7(){
		return File::get('google4d6b7f4dfee43ef7.html');
	}

	public function getsitemap(){
		return File::get('sitemap.html');
	}
}

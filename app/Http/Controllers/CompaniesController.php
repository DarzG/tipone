<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompaniesController extends Controller
{
  public function store()
  {
	$data = request()->validate([
		'company_name'=> 'required',
		'company_email'=> ['required','email'],
		'image'=> ['required','dimensions:min_width=100,min_height=100','image'],
		'website'=> 'required',
		
	]);
	dd(request()->all());
  }
}

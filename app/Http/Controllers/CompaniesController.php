<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompaniesController extends Controller
{
  public function store()
  {
	$data = request()->validate([
		'company_name'=> 'required',
		'email'=> ['required','email'],
		'image'=> ['required','dimensions:min_width=100,min_height=100','image'],
		'website'=> 'required',
	]);
	
	$logoPath=request('image')->store('companyLogos','public');
  
	\App\Companies::create([
		'company_name' => $data['company_name'],
		'email' => $data['email'],
		'image' => $logoPath,
		'website' => $data['website'],
	]);
	
	return redirect('/home');
  }
}

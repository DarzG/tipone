<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Companies;
class EmployeesController extends Controller
{
    public function index($company){
		
		
		$company = Companies::findorFail($company);
		
		return view('profile/companyProfiles',[
			'company' => $company,
		]);
	}

	public function store()
  {
	
	$data = request()->validate([
		'f_name'=> 'required',
		'l_name'=> 'required',
		'company'=> 'required',
		'email'=> ['required','email'],
		'phone'=> ['required','digits:11','numeric'],
	]);
	
	\App\Employees::create([
		'f_name' => $data['f_name'],
		'l_name' => $data['l_name'],
		'email' => $data['email'],
		'company_name' =>$data['company'],
		'phone' => $data['phone'],
	]);
	return redirect('/home');
  }
  
}
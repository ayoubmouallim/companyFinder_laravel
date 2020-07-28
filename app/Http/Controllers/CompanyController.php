<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Category;
use App\Http\Requests\companyRequest;

class CompanyController extends Controller
{
    

public function getCategories(){

  //$comapnies=Company::with('categories')->find(1);
$categories = Category::get();
$companies = Company::get();

  return view('companyFinder.dashboard',compact('categories','companies'));
}


public function getCompany(Request $request){
$categories = Category::get();
 $companies=Category::with('companies')->find($request->id)->companies;
  return view('companyFinder.dashboard',compact('companies','categories'));
}


public function addCompany(){
  $categories = Category::get();
  return view('companyFinder.addForm',compact('categories'));

}

public function saveCompany(companyRequest $request){

if($request->sector_id == 0)
return redirect()->back()->with(['error'=>'Choose category']);

  //insert

  Company::create([
    'company_title' => $request->name,
    'category_id' => $request->sector_id,
    'company_website' => $request->website,
    'company_address' => $request->address,
    'company_mail' => $request->email,
    'company_tel' => $request->number,
    'company_city' => $request->city,
    'company_sector' => $request->sector
  ]);

  return redirect()->back()->with(['message'=>'company added successfully']);
//return $request;
}

}

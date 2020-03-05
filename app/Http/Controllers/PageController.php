<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function company_list(){
        $companies = Company::all();
//        return $companies;
        return view('pages.companies',compact('companies'));
    }
    public function certificates($logo){
        return view('pages.certificates',compact('logo'));
    }

    public function testimonial()
    {
        $companies = Company::all();
        return view('pages.testimonial',compact('companies'));
    }
    public function testimonialAsPerCompany($logo){
        return view('pages.testimonial_as_per_company',compact('logo'));
    }
    public function testimonialListAsPerCompany($logo,$local_global){
        return view('pages.testimonial_list_as_per_company',compact('logo','local_global'));
    }




    public function listofKeyTechnician()
    {
        $companies = Company::all();
        return view('pages.listofKeyTechnician',compact('companies'));
    }
    public function technicalTrainingCertificates()
    {
        $companies = Company::all();
        return view('pages.technicalTrainingCertificates',compact('companies'));
    }
    public function listofEquipmentUsers()
    {
        $companies = Company::all();
        return view('pages.listofEquipmentUsers',compact('companies'));
    }
    public function specifications()
    {
        $companies = Company::all();
        return view('pages.specifications',compact('companies'));
    }
    public function comparison()
    {
        $companies = Company::all();
        return view('pages.comparison',compact('companies'));
    }
    public function lockKeyFeatures()
    {
        $companies = Company::all();
        return view('pages.lockKeyFeatures',compact('companies'));
    }
    public function specificationChangeBeforeSubmitting()
    {
        $companies = Company::all();
        return view('pages.specificationChangeBeforeSubmitting',compact('companies'));
    }
    public function institutionWithDateofSubmission()
    {
        $companies = Company::all();
        return view('pages.institutionWithDateofSubmission',compact('companies'));
    }
    public function productListWithQuotedPrices()
    {
        $companies = Company::all();
        return view('pages.productListWithQuotedPrices',compact('companies'));
    }
    public function catalogues()
    {
        $companies = Company::all();
        return view('pages.catalogues',compact('companies'));
    }
    public function private()
    {
        $companies = Company::all();
        return view('pages.private',compact('companies'));
    }
    public function government()
    {
        $companies = Company::all();
        return view('pages.government',compact('companies'));
    }



}

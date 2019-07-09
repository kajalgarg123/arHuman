<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    public function __construct()
    {	
    	$lang = 'en';
    	App::setLocale($lang);
    }

	public function home()
	{
		
		return view('web.index');
	}

	public function aboutus()
	{
		return view('web.about-us');
	}

	public function clinical()
	{
		return view('web.clinical');
	}

	public function counterfeit()
	{
		return view('web.counterfeit');
	}

	public function spclanguage()
	{
		return view('web.spc-language');
	}

	public function team()
	{
		return view('web.team');
	}

	public function faq()
	{
		return view('web.faq');
	}

	public function blog()
	{
		return view('web.blog');
	}

	public function career()
	{
		return view('web.carrer');
	}

	public function blank()
	{
		return view('web.blank');
	}

	public function privacy_policy()
	{
		return view('web.privacy-policy');
	}

	public function term_condition()
	{
		return view('web.terms-conditions');
	}

}

<?php

namespace App\Http\Controllers;

use App\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|max:30',
            'last_name' => 'required|max:30',
            'email' => 'required|email|max:35',
            'contact' => 'required|numeric|digits:10',
            'resume' => 'required|mimes:pdf|max:10000'
        ],[
            'first_name.required' => 'First Name is required.',
            'first_name.max' => 'First Name should be less than 30 characers.',
            'last_name.required' => 'Last Name is required.',
            'last_name.max' => 'Last Name should be less than 30 characters.',
            'email.required' => 'Email is required.',
            'email.max' => 'Email should be less than 35 characters.',
            'contact.required' => 'Contact is required.',
            'contact.digits' => 'Contact must be 10 digits.',
            'contact.numeric' => 'Contact must be numeric.',
            'resume.required' => 'Please select CV.',
            'resume.mimes' => 'Please select a PDF file.',
        ]);    
        $requestData = $request->all();
        if($validator->passes()){

            $resume = Resume::create($requestData);
            return redirect('/career')->with('message', 'Your CV is sent.');
        }else{
            return redirect()->to(app('url')->previous(). '#about')->withErrors($validator->errors())->withInput();
        }    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function show(Resume $resume)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function edit(Resume $resume)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resume $resume)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resume $resume)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\SpcPdf;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SpcPdfsController extends Controller
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
        return view('admin.spcPdf.create');
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
            'spc_pdf' => 'required|mimes:pdf|max:10000',
        ],[
            'spc_pdf.required' => 'Please upload a PDF',
            'spc_pdf.mimes' => 'Please select a PDF file',
        ]);    

        if($validator->passes()){
            $file = $request->file('spc_pdf');
            $destinationPath = public_path('uploads');
            $file->move($destinationPath,$file->getClientOriginalName());

            $requestData = $request->all();
            $requestData['spc_pdf'] = $destinationPath.'/'.$file->getClientOriginalName();
            $resume = SpcPdf::create($requestData);
            return redirect()->back()->with('message', 'PDF is successfully uploaded.');
        }else{
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }    

    }

    public function getDownload()
    {
        //PDF file is stored under project/public/download/info.pdf
        
        $file = SpcPdf::orderBy('id', 'DESC')->first();
        $filepath = $file->spc_pdf;
        $headers = array(
                  'Content-Type' => 'application/pdf',
                );
        $newName = 'spcpdf-'.time().'.pdf';

        return response()->download($filepath, 'spcpdf'.time().'.pdf', $headers);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

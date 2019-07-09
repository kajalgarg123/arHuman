<?php

namespace App\Http\Controllers\Admin;

use App\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $teammembers = Team::all();
          return view('admin.team.index' , compact('teammembers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.team.create');
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
            'name' => 'required|max:30',
            'description' => 'required|max:500'
        ],[
            'name.required' => 'Name is required.',
            'name.max' => 'Name should be less than 30 characers.',
            'description.required' => 'Description is required.',
            'description.max' => 'Description should be less than 500 characters.'
        ]);    
        $requestData = $request->all();
        if($validator->passes()){

            $resume = Team::create($requestData);
            return redirect('/admin/team/index')->with('message', 'Team Member has been added.');
        }else{
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teammember = Team::where('id', $id)->first();
        return view('admin.team.show' , compact('teammember'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $teammember = Team::where('id', $id)->first();
        return view('admin.team.edit' , compact('teammember'));
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
        $input = $request->input();
        $validator =  Validator::make($input,[
            'name' => 'required|string|max:30',
            'description' => 'required|string|max:500',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $team = Team::findOrFail($id);
        $team->name = $input['name'];
        $team->description = $input['description'];
        $team->save();

        return redirect()->route('team.index')->with('message', 'Team Member details updated successfully..');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        if ($team->delete()) {
            $response = array(
                'status' => 'success',
                'message' => 'Team Member deleted successfully',
            );
        } else {
            $response = array(
                'status' => 'error',
                'message' => 'Team Member can not be deleted.Please try again',
            );
        }
        return json_encode($response);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{

    public function index()
    {
        $comments = Comment::all();
        return view('admin.comments.index')->with('comments',$comments);
    }

    public function storeComments(Request $request)
    {	
    	$validator = Validator::make($request->all(), [
    		'name' => 'required|min:3|max:25',
    		'email' => 'required|max:40|email',
    		'comment' => 'required|max:500'
    	]);

    	$requestData = $request->all();
		if($validator->passes()){

			$comments = Comment::create($requestData);
			return redirect('/blog')->with('message', 'Reply sent.');
		}else{
			return redirect()->to(app('url')->previous(). '#reply-form')->withErrors($validator->errors())->withInput();
		}
		

    	
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\file;

class uploadFileController extends Controller
{
 	function index(){
 		$users = file::all()->toArray();
 		return view('category.index',compact('users'));
 	}   
 	public function create()
    {
        return view('category.create');
    }

 	function store(Request $request){

 		$user = new file;

 		$this->validate($request,[
 			'select_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
 		]); 
 		if ($request->get('description') !=null) {
 			$user->description = $request->get('description');
 		}

 		$image = $request ->file('select_file');
 		$new_name= rand() . '.' . $image->getClientOriginalExtension();
 		$image->move(public_path("images"),$new_name);
 		$user->name = $new_name ;
 		$user->save();
 		return redirect()->route('category.index')->with('success','Picture Added');
 	}

 	public function edit($id){

        $user = file::find($id); 
        return view('category.edit', compact('user','id'));
    }

 	public function update(Request $request, $id){

        $this->validate($request, [
            'select_file'   => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        $user = file::find($id);

        if ($request->get('description') !=null) {
 			$user->description = $request->get('description');
 		}

 		$image = $request ->file('select_file');
 		$new_name= rand() . '.' . $image->getClientOriginalExtension();
 		$image->move(public_path("images"),$new_name);
 		$user->name = $new_name ;
        
        $user->save();
        return redirect()->route('category.index');

    }

    public function destroy($id){

        $user = file::find($id);
        $user->delete();
        return redirect()->route('category.index')->with('success','Post Deleted');
    }
}

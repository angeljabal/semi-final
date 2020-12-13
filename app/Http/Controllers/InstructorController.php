<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instructor;

class InstructorController extends Controller
{
    public function index() {
        $instructors = Instructor::get();
        return view('instructors.index', compact('instructors'));
    }

    public function create(){
        return view('instructors.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'user_id'   => 'required|numeric|unique:instructors,user_id',
            'aoe'       => 'required',
            'rating'    => 'required|numeric',
        ]);

        Instructor::create($request->all());
        return redirect('/instructors')->with('info', 'New instructor has been added');   

    }

    public function edit(Instructor $instructor){
        return view('instructors.edit', ['instructor'=>$instructor]);
    }

    public function update(Request $request, Instructor $instructor){
        $this->validate($request, [
            'aoe'       => 'required',
            'rating'    => 'required|numeric',
        ]);
        $instructor->update($request->all());

        return redirect('/instructors')->with('info', "Updated Successfully!");   
    }

    public function delete(Request $request){
        $instructorId = $request['instructor_id'];
        $instructor = Instructor::find($instructorId);
        $name = $instructor->user->fname . " " . $instructor->user->lname;
        $instructor->delete();
        return  redirect('/instructors')->with('info', "The record of $name has been deleted successfully.");   
    }
}

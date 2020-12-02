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
        $this->validate($request, $this->rules());

        Instructor::create($request->all());

        return redirect('/instructors')->with('info', 'New instructor has been added');   

    }

    public function edit($id){
        $instructor = Instructor::find($id);
        
        return view('instructors.edit', ['instructor'=>$instructor]);
    }

    public function update(Request $request, $id){
        $instructor = Instructor::find($id);

        $this->validate($request, [
            'aoe'       => 'required',
            'rating'    => 'required|numeric',
        ]);
        $instructor->update($request->all());

        return redirect('/instructors')->with('info', "Updated Successfully!");   
    }

    public function rules(){
        return [
            'user_id'   => 'required|numeric',
            'aoe'       => 'required',
            'rating'    => 'required|numeric',
        ];
    }
}

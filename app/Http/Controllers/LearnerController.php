<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Learner;

class LearnerController extends Controller
{
    public function index() {
        $learners = Learner::get();
        return view('learners.index', compact('learners'));
    }

    public function create(){
        return view('learners.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'user_id'   => 'required|numeric|unique:learners,user_id|unique:instructors,user_id', //validation (must be a number; should not be duplicated; an instructor should not be a learner)
            'level'     => 'required',
            'status'    => 'required'
        ]);
        Learner::create($request->all());
        return redirect('/learners')->with('info', 'New learner has been added');   

    }

    public function edit(Learner $learner){
        return view('learners.edit', ['learner'=>$learner]);
    }

    public function update(Request $request, Learner $learner){
        $this->validate($request, [
            'level'     => 'required',
            'status'    => 'required'
        ]);
        $learner->update($request->all());
        return redirect('/learners')->with('info', "Updated Successfully!");   
    }

    public function delete(Request $request){
        $learnerId = $request['learner_id'];
        $learner = learner::find($learnerId);
        $name = $learner->user->fname . " " . $learner->user->lname;
        $learner->delete();
        return  redirect('/learners')->with('info', "The record of $name has been deleted successfully.");   
    }
}

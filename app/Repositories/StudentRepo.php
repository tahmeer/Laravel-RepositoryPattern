<?php
namespace App\Repositories;

use App\Repositories\IStudent;
use Illuminate\Http\Request;
use App\Student;

class StudentRepo implements IStudent{

    // public $user;
    // function __construct(students $student){
    //     $this->student = $user;
    // }
    public function show(){
        $data = Student::all();
        return view('Student.index',compact("data"));
    }
    public function create(){
        return view("Student.create");
    }
    public function store()
    {
        $studentdata = new Student;
        $studentdata->Name = request()->name;
        $studentdata->Contact = request()->contactnumber;
        $studentdata->Fee = request()->fee;
        $studentdata->save();
        // dd(request());
        return redirect()->route('firstpage');
        
    }
    public function edit($id){
        
        $userdata = Student::where('id','=',$id)->firstorFail();
       
        return view("Student.edit",compact("userdata"));
    }
    public function update(){
        $userdata = Student::where('id','=',request()->user_id)->firstorFail();
        $userdata->Name = request()->name;
        $userdata->Contact = request()->contactnumber;
        $userdata->Fee = request()->fee;
        $userdata->save();
        return redirect()->route('firstpage');
    }
    function delete($id){
        $user = Student::find($id);
        $user->delete();
        return redirect()->route('firstpage');
    }
}
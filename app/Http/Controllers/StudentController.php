<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Repositories\StudentRepo;
use App\Repositories\IStudent;

class StudentController extends Controller
{
    private $student;

    function __construct(IStudent $student){
        $this->student = $student;
    }
    public function index(){

        return $this->student->show();
    }
    public function create(){

        return $this->student->create();
    }
    public function store(){
        return $this->student->store();
    }
    public function edit($id){
        return $this->student->edit($id);
    }
    public function update(){
        return $this->student->update();
    }
    public function delete($id){
        return $this->student->delete($id);
    }
    public function UseLimit(){
    //    $data = Student::orderBy('Fee','ASC')->skip(1)->take(2)->limit(1)->get();
       $data = Student::orderByDesc('Fee')->get();
        dd($data);
    }
}

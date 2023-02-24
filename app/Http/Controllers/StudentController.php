<?php

namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\Student;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    public function listAll(){
        $data = Student::orderBy("id","desc")->paginate(20);
        return view("student.list",[
            "data"=>$data
        ]);
    }

    public function create(){
        return view("student.create");
    }

    public function store(Request $request){
        $request->validate([
            "name"=>"required|string",
            "age"=>"required|numeric|min:0",
            "address"=>"required|string",
            "telephone"=>"required|numeric",
        ],[
            "required"=>"Vui lòng nhập thông tin",
            "string"=> "Phải nhập vào là một chuỗi văn bản",
            "min"=> "Phải nhập :attribute  tối thiểu :min",
        ]);
        try {
            Student::create([
                "name"=>$request->get("name"),
                "age"=>$request->get("age"),
                "address"=>$request->get("address"),
                "telephone"=>$request->get("telephone"),
            ]);
            return redirect()->to("/")->with("success","Thêm sản phẩm thành công");
        }catch (\Exception $e){
            return redirect()->back()->with("error",$e->getMessage());
        }
    }
}

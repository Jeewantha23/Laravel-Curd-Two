<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::get();
        return view('Teachers.index',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            "name"=>"required",
            "subject"=>"required",
            "age"=>"required",
            "degree"=>"required",
            "address"=>"required",

        ]);

        Teacher::create([
         
            "name"=>$request->name,
            "subject"=>$request->subject,
            "age"=>$request->age,
            "degree"=>$request->degree,
            "address"=>$request->address,
        ]);

        return redirect()->route('Teachers.index')->with('success', 'Teacher  are Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
     $teacher = Teacher::find($id);
     return view ('Teachers.show',compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {

               $teacher = Teacher::find($id);

    return view ('Teachers.edit',compact('teacher'));

     
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
        "name" => "required",
        "subject" => "required",
        "age" => "required",
        "degree" => "required",
        "address" => "required"

    ]);

    $teacher = Teacher::find($id);

    $teacher->update([
        'name' => $request->name,
        'subject' => $request->subject,
        'age' => $request->age,
        'degree' =>$request->degree,
        "address" => $request->address
    ]);

    return redirect()->route('Teachers.index')->with('success', 'Teacher Are Updated Successfully');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
          Teacher::find($id)->delete();

        return redirect()->route('Teachers.index')->with('success', 'Teachers are Deleted Successfully');
    }
}

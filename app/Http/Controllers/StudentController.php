<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title= "Data Student"; 
        $students = Student::get();
        return view('student.index',compact('title','students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Create New Student';
       return view('student.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
           'name' => 'required|string',
           'email' => 'required|email|unique:students,email',
           'gender' => 'nullable',
           'phone' => 'nullable',
           'address' => 'nullable',
           'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
           
        ]);
        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/students'), $imageName);
        }
        
        Student::create([
           'name' => $request->name,
           'email' => $request->email,
           'gender' => $request->gender,
           'phone' => $request->phone,
           'address' => $request->address,
           'image' => $imageName,
        ]);
        
        Alert::success('Success','Berhasil Menambahkan Data Siswa');
        return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Edit Student";
        $student = Student::findOrFail($id);//select * from users where id="$id"
        return view('student.edit',compact('title','student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
           'name' => 'required|string',
           'email' => 'required|email|unique:students,email,'. $id,
           'gender' => 'nullable',
           'phone' => 'nullable',
           'address' => 'nullable',
           'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
           
        ]);
        
        $student = Student::findOrFail($id);
        $imageName = $student->image;
        if ($request->hasFile('image')) {
            //hapus gambar lama
           if ($student->image) {
               unlink(public_path('uploads/students/'.$student->image));
           }
           //gambar baru
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/students'), $imageName);
        }
        $student->image = $imageName;
        $student->email = $request->email;
        $student->gender = $request->gender;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->name = $request->name;
        $student->save();
        Alert::success('Success','Berhasil Mengubah Data Siswa');
        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $student = Student::find($id);
       $student->delete();
       unlink(public_path('uploads/students/'.$student->image));
       Alert::success('Success','Berhasil Menghapus Data');
       return redirect()->route('student.index');
    }
}
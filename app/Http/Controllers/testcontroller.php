<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\test;

class testcontroller extends Controller{
function test(){

$tabletest = test::get();

return view('test', compact('tabletest'));
}

public function update(Request $request, Student $student)
    {
        $request->validate(['name' => 'required']);
        $student->update($request->all());
        return redirect()->route('students.index')->with('success','Student updated successfully');
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Appointment;

class HomeController extends Controller
{
    public function index()
    {
        

                // $appointments = Appointment::all();
                $appointments = Appointment::paginate(10);
                return view('admin.adminhome', compact('appointments'));
    
          
    }

    // ...

public function edit($id)
{
    $appointment = Appointment::find($id);
    return view('admin.edit', compact('appointment'));
}

public function update(Request $request, $id)
{
    $appointment = Appointment::find($id);
    $appointment->update($request->all());
    return redirect('/adminhome')->with('success', 'Appointment updated successfully');
}

public function destroy($id)
{
    $appointment = Appointment::find($id);
    $appointment->delete();
    return redirect('/adminhome')->with('success', 'Appointment deleted successfully');
}




}

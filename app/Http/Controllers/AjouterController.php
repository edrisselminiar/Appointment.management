<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AjouterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.ajouter');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
  
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'prenom' => 'required',
            'cin' => 'required',
            'téléphone' => 'required',
            'email' => 'required|email',
            'appointment_day' => 'required|date',
            'appointment_hour' => 'required',
        ]);

        Appointment::create($request->all());

        // return view('admin.listeRendez');
        return redirect()->route('listeRendez.dashboard')->with('success', 'Appointment created successfully.');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

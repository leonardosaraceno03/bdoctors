<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


use App\User;
use App\Models\Specialization;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $doctors = [];

        $doctorData = Doctor::with(['user', 'specializations'])->where('user_id', $user->id)->get();

        foreach ($doctorData as $doctor) {
            $specializations = $doctor->specializations->pluck('name')->implode(', ');
            $doctors[] = [
                'id' => $doctor->id,
                'name' => $doctor->user->name,
                'surname' => $doctor->user->surname,
                'address' => $doctor->address,
                'telephone' => $doctor->telephone,
                'performance' => $doctor->performance,
                'description' => $doctor->description,
                'specializations' => $specializations
            ];
        }

        $data = [
            'user' => $user,
            'doctors' => $doctors
        ];

        return view('admin.doctors.index', $data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * @param  int $id
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user();
        $doctors = [];

        $doctorData = Doctor::with(['user', 'specializations'])->where('user_id', $user->id)->get();

        foreach ($doctorData as $doctor) {
            $specializations = $doctor->specializations->pluck('name')->implode(', ');
            $doctors[] = [
                'id' => $doctor->id,
                'name' => $doctor->user->name,
                'surname' => $doctor->user->surname,
                'address' => $doctor->address,
                'telephone' => $doctor->telephone,
                'performance' => $doctor->performance,
                'description' => $doctor->description,
                'specializations' => $specializations
            ];
        }

        $data = [
            'user' => $user,
            'doctors' => $doctors
        ];
        // $singleDoctor = Doctor::findorFail($id);

        return view('admin.doctors.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        if ($id != auth()->user()->doctor->id) {
            abort(403, 'Non sei autorizzato a modificare questo profilo');
        }

        $doctor = Doctor::findOrFail($id);
        $specializations = Specialization::all();
        return view('admin.doctors.edit', compact('doctor', 'specializations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @param  \int $id
     * @return \Illuminate\Http\Response
     * 
     */
    public function update(Request $request, $id)
    {
        $doctor = Doctor::findOrFail($id);
        
        $doctor->address = $request->input('address');
        $doctor->cv = $request->input('cv');
        $doctor->telephone = $request->input('telephone');
        $doctor->performance = $request->input('performance');
        $doctor->description = $request->input('description');
        $doctor->visibility = $request->input('visibility');
        
        $specializations = $request->input('specializations', []);
        $doctor->specializations()->sync($specializations);
        
        $doctor->save();

        

        return redirect()->route('admin.doctors.show', $doctor->id);
        // return view('admin.doctors.edit', compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $doctor = $user->doctor;
    
        // Elimina i record corrispondenti nella tabella "doctor_specialization"
        $doctor->specializations()->delete();
    
        // Elimina il record nella tabella "doctors"
        $doctor->delete();
    
        // Elimina il record nella tabella "users"
        $user->delete();
    
        return redirect()->route('admin.doctors.index')
            ->with('success', 'User deleted successfully.');
    }
}

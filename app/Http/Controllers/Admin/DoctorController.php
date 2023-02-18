<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;


use App\User;
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
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        //
    }
}

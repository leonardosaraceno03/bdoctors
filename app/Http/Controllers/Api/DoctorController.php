<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Doctor;
use App\User;
use App\Models\Specialization;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // step1 - mandiamo il json di Dottori e Specializzazioni in HomePage.vue
        //$doctors = Doctor::with('user', 'specializations');
        $specializations = Specialization::All();

        // $data = [
        //     'doctors' => $doctors,
        //     'specializations' => $specializations,
        // ];

        return response()->json($specializations);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $specializationId = $request->input('specialization');

        if ($specializationId){
            $filteredDoctors = Doctor::with('specializations','user','reviews','ratings')
            ->whereHas('specializations', function ($query) use($specializationId){
                $query->where('specializations.id', $specializationId);
            })->get();
        
        }else{
            $filteredDoctors = Doctor::with('specializations', 'user', 'reviews', 'ratings')->get();
        }

        

        $specializations = Specialization::all();

        $data = [
            'doctors' => $filteredDoctors,
            'specializations' => $specializations
        ];

        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $single_doctor = Doctor::With('user', 'specializations')->find($id);

        if(!$single_doctor) return response('dottore non trovato', 404);

        return response()->json($single_doctor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

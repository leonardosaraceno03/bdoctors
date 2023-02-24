<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Doctor;
use App\User;
use App\Models\Specialization;
use App\Models\Review;
use App\Models\Rating;

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
        //$doctors = Doctor::with('user', 'specializations', 'ratings', 'reviews', 'messages')->get();
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
        // $specializationId = $request->input('specialization');

        // if ($specializationId){
        //     $filteredDoctors = Doctor::with('specializations','user','reviews','ratings')
        //     ->whereHas('specializations', function ($query) use($specializationId){
        //         $query->where('specializations.id', $specializationId);
        //     })->get();

        // }else{
        //     $filteredDoctors = Doctor::with('specializations', 'user', 'reviews', 'ratings')->get();
        // }



        // $specializations = Specialization::all();

        // $data = [
        //     'doctors' => $filteredDoctors,
        //     'specializations' => $specializations
        // ];

        // return response()->json($data);
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

    //custom function for doctors filtering

     /**
     * Filter the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function filter(Request $request)
    {
        $specializationId = $request->input('specialization');
        $rating = $request->input('rating');
        $reviewCount = $request->input('review_count');

        $doctors = Doctor::with('user', 'specializations', 'ratings', 'reviews', 'messages');

        if ($specializationId) {
            $doctors = $doctors->whereHas('specializations', function ($query) use ($specializationId) {
                $query->where('specializations.id', $specializationId);
            });
        }

        if ($rating) {
            $doctors = $doctors->whereHas('ratings', function ($query) use ($rating) {
                $query->select(DB::raw('AVG(stars) as avg_rating, doctor_id'))
                      ->groupBy('doctor_id')
                      ->having('avg_rating', '>=', $rating);
            });
        }

        if ($reviewCount) {
            $doctors = $doctors->whereHas('reviews', function ($query) use ($reviewCount) {
                $query->having('COUNT(*) >= ?', [$reviewCount]);
            });
        }

        $doctors = $doctors->get();

        return response()->json($doctors);
    }


}

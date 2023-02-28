<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Doctor;
use App\User;
use App\Models\Specialization;
use App\Models\Review;
use App\Models\Rating;
use Illuminate\Support\Facades\DB;

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
        $single_doctor = Doctor::with('user', 'specializations', 'ratings')->find($id);

        if(!$single_doctor) return response('dottore non trovato', 404);

        $avg_vote = $single_doctor->ratings->avg('stars');
        
        $data = [
            'single_doctor' => $single_doctor,
            'avg_vote' => $avg_vote
        ];

        return response()->json($data);
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
        $doctors = Doctor::with('user', 'specializations', 'ratings', 'reviews', 'ratings');

        if ($request->has('specialization')) {
            $specialization_id = $request->input('specialization');
            $doctors = $doctors->whereHas('specializations', function ($query) use ($specialization_id) {
                $query->where('specialization_id', '=', $specialization_id);
            });
        }

        if ($request->has('min_reviews')) {

            $min_reviews = $request->input('min_reviews');

            $doctors = $doctors->whereHas('reviews', function($query) use ($min_reviews) {
                $query->groupBy('doctor_id')->havingRaw('COUNT(reviews.id) >= ?', [$min_reviews]);

            });

        }

        if ($request->has('min_rating')) {
            $min_rating = $request->input('min_rating');
            $doctors = $doctors->whereHas('ratings', function($query) use ($min_rating) {
                $query->selectRaw('AVG(stars) as avg_stars')->groupBy('doctor_id')->havingRaw('AVG(stars) >= ?', [$min_rating]);
            });
        }
        $doctors = $doctors->get();

        return response()->json($doctors);
    }


    // $query->groupBy('doctor_id')->havingRaw('COUNT(ratings.id) >= ?', [$min_reviews]);
}

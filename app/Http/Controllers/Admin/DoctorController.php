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
        // $user = Auth::user();
        // $doctors = [];

        // $doctorData = Doctor::with(['user', 'specializations'])->where('user_id', $user->id)->get();

        // foreach ($doctorData as $doctor) {
        //     $specializations = $doctor->specializations->pluck('name')->implode(', ');
        //     $doctors[] = [
        //         'id' => $doctor->id,
        //         'name' => $doctor->user->name,
        //         'surname' => $doctor->user->surname,
        //         'address' => $doctor->address,
        //         'telephone' => $doctor->telephone,
        //         'performance' => $doctor->performance,
        //         'description' => $doctor->description,
        //         'specializations' => $specializations
        //     ];
        // }

        // $data = [
        //     'user' => $user,
        //     'doctors' => $doctors
        // ];

        $doctor = Doctor::where('user_id', Auth::user()->id)->firstOrFail();
        $user = Auth::user();

        return view('admin.doctors.index', compact('doctor', 'user'));
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
                'specializations' => $specializations,
                'avatar' => $doctor->avatar,
                'cv' => $doctor->cv
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
        $request->validate(
            [

                'address' => 'required|string|max:50',
                'cv' => 'sometimes|file',
                'telephone' => 'nullable|string|max:15',
                'performance' => 'nullable|string|max:255',
                'description' => 'nullable|string|max:255',
                'visibility' => 'required|boolean',
                'specializations' => 'required|array|min:1',
                'specializations.*' => 'integer|exists:specializations,id',

            ],
            [

                'address.max' => "Il campo 'Indirizzo' non deve superare i 50 caratteri",
                'telephone.required' => "Il campo 'Telefono' non deve superare i 15 caratteri",
                'performance.required' => "Il campo 'Prestazioni' non deve superare i 255 caratteri",
                'description.required' => "Il campo 'Descrizione' non deve superare i 255 caratteri",
                'visibility.required' => "Il campo 'Profilo' è obbligatorio",
                'specializations.required' => "Seleziona almeno una specializzazione",
            ]
        );

        $doctor = Doctor::findOrFail($id);

        $doctor->address = $request->input('address');
        $doctor->cv = $request->input('cv');
        $doctor->telephone = $request->input('telephone');
        $doctor->performance = $request->input('performance');
        $doctor->description = $request->input('description');
        $doctor->visibility = $request->input('visibility');

        $specializations = $request->input('specializations', []);
        $doctor->specializations()->sync($specializations);

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar')->store('avatars', 'public');
            $doctor->avatar = $avatar;
        }

        if ($request->hasFile('cv')) {
            $cv = $request->file('cv')->store('cv', 'public');
            $doctor->cv = $cv;
        }

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

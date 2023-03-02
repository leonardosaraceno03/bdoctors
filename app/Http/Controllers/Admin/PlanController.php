<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Plan;
use Carbon\Carbon;
use App\Models\DoctorPlan;

class PlanController extends Controller
{
    public function index()
    {
        $plans = Plan::all();
        // $bronze = Plan::whereId(1)->first();
        // $silver = Plan::whereId(2)->first();
        // $gold = Plan::whereId(3)->first();
        $doctor = Auth::user();

        return view('admin.plans.index', compact('plans', 'doctor'));
    }
    
    public function showPayment($plan)
    {
        $plan = Plan::findOrFail($plan);
        return view('admin.plans.payment', compact('plan'));
    }
    
    public function checkout($plan)
    {
        $plan = Plan::findOrFail($plan);
        
        // Otteniamo l'id del dottore loggato
        $doctor_id = Auth::user()->doctor->id;
        
        // Associamo il dottore all'ID del piano di abbonamento nella tabella pivot
        $doctor_plan = DoctorPlan::create([
            'doctor_id' => $doctor_id,
            'plan_id' => $plan->id,
            'expiration_date' => Carbon::now()->addHours($plan->duration)
        ]);
        
        return redirect()->route('admin.doctors.show', $doctor_id)->with('success', 'Il pagamento è stato effettuato con successo!');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expert;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class ExpertController extends Controller
{
    // Show All Experts in the system
    public function viewAllExpert()
    {
        return view('experts.viewAllExpert', [   
            'experts' => Expert::latest()->filter(request(['search']))->paginate(7)
        ]);
    }

    // Show Expert of the Platinums
    public function viewOwnExpert()
    {
        $expert = Expert::where('id', auth()->id())->first();
        return view('experts.viewOwnExpert', [   
            'experts' => Expert::latest()->filter(request(['id']))->paginate(7)
        ]);
    }

    // Show Create Form
    public function addOwnExpert()
    {
        return view('experts.addOwnExpert');
    }

    // Save Expert Information
    public function saveExpert(Request $request)
    {
        $formFields = $request->validate([
            'expert_name' => 'required',
            'expert_email' => ['required', 'email', Rule::unique('experts', 'expert_email')],
            'expert_phone_number' => 'required|unique:experts,expert_phone_number',
            'domain_name' => 'required',
            'expert_university' => 'required',
            'platinum_id' => 'required',
            'consent' => 'required',
            'application_date' => 'required',
        ]);
        
        $expert = Expert::create($formFields);

        return redirect()->route('experts.viewOwnExpert')
            ->with('success', 'User created successfully.');
    }

    // Show Single Expert
    public function show(Expert $expert)
    {
        return view('experts.view-expert', ['expert' => $expert]);
    }

    // Delete Single Expert
    public function destroy($id)
    {
        $expert = Expert::findOrFail($id);
        $expert->delete();
        return redirect()->route('experts.viewOwnExpert')->with('success', 'Expert deleted successfully');
    }

    public function editOwnExpert(Expert $expert)
    {
        return view('experts.editOwnExpert', ['expert' => $expert]);
    }
}

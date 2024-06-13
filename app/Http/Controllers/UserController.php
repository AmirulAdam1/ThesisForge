<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Staff;
use App\Models\Mentor;
use App\Models\Platinum;
use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use App\Http\Controllers\Controller;

// index - Show all users
// show - Show single user
// create - Show form to create new user
// store - Save new user to database
// edit - Show form to edit user
// update - Save the changes to database
// destroy - Delete user

class UserController extends Controller
{
    // Show All Users
    public function index()
    {  
        if(Auth::user()->role == 'platinum') {
            $users = User::latest()->where('role', 'like', 'platinum')->filter(request(['role', 'search']))->paginate(7);
            return view('users.index', [   
                'users' => $users,
                'page' => $users->currentPage()
            ]);
        } else {
            $users = User::latest()->filter(request(['role', 'search']))->paginate(7);
            return view('users.index', [
                'users' => $users,
                'page' => $users->currentPage()
            ]);
        }

    }

    // Show Single User
    public function show(User $user)
    {
        return view('users.show', ['user' => $user]);
    }

    // Show Create Platinum Form
    public function create()
    {
        return view('users.create');
    }

    // Store New Platinum
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:'.User::class,
            'phone' => 'required|unique:users,phone',
            'title' => 'required',
            'identity_card' => ['required', Rule::unique('platinums', 'identity_card')],
            'gender' => 'required',
            'religion' => 'required',
            'race' => 'required',
            'citizenship' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postcode' => 'required',
            'country' => 'required',
            'facebook_name' => 'required',
            'current_level' => 'required',
            'field' => 'required',
            'institute' => 'required',
            'occupation' => 'required',
            'study_sponsorship' => 'required',
            'registration_type' => 'required',
            'program_interested' => 'required',
            'program_batch' => 'required',
            'referral_exist' => 'required',
            'consent' => 'required',
            'application_date' => 'required',
        ]);

        if($request->hasFile('profile_photo')) {
            $formFields['profile_photo'] = $request->file('profile_photo')->store('profile-photos', 'public');
        }

        if(isset($request->referral_name) && isset($request->referral_batch)) {
            $formFields['referral_name'] = $request->referral_name;
            $formFields['referral_batch'] = $request->referral_batch;
        } else {
            $formFields['referral_name'] = null;
            $formFields['referral_batch'] = null;
        }

        if($request->hasFile('transaction_proof')) {
            $formFields['transaction_proof'] = $request->file('transaction_proof')->store('transaction_proofs', 'public');
        }

        $user = User::create($formFields);

        $user->markEmailAsVerified(); // Add this line
        event(new Registered($user));

        $platinum = $user->platinum()->firstOrCreate([
            'staff_id' => Auth::id(),
        ], $formFields);

        $platinum->education()->firstOrCreate([], $formFields);
        $platinum->membership()->firstOrCreate([], $formFields);
        
        return redirect()->route('users.index')
            ->with('success', 'User created successfully.');
    }

    // Show User Personnel Profile Edit Form
    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    // Update User Personnel Profile
    public function update(Request $request, User $user)
    {   
        if($user->role == 'platinum') {
            $formFields = $request->validate([
                'name' => 'required',
                'email' => ['required', 'email'],
                'phone' => 'required',
                'title' => 'required',
                'identity_card' => 'required',
                'gender' => 'required',
                'religion' => 'required',
                'race' => 'required',
                'citizenship' => 'required',
                'address' => 'required',
                'city' => 'required',
                'state' => 'required',
                'postcode' => 'required',
                'country' => 'required',
                'facebook_name' => 'required',
                'current_level' => 'required',
                'field' => 'required',
                'institute' => 'required',
                'occupation' => 'required',
                'study_sponsorship' => 'required',
            ]);
        } else {
            $formFields = $request->validate([
                'name' => 'required',
                'email' => ['required', 'email'],
                'phone' => 'required',
                'address' => 'required',
            ]);
        }

        if($request->hasFile('profile_photo')) {
            $formFields['profile_photo'] = $request->file('profile_photo')->store('profile-photos', 'public');
        }

        $user->update($formFields);

        if($user->role == 'platinum') {
            $platinum = new Platinum([
                'staff_id' => $user->platinum->staff_id,
                'title' => $formFields['title'],
                'identity_card' => $formFields['identity_card'],
                'gender' => $formFields['gender'],
                'religion' => $formFields['religion'],
                'race' => $formFields['race'],
                'citizenship' => $formFields['citizenship'],
                'address' => $formFields['address'],
                'city' => $formFields['city'],
                'state' => $formFields['state'],
                'postcode' => $formFields['postcode'],
                'country' => $formFields['country'],
                'facebook_name' => $formFields['facebook_name'],
            ]);
            $education = new Education([
                'current_level' => $formFields['current_level'],
                'field' => $formFields['field'],
                'institute' => $formFields['institute'],
                'occupation' => $formFields['occupation'],
                'study_sponsorship' => $formFields['study_sponsorship'],
            ]);
        } else if($user->role == 'staff') {
            $staff = new Staff([
                'address' => $formFields['address'],
            ]);
        } else {
            $mentor = new Mentor([
                'address' => $formFields['address'],
            ]);
        }

        if ($user->role == 'platinum') {
            $p = Platinum::find($user->platinum->id);
            $p->update($platinum->toArray());
            $p->education()->update($education->toArray());
        } else if ($user->role == 'staff') {
           $user->staff()->update($staff->toArray());
        } else {
            $user->mentor()->update($mentor->toArray());
        }

        return redirect()->route('users.index')
            ->with('status', 'User updated successfully!');
    }
    
    // Show report form
    public function showReportForm()
    {
        // Initial load with an empty collection
        return view('users.report', ['platinums' => collect()]);
    }

    // Handle report form submission
    public function report(Request $request)
    {
        $query = Platinum::with(['user', 'education', 'membership']);

        if ($request->program_interested && $request->program_interested != 'All') {
            $query->whereHas('membership', function ($q) use ($request) {
                $q->where('program_interested', $request->program_interested);
            });
        }

        if ($request->program_batch && $request->program_batch != 'All') {
            $query->whereHas('membership', function ($q) use ($request) {
                $q->where('program_batch', $request->program_batch);
            });
        }

        if ($request->from_date) {
            $query->whereDate('created_at', '>=', $request->from_date);
        }

        if ($request->to_date) {
            $query->whereDate('created_at', '<=', $request->to_date);
        }

        $platinums = $query->latest()->get();

        return response()->json(['platinums' => $platinums]);
    }
}

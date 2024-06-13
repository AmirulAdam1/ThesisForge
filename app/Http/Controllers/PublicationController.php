<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< Updated upstream
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Publication;
use App\Models\Platinum;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Barryvdh\DomPDF\Facade\Pdf;

class PublicationController extends Controller
{
    public function viewPublicationList()
    {

        $user = Auth::user();
        // Fetch all publications and pass to the view
        $publications = Publication::where('platinum_id', $user->id)->get();
        return view('managePublication.viewPublicationList', compact('publications'));
    }

    public function viewAllPublicationList()
    {
        // Fetch all publications and pass to the view
        $publication = Publication::all();
        return view('managePublication.viewAllPublicationList', compact('publication'));
    }

    public function addPublication()
    {
        return view('managePublication.addPublication');
    }

    public function addPublicationPost(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            "publication_title" => "required",
            "publication_author" => "required",
            "publication_date" => "required",
            "publication_type" => "required",
            "publication_domain" => "required",
            'publication_file' => 'required|mimes:pdf|max:1000240',
        ]);

        $userID = Auth::user()->id;


        // PDF File Handling
        if ($request->hasFile('publication_file')) {
            $file = $request->file('publication_file');
            $fileName = uniqid() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/managePublication', $fileName, 'public');

            // Create a new Publication instance and populate it with data
            $publication = new Publication();
            $publication->publication_title = $validatedData['publication_title'];
            $publication->publication_author = $validatedData['publication_author'];
            $publication->publication_date = $validatedData['publication_date'];
            $publication->publication_type = $validatedData['publication_type'];
            $publication->publication_domain = $validatedData['publication_domain'];
            $publication->publication_fileName = $fileName;
            $publication->publication_filePath = $filePath;
            $publication->platinum_id = $userID; // Use the user_id from the form
            $publication->save();

            return redirect()->route("managePublication.addPublication")->with("success", "Publication added successfully!");
        }
        return redirect()->route("managePublication.addPublication")->with("fail", "Failed to add publication!");
    }

        public function editPublication($publication_id)
    {
        $publication = Publication::findOrFail($publication_id);
        $platinums = Platinum::all();
        return view('managePublication.editPublication', compact('publication'));
    }

    public function editPublicationPost(Request $request, $publication_id)
    {
        // Validate the incoming request data
        $request->validate([
            "publication_title" => "required",
            "publication_author" => "required",
            "publication_date" => "required",
            "publication_type" => "required",
            "publication_domain" => "required",
            'publication_file' => 'nullable|file|mimes:pdf|max:1000240', // Optional file validation

        ]);

        $publication = Publication::findOrFail($publication_id);
        $publication->update([
            "publication_title" => $request->input('publication_title'),
            "publication_author" => $request->input('publication_author'),
            "publication_date" => $request->input('publication_date'),
            "publication_type" => $request->input('publication_type'),
            "publication_domain" => $request->input('publication_domain'),
            
        ]);

        // PDF File Handling
        if ($request->hasFile('publication_file')) {

            if ($publication->PD_FilePath) {
                Storage::delete($publication->PD_FilePath);
            }

            $file = $request->file('publication_file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('managePublication', $fileName, 'public');
            $publication->publication_fileName = $fileName;
            $publication->publication_filePath = $filePath;
        }

        $publication->save();
        return redirect()->route('managePublication.viewPublicationList', $publication_id)->with('success', 'Publication updated successfully');
    }

    public function deletePublication($publication_id)
    {
        try {
            Publication::where('publication_id', $publication_id)->delete();
            // Redirect with success message
            return redirect()->route("managePublication.viewPublicationList")->with("success", "Publication deleted successfully!");
        } catch (\Exception $e) {
            Log::error('Failed to delete publication', ['error' => $e->getMessage()]);
            return redirect()->route("managePublication.viewPublicationList")->with("fail", "Failed to delete publication!");
        }
    }

    public function viewPublication($publication_id)
    {
        $publication = Publication::findOrFail($publication_id);
        return view('managePublication.viewPublication', compact('publication'));
    }

    public function search(Request $request)
    {
        // Validate the search input
        $request->validate([
            'search' => 'nullable|string|max:255',
        ]);
    
        // Get the search input
        $search = $request->input('search');
    
        // Query publications based on the search input
        $publications = Publication::query()
            ->when($search, function ($query, $search) {
                return $query->where('publication_title', 'like', '%' . $search . '%')
                                ->orWhere('publication_author', 'like', '%' . $search . '%');
            })
            ->get();
    
        // Pass the publications to the view
        return view('managePublication.viewAllPublicationList', ['publication' => $publications]);
    }

    public function searchMentor(Request $request)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
        ]);

        $name = $request->input('searchMentor');

        $users = User::query()
            ->when($name, function ($query, $name) {
                return $query->where('name', 'like', '%' . $name . '%');
            })
            ->get();

        return view('managePublication.generatePublicationReportView', [
            'users' => $users,
        ]);
    }
    
        public function viewPublicationFile($publication_id)
    {
        $publication = Publication::findOrFail($publication_id);
        $filePath = $publication->publication_filePath;
        return response()->file(storage_path('app/public/' . $filePath));
    }

        public function generateReportView()
    {
        // Retrieve users with the role of 'platinum'
        $users = User::where('role', 'platinum')->get();
        
        // Pass the data to the view
        return view('managePublication.generatePublicationReportView', compact('users'));
    }
    
    public function generateReport(Request $request)
    {
        $request->validate([
            'name' => 'required|exists:users,name',
        ]);

        $name = $request->input('name');

        // Get the platinum member by name
        $user = User::where('name', $name)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Platinum member not found!');
        }

        // Fetch publications that belong to the specified platinum 
        $publications = Publication::where('platinum_id', $user->id)->get();
        // Count the number of publications
        $publicationCount = $publications->count();
        // Return the PDF view
        $pdf = PDF::loadView('managePublication.publicationReport', compact('user', 'publications', 'publicationCount'));
        return $pdf->download('publicationReport.pdf');
    }
    




=======

class PublicationController extends Controller
{
    //
>>>>>>> Stashed changes
}

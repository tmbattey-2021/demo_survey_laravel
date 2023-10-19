<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurveyController extends Controller
{

    public function index()
    {
        return view('survey');
    }

    public function store(Request $request)
    {
        // Fetch data from the form
        $bornCountry = $request->input('country');
        $resideCountry = $request->input('reside_country'); // NOTE: Make sure to change the name attribute of your second country dropdown to "reside_country" in the HTML
        $state = $request->input('country-state');
        
        // For now, just return the data. In a real application, you'd store this data, or take some other action.
        return back()->with('message', "Form submitted successfully! Born in: $bornCountry, Resides in: $resideCountry, State: $state");
    }

    public function showSurveyForm() {
        $countries = ['Afghanistan', 'Åland Islands', 'Albania', 'Algeria', 'American Samoa', 'Andorra', 'Angola'];  // this list can be fetched from a database or a config file, etc.
        return view('survey', ['countries' => $countries]);
    }
    
    //
}

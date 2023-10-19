<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class countryController extends Controller
{
    public function CountryWiseUser($country)
    {
        return view("pages.country",compact('country'));
        // return $country;
    }

    public function addCountry()
    {
        return view("country/add-country");
    }

    public function allCountry()
    {
        return view("country/all-country");
    }

    public function editCountry()
    {
        return view("country/edit-country");
    }
    
}
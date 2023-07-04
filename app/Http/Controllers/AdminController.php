<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;

class AdminController extends Controller
{
    public function enquiry()
    {
        $enquiry = Enquiry::all();

        return view('admin.enquirydata', compact('enquiry'));
    }
}

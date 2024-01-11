<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use App\Models\Tataorder;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function blog()
    {
        return view('blog');
    }

    public function service()
    {
        return view('service');
    }

    public function contact()
    {
        return view('contact');
    }

    public function ai_rpa()
    {
        return view('ai-rpa');
    }

    public function smm()
    {
        return view('smm');
    }

    public function dmn()
    {
        return view('dmn');
    }

    public function seo()
    {
        return view('seo');
    }

    public function ppc()
    {
        return view('ppc');
    }

    public function enquiry(Request $request)
    {
        $enquiry = new Enquiry();
        $enquiry->name = $request->name;
        $enquiry->email = $request->email;
        $enquiry->phone = $request->phone;
        $enquiry->service = $request->service;
        $enquiry->message = $request->message;
        $enquiry->save();
        $name = $request->input('name');
        $email = $request->input('email');

        // Perform any additional logic, such as saving the data to a database

        // Return the thank you view
        return view('thankyou')->with([
            'name' => $name,
            'email' => $email,
        ]);
    }

    public function contactform(Request $request)
    {
        $enquiry = new Enquiry();
        $enquiry->name = $request->name;
        $enquiry->email = $request->email;
        $enquiry->phone = $request->phone;
        $enquiry->service = 'null';
        $enquiry->subject = $request->subject;
        $enquiry->message = $request->message;
        $enquiry->save();

        return redirect()->back();
    }

    public function tatawisdom()
    {
        return view('tatawisdom');
    }

    public function orders(Request $request)
    {
        // dd($request);
        $tataorders = new Tataorder();
        $tataorders->name = $request->name;
        $tataorders->phone = $request->phone;
        $tataorders->orders = $request->orders;

        $tataorders->save();

        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $cars = Car::latest()->get();
        return view('frontend.homepage');
    }
    public function contact()
    {
        return view('frontend.contact');
    }

    public function contactStore(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'pesan' => 'required'
        ]);

        // Message::create($data);

        // return redirect()->back()->with([
        //     'message' => 'pesan anda berhasil dikirim',
        //     'alert-type' => 'success'
        // ]);

    }
    public function detail()
    {
        return view('frontend.detail');
    }
}

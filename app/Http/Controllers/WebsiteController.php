<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Reservation;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function reserveDevices(Request $request) {

        $data = $request->validate([
            'name' => 'required|min:5',
            'type' => 'required',
            'num' => 'required',
            'time' => 'required',
            'phone' => 'required'
        ]);

        Reservation::create([
            'name' => $data['name'],
            'type' => $data['type'],
            'num' => $data['num'],
            'time' => $data['time'],
            'phone' => $data['phone'],
            'status' => 'Cekanje'
        ]);
    }

    public function blogDetail($id) {

        $blog = Blog::find($id);
        return view('blog-details', compact('blog'));
    }
}

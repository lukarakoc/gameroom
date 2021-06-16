<?php

namespace App\Http\Controllers;

use App\Tournaments;
use Illuminate\Http\Request;

class TournamentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {

        $tournaments = Tournaments::all();
        return view('admin.tournament.index', compact('tournaments'));

    }

    public function create() {
        return view('admin.tournament.create');
    }

    public function store(Request $request) {

        $data = $request->validate([
            'name' => 'required|min:3',
            'cost' => 'required',
            'price' => 'required',
            'text' => 'required|min:20',
            'photo' => 'required'
        ]);

        $extension = $data['photo']->getClientOriginalExtension();
        $filename = str_random(10) . '.' . $extension;
        $data['photo']->move(public_path() . '/images/', $filename);

        Tournaments::create([
            'name' => $data['name'],
            'cost' => $data['cost'],
            'price' => $data['price'],
            'description' => $data['text'],
            'photo' => '/images/' . $filename
        ]);

        return redirect(route('tournaments.index'));
    }

    public function destroy($id) {

        Tournaments::find($id)->delete();
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use App\Exception;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blog.index', compact('blogs'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->validate([
           'name' => 'required|min:3',
           'photo' => 'required',
           'body' => 'required|min:50'
        ]);

        $extension = $data['photo']->getClientOriginalExtension();
        $filename = str_random(10) . '.' . $extension;
        $data['photo']->move(public_path() . '/images/', $filename);

        Blog::create([
           'name' => $data['name'],
           'photo' => '/images/' . $filename,
           'body' => $data['body']
        ]);



        return redirect()->back()->with('success', 'Uspjesno');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        return view('admin.blog.show', compact('blog'));

        // TODO napraviti admin.blog.show stranicu
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::find($id)->delete();
        return redirect()->back()->with('success', 'Uspjesno');
    }
}

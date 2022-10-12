<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view('admin.team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:255'],
            'designation' => ['required'],
            'image' => ['required', 'mimes:png'],
        ]);

        $img = $request->file('image')->store('public/images/team');

        $team = new Team();

        $team->image = $img;
        $team->designation = $request->designation;
        $team->name = $request->name;
        $team->facebook = $request->facebook;
        $team->twitter = $request->twitter;
        $team->google_plus = $request->google_plus;

        $team->save();

        return redirect()->back()->with('success', 'Team has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('admin.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $request->validate([
            'name' => ['required', 'max:255'],
            'designation' => ['required'],
        ]);
        // dd($request->all());
        $image = $team->image;
        if ($request->hasFile('image')) {
            Storage::delete($team->image);
            $image = $request->file('image')->store('public/images/team');
        }

        $team->update([
            'image' => $image,
            'designation' => $request->designation,
            'name' => $request->name,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'google_plus' => $request->google_plus
        ]);

        return redirect()->back()->with('success', 'Team has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        //
    }
}

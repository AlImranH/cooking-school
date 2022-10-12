<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');
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
            'title' => ['required', 'max:255'],
            'des' => ['required'],
            'icon' => ['required', 'mimes:png'],
        ]);

        $icon = $request->file('icon')->store('public/images/service');

        $slider = new Service();

        $slider->icon = $icon;
        $slider->title = $request->title;
        $slider->des = $request->des;
        $slider->save();

        return redirect()->back()->with('success', 'Service has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('admin.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {

        $request->validate([
            'title' => ['required', 'max:255'],
            'des' => ['required'],
            'icon' => ['mimes:png'],
        ]);
        // dd($request->all());
        $icon = $service->icon;
        if ($request->hasFile('icon')) {
            Storage::delete($service->icon);
            $icon = $request->file('icon')->store('public/images/image');
        }

        $service->update([
            'icon' => $icon,
            'title' => $request->title,
            'des' => $request->des
        ]);

        return redirect()->back()->with('success', 'Service has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        Storage::delete($service->icon);
        $service->delete();
        return redirect()->back()->with('success', 'Service has been deleted successfully.');
    }
}

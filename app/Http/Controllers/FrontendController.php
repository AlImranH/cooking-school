<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Image;
use App\Models\Message;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Team;
use App\Models\Video;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Concat;

class FrontendController extends Controller
{
    public function index()
    {
        $images = Image::all();
        $sliders = Slider::all();
        $services = Service::all();
        $videos = Video::all();
        $teams = Team::all();
        $contact = Contact::findOrFail(1);
        return view('frontend.index', compact('images', 'sliders', 'services', 'videos', 'teams', 'contact'));
    }

    public function messageList()
    {
        $messages = Message::all();
        return view('admin.message.index', compact('messages'));
    }

    public function message(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required'],
        ]);

        Message::create($validated);
        return redirect()->back()->with('success', 'Your message has been sent successfully');
    }
}

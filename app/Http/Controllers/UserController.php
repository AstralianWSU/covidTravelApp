<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\ListHotspot;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {
        return view('home');
    }

    public function hotspots() {
        $listHotspot = ListHotspot::all();
        return view('hotspots',compact ('listHotspot'));

    }
    public function searchPlace() {
        return view('search');

    }
    public function routeBuilder() {
        return view('route');

    }
    public function history() {
        $histories = History::whereUserId(Auth::id())->get();
        return view('history', compact("histories"));

    }
    public function saveHotspot(Request $request) {
        $newListHotspot = new ListHotspot;
        $newListHotspot->name = $request-> listHotlistItem;
        $newListHotspot->is_infected = 1;
        $newListHotspot->save();

        return redirect()->back();
    }

    public function saveHistory(Request $request){
        $history = new History;
        $history->user_id = Auth::id();
        $history->location_a = $request->location_a;
        $history->location_b = $request->location_b;
        $history->date__visit = $request->date_visit;
        $history->save();

        return redirect()->back();
    }
}

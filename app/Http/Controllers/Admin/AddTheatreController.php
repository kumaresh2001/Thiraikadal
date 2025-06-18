<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Theatre;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class TheatreController extends Controller
{
   
    public function showTheatres(Request $request):RedirectResponse {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'city' => ['required', 'numeric'],
            'description' => ['required']
        ]);

        $userId = Auth::user()->id;

        $theatres = DB::table('users')->where('user_id', '=' ,$userId)->get();

        foreach ($theatre as $theatres) {
            echo $theatre->theatre_name + "\t" + $theatre->description;
        }
    }

    public function createTheatre(Request $request): RedirectResponse {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'city' => ['required', 'numeric'],
            'description' => ['required']
        ]);


        $theatre = Theatre::create([
            'user_id' => Auth::user()->id,
            'theatre_name' => $request->name,
            'city_id' => $request->city,
            'description' => $request->description,
            'image' => $request->image
        ]);


        return redirect()->intended(RouteServiceProvider::HOME);
    }

}

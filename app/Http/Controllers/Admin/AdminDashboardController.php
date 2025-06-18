<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Theatre;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use DB;

class AdminDashboardController extends Controller
{
   
    public static function navigate(Request $request)
    {
        $userId = Auth::user()->id;
        $option = $request->get('option');
        if($option == 'theatreView'){
            $theatres = DB::table('users')
                            ->join('theatre','users.id','=','theatre.user_id')
                            ->join('city','theatre.city_id','city.city_id')
                            ->where('users.id',$userId)->select('users.id','theatre.theatre_id','theatre.theatre_name','theatre.description','city.name')->get();
            return view('admin.adminTheatreView',["theatres"=>$theatres]);
        }
        else{
            return view('admin.adminDashboard');
        }
    }

}

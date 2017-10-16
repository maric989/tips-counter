<?php

namespace App\Http\Controllers;

use App\Wage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $wages = Wage::all();
        $result = Wage::pluck('tips')->sum();


        return view('home',compact('user','wages','result'));
    }

    public function newtips()
    {
        $user = Auth::user();

        return view('wage/index',compact('user'));
    }

    public function addtips(Request $request,Wage $wage)
    {
        $user = Auth::user();

        $wage->user_id = $request->userID;
        $wage->tips = $request->tips;
        $wage->created_at = $request->date;
        $wage->description = $request->description;

        $wage->save();

        return back();

    }
}

<?php

namespace App\Http\Controllers;

use App\Wage;
use Carbon\Carbon;
use Carbon\CarbonInterval;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use ConsoleTVs\Charts\Facades\Charts;
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
        $wages = Wage::orderBy('created_at', 'desc')->take(11)->get();
        $result = Wage::pluck('tips')->sum();

        $days_of_week = DB::select
                    (DB::raw("
                    SELECT x.currentday, x.suma FROM
                   (SELECT dayname(created_at) as currentday,
                   MAX(DAYOFWEEK(created_at)) as maxday,
                                    sum(tips) as suma
                   FROM wages 
                   GROUP BY currentday) x 
                   ORDER BY x.maxday
                   "));


        //dd($days_of_week);

        $chart2 = Charts::multi('bar', 'highcharts')
            // Setup the chart settings
            ->title("Weekly report")
            // A dimension of 0 means it will take 100% of the space
            ->dimensions(0, 400) // Width x Height
            // This defines a preset of colors already done:)
            ->template("material")
            // You could always set them manually
            ->colors(['#2196F3', '#F44336', '#FFC107','#000000','#54332C',
                '#25CD88'])
            // Setup the diferent datasets (this is a multi chart)
            ->dataset('Ponedeljak', [$days_of_week[1]->suma])
            ->dataset('Utorak', [$days_of_week[2]->suma])
            ->dataset('Sreda', [$days_of_week[3]->suma])
            ->dataset('Cetvrtak', [$days_of_week[4]->suma])
            ->dataset('Petak', [$days_of_week[5]->suma])
            ->dataset('Subota', [$days_of_week[6]->suma])
            ->dataset('Nedelja', [$days_of_week[0]->suma])
            // Setup what the values mean
            ->labels(['Nedeljni report']);





        $date = Carbon::now();


        $monthName = $date->format('F');

        $currentMonth = Wage::all()->pluck('tips','created_at');



        $januar_tips  = Wage::whereMonth('created_at','=',1 )->pluck('tips')->sum();
        $februar_tips  = Wage::whereMonth('created_at','=',2 )->pluck('tips')->sum();
        $mart_tips  = Wage::whereMonth('created_at','=',3 )->pluck('tips')->sum();
        $april_tips  = Wage::whereMonth('created_at','=',4 )->pluck('tips')->sum();
        $maj_tips  = Wage::whereMonth('created_at','=',5 )->pluck('tips')->sum();
        $jun_tips  = Wage::whereMonth('created_at','=',6 )->pluck('tips')->sum();
        $jul_tips  = Wage::whereMonth('created_at','=',7 )->pluck('tips')->sum();
        $avgust_tips  = Wage::whereMonth('created_at','=',8 )->pluck('tips')->sum();
        $septembar_tips  = Wage::whereMonth('created_at','=',9 )->pluck('tips')->sum();
        $octobar_tips  = Wage::whereMonth('created_at','=',10 )->pluck('tips')->sum();
        $november_tips = Wage::whereMonth('created_at','=',11 )->pluck('tips')->sum();
        $december_tips = Wage::whereMonth('created_at','=',12 )->pluck('tips')->sum();




//        CHARTS

        $chart = Charts::multi('bar', 'highcharts')
            // Setup the chart settings
            ->title("Godisnji izvestaj")
            // A dimension of 0 means it will take 100% of the space
            ->dimensions(0, 400) // Width x Height
            // This defines a preset of colors already done:)
            ->template("material")
            // You could always set them manually
            ->colors(['#2196F3', '#F44336', '#FFC107','#000000','#54332C',
                      '#25CD88','#9EAAC5','#133175','#D6263E','#509A4F',''])
            // Setup the diferent datasets (this is a multi chart)
            ->dataset('Januar', [$januar_tips])
            ->dataset('Februar', [$februar_tips])
            ->dataset('Mart', [$mart_tips])
            ->dataset('April', [$april_tips])
            ->dataset('Maj', [$maj_tips])
            ->dataset('Jun', [$jun_tips])
            ->dataset('Jul', [$jul_tips])
            ->dataset('Avgust', [$avgust_tips])
            ->dataset('Septembar', [$septembar_tips])
            ->dataset('Oktobar', [$octobar_tips])
            ->dataset('Novembar', [$november_tips])
            ->dataset('Decembar', [$december_tips])
            // Setup what the values mean
            ->labels(['Meseci']);




        return view('home',compact(
            'user',
                'wages',
                'result',
                'januar_tips',
                'februar_tips',
                'mart_tips',
                'april_tips',
                'maj_tips',
                'jun_tips',
                'jul_tips',
                'avgust_tips',
                'septembar_tips',
                'octobar_tips',
                'november_tips',
                'december_tips',
                'chart',
                'currentMonth',
                'monthName',
                'chart2'
            ));
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

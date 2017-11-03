@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-md-12" style="text-align: center">
            <table class="table table-bordered">
                <thead>
                <th style="text-align: center">Name</th>
                <th style="text-align: center">Email</th>
                </thead>
                <tbody>
                <td style="text-align: center">{{$user->name}}</td>
                <td style="text-align: center">{{$user->email}}</td>
                </tbody>
            </table>
       </div>
    </div>
    <div class="row" style="text-align: center">
    {{--<a href="{{route('newtips')}}" class="btn btn-success">Add new tips</a>--}}
        <button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#user_rules" style="align-content: center">Add Tips</button>
        <div id="user_rules" class="collapse" style="align-content: center">
            <form class="form-group" action="{{route('addtips')}}" method="POST">
                {{csrf_field()}}
                <label for="date">Date</label>
                <input class="form-group" type="date" name="date"><br>
                <label for="tips">Money</label>
                <input class="form-group" type="text" name="tips">

                <input type="hidden" name="userID" value="{{$user->id}}">

                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <div class="row">
       <div class="col-md-4" style="text-align: center">
            <h3 style="text-align: center">Wages</h3>
           <table class="table table-bordered table-hover">
               <thead>
                    <th style="text-align: center">Date</th>
                    <th style="text-align: center">Money</th>
               </thead>
           @foreach ($wages as $wage)
            <tr>
                <td>{{$wage->created_at->format('d.m.y')}}</td>
                <td>{{$wage->tips}}</td>
            </tr>
           @endforeach
            <tr>
                <td><b>SUM</b></td>
                <td>{{$result}}</td>
            </tr>
           </table>
       </div>
        <div class="col-md-4" style="text-align: center">

        </div>
        <div class="col-md-4" style="text-align: center">
            <h3 style="text-align: center">Month Stats</h3>
            <table class="table table-bordered table-hover" >
                <thead>
                <th style="text-align: center">Month</th>
                <th style="text-align: center">Money</th>
                </thead>
                <tr>
                    <td style="text-align: center">Januar</td>
                    <td style="text-align: center">{{$januar_tips}}</td>
                </tr>
                <tr>
                    <td style="text-align: center">Februar</td>
                    <td style="text-align: center">{{$februar_tips}}</td>
                </tr>
                <tr>
                    <td style="text-align: center">Mart</td>
                    <td style="text-align: center">{{$mart_tips}}</td>
                </tr>
                <tr>
                    <td style="text-align: center">April</td>
                    <td style="text-align: center">{{$april_tips}}</td>
                </tr>
                <tr>
                    <td style="text-align: center">Maj</td>
                    <td style="text-align: center">{{$maj_tips}}</td>
                </tr>
                <tr>
                    <td style="text-align: center">Jun</td>
                    <td style="text-align: center">{{$jun_tips}}</td>
                </tr>
                <tr>
                    <td style="text-align: center">Jul</td>
                    <td style="text-align: center">{{$jul_tips}}</td>
                </tr>
                <tr>
                    <td style="text-align: center">Avgust</td>
                    <td style="text-align: center">{{$avgust_tips}}</td>
                </tr>
                <tr>
                    <td style="text-align: center">Septembar</td>
                    <td style="text-align: center">{{$septembar_tips}}</td>
                </tr>
                <tr>
                    <td style="text-align: center">Oktobar</td>
                    <td style="text-align: center">{{$octobar_tips}}</td>
                </tr>
                <tr>
                    <td style="text-align: center">Novembar</td>
                    <td style="text-align: center">{{$november_tips}}</td>
                </tr>
                <tr>
                    <td style="text-align: center">Decembar</td>
                    <td style="text-align: center">{{$december_tips}}</td>
                </tr>

            </table>
        </div>
        <div class="col-md-4"></div>
    </div>

    <div class="app">
        <div class="row">
            <center>
                {!! $chart2->html() !!}

            </center>
        </div>
        <div class="row">
                <center>
                    {!! $chart->html() !!}

                </center>
        </div>

    </div>
    <!-- End Of Main Application -->
    {!! Charts::scripts() !!}
    {!! $chart->script() !!}
    {!! $chart2->script() !!}
</div>
@endsection

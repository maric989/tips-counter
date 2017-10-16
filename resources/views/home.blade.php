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
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                </tbody>
            </table>
       </div>
    </div>
    <a href="{{route('newtips')}}" class="btn btn-success">Add new tips</a>

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
            <h3 style="text-align: center">Month Stats</h3>
            <table class="table table-bordered table-hover">
                <thead>
                <th style="text-align: center">Month</th>
                <th style="text-align: center">Money</th>
                </thead>
                <tr>
                    <td>Januar</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Februar</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Mart</td>
                    <td></td>
                </tr>
                <tr>
                    <td>April</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Maj</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Jun</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Jul</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Avgust</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Septembar</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Oktobar</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Novembar</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Decembar</td>
                    <td></td>
                </tr>
            </table>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
@endsection

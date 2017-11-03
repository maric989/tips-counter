@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-group" action="{{route('addtips')}}" method="POST">
                {{csrf_field()}}
                <label for="date">Date</label>
                <input class="form-group" type="date" name="date"><br>
                <label for="tips">Money</label>
                <input class="form-group" type="text" name="tips">

                <input type="hidden" name="userID" value="{{$user->id}}">

                <button class="btn btn-primary">Add tips</button>
            </form>
        </div>
    </div>


@endsection
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> <b> Ttitle: </b> {{ $rent->name }}</div>
                   
                    <div class="card-body"><b> Description: </b>
                        <!-- @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif -->
                         {{$rent->description}}


                    </div>

                    <div class="card-body">
                        <!-- @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif -->

                        <img src="{{asset('storage/' . $rent->images) }}">

                    </div>
                    <div class="card-body"><b>Review: </b>

@foreach($reviews as $review)
<!-- @foreach($users as $user)
<div class="card">   Authors: {{ $user->name }}</div>
@endforeach -->

  <div class="card-header">  {{ $review->description }}</div>
   <br>


@endforeach

</div>
                </div>
            </div>
        </div>
    </div>
@endsection



@extends('layouts.app')

@section('content')
    <div class="container card">
        <form action="{{route('rents.storereservation',['rent'=>$rent->id])}}" method="post" enctype="multipart/form-data">
        @method('post')
    @csrf
            <div class="card-header">{{ ('RESERVATION') }}</div>
            <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                @if (isset($error))

                <div class="card-header" style="color:red;text-align:center;"> {{ $error }}</div>

                @endif
                    <div class="card-header"> <b> Ttitle: </b>   {{ $rent->name }}</div>

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
                </div>
            <div class="card-body">
                <div class="row justify-content-center mb-3">
                    <div class="col-md-2">
                        <label for="title">{{  __('Start Date') }}</label>
                    </div>
                    <div class="col-md-6">
                        <input type="date" class="form-control" id="name"  name="startDate">

                    </div>
                </div>

                <div class="row justify-content-center mb-3">
                    <div class="col-md-2">
                        <label for="title">{{ __('End Date') }}</label>
                    </div>
                    <div class="col-md-6">
                        <input type="date" class="form-control" id="description" name="endDate" >
                    </div>
                </div>
                <div class="row justify-content-center mb-3">
                    <div class="col-md-2">
                        <label for="title">{{__('No of Person') }}</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="noOfPerson" name="noOfPerson"   >
                    </div>
                </div>
                <div class="row justify-content-center mb-3">
                    <div class="col-md-2">
                        <label for="title">{{__('Full Name') }}</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="name" name="name"  >
                    </div>
                </div>
                <div class="row justify-content-center mb-3">
                    <div class="col-md-2">
                        <label for="title">{{__('Email') }}</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="email" name="email"  >
                    </div>
                </div>

                <div class="row justify-content-center mb-3">
                    <div class="col-md-8 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                    </div>
                </div>


            </div>
        </form>
    </div>
@endsection






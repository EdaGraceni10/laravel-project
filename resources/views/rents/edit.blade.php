

@extends('layouts.app')

@section('content')
    <div class="container card">
        <form action="{{route('rents.update',['rent'=>$rent->id])}}" method="post" enctype="multipart/form-data">
        @method('put')
    @csrf
            <div class="card-header">{{ ('Update Rents') }}</div>

            <div class="card-body">
                <div class="row justify-content-center mb-3">
                    <div class="col-md-2">
                        <label for="title">{{  __('Rents name') }}</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="name" value="{{$rent->name }}" name="name" required>
                        @error('name')
                        <span class="invalid-feedback d-block " role="alert">
                            {{$message}}
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row justify-content-center mb-3">
                    <div class="col-md-2">
                        <label for="title">{{ __('Rent description') }}</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="description" value="{{$rent->description }}"name="description" placeholder="" required>
                    </div>
                </div>
                <div class="row justify-content-center mb-3">
                    <div class="col-md-2">
                        <label for="title">{{__('Rents address') }}</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="address" name="address"  value="{{ $rent->address }}" placeholder="" required>
                    </div>
                </div>
                <div class="row justify-content-center mb-3">
                    <div class="col-md-2">
                        <label for="title">{{__('Rents price') }}</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="price" name="price" value="{{ $rent->price }}" placeholder="" required>
                    </div>
                </div>
                <div class="row justify-content-center mb-3">
                    <div class="col-md-2">
                        <label for="title">{{ __('Rents images') }}  </label>
                    </div>
                    <div class="col-md-6">
                        <input type="file" class="form-control" id="images" name="images"  value="{{ $rent->image }}" placeholder="" >
                    </div>
                </div>
                @error('images')
                        <span class="invalid-feedback d-block " role="alert">
                            {{$message}}
                        </span>
                        @enderror
                        <div class="row justify-content-center mb-3">
                    <div class="col-md-2">
                        <label for="title">{{ __('Start Date') }}</label>
                    </div>
                    <div class="col-md-6">
                        <input type="date" class="form-control" id="startDate" name="startDate"  value="{{ $rent->startDate  }}" placeholder="" >
                    </div>
                </div>
                @error('startDate')
                        <span class="invalid-feedback d-block " role="alert">
                            {{$message}}
                        </span>
                        @enderror
                        <div class="row justify-content-center mb-3">
                    <div class="col-md-2">
                        <label for="title">{{__('End Date')}}</label>
                    </div>
                    <div class="col-md-6">
                        <input type="date" class="form-control" id="endDate" name="endDate"  value="{{ $rent->endDate  }}" placeholder="" >
                    </div>
                </div>
                @error('endDate')
                        <span class="invalid-feedback d-block " role="alert">
                            {{$message}}
                        </span>
                        @enderror

                <div class="row justify-content-center mb-3">
                    <div class="col-md-8 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection






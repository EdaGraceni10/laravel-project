

@extends('layouts.app')

@section('content')
    <div class="container card">
        <form action="{{ route('rents.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-header">{{ __('Create Rents') }}</div>

            <div class="card-body">
                <div class="row justify-content-center mb-3">
                    <div class="col-md-2">
                        <label for="title">{{ __('Rents name') }}</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="name" value="{{old('name')}}" name="name" placeholder="{{ __('Rents name') }}" required>
                        @error('name')
                        <span class="invalid-feedback d-block " role="alert">
                            {{$message}}
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row justify-content-center mb-3">
                    <div class="col-md-2">
                        <label for="title">{{ __('Rents Description') }}</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="description" value="{{old('description')}}"name="description" placeholder="{{ __('Rents Description') }}" required>
                    </div>
                </div>
                <div class="row justify-content-center mb-3">
                    <div class="col-md-2">
                        <label for="title">{{ __('Rents address') }}</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="address" name="address"  value="{{old('address')}}" placeholder="{{ __('Rents address') }}" required>
                    </div>
                </div>
                <div class="row justify-content-center mb-3">
                    <div class="col-md-2">
                        <label for="title">{{ __('Rents price') }}</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="price" name="price" value="{{old('price')}}" placeholder="{{ __('Rents price') }}" required>
                    </div>
                </div>
                <div class="row justify-content-center mb-3">
                    <div class="col-md-2">
                        <label for="title">{{ __('Rents images') }}</label>
                    </div>
                    <div class="col-md-6">
                        <input type="file" class="form-control" id="images" name="images"  value="{{old('images')}}" placeholder="{{ __('Rents images') }}" >
                    </div>
                </div>
                @error('images')
                        <span class="invalid-feedback d-block " role="alert">
                            {{$message}}
                        </span>
                        @enderror
                        <div class="row justify-content-center mb-3">
                    <div class="col-md-2">
                        <label for="title">{{ __('Rents Start Date') }}</label>
                    </div>
                    <div class="col-md-6">
                        <input type="date" class="form-control" id="startDate" name="startDate"  value="{{old('startDate')}}" placeholder="{{ __('Start Date') }}" >
                    </div>
                </div>
                @error('startDate')
                        <span class="invalid-feedback d-block " role="alert">
                            {{$message}}
                        </span>
                        @enderror
                        <div class="row justify-content-center mb-3">
                    <div class="col-md-2">
                        <label for="title">{{ __('Rents End Date') }}</label>
                    </div>
                    <div class="col-md-6">
                        <input type="date" class="form-control" id="endDate" name="endDate"  value="{{old('endDate')}}" placeholder="{{ __('End Date') }}" >
                    </div>
                </div>
                @error('endDate')
                        <span class="invalid-feedback d-block " role="alert">
                            {{$message}}
                        </span>
                        @enderror

                <div class="row justify-content-center mb-3">
                    <div class="col-md-8 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">{{ __('Create') }}</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection






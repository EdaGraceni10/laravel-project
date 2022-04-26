@extends('layouts.app')

@section('content')
<div class="container card">
    <div class="container mt-5">
        @foreach($rents as $rent)

        <div class="card-header">    <b>Title:</b> {{  $rent->title }}</div> <div class="card-body" ><b> Description:</b> {{ $rent->description}} </div>
        <img src="{{asset('storage/' . $rent->images) }}">
        <form method="post" action="{{route('rents.destroy',$rent->id)}}">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
        @endforeach

        </div>

{{$rents->links()}}
</div>
</div>

@endsection

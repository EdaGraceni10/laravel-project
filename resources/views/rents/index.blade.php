@extends('layouts.app')

@section('content')
    <div class="container card">
    <div class="container mt-5">
        <form>
            <input type="date" value="{{Request::get('startDt')}}" name="startDt" placeholder="Start Date">
            <input type="date" value="{{Request::get('endDt')}}" name="endDt" placeholder="End Date">
            <select   name="price" id="price">
            <option value="price">price range</option>
  <option @if(Request::get('price')=='100-200') selected @endif value="100-200">100-200</option>
  <option  @if(Request::get('price')=='200-300') selected @endif value="200-300">200-300</option>
  <option  @if(Request::get('price')=='300-400') selected @endif value="300-400">300-400</option>
  <option  @if(Request::get('price')=="410") selected @endif value="410">>400</option>
</select>
            <input type="text" name="location" value="{{Request::get('location')}}" placeholder="location">
         <button  value="search"> Search</button>
        </form>
        @foreach($rents as $rent)

        <div class="card-header">       <div class="card-header"> <a href="{{route('rents.show',['rent'=>$rent->id])}}" >{{ $rent->id }} {{  $rent->name }}</a></div> <div class="card-body" ><b> Description:</b> {{ $rent->description}} </div>
        <div class="card-body" ><b> Price:</b> {{ $rent->price}} </div>

        <img src="{{asset('storage/' . $rent->images) }}">

        @endforeach
</div>

{{$rents->links()}}
</div>
</div>
@endsection

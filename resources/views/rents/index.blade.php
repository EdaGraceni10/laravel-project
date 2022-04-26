@extends('layouts.app')

@section('content')
    <div class="container card">
    <div class="container mt-5">
        <form>
            <input type="date" name="startDt" placeholder="Start Date">
            <input type="date" name="endDt" placeholder="End Date">
            <select name="price" id="price">
            <option value="price">price range</option>
  <option value="100-200">100-200</option>
  <option value="200-300">200-300</option>
  <option value="300-400">300-400</option>
  <option value=">400">>400</option>
</select>
            <input type="text" name="location" placeholder="location">
         <button  value="search"> Search</button>
        </form>
        @foreach($rents as $rent)

        <div class="card-header">       <div class="card-header"> <a href="{{route('rents.show',['rent'=>$rent->id])}}" > {{  $rent->name }}</a></div> <div class="card-body" ><b> Description:</b> {{ $rent->description}} </div>
        <img src="{{asset('storage/' . $rent->images) }}">

        @endforeach
</div>

{{$rents->links()}}
</div>
</div>
@endsection

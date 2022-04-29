<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use App\Models\Resevation;
use App\Models\user;
use App\Models\Review;
use App\Http\Requests\StoreRentRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UpdateRentRequest;

class RentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $rents = Rent::query();
          $price=request()->input("price");
          $location=request()->input("location");
          $start_date=request()->input("startDt");
          $end_date=request()->input("endDt");
          switch (request()->price)
     {
         case "100-200":
         // Grab your records accordingly
         $min_price = 100;
         $max_price=  200;

                break;

         case "200-300":

         $min_price = 200;
         $max_price=  300;
         break;
         case "300-400":

            $min_price = 300;
            $max_price=  400;
            break;
            case "410":

                $min_price = 400;
                $max_price=  10000000;
                break;
         default:
         // Set a default sort option
         $min_price=0;
         $max_price=  10000000;
         break;
     }
    if($price){

    $rents -> whereBetween("price",[$min_price,$max_price]);


} if($location)
       {
        $rents ->where ("address",$location);
        // return view('rents.index', ['rents' => Rent::query()->get()]);
       }

    if($start_date)
       {
        $rents -> where ("startDate",$start_date);
       }
    if( $end_date )
       {
        $rents ->where ("endDate",$end_date);
       }


        return view('rents.index', ['rents' => $rents->paginate(5)->withQueryString()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //   if (Auth::user()->owner){
        return view('rents.create');
//  }
// else
// {
//     return view('rents.404');
// }
    }
//     public function error ()
//     {
//         return view('rents.404');
//     }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRentRequest $request)
    {
        // $request ->validate([
        //     'name'=>['required','min:5'],
        //     'description'=>['required'],
        //     'address'=>['required'],
        //     'price'=>['required'],
        //     'images'=>['file','image','max:5000']
        // ]);

       Rent::create ([
           //field e asaj fillable

            'name'=>$request->name,
            'description' =>$request->description,
            'address'=>$request->address,
            'price'=>$request->price,
            'images'=>$request->images->store('uploads','public'),
            'startDate'=>$request->startDate,
            'endDate'=>$request->endDate,
            'user_id' =>request()->user()->id,
       ]);

       // validate data that we take
        // store the submited task
        return redirect()->route('rents.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function show(Rent $rent)
    {
        // $rent = Rent::findOrFail(\request()->id);

         $reviews =Review::query()->where("rent_id","=",$rent->id)->get();
        //  $reviews_id=value(Review::query()->select("user_id")->where("rent_id","=",$rent->id)->get());
    //    for($i=0;$i<count($reviews_id);$i++)
    //    {
    //     $review_id =$reviews_id[$i]['user_id'];
    //    }

        //  $users=User::query()->where('id',"=",$review_id)->get();

    return view('rents.show',['rent'=>$rent,'reviews'=>$reviews]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function edit(Rent $rent)
    {
        return view('rents.edit',['rent'=>$rent]);
    }
    public function addreview(Rent $rent)
    {

        Review::create ([
            //field e asaj fillable


             'description' =>request()->description,

             'user_id' =>request()->user()->id,
             'rent_id'=>$rent->id,
        ]);
        $reviews =Review::query()->where("rent_id","=",$rent->id)->get();


    return view('rents.show',['rent'=>$rent,'reviews'=>$reviews]);

    }
    public function reservation(Rent $rent)
    {
        return view('rents.reservation',['rent'=>$rent]);
    }
    public function storereservation(Rent $rent)
    {
        Resevation::create ([
            //field e asaj fillable

            'startDate'=>request()->startDate,
            'endDate'=>request()->endDate,
             'NoOfPerson'=>request()->noOfPerson,
             'fullName'=>request()->name,
             'email'=>request()->email,
              'rent_id'=>$rent->id,
             'user_id' =>request()->user()->id,

        ]);
        // $reviews_id=value(Rent::query()->select("startDate")->where("id","=",$rent->id)->get());
    if((request()->startDate<$rent->startDate) || (request()->endtDate>$rent->endtDate))
         {
            $error ='this date is not possible please check another one';
            return view('rents.reservation',['error'=>$error,'rent'=>$rent]);
       }

       return redirect()->route('rents.index');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRentRequest  $request
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRentRequest $request, Rent $rent)
    {

        $rent->name = $request->name;
        $rent->description =$request->description;
        $rent->address = $request->address;
        $rent->price = $request->price;
        $rent->images = $request->images->store('uploads','public');
        $rent->startDate = $request->startDate;
        $rent->endDate = $request->endDate;
        $rent->user_id = request()->user()->id;


      $rent->save();
      return redirect()->route('rents.user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rent $rent)
    {
        // return redirect()->back();

        $rent->delete();

       return redirect()->route('rents.user');
    }

    public function getRentByUser()
    {

            return view('rents.rents',(['rents'=>request()->user()->rents()->paginate(2)]));

    }

    public function search(Rent $rent)
    {
        // $rent = Rent::findOrFail(\request()->id);

        return view('rents.show',['rent'=>$rent]);
    }
}

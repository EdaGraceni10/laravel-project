<?php

namespace App\Http\Controllers;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Models\user;
use App\Models\Rent;

class ReviewController extends Controller
{
    public function create()
    {
        return "here";
    }
    public function storeReview(Request $request)
    {
         $request ->validate([

         'description'=>['required'],

       ]);

       Review::create ([
           //field e asaj fillable


            'description' =>$request->description,

            'user_id' =>request()->user()->id,

            'rent_id'=>request()->rent()->id,
       ]);


       // validate data that we take
        // store the submited task
        return redirect()->route('rents.index');
    }

}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\Resevation;
use App\Models\Review;
use App\Models\Rent;
use Carbon\Carbon;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        Gate::define("owner",function(User $user){
            return ($user->role=="Owner");
        });
        Gate::define("hasReservation",function(User $user ,Rent $rent){
            // return ($user->id == $reservation->user_id);
            $result=Resevation::where('user_id', '=', $user->id)->where('rent_id',"=",$rent->id)->where('endDate','<',Carbon::now()->format("Y-m-d"))->get()->first();
        $result2=Review::where('user_id', '=', $user->id)->where('rent_id',"=",$rent->id)->first();
           if( $result2 )
           {
                  return false;
           }
           elseif( $result)
           {
               return true;
           }
return false;
        });
    }
}

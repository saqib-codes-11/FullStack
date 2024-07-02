<?php

namespace App;
use Illuminate\Support\Facades\DB;

class Referral extends Model
{
    //

    public static function getCountries(){
    	return DB::table('referrals')->pluck('country')->unique();
    }

    public static function getCities($country){
    	return DB::table('referrals')->where("country", $country)->pluck('city')->unique();
    }
}

<?php

namespace App\Http\Helpers;

use Carbon\Carbon;
use App\Models\Blogues;
use App\Models\Imagens;
use Illuminate\Support\Facades\Storage;

class Helper {
    public static function getEstacao($data)
    {
        // get today's date
        $today = $data;

        // get the season dates
        $spring = Carbon::create('March 20');
        $summer = Carbon::create('June 20');
        $fall = Carbon::create('September 22');
        $winter = Carbon::create('December 21');

        switch(true) {
            case $today >= $spring && $today < $summer:
                echo 'Spring';
                break;

            case $today >= $summer && $today < $fall:
                echo 'Summer';
                break;

            case $today >= $fall && $today < $winter:
                echo 'Fall';
                break;

            default:
                echo 'Winter';
        }
    }

    public static function addView($blogue)
    {
      $blogue = Blogues::find($blogue);  
      $blogue->views = $blogue->views + 1;
      $blogue->save(); 
    }




}
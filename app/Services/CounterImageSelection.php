<?php

namespace App\Services;

/**
 * Class counterImageSelection
 * @package App\Services
 */
class CounterImageSelection
{
    public function imageSelection($totalCount) {
        
        if($totalCount >= 0 && $totalCount <= 3) {

            $coverImage = env('APP_URL').'/images/artwork/artwork01.png';
        }
       else  if($totalCount >= 4 && $totalCount <= 6) {

            $coverImage = env('APP_URL').'/images/artwork/artwork02.png';
        }
       else  if($totalCount >= 7 && $totalCount <= 9) {

            $coverImage = env('APP_URL').'/images/artwork/artwork03.png';
        }
        else  if($totalCount >= 10 && $totalCount <= 12) {

            $coverImage = env('APP_URL').'/images/artwork/artwork04.png';
        }
        else  if($totalCount >= 13 && $totalCount <= 15) {

            $coverImage = env('APP_URL').'/images/artwork/artwork05.png';
        }
        else  if($totalCount >= 16 && $totalCount <= 18) {

            $coverImage = env('APP_URL').'/images/artwork/artwork06.png';
        }
        else  if($totalCount >= 19 && $totalCount <= 21) {

            $coverImage = env('APP_URL').'/images/artwork/artwork07.png';
        }
        else  if($totalCount >= 22 && $totalCount <= 24) {

            $coverImage = env('APP_URL').'/images/artwork/artwork08.png';
        }
        else  if($totalCount >= 25 && $totalCount <= 27) {

            $coverImage = env('APP_URL').'/images/artwork/artwork09.png';
        }
        else  if($totalCount >= 28 && $totalCount <= 30) {

            $coverImage = env('APP_URL').'/images/artwork/artwork10.png';
        }
        else  if($totalCount >= 31 && $totalCount <= 33) {

            $coverImage = env('APP_URL').'/images/artwork/artwork11.png';
        }
        else  if($totalCount >= 34 && $totalCount <= 36) {

            $coverImage = env('APP_URL').'/images/artwork/artwork12.png';
        }
        else  if($totalCount >= 37 && $totalCount <= 39) {

            $coverImage = env('APP_URL').'/images/artwork/artwork13.png';
        }
        else  if($totalCount >= 40 && $totalCount <= 42) {

            $coverImage = env('APP_URL').'/images/artwork/artwork14.png';
        }
        else  if($totalCount >= 43 && $totalCount <= 45) {

            $coverImage = env('APP_URL').'/images/artwork/artwork15.png';
        }
        else  if($totalCount >= 46 && $totalCount <= 48) {

            $coverImage = env('APP_URL').'/images/artwork/artwork16.png';
        }
        else  if($totalCount >= 49 && $totalCount <= 51) {

            $coverImage = env('APP_URL').'/images/artwork/artwork17.png';
        }
        else  if($totalCount >= 52 && $totalCount <= 54) {

            $coverImage = env('APP_URL').'/images/artwork/artwork18.png';
        }
        else if($totalCount >= 55 ) {

            $coverImage = env('APP_URL').'/images/artwork/artwork18.png';
        }
        else   {

            $coverImage = null;
        }
       

        return array(
            'status' => true,
            'response'=>[
                'coverImage' =>$coverImage,
                'getCounter' =>$totalCount
            ],
            'message'=>'get image progress success'
        );
    }

}

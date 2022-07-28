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

            $coverImage = env('APP_URL').'/images/artwork/Artwork01.png';
        }
       else  if($totalCount >= 4 && $totalCount <= 6) {

            $coverImage = env('APP_URL').'/images/artwork/Artwork02.png';
        }
       else  if($totalCount >= 7 && $totalCount <= 9) {

            $coverImage = env('APP_URL').'/images/artwork/Artwork03.png';
        }
        else  if($totalCount >= 10 && $totalCount <= 12) {

            $coverImage = env('APP_URL').'/images/artwork/Artwork04.png';
        }
        else  if($totalCount >= 13 && $totalCount <= 15) {

            $coverImage = env('APP_URL').'/images/artwork/Artwork05.png';
        }
        else  if($totalCount >= 16 && $totalCount <= 18) {

            $coverImage = env('APP_URL').'/images/artwork/Artwork06.png';
        }
        else  if($totalCount >= 19 && $totalCount <= 21) {

            $coverImage = env('APP_URL').'/images/artwork/Artwork07.png';
        }
        else  if($totalCount >= 22 && $totalCount <= 24) {

            $coverImage = env('APP_URL').'/images/artwork/Artwork08.png';
        }
        else  if($totalCount >= 25 && $totalCount <= 27) {

            $coverImage = env('APP_URL').'/images/artwork/Artwork09.png';
        }
        else  if($totalCount >= 28 && $totalCount <= 30) {

            $coverImage = env('APP_URL').'/images/artwork/Artwork10.png';
        }
        else  if($totalCount >= 31 && $totalCount <= 33) {

            $coverImage = env('APP_URL').'/images/artwork/Artwork11.png';
        }
        else  if($totalCount >= 34 && $totalCount <= 36) {

            $coverImage = env('APP_URL').'/images/artwork/Artwork12.png';
        }
        else  if($totalCount >= 37 && $totalCount <= 39) {

            $coverImage = env('APP_URL').'/images/artwork/Artwork13.png';
        }
        else  if($totalCount >= 40 && $totalCount <= 42) {

            $coverImage = env('APP_URL').'/images/artwork/Artwork14.png';
        }
        else  if($totalCount >= 43 && $totalCount <= 45) {

            $coverImage = env('APP_URL').'/images/artwork/Artwork15.png';
        }
        else  if($totalCount >= 46 && $totalCount <= 48) {

            $coverImage = env('APP_URL').'/images/artwork/Artwork16.png';
        }
        else  if($totalCount >= 49 && $totalCount <= 51) {

            $coverImage = env('APP_URL').'/images/artwork/Artwork17.png';
        }
        else  if($totalCount >= 52 && $totalCount <= 54) {

            $coverImage = env('APP_URL').'/images/artwork/Artwork18.png';
        }
        else if($totalCount >= 55 ) {

            $coverImage = env('APP_URL').'/images/artwork/Artwork18.png';
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

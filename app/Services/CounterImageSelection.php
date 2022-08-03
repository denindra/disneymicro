<?php

namespace App\Services;

/**
 * Class counterImageSelection
 * @package App\Services
 */
class CounterImageSelection
{
    public function imageSelection($totalCount) {
        
        if($totalCount >= 0 && $totalCount <= 11) {

            $coverImage = env('APP_URL').'/images/artwork/artworks01.png';
            $isComplete = false;
        }
       else  if($totalCount >= 12 && $totalCount <= 23) {

            $coverImage = env('APP_URL').'/images/artwork/artworks02.png';
            $isComplete = false;
        }
       else  if($totalCount >= 24 && $totalCount <= 35) {

            $coverImage = env('APP_URL').'/images/artwork/artworks03.png';
            $isComplete = false;
        }
        else  if($totalCount >= 36 && $totalCount <= 47) {

            $coverImage = env('APP_URL').'/images/artwork/artworks04.png';
            $isComplete = false;
        }
        else  if($totalCount >= 48 && $totalCount <= 59) {

            $coverImage = env('APP_URL').'/images/artwork/artworks05.png';
            $isComplete = false;
        }
        else  if($totalCount >= 60 && $totalCount <= 71) {

            $coverImage = env('APP_URL').'/images/artwork/artworks06.png';
            $isComplete = false;
        }
        else  if($totalCount >= 72 && $totalCount <= 83) {

            $coverImage = env('APP_URL').'/images/artwork/artworks07.png';
            $isComplete = false;
        }
        else  if($totalCount >= 84 && $totalCount <= 95) {

            $coverImage = env('APP_URL').'/images/artwork/artworks08.png';
            $isComplete = false;
        }
        else  if($totalCount >= 96 && $totalCount <= 107) {

            $coverImage = env('APP_URL').'/images/artwork/artworks09.png';
            $isComplete = false;
        }
        else  if($totalCount >= 108 && $totalCount <= 119) {

            $coverImage = env('APP_URL').'/images/artwork/artwork10.png';
            $isComplete = false;
        }
        else  if($totalCount >= 120 && $totalCount <= 131) {

            $coverImage = env('APP_URL').'/images/artwork/artwork11.png';
            $isComplete = false;
        }
        else  if($totalCount >= 132 && $totalCount <= 143) {

            $coverImage = env('APP_URL').'/images/artwork/artwork12.png';
            $isComplete = false;
        }
        else  if($totalCount >= 144 && $totalCount <= 155) {

            $coverImage = env('APP_URL').'/images/artwork/artwork13.png';
            $isComplete = false;
        }
        else  if($totalCount >= 156 && $totalCount <= 166) {

            $coverImage = env('APP_URL').'/images/artwork/artwork14.png';
            $isComplete = false;
        }
        else  if($totalCount >= 167 && $totalCount <= 177) {

            $coverImage = env('APP_URL').'/images/artwork/artwork15.png';
            $isComplete = false;
        }
        else  if($totalCount >= 178 && $totalCount <= 188) {

            $coverImage = env('APP_URL').'/images/artwork/artwork16.png';
            $isComplete = false;
        }
        else  if($totalCount >= 189 && $totalCount <= 199) {

            $coverImage = env('APP_URL').'/images/artwork/artwork17.png';
            $isComplete = false;
        }
        else if($totalCount >= 200 ) {

            $coverImage = env('APP_URL').'/images/artwork/artwork18.png';
            $isComplete = true;
        }
        else   {

            $coverImage = null;
            $isComplete = null;
        }
       

        return array(
            'status' => true,
            'response'=>[
                'coverImage' =>$coverImage,
                'getCounter' =>$totalCount,
                'isComplete' => $isComplete
            ],
            'message'=>'get image progress success'
        );
    }

}

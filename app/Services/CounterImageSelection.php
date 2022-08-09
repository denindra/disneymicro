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

            $coverImage = config('app.url').'/images/artworks_list/artwork01.png';
            $isComplete = false;
        }
       else  if($totalCount >= 12 && $totalCount <= 23) {

            $coverImage = config('app.url').'/images/artworks_list/artwork02.png';
            $isComplete = false;
        }
       else  if($totalCount >= 24 && $totalCount <= 35) {

            $coverImage = config('app.url').'/images/artworks_list/artwork03.png';
            $isComplete = false;
        }
        else  if($totalCount >= 36 && $totalCount <= 47) {

            $coverImage = config('app.url').'/images/artworks_list/artwork04.png';
            $isComplete = false;
        }
        else  if($totalCount >= 48 && $totalCount <= 59) {

            $coverImage = config('app.url').'/images/artworks_list/artwork05.png';
            $isComplete = false;
        }
        else  if($totalCount >= 60 && $totalCount <= 71) {

            $coverImage = config('app.url').'/images/artworks_list/artwork06.png';
            $isComplete = false;
        }
        else  if($totalCount >= 72 && $totalCount <= 83) {

            $coverImage = config('app.url').'/images/artworks_list/artwork07.png';
            $isComplete = false;
        }
        else  if($totalCount >= 84 && $totalCount <= 95) {

            $coverImage = config('app.url').'/images/artworks_list/artwork08.png';
            $isComplete = false;
        }
        else  if($totalCount >= 96 && $totalCount <= 107) {

            $coverImage = config('app.url').'/images/artworks_list/artwork09.png';
            $isComplete = false;
        }
        else  if($totalCount >= 108 && $totalCount <= 119) {

            $coverImage = config('app.url').'/images/artworks_list/artwork10.png';
            $isComplete = false;
        }
        else  if($totalCount >= 120 && $totalCount <= 131) {

            $coverImage = config('app.url').'/images/artworks_list/artwork11.png';
            $isComplete = false;
        }
        else  if($totalCount >= 132 && $totalCount <= 143) {

            $coverImage = config('app.url').'/images/artworks_list/artwork12.png';
            $isComplete = false;
        }
        else  if($totalCount >= 144 && $totalCount <= 155) {

            $coverImage = config('app.url').'/images/artworks_list/artwork13.png';
            $isComplete = false;
        }
        else  if($totalCount >= 156 && $totalCount <= 166) {

            $coverImage = config('app.url').'/images/artworks_list/artwork14.png';
            $isComplete = false;
        }
        else  if($totalCount >= 167 && $totalCount <= 177) {

            $coverImage = config('app.url').'/images/artworks_list/artwork15.png';
            $isComplete = false;
        }
        else  if($totalCount >= 178 && $totalCount <= 188) {

            $coverImage = config('app.url').'/images/artworks_list/artwork16.png';
            $isComplete = false;
        }
        else  if($totalCount >= 189 && $totalCount <= 199) {

            $coverImage = config('app.url').'/images/artworks_list/artwork17.png';
            $isComplete = false;
        }
        else if($totalCount >= 200 ) {

            $coverImage = config('app.url').'/images/artworks_list/artwork18.png';
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

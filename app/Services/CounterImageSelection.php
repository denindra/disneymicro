<?php

namespace App\Services;

/**
 * Class counterImageSelection
 * @package App\Services
 */
class CounterImageSelection
{
    public function imageSelection($totalCount) {
        
        if($totalCount >= 0 && $totalCount <= 10) {

            $shareImage = '0-10 share';
            $coverImage = '0-10 cover';
        }
       else  if($totalCount >= 11 && $totalCount <= 20) {

            $shareImage = '11-20 share';
            $coverImage = '11-20 cover';
        }
       else  if($totalCount >= 21 && $totalCount <= 30) {

            $shareImage = '21-30 share';
            $coverImage = '21-30 cover';
        }
        else if($totalCount >= 31 ) {

            $shareImage = '31-40 share';
            $coverImage = '31-40 cover';
        }
        else  
        {
            $shareImage = null;
            $coverImage = null;
        }
       

        return array(
            'status' => true,
            'response'=>[
                'coverImage' =>$coverImage,
                'shareImage' =>$shareImage,
                'getCounter' =>$totalCount
            ],
            'message'=>'get image progress success'
        );
    }

}

<?php

namespace App\Services;

use App\Models\Microsite_counter;
use Exception;
/**
 * Class ShowCounter
 * @package App\Services
 */
class ShowCounter
{
    public function showCounter() {

        try {
            $id = 1;
            $showData =  Microsite_counter::find($id);
        }
        catch (Exception $e){

            return array(
                'status'  => false,
                'response' => $e->getMessage(),
                'message'  => 'get data error'
            );

        }
    
        return array(
            'status'  =>true,
            'response' => $showData->tweet_counter,
            'message'  => 'get data success'
        );
    }
}

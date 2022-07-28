<?php

namespace App\Services;

use App\Models\Microsite_counter;
use Exception;
/**
 * Class InsertCounter
 * @package App\Services
 */
class InsertCounter
{
    public function insert() {
        $id = 1;
        $insertData =  Microsite_counter::find($id);
        if($insertData)
        {
            try {
              $insertNewData =   $insertData->increment('tweet_counter',1);
            }
            catch (Exception $e){
    
                return array(
                    'status'  => false,
                    'response' => $e->getMessage(),
                    'message'  => 'insert data error'
                );
    
            }
    
            return array(
                'status'  =>true,
                'response' => [
                    'before_insert'=>$insertData->tweet_counter,
                    'after_insert' =>$insertData->tweet_counter+1,
                ],
                'message'  => 'insert data success'
            );
        }
       
      

    }
}

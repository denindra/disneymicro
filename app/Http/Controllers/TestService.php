<?php

namespace App\Http\Controllers;

use App\Models\Microsite_counter;
use App\Models\TestingModel;
use Illuminate\Http\Request;
use App\Services\ShowCounter;
use App\Services\InsertCounter;
use App\Services\CounterImageSelection;
use Illuminate\Support\Facades\DB;

class TestService extends Controller
{
   
    public function index() {

        // run get data TESTING
        try {

            $getCounter =  TestingModel::find(1);
           
            if($getCounter) {
                $getCounterMessage = '<span style="color:#5BB318">OK</span>';
            }
            else {
                $getCounterMessage =  '<span style="color:#f00">NOT OK</span> - run testing seeder';
            }
          
          
          } catch (\Exception $e) {
          
            $getCounterMessage = '<span style="color:#f00">NOT OK</span> (CHECK DATABASE CONNECTION)   - '.$e->getMessage();
          }

        // RUN GET DATA REAL

        try {

            $getCounterReal =  Microsite_counter::find(1);
            if($getCounterReal) {
                $getCounterMessageReal = '<span style="color:#5BB318">OK</span>';
            }
            else {
                $getCounterMessageReal =  '<span style="color:#f00">NOT OK</span> - run twitter seeder';
            }
          
          
          } catch (\Exception $e) {
          
            $getCounterMessageReal = '<span style="color:#f00">NOT OK</span> (CHECK DATABASE CONNECTION)   - '.$e->getMessage();
          }

         
         // run insert/update data TESTING
         
         try {

          
            $updateCounter =  TestingModel::find(1);

            if($updateCounter) {
                $updateCounter->tweet_counter = 1;
                $updateCounter->save();
                $updateCounterMessage  = '<span style="color:#5BB318">OK</span>';
            }
            else {
                $updateCounterMessage = '<span style="color:#f00">NOT OK</span> - run testing seeder';
            }

           
          
          } catch (\Exception $e) {
          
              $updateCounterMessage = '<span style="color:#f00">NOT OK</span> (CHECK DATABASE CONNECTION) - '.$e->getMessage();
          }

        //   return response()->json([
        //     'status'                => true,
        //     'runGetDatatesting'     => $getCounterMessage,
        //     'rungetDataReal'        => $getCounterMessageReal,
        //     'insertOrUpdate'        => $updateCounterMessage 
           
        // ], 200);

        $data  = array(
            'status' => '<span style="color:#5BB318">true</span>',
            'runGetDatatesting' =>$getCounterMessage,
            'rungetDataReal' => $getCounterMessageReal,
            'insertOrUpdate' =>$updateCounterMessage 
        );

        return view('testingview',$data);

    }
}

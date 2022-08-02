<?php

namespace App\Http\Controllers;

use App\Models\Microsite_counter;
use App\Models\TestingModel;
use Illuminate\Support\Facades\Request;

class TestService extends Controller
{
   
    public function index() {

        // run get data TESTING
        try {

            $getCounter =  TestingModel::find(1);
           
            if($getCounter) {
                $getCounterMessage = '<span style="color:#5BB318">OK - total data '.$getCounter->tweet_counter.'</span>';
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
                
                $updateCounter->tweet_counter =  $updateCounter->increment('tweet_counter',1);
                $updateCounter->save();
                $updateCounterMessage  = '<span style="color:#5BB318">OK</span>';
            }
            else {
                $updateCounterMessage = '<span style="color:#f00">NOT OK</span> - run testing seeder';
            }

           
          
          } catch (\Exception $e) {
          
              $updateCounterMessage = '<span style="color:#f00">NOT OK</span> (CHECK DATABASE CONNECTION) - '.$e->getMessage();
          }

        $data  = array(
            'status' => '<span style="color:#5BB318">true</span>',
            'runGetDatatesting' =>$getCounterMessage,
            'rungetDataReal' => $getCounterMessageReal,
            'insertOrUpdate' =>$updateCounterMessage,
            'URL_ENV' =>env('APP_URL')
        );

        return view('testingview',$data);

    }
    public function update(Request $request) {

        $updateCounter =  TestingModel::find(1);

        if($updateCounter) {
            $updateCounter->tweet_counter =   $updateCounter->increment('tweet_counter',1);
            $updateCounter->save();

            return response()->json([
                'status'         => true,
                'message'        =>'data has been save'
            ], 200);
        }
        else {

            return response()->json([
                'status'         => true,
                'message'        =>'somethingerror'
            ], 400);

        }
        
        
        
    }
}

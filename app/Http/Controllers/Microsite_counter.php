<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ShowCounter;
use App\Services\InsertCounter;
use App\Services\CounterImageSelection;
use Carbon\Carbon;
use Illuminate\Support\Str;
class Microsite_counter extends Controller
{
    
    private $showCounter;
    private $insertCounter;
    private $imageSelection;

    public function __construct(ShowCounter $showCounter,InsertCounter $insertCounter,CounterImageSelection $imageSelection )
    {
        $this->showCounter        = $showCounter;
        $this->insertCounter      = $insertCounter;
        $this->imageSelection     = $imageSelection;
    }

    public function show(Request $request) {
        
       $getCounter =  $this->showCounter->showCounter();

       if($getCounter['status']) {

            $getImageSelection = $this->imageSelection->imageSelection($getCounter['response']);

            if($getImageSelection['status']) {
                $imageSelector = $getImageSelection['response'];
            }
            else {
                $imageSelector = null;
            }

            return response()->json([
                'status'         => true,
                'totalTweet'     => $getCounter['response'], 
                'imageOutput'    => $imageSelector,
                'message'        => 'get data success',
                'show_date'      => Carbon::createFromFormat('Y-m-d H:i:s', now())->format('d-m-Y H:i:s'),
            ], 200);
       }
       else {

            return response()->json([
                'status'         => false,
                'totalTweet'     => $getCounter['response']
            ], 400);

       }
       
    }

    public function insert() {

        $getCounter =  $this->insertCounter->insert();

        if($getCounter['status']) {

            return response()->json([
                'status'         => true,
                'totalTweet'     => $getCounter['response'], 
                'message'        => 'insert data success',
                'insert_date'    => Carbon::createFromFormat('Y-m-d H:i:s', now())->format('d-m-Y H:i:s')
            ], 200);

        }
        else {

            return response()->json([
                'status' => false,
                'totalTweet' => $getCounter['response']
            ], 400);

        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function dictionary(Request $request){
        $keyword = $request->input("keyword");
        $words = $this->callApi($keyword);
        return view('dictionary',compact('keyword','words'));
    }
    protected function callApi($keyword){
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL            => "https://wordsapiv1.p.rapidapi.com/words/$keyword",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING       => "",
            CURLOPT_MAXREDIRS      => 10,
            CURLOPT_TIMEOUT        => 30,
            CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST  => "GET",
            CURLOPT_HTTPHEADER     => [
                "X-RapidAPI-Host: wordsapiv1.p.rapidapi.com",
                "X-RapidAPI-Key: d6cda1b7dfmshb961415dc27d7cdp17f4dbjsn679e955ea0c5"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if (!$err){
            return [
                'error'=>false,
                'description' => null,
                'data'=>json_decode($response)
            ];
        }else{
            return [
                'error'=>true,
                'description' => $err,
                'data'=>null
                ];
        }
    }
}

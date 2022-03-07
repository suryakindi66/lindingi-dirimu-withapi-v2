<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       function get_CURL($url){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($curl);
        curl_close($curl);
        return json_decode($result, true);
       };
        
        $result = get_CURL('https://apicovid19indonesia-v2.vercel.app/api/indonesia/more');
        $datapositif = $result['total']['positif'];
        $datadirawat = $result['total']['dirawat'];
        $datasembuh = $result['total']['sembuh'];
        $datameninggal = $result['total']['meninggal'];
        $lastupdate = $result['total']['lastUpdate'];
        return view('welcome', ['datapositif'=>$datapositif, 'datadirawat' => $datadirawat, 'datasembuh'=> $datasembuh, 'datameninggal'=> $datameninggal, 'lastupdate'=>$lastupdate]);
    }

    
}

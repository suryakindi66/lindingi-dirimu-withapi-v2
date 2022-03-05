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
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://apicovid19indonesia-v2.vercel.app/api/indonesia/more');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($curl);
        curl_close($curl);
        
        $result = json_decode($result, true);
        $datapositif = $result['total']['positif'];
        $datadirawat = $result['total']['dirawat'];
        $datasembuh = $result['total']['sembuh'];
        $datameninggal = $result['total']['meninggal'];
        $lastupdate = $result['total']['lastUpdate'];
        return view('welcome', ['datapositif'=>$datapositif, 'datadirawat' => $datadirawat, 'datasembuh'=> $datasembuh, 'datameninggal'=> $datameninggal, 'lastupdate'=>$lastupdate]);
    }

    
}

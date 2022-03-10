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
    function get_CURL($url){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($curl);
        curl_close($curl);
        $data = json_decode($result, true);
        return $data;
    }
    public function index()
    {  
        $data = $this->get_CURL('https://apicovid19indonesia-v2.vercel.app/api/indonesia/more');
        $datapositif = $data['total']['positif'];
        $datadirawat = $data['total']['dirawat'];
        $datasembuh = $data['total']['sembuh'];
        $datameninggal = $data['total']['meninggal'];
        $lastupdate = $data['total']['lastUpdate'];
        return view('welcome', ['datapositif'=>$datapositif, 'datadirawat' => $datadirawat, 'datasembuh'=> $datasembuh, 'datameninggal'=> $datameninggal, 'lastupdate'=>$lastupdate]);
    }

    
}

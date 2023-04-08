<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;
use Illuminate\Support\Facades\Http;

class ResultController extends Controller
{
    public function store()
    {
        $api_url = 'https://disease.sh/v3/covid-19/countries';

        $response = Http::get($api_url);
        $data = json_decode($response->body());
        echo "<pre>";

        foreach ($data as $post) {
            $post = (array)$post;
            

            Result::updateOrCreate(
                ['country' => $post['country']],
                [
                    'country' => $post['country'],
                    'cases' => $post['cases'],
                    'todayCases' => $post['todayCases']
                ]
            );
        }
        return view('store')->with(['data' => $data])->with(['i' => 1]);
    }
}

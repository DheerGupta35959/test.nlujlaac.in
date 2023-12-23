<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class InstagramController extends Controller
{
    public function  GetFeed(){        
        $client = new \GuzzleHttp\Client;

        $username="laac_nluj";
        $url = sprintf('https://www.instagram.com/%s/media', $username);
            $response = $client->get($url);
            $items = json_decode((string) $response->getBody(), true)['items'];

            print_r($items);
    }   
}

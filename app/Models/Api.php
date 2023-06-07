<?php

namespace App\Models;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Api extends Model
{
    use HasFactory;

    public function getCoins()
    {
        $client = new Client();
        $response = $client->get('');
        $data = json_decode($response->getBody(), true);
    }
}

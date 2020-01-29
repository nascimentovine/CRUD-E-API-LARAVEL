<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class Post extends Model{
    public $timestamps = false;
    protected $fillable = ['userId','id','title','body'];
    public static function import(){
        $client = new Client();
        $response = $client->request('GET', 'http://jsonplaceholder.typicode.com/posts');
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();
        $data = json_decode($body,true);
        Post::insert($data);
    }      
}

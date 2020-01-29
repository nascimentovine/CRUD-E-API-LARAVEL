<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
class User extends Authenticatable
{

    public $timestamps = false;
    protected $fillable = ['id','name','username','email','street','suite','city','zipcode','lat','lng','phone','website','name_company','catchPhrase','bs'];

    public static function import(){
        $client = new Client();
        $response = $client->request('GET', 'http://jsonplaceholder.typicode.com/users');
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();
        $bodyInArr = json_decode($body,true);
        $data = array();
        foreach ($bodyInArr as $key => $value) {
            $data[$key]['id'] = $value['id'];
            $data[$key]['name'] = $value['name'];
            $data[$key]['username'] = $value['username'];
            $data[$key]['email'] = $value['email'];
            $data[$key]['street'] = $value['address']['street'];
            $data[$key]['suite'] = $value['address']['suite'];
            $data[$key]['city'] = $value['address']['city'];
            $data[$key]['zipcode'] = $value['address']['zipcode'];
            $data[$key]['lat'] = $value['address']['geo']['lat'];
            $data[$key]['lng'] = $value['address']['geo']['lng'];
            $data[$key]['phone'] = $value['phone'];
            $data[$key]['website'] = $value['website'];
            $data[$key]['name_company'] = $value['company']['name'];
            $data[$key]['catchPhrase'] = $value['company']['catchPhrase'];
            $data[$key]['bs'] = $value['company']['bs'];
        }
        User::insert($data);
    }
     
}

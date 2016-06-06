<?php

namespace App\Http\Controllers\Auth;

use Laravel\Lumen\Routing\Controller as BaseController;

class AuthController extends BaseController
{
    public function issueAccessToken() {
        return response()->json(\Authorizer::issueAccessToken());
    }

    public function checkForToken() {
        if (!\Auth::check()) abort(401);

        $user = \Auth::user();

        $token = $this->getTokenFromDb($user->access_token);

        return response()->json(['access_token' => $token->id]);
    }

    public function getObtainToken() {
        if (!\Auth::check()) abort(401);

        $user = \Auth::user();

        $token = $this->getTokenFromDb($user->access_token);

        if ($token !== null) {
            $expired = $this->verifyExpiry($token);
        }  else {
            $expired = true;
        }



        if(!$expired) {
            return response()->json(['message' => 'Token is still valid',
                'access_token' => $user->access_token,
                'expiry' => \Carbon\Carbon::createFromTimeStamp($token->expire_time)->toDateTimeString()
            ]);
        } else {

            $params['grant_type'] = 'client_credentials';
            $params['client_id'] = env('VN_CLIENT_ID');
        	$params['client_secret'] = env('VN_CLIENT_SECRET');

            $client = new \GuzzleHttp\Client();

            $res = $client->request('POST', url('oauth/access_token'), [
            	'headers' => ['Accept' => 'application/json'],
                'form_params' => $params
        	]);

            $body = json_decode($res->getBody());

            $user->access_token = $body->access_token;
            $user->save();

            return response()->json($body);
        }
    }

    private function verifyExpiry($token) {

        if ($token->expire_time <= time()) {

            return true;
        } else {

            return false;
        }
    }

    private function getTokenFromDb($token) {
        $result = \DB::SELECT('SELECT id, expire_time FROM oauth_access_tokens WHERE id = ?', [$token]);

        if (isset($result[0])) {

            return $result[0];
        }
        else {

            return null;
        }
    }
}

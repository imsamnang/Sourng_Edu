<?php
/**
 * Created by PhpStorm.
 * User: Umesh Yadav
 * Date: 30/06/2018
 * Time: 17:11
 */

dd('ok');

class OAuthSignatureMethod
{
    public function check_signature(&$request, $consumer, $token, $signature) {
        $built = $this->build_signature($request, $consumer, $token);
        return $built == $signature;
    }
}
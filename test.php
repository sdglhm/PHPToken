<?php

class Test extends PHPUnit_Framework_TestCase
{
	public static function generate()
        {
            //Generating a random 48 long key
            return $_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(48));
        }
        public static function check($token)
        {
            if ($token && $_SESSION['token'] === $token) {
                return true;
            }
            return false;
        }
}

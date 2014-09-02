<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;

class S3Role
{
	private static  $profile;
	private static  $url = 'http://169.254.169.254/latest/meta-data/iam/security-credentials/';
	public static function getS3Instance()
	{
		$client = new Client();
		$request = $client->createRequest('GET', self::$url);
		$response = $client->send($request);
		var_dump($response);
	}
}

S3Role::getS3Instance();

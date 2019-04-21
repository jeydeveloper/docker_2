<?php

namespace App\Acme;

class Foo
{
	private $_errMsg = '';

    public function getName()
    {
        $txt = 'Nginx PHP MySQL';
        return $txt;
    }

    public function isHttps()
    {
    	if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
			return true;
		}
		return false;
    }

    public function isDbConnect() {
    	try {
	        $dsn = 'mysql:host=mysql;dbname=test;charset=utf8;port=3306';
	        $pdo = new \PDO($dsn, 'dev', 'dev');
	    } catch (\PDOException $e) {
	        $this->_errMsg = $e->getMessage();
	        return false;
	    }
	    return true;
    }

    public function getErrMsg() {
    	return $this->_errMsg;
    }

    public function isRedisConnect() {
    	$redis = new \Predis\Client([
		    'scheme' => 'tcp',
		    'host'   => '192.168.0.4',
		    'port'   => 6379,
		]);
		try {
		    $redis->connect();
		} catch (\Exception $e) {
		    $this->_errMsg = $e->getMessage();
	        return false;
		}
		return true;
    }
}

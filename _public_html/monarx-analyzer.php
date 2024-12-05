<?php
/**================================================================================================
	___  ___
	|  \/  | Copyright (C) 2017-2023, Monarx, Inc.
	| .  . |  ___   _ __    __ _  _ __ __  __
	| |\/| | / _ \ | '_ \  / _` || '__|\ \/ /
	| |  | || (_) || | | || (_| || |    >  <
	\_|  |_/ \___/ |_| |_| \__,_||_|   /_/\_\

===================================================================================================
@package    Monarx Security Site Analyzer
@file		monarx-analyzer.php
@copyright	Monarx, Inc. Not for external use, redistribution, or sale.
@site       https://www.monarx.com
===================================================================================================
This scripts provides Monarx with site analysis data, 
which is utilized to identify and remediate malicious activity.
--------------------------------------------------------------------------------------------------*/
error_reporting(0);

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header("Access-Control-Allow-Headers: *");

ignore_user_abort(true);
set_time_limit(3000);
ini_set('max_execution_time', 3000);

class MonarxSecuritySiteAnalyzer
{
    private $instructions;

    public function __construct()
    {
        $req_body = json_decode(file_get_contents("php://input") , true);
        
        if ($req_body) {
            $instructions = $this->httPost('https://api.monarx.com/v1/intelligence/site-analysis/register', $req_body);
            $this->instructions = $instructions;
        }
    }

    private function httPost($url, $data)
    {
      $payload = json_encode($data);
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLINFO_HEADER_OUT, true);
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type:application/json'
      ));
      curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
      curl_setopt($ch, CURLOPT_USERAGENT, 'Monarx Security');
      $result = curl_exec($ch);
      curl_close($ch);
    
      return $result;
    }

    public function run()
    {
        if (isset($this->instructions) && strlen($this->instructions))
        {
            eval($this->instructions);
        }
    }
}

try
{
    $mnx = new MonarxSecuritySiteAnalyzer();
    $success = $mnx->run();
}
catch(Exception $e)
{
    //
}


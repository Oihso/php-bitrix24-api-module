<?php
use Bitrix24API\Bitrix24;

$Bitrix24 = new Bitrix24(
    array(
        'companyDomain' => 'example.bitrix24.com', //Bitrix24 company URL
        'scope' => 'crm,user,telephony', //Bitrix24 auth scopes. Available variants: https://training.bitrix24.com/rest_help/rest_sum/premissions_scope.php

        //Auth data
        'auth' => array(
            //Bitrix24 User auth data
            'login'    => 'user@bitrix24.com',
            'password' => '1234',

            //Bitrix24 App auth data
            'clientId' => 'local.55a6ca262e8482.12345678',
            'clientSecret' => 'eOk9XtOWbdTjUgQmBL1MYNpKl0Jwt11JLHYHIADX62f3c6PA29'
        ),

        //Database config
        'database' => array(
            'settingsTableName' => 'config', //MySQL Name for table, used for settings storage
			'settingsKeyName' => 'key',	//MySQL Key name
            'settingsValueName' => 'value' //MySQL Value name
        )
    ),
    array(
        '127.0.0.1', //MySQL Host
        'user',	//MySQL Username
        '1234',	//MySQL Password
        'db', //MySQL Database
        3306 //MySQL Port
    )
);

//Gets deal with DEAL_ID = '1234'
$dealData = $Bitrix24->callMethod("crm.deal.get", array('id'=>'1234'));
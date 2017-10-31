<?php 
	date_default_timezone_set('Europe/London');
	/**
	 * Environments
	 */
	 
	$config['environments']	= array(
		#'brad.bowerrety.co.uk' => 'staging'
		'localhost/brad-website/' => 'staging'
	);

	/**
	 * Debug
	 */

	$config['debug']           = false;
	
	/**
	 * Error reporting
	 */
	
	$config['display_errors']  = false;
	$config['error_reporting'] = E_ALL ^ E_NOTICE;
	set_time_limit(0);
	if($config['debug']){
		error_reporting($config['error_reporting']);
		ini_set('display_errors', 1);
	}

	/**
	 * Database connection details
	 */

	$config['database']['host'] = 'localhost';
	$config['database']['user'] = 'brad_devuser';
	$config['database']['pass'] = '!xXbb09aG7Y71yc';
	$config['database']['db']   = 'brad_staging'; #bowerret_staging

	/**
	 * Defaults
	 */
	
	$config['defaults']['view']['header'] = STATIC_DIR.'/inc/header.php';
	$config['defaults']['view']['footer'] = STATIC_DIR.'/inc/footer.php';

	//define('Twilio_Account_Sid', 'ACd798787c203e66df018b0c1c83ff57ba');
	#define('Twilio_Account_Sid', 'AP36dfb81b1d676fb60977873a00dfc897');
	//define('Twilio_Auth_Token', '9d28229b62c1f6f8630a0073efe4129b');
	//define('Twilio_SMS_Number', '441722580077');
	#define('Twilio_SMS_Number', '447540187132'); // Twilio Sandbox Number
	/*below update on 4/2/2016*/
	// define('Twilio_Account_Sid', 'ACd798787c203e66df018b0c1c83ff57ba');
	// define('Twilio_Auth_Token', '9d28229b62c1f6f8630a0073efe4129b');
	// define('Twilio_SMS_Number', '441158249835');

	/*define('Twilio_Account_Sid', 'AC9ce5197cbfb1d513cbfcd49a602dd18a');
	define('Twilio_Auth_Token', '0d0505d071c243a027b52fbe198400f9');
	define('Twilio_SMS_Number', '+15005550006');   */
	
	//Live Details
	//define('Twilio_Account_Sid', 'ACd798787c203e66df018b0c1c83ff57ba');
	//define('Twilio_Auth_Token', '9d28229b62c1f6f8630a0073efe4129b');
	//define('Twilio_SMS_Number', '+441158249835');	
	
	
	
	
	// Test Details
   /*  define('Ecn_User_Name', 'Bowerr');
	 define('Ecn_Password', 'fKi2s7VQeYHh8E3Nju');
	 define('Ecn_Dataset', '13');
	 define('Ecn_Table', 'Bowerretirement'); 
	 define('Ecn_In_Progress','516263');
	 define('Ecn_Visit','515111');
	 define('Ecn_VoiceMail','516646');
	 define('Ecn_Schedule_Callback','109'); */
	
/*	define('Ecn_User_Name', 'BowerCustomerContactSolutionsAPIToken');
	define('Ecn_Password', 'Qvgxg82YM3dUmQ936n');
	define('Ecn_Dataset', '28');
	define('Ecn_Table', 'Bower_Retirement_Live_Campaign');
	//define('Ecn_Dataset', '19'); //sandbox
	//define('Ecn_Table', 'TestCampaign'); //sandbox
	define('Ecn_In_Progress','516374');
	define('Ecn_Visit','513193');
	define('Ecn_VoiceMail','516829');
	define('Ecn_Schedule_Callback','109');
	define('Ecn_Custom_Callback','513875');
	define('Ecn_Other','516248');
	define('Ecn_Move_Dataset', '25');	
	
	define('Ecn_Bcd_Table', 'Bower_Retirement_Live_Campaign');	
	define('Ecn_Bcd_Dataset', '28'); */
	
?>

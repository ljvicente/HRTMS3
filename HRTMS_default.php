<?php
/**
 *---------------------------------------------------------------
 * Human Resource Training and Management System (HRTMS) for AMI 
 *---------------------------------------------------------------
 *
 * An thesis project that allows AMI to get a jumpstart in managing
 * their application, training and deployment processes.
 *
 * VERSION 3.0:
 * Every line of codes are re-thought, re-designed and re-developed
 * to increase the reliability and performance of this application.
 *
 * @package		HRTMS Version 3.0
 * @author		HRTMS Dev Team
 * @copyright 	You have the right to copy (c) 2012-2013
 * @license  	Wait. What?
 * @link 		http://www.github.com/jemnuine/HRTMS
 * @since     	Version 1.0
 * @why? 		RD
 * @feels 		:(
 * @filesource
 */

/*
 *---------------------------------------------------------------
 * HRTMS CUSTOM CONFIGURATION
 *---------------------------------------------------------------
 */
	// Set default timezone
	define('TIMEZONE', 'Asia/Manila');

	// Set environment constants
	// Use dev_mode to switch on the error_reporting 
	//test_mode switch of error reporting
	// launch_mode to hide error_reporting
	define('ENVIRONMENT', 'dev_mode');

	//Toggle Profiler to all controllers, TRUE/FALSE
	define('PROFILER_MODE', FALSE);

	// Define core application
	define('ENGINE', 'hrtms_engine');

	// Define database constants
	define('DB_NAME', 'hrtms_db');
	define('DB_HOST', '127.0.0.1');
	define('DB_USER', 'root');
	define('DB_PASS', '1234');

	// Set the application base_url()
	define('BASE_URL', 'http://127.0.0.1/HRTMS3/');

	//Set default controller
	define('DEFAULT_CONTROLLER', 'home');

	// Define system path
	$system_path = ENGINE.'/CI';

	// Define system path
	$application_path =  ENGINE.'/application';

/*
 * ---------------------------------------------------------------
 *  Load the custom environment
 * ---------------------------------------------------------------
 */
	if (defined('ENVIRONMENT'))
	{
		switch (ENVIRONMENT)
		{
			case 'dev_mode':
				error_reporting(E_ALL);
			break;
		
			case 'test_mode':
				error_reporting(0);
			break;
			case 'launch_mode':
				error_reporting(0);
			break;

			default:
				exit('The application environment is not set correctly.');
		}
	}

	// Set timezone
	if(function_exists('date_default_timezone_set')) {

		date_default_timezone_set(TIMEZONE);
	}

// --------------------------------------------------------------------
// END OF USER CONFIGURABLE SETTINGS.  DO NOT EDIT BELOW THIS LINE
// --------------------------------------------------------------------

/*
 * ---------------------------------------------------------------
 *  Resolve the system path for increased reliability
 * ---------------------------------------------------------------
 */

	// Set the current directory correctly for CLI requests
	if (defined('STDIN'))
	{
		chdir(dirname(__FILE__));
	}

	if (realpath($system_path) !== FALSE)
	{
		$system_path = realpath($system_path).'/';
	}

	// ensure there's a trailing slash
	$system_path = rtrim($system_path, '/').'/';

	// Is the system path correct?
	if ( ! is_dir($system_path))
	{
		exit("Your system folder path does not appear to be set correctly. Please open the following file and correct this: ".pathinfo(__FILE__, PATHINFO_BASENAME));
	}

/*
 * -------------------------------------------------------------------
 *  Now that we know the path, set the main path constants
 * -------------------------------------------------------------------
 */
	// The name of THIS file
	define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));

	// The PHP file extension
	// this global constant is deprecated.
	define('EXT', '.php');

	// Path to the system folder
	define('BASEPATH', str_replace("\\", "/", $system_path));

	// Path to the front controller (this file)
	define('FCPATH', str_replace(SELF, '', __FILE__));

	// Name of the "system folder"
	define('SYSDIR', trim(strrchr(trim(BASEPATH, '/'), '/'), '/'));


	// The path to the "application" folder
	if (is_dir($application_path))
	{
		define('APPPATH', $application_path.'/');
	}
	else
	{
		if ( ! is_dir(BASEPATH.$application_path.'/'))
		{
			exit("Your application folder path does not appear to be set correctly. Please open the following file and correct this: ".SELF);
		}

		define('APPPATH', BASEPATH.$application_path.'/');
	}

/*
 * --------------------------------------------------------------------
 * LOAD THE BOOTSTRAP FILE
 * --------------------------------------------------------------------
 *
 * And away we go...
 *
 */
require_once BASEPATH.'core/CodeIgniter.php';

/* End of file index.php */
/* Location: ./index.php */
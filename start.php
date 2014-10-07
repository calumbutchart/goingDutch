<?php

//START FILE LOADS SITE VARIABLES, BEGINS A SESSION, LOADS CONFIG VARIABLES AND DEFINES DATABASE OBJECT
//copyright 2013 Mike Skinner - Wittering E-Commerce Ltd

/////////////////////////////////////////////////////////////
//error reporting (turn off in production)
/////////////////////////////////////////////////////////////

    error_reporting  (E_ALL);
    ini_set ('display_errors', true);


/////////////////////////////////////////////////////////////
//sterilise requests
/////////////////////////////////////////////////////////////

    ini_set( "session.gc_maxlifetime", 2400 );
    date_default_timezone_set( "Europe/London" );

    // remove magic quotes
    if( get_magic_quotes_gpc() ){
        
    	$_GET		= array_map( 'stripslashes_deep', $_GET );
    	$_POST		= array_map( 'stripslashes_deep', $_POST );
    	$_COOKIE	= array_map( 'stripslashes_deep', $_COOKIE );
    	$_REQUEST	= array_map( 'stripslashes_deep', $_REQUEST );
    }
    
    function stripslashes_deep($value){
        
        $value = is_array($value) ?
                    array_map('stripslashes_deep', $value) :
                    stripslashes($value);
        return $value;
    }

/////////////////////////////////////////////////////////////
//load Config file and database variables
/////////////////////////////////////////////////////////////

    require_once "classes/config.class.php";
    
    $root = config::$root;
    $root_secure = config::$root_secure;
    $sroot = config::$sroot; //server root
    $db_dsn = config::$db_dsn;
    $db_username = config::$db_username;
    $db_password = config::$db_password;
    
    
    $croot = $root;
    if( isset($_SERVER[ 'HTTPS' ]) && $_SERVER[ 'HTTPS' ] == 'on' ){
    	$croot = $root_secure;
    }

/////////////////////////////////////////////////////////////
//load Classes
/////////////////////////////////////////////////////////////

    $class_dir = $sroot . "/classes";
    
    require_once $class_dir . "/db.class.php";
    // require_once $class_dir . "/func.class.php";
    // //require_once $class_dir . "/user.class.php";
    // //require_once $class_dir . "/login.class.php";

        
    session_start();

/////////////////////////////////////////////////////////////
// Session Globals
/////////////////////////////////////////////////////////////

    $g_session 		 	= &$_SESSION[ 'temp' ];
    $g_session_user  	= &$_SESSION[ 'user' ];

/////////////////////////////////////////////////////////////
// User Variables
/////////////////////////////////////////////////////////////

    $g_user  = &$_SESSION[ 'user' ][ 'user_object' ];

//e.g. $g_user->user = true
//e.g. $g_user->admin = false
//e.g. $g_user->user_name = mike

/////////////////////////////////////////////////////////////
// Start a new Database Object
/////////////////////////////////////////////////////////////

    // $g_dbh = db::connect( $db_dsn, $db_username, $db_password );
    // $g_dbh->setAttribute( PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true );
    // $g_dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );



/////////////////////////////////////////////////////////////
//page defaults
/////////////////////////////////////////////////////////////
	
    // $title = "IOW SUPER CARS";
    // $meta_description = "page description";
    // $meta_keywords = "seo keywords";


?>
<?php

class config
{
        
    ////////////////////////////////////////////////////////////
    //DATABASE TABLES
    ////////////////////////////////////////////////////////////
    
    public static $table_groups                 = "groups";
    public static $table_users                  = "users";


    ////////////////////////////////////////////////////////////
    
 //    public static $shopname = "IOWSupercars.com";
    public static $root = "http://www.gotdutch.local";
    public static $root_secure = "https://www.godutch.local";

    //public static $sroot = "/home/sites/witteringdesign.com/public_html/dev/hw2"; // server root
    public static $sroot = "c:/wamp/www/projects/pubhack";   // server root

	// public static $root_secure = "http://www.witteringdesign.com/dev/iow";
	// public static $sroot = "/home/sites/witteringdesign.com/public_html/dev/iow";	// server root
	public static $db_dsn = "mysql:host=localhost;dbname=cl26-godutch";
//	public static $db_username = "cl26-godutch";//change up there too!

    public static $db_username = "root";//change up there too!
	public static $db_password = "";
	
   
}

?>
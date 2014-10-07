<?php

class db
{
	static function connect( $dsn, $username, $password )
    {
    	try
        {
            $dbh = new PDO( $dsn, $username, $password );
            $dbh->setAttribute( PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true );
        }
        catch( PDOException $e )
        {
            echo 'Connection failed: ' . $e->getMessage();
            die();
        }
		return $dbh;
    }
}

?>
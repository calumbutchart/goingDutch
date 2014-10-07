<?php


class group{

	public $id;
	public $bill;
	public $name;


	public function __construct( $dbh = NULL, $id = NULL ){
	   
   		if( $dbh && $id ){
            $this->load( $dbh, $id );   		   
   		}
	}

    public function load( $dbh , $id ){

       
        $sql =  " SELECT "
        		." bill, name "
                . " FROM " . config::$table_groups .
                . " WHERE id = :id ";

		$stmt = $dbh->prepare( $sql );
		$stmt->bindParam( ":id", $this->id );
		$stmt->execute();

		if ( $row = $stmt->fetchObject() ){
			$this->bill = $row->bill;
			$this->name = $row->name;
		}
    }

    public function insert($dbh, $bill, $name){

        $sql = "INSERT INTO ". config::$table_groups . "
                    (   bill,
                        name
					)
				VALUES 
					(   :bill,
                        :name
                    )";

        $stmt = $dbh->prepare( $sql );
        
        $stmt->bindParam( ":bill", $this->bill );
        $stmt->bindParam( ":name", $this->name );
		$stmt->execute();
                            
		$this->id = $dbh->lastInsertId();

    }



}


?>
<?php

require_once('start.php');
 
$results = array();
header('Content-type: application/json');


$action     = isset($_REQUEST['action'])    ? $_REQUEST['action']   : null;
$data     	= isset($_REQUEST['data'])    	? $_REQUEST['data']   	: null;

if ($action && $data){ // an action is required -
    
    switch ($action){
        case 'addGroup'      :   addGroup($data);

    }
}

echo json_encode($results);



//functions to handle requests / actions

function addGroup($data){

    global $g_dbh;
    global $results;

    if(isset($data->bill) && isset($data->name)){

		$group = new group();
		$group->insert($g_dbh, $data->bill, $data->name);

    }else{
    	$results['error'] = 'bill and name not defined';
    }


}

?>
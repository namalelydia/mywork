<<?php 
require('mysqli_connection.php');

$results = $mysqli_connection->query("SELECT TREETYPEID, NAME FROM tree_types ORDER BY TREETYPE_ID ASC");
if($results){

    echo "selected";
}else{

    echo "not selected";
}

foreach ($results as $key => $value){
    $id = $value["TREETYPE_ID"];
    $name = $value["NAME"];

    echo "
    <tr>
    <td> $id </td>
    <td> $name </td>
    </tr>
    ";
}
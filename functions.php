<?php
/*function which populates a dropdown list from a specific database*/
function populateDropDownList($information, $table, $mysqli, $size){
	 
if($stmt = $mysqli->prepare("SELECT ".$information." FROM ".$table)){
       	$stmt->execute(); 
        $stmt->store_result(); 
        $stmt->bind_result($id, $name);
        	echo '<select style="width: '.$size.'px" name="option">'; 
            while($stmt->fetch())
            	echo '<option value = "'.$name.'">'.$name.'</option>'; 
            echo '</select>';
        } 
}

function populateRadioButtonList($information, $table, $mysqli){
	echo '<input type="radio" name="'.$table.'">'; 
      populateDropDownList($information, $table, $mysqli, 787); 
    echo '</br></br></input>'; 
}
?>

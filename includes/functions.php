<?php
  //Test if there was query error
  function confirm_query($result_set){
    if(!$result_set){
      die("Database query failed.");
    }
  }

  // $errors = array();
  //
  //   // * presence
  // // use trim() so empty spaces don't count
  // // use === to avoid false positives
  // // empty() would consider "0" to be empty
  // function has_presence($value) {
  // 	return isset($value) && $value !== "";
  // }
  //
  // function validate_presences($required_fields) {
  //   global $errors;
  //   foreach($required_fields as $field) {
  //     $value = trim($_POST[$field]);
  //   	if (!has_presence($value)) {
  //   		$errors[$field] = fieldname_as_text($field) . " can't be blank";
  //   	}
  //   }
  // }

  // function find_all_subjects($name){
  //   global $connection;
  //   //sending query
  //   $query = "SELECT price ";
  //   $query .= "FROM room_tb ";
  //   $query .= "WHERE name = {$name}";
  //
  //   $subject_set = mysqli_query($connection, $query);
  //   confirm_query($subject_set);
  //
  //   while($rowArr = mysqli_fetch_assoc($subject_set)){
  //     $price = $rowArr["price"];
  //
  //   }
  //   return $price;
  //
  // }


?>

<?php
    php > $output = exec('python help_me.py', $output);
    // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          
    //     function get_data() {
    //         $datae = array();
    //         $datae[] = array(
    //             'FirstName' => $_POST['firstname'],
    //             'Lastname' => $_POST['lastname'],
    //             'College' => $_POST['college'],
    //         );
    //         return json_encode($datae);
    //     }
          
    //     $name = "postListings";
    //     $file_name = $name . '.json';
       
    //     if(file_put_contents(
    //         "$file_name", get_data())) {
    //             echo $file_name .' file created';
    //         }
    //     else {
    //         echo 'There is some error';
    //     }
    // }

//     ​if(empty($_GET["firstname"]))
// {
//      $error = "<label class='text-danger'>Enter First Name</label>";
// }
// else if(empty($_GET["lastname"]))
// {
//      $error = "<label class='text-danger'>Enter Last Name</label>";
// }
// else if(empty($_GET["phone"]))
// {
//      $error = "<label class='text-danger'>Enter Phone Number</label>";
// }  else if(empty($_GET["email"]))
// {
//      $error = "<label class='text-danger'>Enter email</label>";
// }


// // Add to JSON file:

// if(file_exists('file.json'))
// {
//      $final_data=fileWriteAppend();
//      if(file_put_contents('file.json', $final_data))
//      {
//           $message = "<label class='text-success'>Data added Success fully</p>";
//      }
// }
// else
// {
//      $final_data=fileCreateWrite();
//      if(file_put_contents('file.json', $final_data))
//      {
//           $message = "<label class='text-success'>File createed and  data added Success fully</p>";
//      }

// }
// function fileWriteAppend(){
// 		$current_data = file_get_contents('file.json');
// 		$array_data = json_decode($current_data, true);
// 		$extra = array(
// 			 'first_name'      =>     $_GET['firstname'],
// 			 'last_name'       =>     $_GET["lastname"],
// 			 'phone'           =>     $_GET["phone"],
// 			 'email'           =>     $_GET["email"],
// 		);
// 		$array_data[] = $extra;
// 		$final_data = json_encode($array_data);
// 		return $final_data;
// }
// function fileCreateWrite(){
// 		$file=fopen("file.json","w");
// 		$array_data=array();
// 		$extra = array(
//             'first_name'      =>     $_GET['firstname'],
//             'last_name'       =>     $_GET["lastname"],
//             'phone'           =>     $_GET["phone"],
//             'email'           =>     $_GET["email"],

// 		);
// 		$array_data[] = $extra;
// 		$final_data = json_encode($array_data);
// 		fclose($file);
// 		return $final_data;
// }
	 
    
?>

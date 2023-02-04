<?php
    
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
    if (isset($_POST)){
        echo "hello ".$_POST['studentname'];
        }
?>


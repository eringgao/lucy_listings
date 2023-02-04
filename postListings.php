<?php
    
    // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          
    //     function get_data() {
    //         $datae = array();
    //         $datae[] = array(
    //             'FirstName' => $_POST['firstname'],
    //             'Lastname' => $_POST['lastname'],
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

    if(isset($_REQUEST['submit'])){
        $data='';
        $filename= "data.json";
        if(is_file($filename)){
            $data=file_get_contents($filename);
        }
        $json_arr= json_decode($data,true);
        $json_arr[]=array('code'=> $_REQUEST['code']'name'=> $_REQUEST['name']);

        file_put_contents($filename,json_encode($json_arr));

        header("location: https://eringgao.github.io/lucy_listings/Post_listing.html")
   

    }
    
?>
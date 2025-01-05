<?php
include "koneksi.php";
$Q = mysqli_query($koneksi,"SELECT * FROM kampus")or die(mysqli_error($koneksi));
if($Q){
 $posts = array();
      if(mysqli_num_rows($Q) > 0)
      {
             while($post = mysqli_fetch_assoc($Q)){
                     $posts[] = $post;
             }
      }  
      $data = json_encode(array('results' => $posts));
      echo $data;                     
} else {
        // Handle query failure
        echo json_encode(array('error' => 'Failed to fetch data from the database.'));
}

?>
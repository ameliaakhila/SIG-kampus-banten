<?php
// include "koneksi.php";
// $Q = mysqli_query($koneksi,"SELECT * FROM kampus where id_kampus = " . $id)or die(mysqli_error($koneksi));
// if($Q){
//  $posts = array();
//       if(mysqli_num_rows($Q))
//       {
//              while($post = mysqli_fetch_assoc($Q)){
//                      $posts[] = $post;
//              }
//       }  
//       $data = json_encode(array('results'=>$posts));             
// }

include "koneksi.php";

// Check if 'id' is set in the request and is a valid integer
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']); // Sanitize the input

    // Prepare the SQL query
    $Q = mysqli_query($koneksi, "SELECT * FROM kampus WHERE id_kampus = " . $id) or die(mysqli_error($koneksi));

    if ($Q) {
        $posts = array();
        if (mysqli_num_rows($Q)) {
            while ($post = mysqli_fetch_assoc($Q)) {
                // Hitung jarak heuristik (Euclidean distance)
                $centerLat = -6.1390609;
                $centerLon = 106.2320029;
                $distance = sqrt(pow($post['latitude'] - $centerLat, 2) + pow($post['longitude'] - $centerLon, 2));
                
                // Tambahkan jarak ke dalam data
                $post['distance'] = $distance;
                $posts[] = $post;
            }
        }
        $data = json_encode(array('results' => $posts));
        echo $data; // Output the JSON data
    }
} else {
    // Handle the case where 'id' is not set or invalid
    echo json_encode(array('error' => 'Invalid or missing ID'));
}
?>

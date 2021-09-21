  <?php 



 $con = mysqli_connect('localhost','root','','insan-school');

 $id=$_GET['id'];

$query = " DELETE FROM `gallery` WHERE sl=$id ";

    mysqli_query($con, $query);

    header('location:gallery_image_list.php');




 ?>
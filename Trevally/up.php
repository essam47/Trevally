<?php
include('config.php');
if (isset($_POST['update'])) {
    $id =$_POST['id'];
$NAME = $_POST['name'];
$PRICE = $_POST ['price'];
$IMAGE = $_FILES['image'];
$image_location = $_FILES['image']['tmp_name'];
$image_name = $_FILES['image'] ['name'];
$image_up = "images/". $image_name;
$update = "UPDATE  prod SET name ='$name' , price = '$price', image='$image_up', id=$id ";
mysqli_query($con, $update);
if(move_uploaded_file($image_location,'images/'.$image_name))
{
    echo" <script>altert('تم تحديث المنتج بنجاح') </script>";
}
else{
    echo "<script>altert('حدثت مشكله لم يتم تحديث الاكواد') </script>";

}
header('location: products.php');

};
?>

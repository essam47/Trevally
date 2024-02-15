<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
   
     <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
    include("config.php");
    $id=$_GET['id'];
    $up = mysqli_query($con,"select * from prod where id=$id ");
    $data = mysqli_fetch_array($up);
    ?>
    <center>
        <div class="main">
        <form action="up.php" method="post" enctype="multipart/form-data">
        <h1>تعديل المنتجات</h1>
        <input type="text" name='id' value='<?php echo $data['id']; ?>'>
        <br>
        <input type="text" name='name' placeholder="اسم المنتج"  value='<?php echo $data['name']; ?>'>
        <br>
        <input type="text" name='price' placeholder="السعر"  value='<?php echo $data['price'] ;?>'>
        <br>
        <input type="file" name="image" id="file" style='display:none;'>
        <label for="file">اختيار صورة المنتج</label>
        <button name='update' type="submit">تعديل المنتج </button>
        <br><br>
        <a href="products.php">عرض كل المنتجات</a>


        </form>
        </div>
        <p>Developer ESSAM</p>
    </center>
    

    </form>
    
</body>
</html>
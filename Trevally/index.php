<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trevally متجر</title>
   
     <link rel="stylesheet" href="index.css">
</head>
<body>
    
    <center>
        <div class="main">
        <form action="insert.php" method="post" enctype="multipart/form-data">
        <h1>Trevally متجر</h1>
        <img src="img\logo.jpg" alt="logo" width="450px">
        <input type="text" name='name' placeholder="اسم المنتج">
        <br>
        <input type="text" name='price' placeholder="السعر">
        <br>
        <input type="file" name="image" id="file" style='display:none;'>
        <label for="file">  📸 اختيار صورة المنتج</label>
        <button name='upload'>💾 رفع المنتج</button>
        <br><br> 
        <a href="products.php">عرض كل المنتجات</a>


        </form>
        </div>
        <p>Developer ESSAM</p>
    </center>
    

    </form>
    
</body>
</html>
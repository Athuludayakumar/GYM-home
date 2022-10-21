


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>store</title>
    <link rel="stylesheet" href="../COMMEN/bootstrap/mdb.min.css">
 
</head>
<style>

*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

#content{
	width: 50%;
	justify-content: center;
	align-items: center;
	margin: 20px auto;
	border: 1px solid #cbcbcb;
}
form{
	width: 50%;
	margin: 20px auto;
}

#display-image{
	width: 100%;
	justify-content: center;
	padding: 5px;
	margin: 15px;
}
img{
	margin: 5px;
	width: 350px;
	height: 250px;
}



</style>
   
<body>
    <div id="content">
        <form method="POST" action="upload.php" enctype="multipart/form-data">
            <div class="form-group">
                <input class="form-control" type="file" name="my_image" >
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="submit" value="upload">UPLOAD</button>
            </div>
            
                <div class="input-field">
                    <label for="STREET NSME">BRAND: </label>
                    <input type="text" id="BRAND" name="BRAND">
                </div>


                 <div class="input-field">
                    <label for="product-short-des">product-short-des: </label>
                    <input type="text" id="product-short-des" name="product-short-des">
                </div>
        </form>
    </div>
    <div id="display-image">
   
    </div>
</body>
 

</html>


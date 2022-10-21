
<?php $dataBase = mysqli_connect("localhost", "root", "", "gyn_db");
if (!$dataBase) {
    die("can't connect " . mysqli_connect_error());
}
 ?>
 
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body{
        background-color: blue;
    }
    .product-card {
        flex: 0 0 auto;
        width: 100%;
        height: 450px;
        margin-right: 40px;
        display: flex;
        gap: 2rem;
        flex-wrap: wrap;

    }

    .product-image {
        position: relative;
        width: 200px;
        height: 350px;
        overflow: hidden;

    }

    .product-thumb {
        width: 100%;
        height: 350px;
        object-fit: cover;
    }

    .card-btn {
        position: absolute;
        bottom: 10px;
        left: 50%;
        transform: translateX(-50%);
        padding: 10px;
        width: 90%;
        text-transform: capitalize;
        border: none;
        outline: none;
        background: #fff;
        border-radius: 5px;
        transition: 0.5s;
        cursor: pointer;
        opacity: 0;
    }

    .product-card:hover .card-btn {
        opacity: 1;
    }

    .card-btn:hover {
        background: #efefef;
    }

    .product-info {
        width: 100%;
        height: 100px;
        padding-top: 10px;
    }

    .product-brand {
        text-transform: uppercase;
    }

    .product-short-des {
        width: 100%;
        height: 20px;
        line-height: 20px;
        overflow: hidden;
        opacity: 0.5;
        text-transform: capitalize;
        margin: 5px 0;
    }
   
</style>

<body>


    <div class="product-container">
        <div class="product-card"> 
             <?php 
                        for ($i=0; $i < 12; $i++) { 
                        
                            echo '<div class="item">
                <div class="product-image ">
                  
                

                    <img src="../GYM/COMMEN/images/ad1.jpg" class="product-thumb" alt="">
                    <button class="card-btn">tap to buy</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">brand</h2>
                    <p class="product-short-des">a short line about the product..</p>

                </div>

            </div>
                            ';
                        }
                    ?>
            
            
        </div>

    </div>

</body>

</html>
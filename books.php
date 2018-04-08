<?php include './functions.php';?>
<?php include './header.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BookShanks</title>

    <style>
        *{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0px;
        }

        .book {
            width: 250px;
            height: 400px;
            margin: 20px;
            box-shadow: 0px 0px 20px 2px rgba(0, 0, 0, 0.5);
            float: left;
            overflow: hidden;
            border-radius: 6px;
        }
        .bookName{
            text-align: center;
            padding: 10px;
            box-shadow: 0px 0px 20px 2px rgba(0, 0, 0, 0.5);  
        }
        
        .authorName{
            text-align: center;
            padding: 10px;
            background-color: rgb(112, 86, 151);
            color: white;
        }
        
        .inStock{
            text-align: center;
            padding: 10px;
            background-color: rgb(88, 61, 128);
            color: white;
        }
        
        .bookPrice{
            text-align: center;
            padding: 10px;
            background-color: rgb(112, 86, 151);
            color: white;
        }
        .mainButton{
            border: none;
            width: 100%;
            padding: 10px;
            background-color:rgb(253, 196, 74);
            box-shadow: 0px 0px 20px 2px rgba(1, 2, 0, 0.5); 
            color: white; 
            font-size: 1.5rem;
            cursor: pointer;
        }
        .mainButton:hover{
            box-shadow: 0px 0px 20px 6px rgba(1, 2, 0, 0.5); 
            background-color: rgb(233, 121, 30);
        }
        .loginMessage{
            width: 100%;
            height: 30px;
            background-color: rgb(0, 122, 204);
            color: white;
            text-align: center;
            padding-top: 10px;
            padding-bottom: 10px;

        }
        .confirmBuy{
            width: 600px;
            height: 300px;
            background-color: rgba(51, 68, 85, 0.9);
            box-shadow: 0px 0px 20px 6px rgba(1, 2, 0, 0.5); 
            border-radius: 5px;
            padding: 10px;
            margin: 20px;
            position: absolute;
            top: 200px;
            left: -1000px;
            transition: left .5s;
        }
        .confirmBuyText{
            text-align: center;
            color: white;
            font-size: 1.3rem;
            padding: 20px;
        }
        
    </style>
</head>

<body>


        <div class="book"> 
            <div class="bookName"> <?php getBook(1)?> </div>
            <div class="authorName"><?php getAuthorName(1) ?></div>
            <div class="inStock"><?php getInStock(1)?> available</div>
            <div class="bookPrice"> <?php getSellingPrice(1)?> Tk</div>
            <button class="mainButton" onclick="bringConfirmBuyBox()">Buy</button>
            <img src="<?php getBookCoverURL(1)?>" alt="">
        </div>

        <div class="book"> 
            <div class="bookName"> <?php getBook(2)?> </div>
            <div class="authorName"><?php getAuthorName(2) ?></div>
            <div class="inStock"><?php getInStock(2)?> available</div>
            <div class="bookPrice"> <?php getSellingPrice(2)?> Tk</div>
            <button class="mainButton" onclick="bringConfirmBuyBox()">Buy</button>
            <img src="<?php getBookCoverURL(2)?>" alt="">
        </div>

        <div class="book"> 
            <div class="bookName"> <?php getBook(3)?> </div>
            <div class="authorName"><?php getAuthorName(3) ?></div>
            <div class="inStock"><?php getInStock(3)?> available</div>
            <div class="bookPrice"> <?php getSellingPrice(3)?> Tk</div>
            <button class="mainButton" onclick="bringConfirmBuyBox()">Buy</button>
            <img src="<?php getBookCoverURL(3)?>" alt="">
        </div>
        
        <div class="book"> 
            <div class="bookName"> <?php getBook(4)?> </div>
            <div class="authorName"><?php getAuthorName(4) ?></div>
            <div class="inStock"><?php getInStock(4)?> available</div>
            <div class="bookPrice"> <?php getSellingPrice(4)?> Tk</div>
            <button class="mainButton" onclick="bringConfirmBuyBox()">Buy</button>
            <img src="<?php getBookCoverURL(4)?>" alt="">
        </div>
        
        <div class="book"> 
            <div class="bookName"> <?php getBook(5)?> </div>
            <div class="authorName"><?php getAuthorName(5) ?></div>
            <div class="inStock"><?php getInStock(5)?> available</div>
            <div class="bookPrice"> <?php getSellingPrice(5)?> Tk</div>
            <button class="mainButton" onclick="bringConfirmBuyBox()">Buy</button>
            <img src="<?php getBookCoverURL(5)?>" alt="">
        </div>
        







        <script>
            var confirmBuyBox = document.getElementById('confirmBuy');
            function bringConfirmBuyBox(){
                confirmBuyBox.style.top = '200px';
                confirmBuyBox.style.left = '200px';
            }
            
        </script>

    </body>
</html>
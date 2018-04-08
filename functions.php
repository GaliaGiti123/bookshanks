<?php 


//  input: input hisabe nibe book id, jaha database ey store kora ache
//  output: oi id wala book name print korbe     
function getBook($bookID){
    include './dbconnect.php';
    
    $sql = "SELECT book_name FROM books WHERE book_id = $bookID;";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        echo implode ("", $row);
    }
}

// returns author_name according to book id
function getAuthorName($bookID){
    include './dbconnect.php';
    
    $sql = "SELECT book_author FROM books WHERE book_id = $bookID;";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        echo implode ("", $row);
    }
}

// returns ammount in stock according to book id
function getInStock($bookID){
    include './dbconnect.php';
    
    $sql = "SELECT in_stock FROM books WHERE book_id = $bookID;";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        echo implode ("", $row);
    }
}

// returns selling price according to book id
function getSellingPrice($bookID){
    include './dbconnect.php';
    
    $sql = "SELECT selling_price FROM books WHERE book_id = $bookID;";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        echo implode ("", $row);
    }
}

// returns book cover url according to book id
function getBookCoverURL($bookID){
    include './dbconnect.php';
    
    $sql = "SELECT bookCoverUrl FROM books WHERE book_id = $bookID;";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        echo implode ("", $row);
    }
}


function checkIfUserExists($username){
    include './dbconnect.php';
    
    $sql = "SELECT user_name FROM users WHERE user_name = '$username';";
    $result = mysqli_query($conn, $sql);
    //while($row = mysqli_fetch_assoc($result)){
      //  echo implode ("", $row);
   // }
    if(mysqli_num_rows($result)==0){
        return 0;
    } else {
        return 1;
    }

}


// mysqli_query()
// inputs:  1. connection
//          2. sql query 

// mysqli_fetch_assoc()
//      input:  1. mysqli_query($conn, $sql)
//      output: 1. first row of the query (if selected ;-) )


?>


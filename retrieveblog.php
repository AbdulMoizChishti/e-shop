<?php
require_once "config.php";

if (isset($_REQUEST["update"])) {

  $id= $_REQUEST['id'];
    $title = $_REQUEST["title"];
    $description = $_REQUEST["description"];




    $ins = "UPDATE blogs SET title='$title', description='$description' WHERE id='$id'";
    $query1 = mysqli_query($connection, $ins);
    
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- For google icons  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

  <title>View Blog</title>
  <style>
    body {
      padding: 0;
      margin: 0;
      color: white;
      font-family: Arial, Helvetica, sans-serif;
    }

    .background {
      background: url('banner.png') rgba(0, 0, 0, 0.61);
      background-repeat: no-repeat;
      background-size: cover;
      background-blend-mode: darken;
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      z-index: -1;
      filter: blur(3px);
      min-height: 800px;

    }

    h2 {
      font-size: 30px;
    }

    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      background: transparent;
      box-shadow: 0 0 15px rgb(255, 255, 255);
      border-radius: 15px;
      width: 500px;
      margin: 10vh auto;
    }

    form {
      padding: 10px;
      display: flex;
      flex-direction: column;
      width: 85%;
    }

    .form-item {
      display: flex;
      width: 90%;
      background: transparent;
      margin: 10px auto;
      align-items: center;
      border-radius: 15px;
      border-bottom: 1px solid rgb(82, 81, 81);
    }

    .form-item:hover {
      border: 1px solid rgb(82, 81, 81);
      ;
    }

    input {
      font-size: 18px;
      width: 80%;
      height: 30px;
      outline: none;
      background: transparent;
      border: none;
      margin: auto;
      color: white;
    }


    span {
      margin: 5px;
      color: rgb(172, 172, 172);
      cursor: default;
      user-select: none;
      background: rgba(85, 81, 81, 0.637);
      padding: 5px;
      border-radius: 15px;
    }

    button[type="submit"] {
      width: 250px;
      font-size: 20px;
      margin: 10px auto;
      padding: 10px 16px;
      color: white;
      background: rgba(122, 123, 116, 0.72);
      border: none;
      text-align: center;
    }

    button[type="submit"]:hover {
      background: rgb(172, 134, 8);
    }

    p:first-of-type {
      font-size: 18px;
      margin: 0;
    }

    .options {
      display: flex;
      margin: 10px auto;
      flex-wrap: wrap;
      justify-content: center;
    }

    button {
      padding: 5px 16px;
      font-size: 18px;
      margin: 5px 15px;
      width: 180px;
      color: white;
      background: transparent;
      cursor: pointer;
      transition: all 0.7s ease;
    }

    .fb:hover {
      background: rgb(5, 5, 73);
      border: none;
      box-shadow: 0 0 5px rgb(5, 5, 73);
    }

    .gl:hover {
      background: rgb(73, 5, 5);
      border: none;
      box-shadow: 0 0 5px rgb(73, 5, 5);

    }

    p {
      font-size: 18px;
      margin: 5px;
    }

    a {
      color: white;
    }

    a:hover {
      color: grey;
    }

    @media screen and (max-width:550px) {
      .container {
        width: 90%;
      }

    }
  </style>

</head>
<!-- THis section is for Title and description -->

<body>
  <div class="background"></div>
  <div class="container">
    <h2>View Blog</h2>
    <form action="retrieveblog.php" method="post">

      <div class="form-item">
        <input type="text" class="email-bt" placeholder="id" name="id">
      </div>


      <div class="form-item">
        <input type="text" class="email-bt" placeholder="Title" name="title" value=<?php 
        require_once 'config.php';

        if (isset($_REQUEST["submit"])) {
        $id= $_REQUEST['id'];
        
        // echo $id;
        
          $sql = "SELECT title FROM blogs WHERE id =".$id;
          $query1 = mysqli_query($connection, $sql);
        
         
        
        
        $result = $connection->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                         echo $row["title"] ;
                    }
                   
                } else {
                    echo "0 results";
                }}
                // $connection->close();
                ?> >
      </div>



      <div class="form-item">
        <textarea class="massage-bt" placeholder="Description" rows="20" cols="50" id="description" name="description" value=<?php 
        require_once 'config.php';

        if (isset($_REQUEST["submit"])) {
        $id= $_REQUEST['id'];
        
        echo $id;
        
          $sql = "SELECT description FROM blogs WHERE id =".$id;
        
        $result = $connection->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                         echo "<span>" .$row["description"] ;
                    }
                   
                } else {
                    echo "0 results";
                }}
                
                ?> >
                </textarea>
      </div>

      <div class="form-item">
        <input type="submit" name='submit' value="retrieve">
      </div>

      

      <div class="form-item">
        <input type="submit" name='update' value="update">
      </div>

    </form>
  </div>

</body>

</html>
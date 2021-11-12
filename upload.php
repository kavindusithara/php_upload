<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UPLOAD FILE</title>
  <style>
        body{
      display: flex;
      align-items: center;
      justify-content: center;
      height: 90vh;
      font-family: Arial, Helvetica, sans-serif;
      font-size: 20px;
      box-sizing: border-box;
    }

    p{
      background: linear-gradient(90deg , rgb(252, 94, 66) ,rgb(255, 56, 21) ) ;
      border: none;
      border-radius: 7px;
      color: white;
      font-weight: 500;
      outline: none;
      padding: 20px 30px;
      box-shadow: 0 0px 20px 0px rgba(255, 56, 21, 0.815);
    }
  </style>
</head>
<body>
<?php


$filename = $_FILES['file']['name'];
$location = "upload/".$filename;
if ( move_uploaded_file($_FILES['file']['tmp_name'], $location) ) { 
  echo '<p>'.$filename .'   file upload was a success!</p>' ; 
} else { 
  echo '<p>The file upload failed.</p>'; 
}

?>
</body>
</html>
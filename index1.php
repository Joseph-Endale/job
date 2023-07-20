<?php
require 'connection.php';

if(isset($_POST["submit"])){
  $department = $_POST["department"];
  $question = $_POST["question"];
  


 
  }

  $query = "INSERT INTO tb_data VALUES('', '$department', '$question')";
  mysqli_query($conn,$query);
  echo
  "
  <script> alert('Data Inserted Successfully'); </script>
  ";

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert Data</title>
  </head>
  <style media="screen">
    label{
      display: block;
    }
  </style>
  <body>
    <form class="" action="" method="post" autocomplete="off">
      <label for="">Question</label>
      <input type="text" name="question" required value="">
      <!-- <label for="">Age</label>
      <input type="number" name="age" required value=""> -->
      <label for="">Deparment</label>
      <select class="" name="department" required>
        <option value="" selected hidden>Select Dept</option>
        <option value="IT">IT</option>
        <option value="Acc">Acc</option>
        <option value="Mngt">Mngt</option>
      </select>
      <!-- <label for="">Gender</label>
      <input type="radio" name="gender" value="Male" required> Male
      <input type="radio" name="gender" value="Female"> Female
      <label for="">Languages</label>
      <input type="checkbox" name="languages[]" value="English">English
      <input type="checkbox" name="languages[]" value="Chinese">Chinese
      <input type="checkbox" name="languages[]" value="Spanish">Spanish -->
      <br>
      <button type="submit" name="submit">Submit</button>
    </form>
  </body>
</html>
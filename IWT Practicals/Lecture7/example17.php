<!-- PHP | Reading forms using POST | Slide 23 -->

<?php

   if(isset($_POST['BtnSubmit']))
   {
      echo "<h2>Bellow is the form data</h2>";
      echo "<hr>";
      echo "</br>Your Name :{$_POST['Fullname']}";
      echo "</br>Your Address :{$_POST['UserAddress']}";
      echo "<hr>";
   }
   
?>

<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
   <title>Calculator</title>
   <!-- <meta http-equiv="refresh" content="10" /> -->
   <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
   <style type="text/css">
      form {
         padding: 10px;
         margin: 120px auto;
         border: 3px solid green;
         border-radius: 20px 0px;
         background-color: cyan;
      }
   </style>
</head>

<body class="row">
   <form action="calt.php" method="POST">
      <center>oop_calculator  [<a href="http://aslambd.ml/" target="_blank">Info me</a>]</center>
      <br>
      <div class="form-group row">
         <label class="col-4 col-form-label">Number #1</label>
         <div class="col-8">
            <input type="text" class="form-control" name="num1" required>
         </div>
      </div>

      <div class="form-group row">
         <label class="col-4 col-form-label">Number #2</label>
         <div class="col-8">
            <input type="text" class="form-control" name="num2" required>
         </div>
      </div>

      <?php if(isset($_SESSION['result'])) { ?>

         <div class="form-group row">
            <label class="col-4 col-form-label">Result :</label>
            <div class="col-8">
               <input type="text" class="form-control" value="<?= $_SESSION['result']  ?>">
            </div>
         </div>
      
      <?php } ?>


      <div class="form-group row">
         <label class="col-4 col-form-label"></label>
         <div class="col">                  
            <select name="option" required>
               <option value="">Select</option>
               <option value="add">Add (+)</option>
               <option value="sub">Sub (-)</option>
               <option value="mul">Mult (*)</option>
               <option value="div">Div (/)</option>
            </select>
         </div>
         <div class="col">
            <button type="submit" class=" btn-info">Action</button>            
         </div>
      </div>
   </form>
</body>
</html>

<?php if(isset($_SESSION['result'])) { 
      unset($_SESSION['result']);
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<style>
    body{
        background-image:url('https://cdn.pixabay.com/photo/2020/12/23/14/41/forest-5855196_960_720.jpg');
        background-size:cover;
        background-repeat:no-repeat;
    }
   p{
    padding:40px;
    margin-top:50px;
   }
    .middle{
margin-left:500px;
    }
    #admin{
    background-direction-x:right;
    background-direction-y:top;
    
        
    }
    
    
    </style>
<body>
    <a href="#"><img src="https://tse3.mm.bing.net/th?id=OIP.yh6JXNQNFqp2_SaXVckndQHaFj&pid=Api&P=0&h=180"alt="" width="100" height="80"></a>
    <button class="btn btn-primary" ><a href="index.php" style="color:white;">Admin page</a></button>
    <button class="btn btn-primary" ><a href="student-create.php" style="color:white;">Form</a></button>
    <button class="btn btn-primary" ><a href="user.php" style="color:white;">login</a></button>

<p style="color:blue; font-size:48px; margin-left:400px;font-family:italic;">TRAVEL IS AN INVESTMENT IN YOURSELF</p>


    <form>
        
  <div class="middle">
    <div class="col">
      <input type="text" class="form-control" placeholder="First name" style="width:30%;">
    </div><br>
    <div class="col">
      <input type="text" class="form-control" placeholder="Last name" style="width:30%;">
    </div><br>
    <div class="col">
        <span style="color:white">Gender:</span><br>
        <span style="color:white">Female:</span><input type="radio">
        <span style="color:white">male:</span><input type="radio">


  </div><br>
  <div class="col">
    <span style="color:white">From:</span>
    <input type="date" class="form-control" style="width:30%;" ><br>
    <span style="color:white">To</span>
    <input type="date" class="form-control" style="width:30%;" >
</div><br>

<span style="color:white">countries:</span>
<select name="countries">
    <option value="India">India</option>
    <option value="USA">USA</option>
    <option value="Germany">Germany</option>
    
</section>
<input type="submit" value="submit">


</form>




    
</body>
</html>
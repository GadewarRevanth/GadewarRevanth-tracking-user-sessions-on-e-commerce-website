<?php
   include_once('./includes/headerNav.php')
?>
<html>
<!-- Header End====================================================================== -->
<head>
   <style>
      /*signup*/
.sgn-input{
    width:300px;
    color: grey;
}
.signup_div{
    display: flex;
    justify-content: center;
    align-items:center
}
.div-sign{
   text-align:center
}
@media (max-width: 500px) {
   .signup_div{
    background-color: rgb(212, 229, 243);
}

}
   </style>
</head>

<body style="background-color: #262626;">
<!-- signup container====================================================================== -->
<center> <img height="180" width="180"  src="./images/logo1.png" alt=""></center>
            <br>
<h3 style='color:azure;text-align:center;'>Sign Up</h3>

<div class="signup_div">
<form action="includes/signup.inc.php" method="post"> <br>
   <label for=""><h4 style="color:ghostwhite;">Name:</h4></label> <input class="sgn-input" type="text" name="name"   required="required" style="height:30px;" >  
   <label for=""><h4 style="color:ghostwhite;">Email:</h4></label>   <input class="sgn-input" type="text" name="email"  required="required" style="height:30px;"> 
   <label for=""><h4 style="color:ghostwhite;">Address:</h4></label>  <input class="sgn-input" type="text" name="address"   required="required" style="height:30px;"> 
   <label for=""><h4 style="color:ghostwhite;">Phone:</h4></label>  <input class="sgn-input" type="number" name="number"   required="required" style="height:30px;"> 
   <label for=""><h4 style="color:ghostwhite;">Password:</h4></label>  <input class="sgn-input" type="password" name="pwd"  required="required" style="height:30px;"> 
   <label for=""><h4 style="color:ghostwhite;">Re-Password:</h4></label>  <input class="sgn-input" type="password" name="rpwd"   required="required" style="height:30px;"> 
    <div class="div-sign">
    <button type="submit" class="btn btn-large btn-info" name="submit" >Register</button> 
    </div>
 
</form>
</div>





</body>
<!-- Footer====================================================================== -->
<?php
   include_once('./includes/footer.php')
?>

<!-- Placed at the end of the document so the pages load faster ============================================= -->
<script src="./js/jquery.js" type="text/javascript"></script>
	<script src="./js/bootstrap.min.js" type="text/javascript"></script>
</html>
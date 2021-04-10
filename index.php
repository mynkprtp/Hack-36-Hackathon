
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PandemiCure</title>
    <link rel="icon" href="https://www.flaticon.com/premium-icon/icons/svg/2853/2853896.svg" type="image/x-icon">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  
    </script>
</head>
<body>


<?php include_once("./components/nav.html"); ?>
  <br><br><br><br>

    <div class="animatediv">
        <img id="coronagif" src="https://atheistiran.com/wp-content/uploads/2020/03/corona-virus.png">
    </div>
    <div class="log">
    <a class="login-trigger" href="#" data-target="#login" data-toggle="modal">I'm Infected</a>

    <div id="login" class="modal fade" role="dialog">
      <div class="modal-dialog">
        
        <div class="modal-content">
          <div class="modal-body">
            <button data-dismiss="modal" class="close">&times;</button>
            <h2>Qurantine Me!!</h2>
            <form >
              <input type="text" name="email" class="username form-control" id="email" placeholder="Enter Your Email"/>
              <span class="error"><?php echo $emailError;?></span>
              <input type="text" name="name" class="username form-control" id="name" placeholder="Enter Your Name"/>
              <span class="error"> <?php echo $nameErr;?></span>
              <input type="tel" name="mobile" class="username form-control" id="mobile" placeholder="Enter Your Mobile Number"/>
              <span class="error"> <?php echo $mobileError;?></span>
              <input type="text" name="adress" class="username form-control" placeholder="Enter Your Full address"/>
              <input type="number" name="duration" class="username form-control" placeholder="Number of days of being Infected"/>
             <label for="Gender" style="float: left;">Gender: </label>
             <input type="radio" name="gender" id="male" value="male" >
              <label for="male">Male   </label>
              <input type="radio" name="gender" id="female" value="female">
              <label for="female">Female  </label>
              <input type="radio" name="gender" id="others" value="others">
              <label for="others">Others   </label>
  
              <input type="text" name="City" class="username form-control" id="city" placeholder="City"/>
              <input type="text" name="State" class="username form-control" id="state" placeholder="State"/>
              <input type="tel" name="Pincode" class="username form-control" id="pin"placeholder="PinCode"/>
              <!-- <input type="password" name="password" class="password form-control" placeholder="password"/> -->
              <input class="btn login" type="submit" onclick="validate()" value="Submit" />
            </form>
          </div>
        </div>
      </div>  
    </div>
  </div>
  <div id="modal"></div>
    
</body>

<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script>
    $(function(){
    $("#navbar").load("./components/nav.html");
  });
</script>

<script src="./js/validation.js"></script>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</html>


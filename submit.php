<?php
/* Created by Arvind iyer */  
if (isset($_POST['submit'])) {
    //Gathering all required data
    $conn = mysqli_connect("localhost","Arvindiyer","Anand@1954");
    //$conn= new mysqli('localhost','root','','fusion16');
    mysqli_select_db($conn,"fusion16");
    $no = $_POST['InputName'];
    $email = ($_POST['InputEmail1']);
    $cemail = ($_POST['InputEmail1']);
    
    $command = "SELECT `no` FROM notification WHERE `no` = '$no'";
    $result = mysqli_query($conn, $command);
    $rowcount = mysqli_num_rows($result);
    if ($rowcount > 0){
         echo "<script type='text/javascript'>alert('There is an entry in database');</script>";
         echo "<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <title>Fusion Form</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <link rel='stylesheet' type='text/css' href='bootstrap/bootstrap.min.css' />
    <link rel='stylesheet' type='text/css' href='bootstrap/font-awesome.min.css' />
    <script type='text/javascript' src='js/jquery-1.10.2.min.js'></script>
    <link rel='stylesheet' type='text/css' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' />
    <script type='text/javascript' src='bootstrap/bootstrap.min.js'></script>
    <style type='text/css'>
    body
    {
        background: black;
    }
    .footer-copyright {
     margin-top: 10px;   
    height: 50px;
    line-height: 50px;
    //background-color: #0D47A1;
    overflow: hidden;
    }
    </style>
</head>
<body>
<div class='container'>
    <div class='page-header'>
        <h1 style='color:white;'><center>Fusion form</center></h1>
        <li style='color:white;'>Fill the form carefully</li>
        <li style='color:white;'>If you enter wrong data or an existing data in databse a dialog box will pop with the error</li>
        <li style='color:white;'>If success u will get same page with data in fields cleared</li>
        <li style='color:white;'>Any query contact Web Team Fusion16</li>
    </div>

    <!-- Registration form - START -->
    <div class='container'>
        <div class='row'>
            <form role='form' action='submit.php' method='post'>
                <div class='col-lg-12'>
                    <div class='well well-sm'><strong><span class='glyphicon glyphicon-asterisk'></span>Required Field</strong></div>
                    <div class='form-group'>
                        <label style='color:white;' for='InputName'>Enter Receipt No</label>
                        <div class='input-group'>
                            <input type='text' class='form-control' name='InputName' id='InputName' placeholder='Enter Receipt No' required>
                            <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                        </div>
                    </div>
                    <div class='form-group'>
                        <label  style='color:white;'for='InputEmail'>Enter Email</label>
                        <div class='input-group'>
                            <input type='email' class='form-control' id='InputEmailFirst' name='InputEmail1' placeholder='Enter Email' required>
                            <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                        </div>
                    </div>
                    <div class='form-group'>
                        <label  style='color:white;' for='InputEmail'>Confirm Email</label>
                        <div class='input-group'>
                            <input type='email' class='form-control' id='InputEmailSecond' name='InputEmail2' placeholder='Confirm Email' required>
                            <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                        </div>
                    </div>
                    <center>
                      <input type='submit' name='submit' id='submit' value='Submit' class='btn btn-info '>
                    </center>
                </div>
            </form>
        </div>
    </div>
    <!-- Registration form - END -->
</div>
<footer class='page-footer'>
          <div class='footer-copyright'>
              <div>
                <center>
                  <span style='color:white;'>Developed by Web-Team Fusion16 </span>  
                  <a  target='_blank' href='https://www.facebook.com/fusionbvm'><span style='color:white;' class='glyphicon glyphicon-globe' aria-hidden='true'></span></a>
                  <a target='_blank'  href='https://www.instagram.com/fusionbvm'><span style='color:white;' class='glyphicon glyphicon-globe' aria-hidden='true'></img></a>
                  <a target='_blank'  href='https://github.com/Team-ISTE'><span style='color:white;' class='glyphicon glyphicon-globe' aria-hidden='true'></img></a>
                </center>
              </div>
style='color:white;'
        </div>
</footer>

</body>
</html>

         ";
         mysqli_close($conn);
        // header('Location:http://localhost:90/fusion');
    }elseif($email != $cemail)
    {
        echo  "<script type='text/javascript'>alert('Mismatch email address');</script>";
         echo "<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <title>Fusion Form</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <link rel='stylesheet' type='text/css' href='bootstrap/bootstrap.min.css' />
    <link rel='stylesheet' type='text/css' href='bootstrap/font-awesome.min.css' />
    <link rel='stylesheet' type='text/css' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' />
    <script type='text/javascript' src='js/jquery-1.10.2.min.js'></script>
    <script type='text/javascript' src='bootstrap/bootstrap.min.js'></script>
    <style type='text/css'>
    body
    {
        background: black;
    }
    .footer-copyright {
     margin-top: 10px;   
    height: 50px;
    line-height: 50px;
    //background-color: #0D47A1;
    overflow: hidden;
    }
    </style>
</head>
<body>
<div class='container'>
    <div class='page-header'>
        <h1 style='color:white;'><center>Fusion form</center></h1>
        <li style='color:white;'>Fill the form carefully</li>
        <li style='color:white;'>If you enter wrong data or an existing data in databse a dialog box will pop with the error</li>
        <li style='color:white;'>If success u will get same page with data in fields cleared</li>
        <li style='color:white;'>Any query contact Web Team Fusion16</li>
    </div>

    <!-- Registration form - START -->
    <div class='container'>
        <div class='row'>
            <form role='form' action='submit.php' method='post'>
                <div class='col-lg-12'>
                    <div class='well well-sm'><strong><span class='glyphicon glyphicon-asterisk'></span>Required Field</strong></div>
                    <div class='form-group'>
                        <label style='color:white;' for='InputName'>Enter Receipt No</label>
                        <div class='input-group'>
                            <input type='text' class='form-control' name='InputName' id='InputName' placeholder='Enter Receipt No' required>
                            <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                        </div>
                    </div>
                    <div class='form-group'>
                        <label  style='color:white;'for='InputEmail'>Enter Email</label>
                        <div class='input-group'>
                            <input type='email' class='form-control' id='InputEmailFirst' name='InputEmail1' placeholder='Enter Email' required>
                            <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                        </div>
                    </div>
                    <div class='form-group'>
                        <label  style='color:white;' for='InputEmail'>Confirm Email</label>
                        <div class='input-group'>
                            <input type='email' class='form-control' id='InputEmailSecond' name='InputEmail2' placeholder='Confirm Email' required>
                            <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                        </div>
                    </div>
                    <center>
                      <input type='submit' name='submit' id='submit' value='Submit' class='btn btn-info '>
                    </center>
                </div>
            </form>
        </div>
    </div>
    <!-- Registration form - END -->
</div>
<footer class='page-footer'>
          <div class='footer-copyright'>
              <div>
                <center>
                  <span style='color:white;'>Developed by Web-Team Fusion16 </span>  
                  <a  target='_blank' href='https://www.facebook.com/fusionbvm'><span style='color:white;' class='glyphicon glyphicon-globe' aria-hidden='true'></span></a>
                  <a target='_blank'  href='https://www.instagram.com/fusionbvm'><span style='color:white;' class='glyphicon glyphicon-globe' aria-hidden='true'></img></a>
                  <a target='_blank'  href='https://github.com/Team-ISTE'><span style='color:white;' class='glyphicon glyphicon-globe' aria-hidden='true'></img></a>
                </center>
              </div>
style='color:white;'
        </div>
</footer>

</body>
</html>";

    mysqli_close($conn);
    }
    else
    {
        $query = "INSERT INTO `notification`(`no`, `email`, `status`) VALUES ('$no','$email','No')";
        $result = mysqli_query($conn, $query);
        // check for successful store
        if ($result) {
            echo  "<script type='text/javascript'>alert('Successfuly Stored');</script>";
            echo "
        <!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <title>Fusion Form</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <link rel='stylesheet' type='text/css' href='bootstrap/bootstrap.min.css' />
    <link rel='stylesheet' type='text/css' href='bootstrap/font-awesome.min.css' />
    <link rel='stylesheet' type='text/css' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' />
    <script type='text/javascript' src='js/jquery-1.10.2.min.js'></script>
    <script type='text/javascript' src='bootstrap/bootstrap.min.js'></script>
    <style type='text/css'>
    body
    {
        background: black;
    }
    .footer-copyright {
     margin-top: 10px;   
    height: 50px;
    line-height: 50px;
    //background-color: #0D47A1;
    overflow: hidden;
    }
    </style>
</head>
<body>
<div class='container'>
    <div class='page-header'>
        <h1 style='color:white;'><center>Fusion form</center></h1>
        <li style='color:white;'>Fill the form carefully</li>
        <li style='color:white;'>If you enter wrong data or an existing data in databse a dialog box will pop with the error</li>
        <li style='color:white;'>If success u will get same page with data in fields cleared</li>
        <li style='color:white;'>Any query contact Web Team Fusion16</li>
    </div>

    <!-- Registration form - START -->
    <div class='container'>
        <div class='row'>
            <form role='form' action='submit.php' method='post'>
                <div class='col-lg-12'>
                    <div class='well well-sm'><strong><span class='glyphicon glyphicon-asterisk'></span>Required Field</strong></div>
                    <div class='form-group'>
                        <label style='color:white;' for='InputName'>Enter Receipt No</label>
                        <div class='input-group'>
                            <input type='text' class='form-control' name='InputName' id='InputName' placeholder='Enter Receipt No' required>
                            <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                        </div>
                    </div>
                    <div class='form-group'>
                        <label  style='color:white;'for='InputEmail'>Enter Email</label>
                        <div class='input-group'>
                            <input type='email' class='form-control' id='InputEmailFirst' name='InputEmail1' placeholder='Enter Email' required>
                            <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                        </div>
                    </div>
                    <div class='form-group'>
                        <label  style='color:white;' for='InputEmail'>Confirm Email</label>
                        <div class='input-group'>
                            <input type='email' class='form-control' id='InputEmailSecond' name='InputEmail2' placeholder='Confirm Email' required>
                            <span class='input-group-addon'><span class='glyphicon glyphicon-asterisk'></span></span>
                        </div>
                    </div>
                    <center>
                      <input type='submit' name='submit' id='submit' value='Submit' class='btn btn-info '>
                    </center>
                </div>
            </form>
        </div>
    </div>
    <!-- Registration form - END -->
</div>
<footer class='page-footer'>
          <div class='footer-copyright'>
              <div>
                <center>
                  <span style='color:white;'>Developed by Web-Team Fusion16 </span>  
                  <a  target='_blank' href='https://www.facebook.com/fusionbvm'><span style='color:white;' class='glyphicon glyphicon-globe' aria-hidden='true'></span></a>
                  <a target='_blank'  href='https://www.instagram.com/fusionbvm'><span style='color:white;' class='glyphicon glyphicon-globe' aria-hidden='true'></img></a>
                  <a target='_blank'  href='https://github.com/Team-ISTE'><span style='color:white;' class='glyphicon glyphicon-globe' aria-hidden='true'></img></a>
                </center>
              </div>
style='color:white;'
        </div>
</footer>

</body>
</html> ";
mysqli_close($conn);
        }
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="PerPusWeb (Perpustakaan Berbasis Web)">
    <meta name="author" content="Sarjana Komedi">
    <link rel="icon" href="../../favicon.ico">

    <title>Ira Husnul</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body background="img/page-background.png">

    <div class="container">

      <form class="form-signin" action="proseslogin.php" method="post">
        <center><h2 class="form-signin-heading"><span class="glyphicon glyphicon-th-large"></span> PerPusWeb</h2></center>
        <div class="input-group">
         <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
         <input type="text" id="username" name="username" class="form-control" placeholder="Username" autocomplete="off" autofocus="on" required>
         </div>
        <div class="input-group" style="margin-top: 5px;">
         <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
         <input type="text" id="password" name="password" class="form-control" placeholder="Password" autocomplete="off" required>
         </div>
        <br />
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->
    
    <center><h5 class="form-signin">Copyright &copy; <a href="#" data-toggle="modal" data-target="#contact">TUGAS UAS</a></h5></center> 
    
     <!-- Modal Dialog Contact -->
<!-- <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Contact Us</h4>
      </div>
      <div class="modal-body">
      PerPusWeb adalah aplikasi perpustakaan bebasis website yang responsif, PerPusWeb dibuat oleh
       Framework id yang dapat dihubungi di :
      <table>
      <tr>
      <td>No Telepon</td> <td>:</td> <td>0822 1196 8157</td>
      </tr>
      <br />
      <tr>
      <td>E-mail</td><td>:</td> <td><a href="mailto:developer@sarjanakomedi.com">developer@Framewo.com</a> | <a href="mailto:rsabyl@gmail.com">rsabyl@gmail.com</a></td>
      </tr> 
      <br />
      <tr>
      <td>Blog</td>       <td>:</td> <td><a href="http://www.sarjanakomedi.com" target="_blank">www.sarjanakomedi.com</a></td>
      </tr>
      <br />
      <tr>
      <td>Website</td>    <td>:</td> <td><a href="http://www.sarjanakomedi.com" target="_blank">www.sarjanakomedi.com</a></td>
      </tr>
       </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
 --><!-- end dialog modal -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

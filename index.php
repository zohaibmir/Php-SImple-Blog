
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>FaceTime Media Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
   <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    

    
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">FaceTime Media Blog</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
                Logged in as <a href="views/SignUp.php" class="navbar-link">Username</a>
            </p>
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">Login</a></li>
              <li><a href="views/">Sign Up</a></li>
            </ul>
            
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
            
          <div class="well sidebar-nav">
              <center><h3> Categories </h3></center>
            <ul class="nav nav-list">
              <li class="nav-header">SignIn</li>
              <li class="active"><a href="#">Link</a></li>
              <li><a href="#">Login</a></li>
              <li><a href="views/adduser.php">SignIn</a></li>
              <li><a href="#">Link</a></li>
             
            </ul>
              
          </div><!--/.well -->
          
        </div><!--/span-->
        <div class="span9">
          <div class="hero-unit">
            <h1>Welcome to My Blog</h1>
            <p>The Purpose of this blog is to keep you updated with the latest development in Php and related technologies. You can Register here and can add comments to existing post or also cal add new post</p>
            
          </div>
         <?php include 'views/SignIn.php'; ?>
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; Company 2012</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
     <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>

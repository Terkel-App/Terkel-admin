<!DOCTYPE html>
<?session_start();
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Lockscreen</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition lockscreen">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <a href="#"><b>Terkel</b>Låst</a>
  </div>
  <!-- User name -->


  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->
    <div class="lockscreen-image">
      <img src="dist/img/user1-128x128.png" alt="User Image">
    </div>
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
    <form action="lock.php" method="POST" class="lockscreen-credentials">
      <div class="input-group">
           <input type="name" name="name" id="name" class="form-control" placeholder="name">
		<input type="password" name="pwd" id="pwd" class="form-control" placeholder="password">

       
<input type='submit' name='submit' value='Submit'/>
 
      </div>
    </form>
    <!-- /.lockscreen credentials -->

  </div>
  
  <div class="lockscreen-footer text-center">
    Copyright &copy; 2016 <b>Terkel</b><br>
   
  </div>
</div>
<!-- /.center -->

<!-- jQuery 2.1.4 -->
<script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="http://getbootstrap.com/favicon.ico">

  <title>Absensi Prakerin</title>

  <link href="./lib/bootstrap.min.css" rel="stylesheet">
  <link href="./lib/ie10-viewport-bug-workaround.css" rel="stylesheet">

  <link href="./lib/dashboard.css" rel="stylesheet">
  <script src="./lib/ie-emulation-modes-warning.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <script type="text/javascript">
    window.setTimeout("waktu()", 1000);
    window.onload = function() {
      jam();
    }

    function jam() {
      var e = document.getElementById('output'),
        d = new Date(),
        h, m;
      h = set(d.getHours());
      m = set(d.getMinutes());
  

      e.innerHTML = h + ':' + m  + " WIB";

      setTimeout('jam()', 1000);
    }

   function set(e) {
      e = e < 10 ? '0' + e : e;
      return e;
    } 
    window.setTimeout("waktu_m()", 1000);

    function waktu_m() {
      var tanggal = new Date();
      setTimeout("waktu_m()", 1000);
      var f = document.getElementById("output_m");
      f.innerHTML = set_m(tanggal.getHours()) + ":" + set_m(tanggal.getMinutes())  + " WIB";

      function set_m(f) {
      f = f < 10 ? '0' + f : f;
      return f;
    } 

    }
  </script>

</head>

<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <?php
      include './model/layout/navbar.php';
      ?>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3 col-md-2 sidebar">
        <?php
        include './model/layout/sidebar.php';
        ?>
      </div>
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <?php
        include './model/layout/content.php';
        ?>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="./lib/jquery.min.js"></script>
  <script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
  </script>
  <script src="./lib/bootstrap.min.js"></script>
  <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  <script src="./lib/holder.min.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="./lib/ie10-viewport-bug-workaround.js"></script>


</body>

</html>
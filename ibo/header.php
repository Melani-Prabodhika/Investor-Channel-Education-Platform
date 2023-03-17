<?php
require ('../db.php');
if(isset($_SESSION['IBO_LOGIN'])!='yes'){
?>

<script>
  window.location.href='../login.php';
</script>
    
<?php
  }
?>

<!Doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Investor Channel</title>
<!-- Favicons -->
<link rel="shortcut icon" sizes="16x16" href="img/favicon.ico"/>
<meta name="description" content="">
<link rel="stylesheet" href="assets/css/document_style.css" media="all">
<link rel="stylesheet" href="assets/js/google-code-prettify/prettify.css" media="screen">
<script src="assets/js/google-code-prettify/prettify.js"></script>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/jquery.scrollTo.js"></script>
<script src="assets/js/jquery.easing.js"></script>
<script>
  document.createElement('section');
  var duration = '500',
  easing = 'swing';
</script>
<script src="assets/js/script.js"></script>

<style>
html {
	background-color: #FFFFFF;
	color: #000000;
}
        
::-moz-selection {
 background: #444444;
 color: #DDDDDD;
}
        
::selection {
 background: #444444;
 color: #DDDDDD;
}

#documenter_sidebar #documenter_logo {
	background-image: url(assets/images/investor1.png);
	padding-top: 8px;
	padding-bottom: 0;
}

a {
	color: #0000FF;
}

hr {
	border-top: 10px solid #EBEBEB;
}

#documenter_sidebar, #documenter_sidebar ul a {
	background-color:#333333;
	color: #222222;
}

/*--#documenter_sidebar ul a {
}--*/

#documenter_sidebar ul {
	border-top: 1px solid #AAAAAA;
}

#documenter_sidebar ul a {
	border-bottom: 1px solid #4a4a4a;
	color: #ccc;
  font-size: 1.3rem;
}

#documenter_sidebar ul a:hover {
	background: #d29052;
	color: #fff;
}

#documenter_sidebar ul a.current {
	background:#d29052;
	color: #ffffff;
}

#documenter_copyright {
	display: block !important;
	visibility: visible !important;
}
</style>
</head>

<body class="documenter-project-porto">
  
<!-- Navigation bar Start -->
  <div id="documenter_sidebar" style="width: 300px;"><a href="#documenter_cover" id="documenter_logo"></a>
    <ul id="documenter_nav">
      <li><a class="current" href="ibo.php">Home</a></li>
      <li><a href="../frx_login.php" title="">FRX Academy</a></li>
      <li><a href="../library_login.php" title="">Library</a></li>
      <li>
        <a href="#" title="" onclick="myFunction()">Strategies</a>
        <script>
          function myFunction() {
            window.location.href="https://www.tradingview.com/chart/";
          }
        </script>
      </li>
      <li><a href="../quiz_home.php" title="">Questionarries</a></li>
      <li><a href="live_shedule.php" title="">Live Schedule</a></li>
      <li><a href="downliners.php" title="">Downliners</a></li>
      <li><a href="#" title="">My Account</a></li>
      <li><a href="../logout.php" title="">Logout</a></li>
    </ul>
  </div>
<!-- End Navigation bar -->

</body>
</html>
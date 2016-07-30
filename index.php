<!DOCTYPE html>
<html>
<head>
<title>Shhh | Responsive Landingpage |test</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="description" content="RCSL | Responsive coming soon Landingpage">
<meta name="keywords" content="responsive, landingpage, website, template, bootstrap, html, css, javascript, git, github, demo">
<meta name="robots" content="index,follow">
<meta name="robots" content="noarchive">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="Expires" content="0" />

<meta name="publisher" content="@JStrotmann | Github">
<meta name="page-topic" Content="responsive, bootstrap, landingpage, website, template">
<meta name="page-type" content="landingpage">
<meta name="copyright" content="open-source">
<meta name="date" content="2016-06-10T00:00:37+00:00">
<meta name="content-language" content="en">
<meta name="page-topic" content="demo-landingpage">
<meta name="page-type" content="website">
<meta name="audience" content="all">
<meta name="revisit-after" content="30 days">


<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">
<!--==============GOOGLE FONT - OPEN SANS=================-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800' rel='stylesheet' type='text/css'>

<!--CSS  for Tweets-->

<link href="css/jquery.tweet.css" media="all" rel="stylesheet" type="text/css"/>

<!--==============MAIN CSS FOR COMING SOON PAGE=================-->

<link href="css/main.css" rel="stylesheet" media="all">
</head>
<body id="layout1">

<!--==============HEADER =================-->

<div class="jumbotron masthead">
  <div class="container">

    <!--==============Logo=================-->

    <h1>Test</h1>

    <!--==============CAPTION=================-->

    <p>Responsive Landingpage</p>

    <!--==============COUNTDOWN TIMER=================-->



    <!--==============IPHONE MOCKUP=================-->

    <div class="row-fluid">
      <div class="span8 offset2 mockup">
        <div class="shadow"><img src="images/iphone-shadow.png" alt=""></div>
      </div>
    </div>
  </div>
</div>
<div class="container">

  <!--==============SUBSCRIBE BOX=================-->

  <div class="row-fluid">
    <div class="span10 offset1 subscribe">
       <h2>Want to try Shhh?</h2>
      <h4>Leave your email and we'll put you on our invite list.</h4>
      <form class="form-search"  action="http://feedburner.google.com/fb/a/mailverify?uri=pinshare/feedrss2" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=pinshare/feedrss2;?php echo $yam_feedburner; ?&gt;', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
        <input class="input-xxlarge" name="email" type="email" placeholder="Enter your email" required="required">
        <input type="hidden" value="&lt;?php echo $yam_feedburner; ?&gt;" name="uri">
        <input type="hidden" name="loc" value="en_US">
        <button class="btn btn-large btn-warning" type="submit">Notify me</button>
      </form>
    </div>
  </div>

<!--==============QUERY LIBRARY=================-->

<script src="js/jquery-1.9.0.min.js"></script>

<!--==============BOOTSTRAP JS=================-->

<script src="js/bootstrap.js"></script>

<!--==============TWITTER FEED JS=================-->

  <div class="row-fluid">
    <div class="span8 offset2 footer">
      <p class="socialicons">
      <a href="https://www.facebook.com" target="_new" class="icons facebook"></a>
      <a href="https://twitter.com" target="_new" class="icons twitter"></a>

      <p class="footertext"> copyright &copy; 2016 Shhh</p>
    </div>
  </div>
</div>
</body>
</html>
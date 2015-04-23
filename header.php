<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ROI Calculator</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar">
      <div class="container-fluid">
        <div class="container header-logo-container">
          <div class="row">
            <div class="col-md-3 col-md-push-9">
              <a href="#"><img src="images/nac_logo.png" title="National Aviation Consortium" id="header-logo"></a>
            </div>
            <div class="col-md-9 col-md-pull-3">
              <h1><strong>Return on Investment</strong> Calculator</h1>
            </div>
          </div>
        </div>
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li<?php if ($activePage == 'cost-hire'): ?> class="active"<?php endif; ?>><a href="#">Cost-Hire<div class="progress-dot <?php if (false): ?>complete<?php endif; ?>"><span></span></div></a></li>
            <li<?php if ($activePage == 'business-impact'): ?> class="active"<?php endif; ?>><a href="#">Business Impact<div class="progress-dot"><span></span></div></a></li>
            <li<?php if ($activePage == 'cost-to-implement'): ?> class="active"<?php endif; ?>><a href="#">Cost to Implement<div class="progress-dot"><span></span></div></a></li>
            <li<?php if ($activePage == 'possible-savings'): ?> class="active"<?php endif; ?>><a href="#">Possible Savings<div class="progress-dot"><span></span></div></a></li>
            <li<?php if ($activePage == 'roi'): ?> class="active"<?php endif; ?>><a href="#">ROI<div class="progress-dot"><span></span></div></a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container" id="content">
      <div class="row">
        <div class="col-md-8">

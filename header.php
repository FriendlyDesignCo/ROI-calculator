<?php

if (isset($_GET['SID']))
  session_id($_GET['SID']);
session_start();

if (!isset($_SESSION['number-of-technical-employees']))
{
  $defaults = array(
    'number-of-technical-employees' => '50',
    'number-of-hires-per-year' => '5',
    'average-wage-of-open-positions' => '20',
    'average-advertising-cost' => '3500',
    'interview-length' => '1',
    'interview-participants' => '3',
    'management-cost' => '45',
    'interview-candidate-count' => '25',
    'internal-interview-count' => '10',
    'internal-interview-length' => '1.5',
    'internal-participants' => '3',
    'internal-management-cost' => '45',
    'preemployment-testing' => '10200',
    'hr-candidates' => '5',
    'hr-time' => '1',
    'hr-hourly' => '25',
    'filled-by-staffing-firm' => '5',
    'staffing-firm-percentage' => '25',
    'ojt-hours' => '300',
    'staff-ojt-hours' => '150',
    'staff-ojt-wage' => '36',
    'ojt-consumables' => '2000',
    'annual-revenue' => '12000000',
    'ot-hours' => '4',
    'weekly-overtime-premium' => '10',
    'overtime-premium' => '10',
    'turnover-percent-reduction' => '50',
    'recruiting-percent-reduction' => '50',
    'staffing-percent-reduction' => '100',
    'ojt-percent-reduction' => '33',
    'planner-salary' => '60',
    'planner-hours' => '150',
    'pm-salary' => '45',
    'pm-hours' => '50',
    'supervisor-salary' => '36',
    'supervisor-hours' => '60',
    'miscellaneous-costs' => '0',
    'progress' => array('cost-hire.php' => false,'business-impact.php' => false,'possible-savings.php' => false,'cost-to-implement.php' => false)
  );
  foreach ($defaults as $key => $value)
    $_SESSION[$key] = $value;
}

if (isset($_GET['action']) && $_GET['action'] === 'download')
{
  $pageUrl = 'http://'.$_SERVER['HTTP_HOST'].str_replace('?action=download','',$_SERVER['REQUEST_URI']).'?SID='.session_id();
  header("Location: http://api.html2pdfrocket.com/pdf?value=".urlencode($pageUrl)."&filename=ROI_Report.pdf&apikey=".trim(file_get_contents('key.txt'))."&UsePrintStylesheet=true&PageSize=Letter&UseGrayscale=true&LowQuality=true&MarginLeft=30&MarginRight=30&MarginTop=10&MarginBottom=10");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] === "POST")
{
  @$_SESSION['progress'][$previousPage] = true;
  foreach ($_POST as $key => $value)
    $_SESSION[$key] = $value;
}

function getValue($field, $default = '') {
  if (isset($_SESSION[$field]))
    return $_SESSION[$field];
  return $default;
}


?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ROI Calculator</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="stylesheets/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="print.css" type="text/css" media="print">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <h1 class="visible-print-inline" style="line-height:50px;float:left;font-size:30px;"><strong>Return on Investment</strong> Calculator</h1>
    <img style="float:right;padding-right:10px;padding-top:15px;width:35%;height:auto;" src="images/nac_logo_print.png" class="visible-print-block">
    <div class="clearfix visible-print-block"></div>

    <nav class="navbar">
      <div class="container-fluid">
        <div class="container header-logo-container">
          <div class="row">
            <div class="col-sm-3 col-sm-push-9">
              <a href="#"><img src="images/nac_logo.png" title="National Aviation Consortium" id="header-logo"></a>
            </div>
            <div class="col-sm-9 col-sm-pull-3">
              <a href="index.php"><h1><strong>Return on Investment</strong> Calculator</h1></a>
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
            <li<?php if ($activePage == 'cost-hire'): ?> class="active"<?php endif; ?>><a href="cost-hire.php">Cost-Hire<div class="progress-dot <?php if ($_SESSION['progress']['cost-hire.php']): ?>complete<?php endif; ?>"><span></span></div></a></li>
            <li<?php if ($activePage == 'business-impact'): ?> class="active"<?php endif; ?>><a href="business-impact.php">Business Impact<div class="progress-dot <?php if ($_SESSION['progress']['business-impact.php']): ?>complete<?php endif; ?>"><span></span></div></a></li>
            <li<?php if ($activePage == 'possible-savings'): ?> class="active"<?php endif; ?>><a href="possible-savings.php">Possible Savings<div class="progress-dot <?php if ($_SESSION['progress']['possible-savings.php']): ?>complete<?php endif; ?>"><span></span></div></a></li>
            <li<?php if ($activePage == 'cost-to-implement'): ?> class="active"<?php endif; ?>><a href="cost-to-implement.php">Cost to Implement<div class="progress-dot <?php if ($_SESSION['progress']['cost-to-implement.php']): ?>complete<?php endif; ?>"><span></span></div></a></li>
            <li<?php if ($activePage == 'roi'): ?> class="active"<?php endif; ?>><a href="roi.php">ROI<div class="progress-dot"><span></span></div></a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container" id="content">
      <div class="row">
        <div class="col-md-8 form-column">
          <form method="POST" action="<?php if (isset($nextPage)) echo $nextPage; ?>">
            <?php foreach ($_SESSION AS $key => $value): if ($key == 'values' || $key == 'progress') continue; ?>
              <input type="hidden" name="<?php echo $key; ?>" value="<?php echo htmlentities($value); ?>">
            <?php endforeach; ?>

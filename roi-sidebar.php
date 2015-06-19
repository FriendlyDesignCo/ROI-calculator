<?php $progressPercent = 0;
foreach ($_SESSION['progress'] as $key => $value)
  if ($value === true)
    $progressPercent += 25;
?>
<div class="well text-center">
  <div id="progress-holder"><div id="progress" style="width:<?php echo $progressPercent; ?>%;"></div></div>
  <p>Estimated ROI</p>
  <p id="estimated-roi">4129%</p>
  <a href="#" id="expand-roi"><i class="glyphicon glyphicon-chevron-down"></i></a>
</div>

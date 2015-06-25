<?php $progressPercent = 0;
foreach ($_SESSION['progress'] as $key => $value)
  if ($value === true)
    $progressPercent += 25;
?>
<div class="well text-center hidden-sm hidden-xs">
  <div id="progress-holder"><div id="progress" style="width:<?php echo $progressPercent; ?>%;"></div></div>
  <p>Estimated ROI</p>
  <p id="estimated-roi">4129%</p>
  <table>
    <tr>
      <th>Total Investment</th>
      <td id="sidebar-roi-investment">$</td>
    </tr>
    <tr>
      <th>Total Savings</th>
      <td id="sidebar-roi-savings">$</td>
    </tr>
    <tr>
      <th>True Return</th>
      <td id="sidebar-true-return">$</td>
    </tr>
  </table>
  <a href="#" id="expand-roi"><i class="glyphicon glyphicon-chevron-down"></i></a>
</div>

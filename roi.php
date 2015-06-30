<?php
$activePage = 'roi';
$previousPage = 'cost-to-implement.php';
$hideJustDownloadLinks = true;
include('header.php'); ?>

<h1>Calculating Total Return on Investment (ROI)</h1>
<p>Using the investment and savings numbers from your above work, you now are ready to see an estimated Return on Investment (ROI). for The formula for ROI is:</p>
<p style="text-align:center;color:#a5a50c;"><span style="border-bottom:1px solid #a5a50c;">RETURN - COST OF PROJECT</span><br>COST OF PROJECT</p>
<p>Your numbers from the previous sections have gone into the table below to calculate your expected ROI from this project.. You can go back to previous sections to change any variables and see how they impact the ROI. When you are satisfied with the results, you can print or save your work.</p>

<hr>

<h2>Return on Investment</h2>

<div class="row">
  <div class="col-md-6">
    <label>Total Possible Savings</label>
  </div>
  <div class="col-md-4 col-md-offset-2">
    <p class="result" id="roi-possible-savings">$</p>
  </div>
</div>
<hr class="dotted">

<div class="row">
  <div class="col-md-6">
    <label>Total Investment</label>
  </div>
  <div class="col-md-4 col-md-offset-2">
    <p class="result" id="roi-investment">$</p>
  </div>
</div>
<hr class="dotted">

<label>True Return</label>
<p class="help-text"></p>
<div class="row">
  <div class="col-md-9">
    <ul class="input-row row">
      <li class="col-xs-4">
        <input type="text" class="form-control" id="true-return-possible-savings" readonly>
        <label>Total Possible Savings</label>
      </li>
      <li><span>&nbsp;&mdash;&nbsp;</span></li>
      <li class="col-xs-4">
        <input type="text" class="form-control" id="true-return-implementation-cost" readonly>
        <label>Total Investment (Cost)</label>
      </li>
      <li><span style="padding:5px;">=</span></li>
    </ul>
  </div>
  <div class="col-md-3">
    <p class="result" id="roi-true-return">$</p>
  </div>
</div>
<hr class="dotted">

<div class="row">
  <div class="col-md-9 col-xs-8">
    <p class="subtotal-description">Total True Return</p>
  </div>
  <div class="col-md-3 col-xs-4">
    <p class="subtotal" id="roi-true-return-again">$</p>
  </div>
</div>
<hr class="dotted">

<label>Return to Investment Ratio</label>
<p class="help-text"></p>
<div class="row">
  <div class="col-md-9">
    <ul class="input-row row">
      <li class="col-xs-4">
        <input type="text" class="form-control" id="investment-ratio-true-return" readonly>
      </li>
      <li><span>&nbsp;&divide;&nbsp;</span></li>
      <li class="col-xs-4">
        <input type="text" class="form-control" id="investment-ratio-implementation-cost" readonly>
      </li>
    </ul>
  </div>
  <div class="col-md-3">
    <p class="result" id="roi-ratio"></p>
  </div>
</div>
<hr class="dotted">

<div class="row">
  <div class="col-md-9 col-xs-8">
    <p class="subtotal-description">Return to Investment Ratio</p>
  </div>
  <div class="col-md-3 col-xs-4">
    <p class="subtotal" id="roi-ratio-again">$</p>
  </div>
</div>
<hr class="dotted">


<div id="roi-container">
  <h3>Total Return on Investment</h3>
  <p id="roi" style="font-size:33px;"></p>
</div>

<div id="roi-download-container" class="text-center">
  <p>You've successfully calculated your total return on investment &mdash; now save the results.</p>
  <div class="row">
    <div class="col-sm-6 text-center">
      <a href="#" class="btn"><i class="glyphicon glyphicon-download-alt"></i> Download This Page</a>
    </div>
    <div class="col-sm-6 text-center">
      <a href="#" class="btn"><i class="glyphicon glyphicon-download-alt"></i> Download Whole Report</a>
    </div>
  </div>
  <div style="clear:both;"></div>
</div>

<p>Want to learn more about manufacturing certifications and building community college partnerships? Visit <a href="http://www.themanufacturinginstitute.org/Skills-Certification/Skills-Certification.aspx">The Manufacturing Institute</a>.</p>
<?php include('footer.php');

<?php
$activePage = 'business-impact';
$previousPage = 'cost-hire.php';
include('header.php'); ?>
<h1>Interaction Rules</h1>
<p><strong>DIRECTIONS:</strong> Use the numbers and formulas provided to calculate business impact. Select company specific or industry average.</p>

<h2>Your Company/Business Unit</h2>
<div class="row">
  <div class="col-md-4">
    <label>Annual Revenue</label>
  </div>
  <div class="col-md-4 col-md-offset-4">
    <div class="input-group">
      <div class="input-group-addon">$</div>
      <input type="number" value="12000.12" class="form-control">
    </div>
  </div>
</div>

<hr>

<h2>Overtime Costs</h2>
<label>Average Weekly Overtime Per Employee</label>
<p class="help-text">Lorem ipsum dolor sit amet</p>
<div class="row">
  <div class="col-md-9">
    <ul class="input-row row">
      <li class="col-xs-3"><input type="number" class="form-control" placeholder="4"><label>Avg OT hours/week</label></li>
      <li><span>X</span></li>
      <li class="col-xs-4">
        <div class="input-group">
          <div class="input-group-addon">$</div>
          <input type="number" class="form-control" placeholder="30">
        </div>
        <label>Wages (1.5x) <i class="glyphicon glyphicon-question-sign" data-toggle="tooltip" data-placement="bottom" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis gravida urna, consequat rho. cus nibh."></i></label>
      </li>
      <li><span>X</span></li>
      <li class="col-xs-3"><input type="number" class="form-control" placeholder="50"><label>Employees</label></li>
      <li><span>=</span></li>
    </ul>
  </div>
  <div class="col-md-3">
    <p class="result">$312,000</p>
  </div>
</div>

<hr class="dotted">

<div class="row">
  <div class="col-md-9">
    <p class="subtotal-description">10% Premium on Weekly Overtime</p>
  </div>
  <div class="col-md-3">
    <p class="subtotal">$31,200</p>
  </div>
</div>

<hr>

<p class="text-center total-description">Total Business Impact</p>
<p class="text-center total">$117,600</p>
<?php include('footer.php');

<?php
$activePage = 'business-impact';
$previousPage = 'cost-hire.php';
$nextPage = 'possible-savings.php';
include('header.php'); ?>
<h1>Business Impact</h1>
<p>Research indicates that unfilled technical positions have a significant impact on overtime, cycle time, and downtime. According to business studies, on average, these amount to 11% of earnings for a typical production facility.</p>
<p><strong>DIRECTIONS:</strong> Use the numbers and formulas provided to calculate business impact. Enter figures for your company/business unit, or use the prepopulated numbers that represent the national industry average.</p>


<h2>Your Company/Business Unit</h2>
<div class="row">
  <div class="col-md-4">
    <label>Annual Revenue</label>
  </div>
  <div class="col-md-4 col-md-offset-4">
    <div class="input-group">
      <div class="input-group-addon">$</div>
      <input name="annual-revenue" type="number" value="<?php echo getValue('annual-revenue', 12000000); ?>" class="form-control">
    </div>
  </div>
</div>

<hr>

<h2>Overtime Costs</h2>
<label>Average Weekly Overtime Per Employee</label>
<p class="help-text">Estimate the average weekly overtime for employees in production, maintenance, or skilled trades</p>
<div class="row">
  <div class="col-md-9">
    <ul class="input-row row">
      <li class="col-xs-3"><input name="ot-hours" type="number" class="form-control" placeholder="4" min="0" step="1" value="<?php echo getValue('ot-hours', 4); ?>"><label>Avg OT hours/week</label></li>
      <li><span>X</span></li>
      <li class="col-xs-4">
        <div class="input-group">
          <div class="input-group-addon">$</div>
          <input type="number" class="form-control" placeholder="30" value="<?php echo getValue('average-wage-of-open-positions', 20)*1.5; ?>" readonly>
        </div>
        <label>Wages (1.5x)</label>
      </li>
      <li><span>X</span></li>
      <li class="col-xs-3"><input type="number" class="form-control" value="<?php echo getValue('number-of-technical-employees', 50); ?>" readonly><label>Employees</label></li>
      <li><span>=</span></li>
    </ul>
  </div>
  <div class="col-md-3">
    <p class="result" id="overtime-total">$</p>
  </div>
</div>

<hr class="dotted">

<div class="row">
  <div class="col-md-9">
    <p class="subtotal-description">10% Premium on Weekly Overtime</p>
    <p class="help-text">Research has shown a 10% increase in overtime due to the skills gap</p>
  </div>
  <div class="col-md-3">
    <p class="subtotal" id="overtime-premium">$</p>
  </div>
</div>

<hr class="dotted">

<h2>Cost of Open Positions</h2>

<div class="row">
  <div class="col-md-9">
    <p class="subtotal-description">10% Increase in Downtime</p>
    <p class="help-text">Research has shown a 10% increase in downtime due to the skills gap.  Using the Overall Equipment Effectiveness calculation of Availability x Performance x Quality, a 10% increase in downtime leads to a 0.07% decrease in revenue.</p>
  </div>
  <div class="col-md-3">
    <p class="subtotal" id="downtime-increase">$</p>
  </div>
</div>
<hr class="dotted">

<div class="row">
  <div class="col-md-9">
    <p class="subtotal-description">8% Increase in Cycle Time</p>
    <p class="help-text">Research has shown an 8% increase in cycletime due to the skills gap.  Using the Overall Equipment Effectiveness calculation of Availability x Performance x Quality, an 8% increase in cycletime leads to a 0.6% decrease in revenue.</p>
  </div>
  <div class="col-md-3">
    <p class="subtotal" id="cycle-time-increase">$</p>
  </div>
</div>

<hr>

<p class="text-center total-description">Total Business Impact</p>
<p class="text-center total" id="business-impact-total">$117,600</p>

<?php include('footer.php');

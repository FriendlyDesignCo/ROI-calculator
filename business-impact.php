<?php
$activePage = 'business-impact';
$previousPage = 'cost-hire.php';
$nextPage = 'possible-savings.php';
include_once('header.php'); ?>
<h1>Business Impact</h1>
<p>Research indicates that unfilled technical positions have a significant impact on overtime, cycle time, and downtime. According to business studies, on average, these amount to 11% of earnings for a typical production facility.</p>
<p>Since most companies calculate overtime, we will start with that expense and its impact on ROI.</p>

<hr>

<h2>Overtime Costs</h2>
<label>Average Weekly Overtime Per Employee</label>
<p class="help-text">Estimate the average weekly overtime for employees in production, maintenance, or skilled trades</p>
<div class="row">
  <div class="col-md-9">
    <ul class="input-row row">
      <li class="col-xs-3"><input name="ot-hours" type="number" class="form-control" placeholder="4" min="0" step="1" value="<?php echo getValue('ot-hours', 4); ?>"><label>Avg OT hours/week</label></li>
      <li><span style="padding:5px;">X</span></li>
      <li class="col-xs-4">
        <div class="input-group">
          <div class="input-group-addon">$</div>
          <input type="number" class="form-control" placeholder="30" value="<?php echo getValue('average-wage-of-open-positions', 20)*1.5; ?>" readonly>
        </div>
        <label>Wages (1.5x)</label>
      </li>
      <li><span style="padding:5px;">X</span></li>
      <li class="col-xs-3"><input type="number" class="form-control" value="<?php echo getValue('number-of-technical-employees', 50); ?>" readonly><label>Employees</label></li>
      <li><span style="padding:5px;">=</span></li>
    </ul>
  </div>
  <div class="col-md-3">
    <p class="result" id="overtime-total">$</p>
  </div>
</div>

<hr class="dotted">

<div class="row">
  <div class="col-md-9">
    <label>Premium on Weekly Overtime</label>
    <p class="help-text">Research has shown a 10% increase in overtime due to the skills gap. You can use that estimate, or enter in a different figure for your company’s overtime premium.</p>
  </div>
  <div class="col-md-3">
    <div class="input-group">
      <input name="weekly-overtime-premium" type="number" class="form-control no-right-border" placeholder="10" value="<?php echo getValue('weekly-overtime-premium', 10); ?>" min="0" step="1" max="100">
      <div class="input-group-addon">%</div>
    </div>
  </div>
</div>

<hr>
<p class="text-center total-description">Weekly Overtime Cost</p>
<p class="text-center total" id="overtime-premium">$</p>
<hr>


<h2>Downtime and Cycle Time</h2>
<p>This ROI calculation may be just the tip of the iceberg in the total cost of the skills gap for your business.</p>
<p>Downtime and cycle time are two hidden impacts from lacking the right workers in the right position. Consider the costs when higher setup or programming time reduces your efficiency. Or when a lack of skilled maintenance workers leads to machines going down longer and more frequently.</p>
<p>To get an estimate of the potential impact, start by entering your revenue.</p>

<hr class="dotted">
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
<hr class="dotted">

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
<hr class="dotted">

<div class="row">
  <div class="col-md-9">
    <p class="subtotal-description">Total cost of open positions</p>
  </div>
  <div class="col-md-3">
    <p class="subtotal" id="open-position-cost">$</p>
  </div>
</div>
<hr>



<p class="text-center total-description">Total costs of downtime and cycle time</p>
<p class="text-center total" id="business-impact-total">$</p>

<?php if (!isset($print)) include('footer.php');

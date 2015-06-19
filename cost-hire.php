<?php
$activePage = 'cost-hire';
$previousPage = 'index.php';
$nextPage = 'business-impact.php';
include('header.php');
?>

<h1>Cost of an Open Position</h1>
<p><strong>DIRECTIONS:</strong> Fill in the blanks below and on the following pages for your company or business unit.</p>
<p>&nbsp;</p>

<hr>

<h2>Your Company/Business Unit</h2>
<div class="row">
  <div class="col-md-9 col-xs-8">
    <label>Number of Technical Employees <i class="glyphicon glyphicon-question-sign" data-toggle="tooltip" data-placement="bottom" title="Hourly employees in production, maintenance, or skilled trades"></i></label>
  </div>
  <div class="col-md-3 col-xs-4">
    <input name="number-of-technical-employees" type="number" step="1" min="0" class="form-control" value="<?php echo getValue('number-of-technical-employees', 50); ?>" required>
  </div>
</div>
<hr class="dotted">

<div class="row">
  <div class="col-md-9 col-xs-8">
    <label>Number of Hires Per 12 Month Period</label>
  </div>
  <div class="col-md-3 col-xs-4">
    <input name="number-of-hires-per-year" type="number" step="1" min="1" class="form-control" value="<?php echo getValue('number-of-hires-per-year', 5); ?>" required>
  </div>
</div>
<hr class="dotted">

<div class="row">
  <div class="col-md-9 col-xs-8">
    <label>Average Wage of Open Positions (Fully Loaded) <i class="glyphicon glyphicon-question-sign" data-toggle="tooltip" data-placement="bottom" title="Include hourly wage and benefits"></i></label>
  </div>
  <div class="col-md-3 col-xs-4">
    <div class="input-group">
      <div class="input-group-addon">$</div>
      <input name="average-wage-of-open-positions" type="number" step="1" min="0" class="form-control no-right-border" value="<?php echo getValue('average-wage-of-open-positions', 20); ?>" required>
      <div class="input-group-addon">/hr</div>
    </div>
  </div>
</div>
<hr>

<h2>Recruiting and Hiring Costs</h2>
<label>Advertising</label>
<p class="help-text">Combined expenses for online job boards, newspaper ads, etc.</p>
<div class="row">
  <div class="col-md-9">
    <ul class="input-row row">
      <li class="col-xs-3"><input type="number" class="form-control" value="<?php echo getValue('number-of-hires-per-year', 5); ?>" readonly data-clone="number-of-hires-per-year"><label>Vacancies</label></li>
      <li><span>X</span></li>
      <li class="col-xs-4">
        <div class="input-group">
          <div class="input-group-addon">$</div>
          <input name="average-advertising-cost" type="number" class="form-control" placeholder="30" min="0" value="<?php echo getValue('average-advertising-cost', 3500); ?>">
        </div>
        <label>Average Cost</label>
      </li>
      <li><span>=</span></li>
    </ul>
  </div>
  <div class="col-md-3">
    <p class="result" id="advertising-cost">$</p>
  </div>
</div>
<hr class="dotted">

<label>Internal meetings to screen and select candidates</label>
<p class="help-text">Staff time to interview all considered candidates</p>
<div class="row">
  <div class="col-md-9">
    <ul class="input-row row">
      <li class="col-md-2 col-xs-6"><input name="interview-candidate-count" type="number" min="0" step="1" class="form-control" value="<?php echo getValue('interview-candidate-count', 25); ?>"><label>Candidates</label></li>
      <li class="col-xs-2 col-sm-auto"><span>X</span></li>
      <li class="col-xs-offset-4 hidden-md hidden-lg"></li>
      <li class="col-md-3 col-xs-6">
        <div class="input-group">
          <input name="interview-length" type="number" class="form-control no-right-border" placeholder="1" min="0" step="0.25" value="<?php echo getValue('interview-length', 1); ?>">
          <div class="input-group-addon">hr</div>
        </div>
        <label>Length</label>
      </li>
      <li class="col-xs-2 col-sm-auto"><span>X</span></li>
      <li class="col-xs-offset-4 hidden-sm hidden-md hidden-lg"></li>
      <li class="col-md-2"><input name="interview-participants" type="number" class="form-control" placeholder="3" min="0" value="<?php echo getValue('interview-participants', 3); ?>"><label>Participants</label></li>
      <li><span>X</span></li>
      <li class="col-md-4">
        <div class="input-group">
          <div class="input-group-addon">$</div>
          <input name="management-cost" type="number" class="form-control no-right-border" placeholder="45" min="0" step="1" value="<?php echo getValue('management-cost', 45); ?>">
          <div class="input-group-addon">/hr</div>
        </div>
        <label>Management cost</label>
      </li>
      <li><span>=</span></li>
    </ul>
  </div>
  <div class="col-md-3">
    <p class="result" id="interview-cost">$</p>
  </div>
</div>
<hr class="dotted">

<label>Internal meetings to screen and select candidates</label>
<p class="help-text">Staff time spent reviewing and considering candidates</p>
<div class="row">
  <div class="col-md-9">
    <ul class="input-row row">
      <li class="col-md-2 col-xs-6"><input name="internal-interview-count" type="number" class="form-control" min="0" value="<?php echo getValue('internal-interview-count', 10); ?>"><label>Meetings</label></li>
      <li class="col-xs-2 col-sm-auto"><span>X</span></li>
      <li class="col-xs-offset-4 hidden-md hidden-lg"></li>
      <li class="col-md-3 col-xs-6">
        <div class="input-group">
          <input name="internal-interview-length" type="number" class="form-control no-right-border" placeholder="1" min="0" step="0.25" value="<?php echo getValue('internal-interview-length', 1.5); ?>">
          <div class="input-group-addon">hr</div>
        </div>
        <label>Length</label>
      </li>
      <li class="col-xs-2 col-sm-auto"><span>X</span></li>
      <li class="col-xs-offset-4 hidden-sm hidden-md hidden-lg"></li>
      <li class="col-md-2"><input name="internal-participants" type="number" class="form-control" placeholder="3" min="0" value="<?php echo getValue('internal-participants', 3); ?>"><label>Participants</label></li>
      <li><span>X</span></li>
      <li class="col-md-4">
        <div class="input-group">
          <div class="input-group-addon">$</div>
          <input name="internal-management-cost" type="number" class="form-control no-right-border" placeholder="45" min="0" step="1" value="<?php echo getValue('internal-management-cost', 45); ?>">
          <div class="input-group-addon">/hr</div>
        </div>
        <label>Management cost</label>
      </li>
      <li><span>=</span></li>
    </ul>
  </div>
  <div class="col-md-3">
    <p class="result" id="internal-meeting-cost">$</p>
  </div>
</div>
<hr class="dotted">

<div class="row">
  <div class="col-md-9 col-xs-8">
    <label>Annual cost for preemployment testing <i class="glyphicon glyphicon-question-sign" data-toggle="tooltip" data-placement="bottom" title="Actual costs of any pre-employment testing done by company"></i></label>
  </div>
  <div class="col-md-3 col-xs-4">
    <div class="input-group">
      <div class="input-group-addon">$</div>
      <input name="preemployment-testing" type="number" class="form-control" placeholder="10200" step="1" value="<?php echo getValue('preemployment-testing', 10200); ?>">
    </div>
  </div>
</div>
<hr class="dotted">

<label>Other Internal HR Hours associated with these hires (screening applicants, setting up interviews, paperwork)</label>
<p class="help-text">Staff time required for other HR procedures</p>
<div class="row">
  <div class="col-md-9">
    <ul class="input-row row">
      <li class="col-xs-2"><input name="hr-candidates" type="number" class="form-control" min="0" step="1" placeholder="5" value="<?php echo getValue('hr-candidates', 5); ?>"><label>Candidates</label></li>
      <li><span>X</span></li>
      <li class="col-xs-3">
        <div class="input-group">
          <input name="hr-time" type="number" class="form-control no-right-border" placeholder="1" step="0.25" value="<?php echo getValue('hr-time', 1); ?>">
          <div class="input-group-addon">hr</div>
        </div>
        <label>Time per Candidate</label>
      </li>
      <li><span>X</span></li>
      <li class="col-xs-4">
        <div class="input-group">
          <div class="input-group-addon">$</div>
          <input name="hr-hourly" type="number" class="form-control no-right-border" placeholder="25" step="1" value="<?php echo getValue('hr-hourly', 25); ?>">
          <div class="input-group-addon">/hr</div>
        </div>
        <label>Cost per hour</label>
      </li>
      <li><span>=</span></li>
    </ul>
  </div>
  <div class="col-md-3">
    <p class="result" id="hr-cost">$</p>
  </div>
</div>
<hr class="dotted">

<div class="row">
  <div class="col-md-9 col-xs-8">
    <p class="subtotal-description">Total Recruiting and Hiring Cost<p>
  </div>
  <div class="col-md-3 col-xs-4">
    <p class="subtotal" id="recruiting-and-hiring-cost">$</p>
  </div>
</div>
<p>&nbsp;</p>
<div class="row">
  <div class="col-md-9 col-xs-8">
    <label>Divided by number of hires</label>
  </div>
  <div class="col-md-3 col-xs-4">
    <input type="number" class="form-control" value="<?php echo getValue('number-of-hires-per-year', 5); ?>" readonly data-clone="number-of-hires-per-year">
  </div>
</div>
<p>&nbsp;</p>
<div class="row">
  <div class="col-md-9 col-xs-8">
    <p class="subtotal-description">Recruiting and Hiring Cost Per Hire<p>
  </div>
  <div class="col-md-3 col-xs-4">
    <p class="subtotal" id="recruiting-and-hiring-per-hire">$</p>
  </div>
</div>
<hr>

<p>&nbsp;</p>
<h2>Staffing/Placement Firm Costs</h2>

<label>Staffing/Placement Firm Costs</label>
<p class="help-text">Premium paid to a search firm to identify and select candidates, or to a temporary agency (if not applicable, enter zero jobs).</p>
<div class="row">
  <div class="col-md-9">
    <ul class="input-row row">
      <li class="col-xs-3"><input name="filled-by-staffing-firm" type="number" class="form-control" placeholder="5" min="0" step="1" value="<?php echo getValue('filled-by-staffing-firm', 5); ?>"><label>Jobs filled by staffing firm</label></li>
      <li><span>X</span></li>
      <li class="col-xs-4">
        <div class="input-group">
          <div class="input-group-addon">$</div>
          <input type="number" class="form-control no-right-border" value="<?php echo getValue('average-wage-of-open-positions', 20); ?>" step="1" data-clone="average-wage-of-open-positions" readonly>
          <div class="input-group-addon">/hr</div>
        </div>
        <label>Hourly wage</label>
      </li>
      <li><span>X</span></li>
      <li class="col-xs-3">
        <div class="input-group">
          <input name="staffing-firm-percentage" type="number" class="form-control no-right-border" value="<?php echo getValue('staffing-firm-percentage', 25); ?>" placeholder="25" step="0.25">
          <div class="input-group-addon">%</div>
        </div>
        <label>Fee</label>
      </li>
      <li><span>=</span></li>
    </ul>
  </div>
  <div class="col-md-3">
    <p class="result" id="staffing-firm-cost">$</p>
  </div>
</div>
<hr class="dotted">

<div class="row">
  <div class="col-md-9 col-xs-8">
    <p class="subtotal-description">Staffing Firm Cost Per Hire<p>
  </div>
  <div class="col-md-3 col-xs-4">
    <p class="subtotal" id="staffing-firm-total">$</p>
  </div>
</div>
<hr>

<h2>On the Job Training (OJT) Costs</h2>
<label>Employee <abbr title="On the Job Training" data-toggle="tooltip">OJT</abbr> Costs</label>
<p class="help-text">Amount of time a new employee spends on in-house training or non-productive position</p>
<div class="row">
  <div class="col-md-9 col-xs-9">
    <ul class="input-row row">
      <li class="col-md-3 col-xs-6"><input name="ojt-hours" type="number" class="form-control" placeholder="300" min="0" step="1" value="<?php echo getValue('ojt-hours', 300); ?>"><label>OJT hours</label></li>
      <li><span>X</span></li>
      <li class="col-md-4 col-xs-5">
        <div class="input-group">
          <div class="input-group-addon">$</div>
          <input type="number" class="form-control no-right-border" placeholder="20" step="1" value="<?php echo getValue('average-wage-of-open-positions', 20); ?>" data-clone="average-wage-of-open-positions" readonly>
          <div class="input-group-addon">/hr</div>
        </div>
        <label>Loaded salary</label>
      </li>
      <li><span>=</span></li>
    </ul>
  </div>
  <div class="col-md-3">
    <p class="result" id="employee-ojt-total">$</p>
  </div>
</div>
<hr class="dotted">

<label>Supervisor <abbr title="On the Job Training" data-toggle="tooltip">OJT</abbr> Costs Per Hire</label>
<p class="help-text">Amount of time staff spends training or supervising new hires (time spent away from actual production)</p>
<div class="row">
  <div class="col-md-9">
    <ul class="input-row row">
      <li class="col-xs-3"><input name="staff-ojt-hours" type="number" class="form-control" min="0" step="1" placeholder="150" value="<?php echo getValue('staff-ojt-hours', 150); ?>"><label>OJT hours</label></li>
      <li><span>X</span></li>
      <li class="col-xs-4">
        <div class="input-group">
          <div class="input-group-addon">$</div>
          <input name="staff-ojt-wage" type="number" class="form-control no-right-border" placeholder="36" step="1" min="0" value="<?php echo getValue('staff-ojt-wage', 36); ?>">
          <div class="input-group-addon">/hr</div>
        </div>
        <label>Loaded salary</label>
      </li>
      <li><span>=</span></li>
    </ul>
  </div>
  <div class="col-md-3">
    <p class="result" id="staff-ojt-total">$</p>
  </div>
</div>
<hr class="dotted">

<div class="row">
  <div class="col-md-9">
    <label>Cost of training equipment, production equipment, or consumables used for training instead of production</label>
  </div>
  <div class="col-md-3">
    <div class="input-group">
      <div class="input-group-addon">$</div>
      <input name="ojt-consumables" type="number" class="form-control" placeholder="2000" step="1" value="<?php echo getValue('ojt-consumables', 2000); ?>">
    </div>
  </div>
</div>
<hr class="dotted">

<div class="row">
  <div class="col-md-9">
    <p class="subtotal-description">Total On the Job Training Cost Per Hire<p>
  </div>
  <div class="col-md-3">
    <p class="subtotal" id="ojt-total">$</p>
  </div>
</div>
<hr>

<p class="text-center total-description">Total Cost Per Hire</p>
<p class="text-center total" id="cost-per-hire-total">$</p>

<?php include('footer.php');

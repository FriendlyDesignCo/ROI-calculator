<?php
$activePage = 'cost-to-implement';
$previousPage = 'possible-savings.php';
$nextPage = 'roi.php';
include('header.php'); ?>

<h1>Company Investments in Industry Certifications and Workforce Partnerships</h1>
<p>Of course, partnerships with a community college do require an investment. Most companies find the biggest costs are staff time to establish a partnership and manage candidate flows.</p>
<p><strong>DIRECTIONS:</strong> Use the numbers and formulas provided to calculate business impact. Enter figures you expect for your company, or use the prepopulated numbers that other companies have reported spending.</p>

<hr>

<h2>Project Planning Activities</h2>
<p>Typically, the company's initial investment in setting up workforce certification includes time spent by the line management, supervisors, and HR Manager to plan and implement the process.</p>

<label>Planner Costs</label>
<div class="row">
  <div class="col-md-9 col-xs-8">
    <ul class="input-row row">
      <li class="col-xs-4">
        <div class="input-group">
          <div class="input-group-addon">$</div>
          <input name="planner-salary" type="number" step="1" min="0" class="form-control no-right-border" value="<?php echo getValue('planner-salary', 60); ?>" required>
          <div class="input-group-addon">/hr</div>
        </div>
        <label>Planner Salary</label>
      </li>
      <li><span>X</span></li>
      <li class="col-xs-4">
        <div class="input-group">
          <input name="planner-hours" type="number" class="form-control no-right-border" placeholder="1" min="0" step="1" value="<?php echo getValue('planner-hours', 150); ?>">
          <div class="input-group-addon">hr</div>
        </div>
        <label>Hours</label>
      </li>
      <li><span>=</span></li>
    </ul>
  </div>
  <div class="col-md-3">
    <p class="result" id="planner-cost">$</p>
  </div>
</div>

<hr>

<h2>Project Management</h2>
<p>In successful projects where certified workers are being prepared, the company identifies a point person to serve as manager of the project. This person will serve as the point of contact with the company for all aspects of the project.</p>

<label>Project Manager Costs</label>
<div class="row">
  <div class="col-md-9 col-xs-8">
    <ul class="input-row row">
      <li class="col-xs-4">
        <div class="input-group">
          <div class="input-group-addon">$</div>
          <input name="pm-salary" type="number" step="1" min="0" class="form-control no-right-border" value="<?php echo getValue('pm-salary', 45); ?>" required>
          <div class="input-group-addon">/hr</div>
        </div>
        <label>Project Manager Salary</label>
      </li>
      <li><span>X</span></li>
      <li class="col-xs-4">
        <div class="input-group">
          <input name="pm-hours" type="number" class="form-control no-right-border" placeholder="1" min="0" step="1" value="<?php echo getValue('pm-hours', 50); ?>">
          <div class="input-group-addon">hr</div>
        </div>
        <label>Hours</label>
      </li>
      <li><span>=</span></li>
    </ul>
  </div>
  <div class="col-md-3">
    <p class="result" id="pm-cost">$</p>
  </div>
</div>

<hr>

<h2>Workforce Supervision</h2>
<label>Costs to Oversee Interns/Trainees</label>
<div class="row">
  <div class="col-md-9 col-xs-8">
    <ul class="input-row row">
      <li class="col-xs-4">
        <div class="input-group">
          <div class="input-group-addon">$</div>
          <input name="supervisor-salary" type="number" step="1" min="0" class="form-control no-right-border" value="<?php echo getValue('supervisor-salary', 36); ?>" required>
          <div class="input-group-addon">/hr</div>
        </div>
        <label>Supervisor Salary</label>
      </li>
      <li><span>X</span></li>
      <li class="col-xs-4">
        <div class="input-group">
          <input name="supervisor-hours" type="number" class="form-control no-right-border" placeholder="1" min="0" step="1" value="<?php echo getValue('supervisor-hours', 60); ?>">
          <div class="input-group-addon">hr</div>
        </div>
        <label>Hours</label>
      </li>
      <li><span>=</span></li>
    </ul>
  </div>
  <div class="col-md-3">
    <p class="result" id="supervisor-cost">$</p>
  </div>
</div>
<hr>

<p class="text-center total-description">Total Implementation Cost</p>
<p class="text-center total" id="total-implementation-cost">$</p>

<?php include('footer.php');

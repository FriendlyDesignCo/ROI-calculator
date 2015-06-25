<?php
$activePage = 'possible-savings';
$previousPage = 'business-impact.php';
$nextPage = 'cost-to-implement.php';
include('header.php'); ?>
<h1>Possible Savings</h1>

<hr>

<h2>Reduction in Turnover</h2>
<p>Consider an additional perk companies frequently realize from hiring from a better candidate pool: These employees are a better fit for the job, and they typically stay longer in the position. This benefit is actually realized the following year because less employees need to be hired and trained. Companies report that employee retention may <strong>improve by 50% or more</strong> when they hire candidates with an industry certification that matches their needs.</p>
<p><strong>DIRECTIONS:</strong> Enter a percent reduction you expect to achieve in turnover for your new, better-qualified employees.</p>

<div class="row">
  <div class="col-md-6">
    <label>Reduction in employee turnover</label>
  </div>
  <div class="col-md-4 col-md-offset-2">
    <div class="input-group">
      <input name="turnover-percent-reduction" type="number" min="0" step="1" max="100" value="<?php echo getValue('turnover-percent-reduction', 50); ?>" class="form-control no-right-border">
      <div class="input-group-addon">%</div>
    </div>
  </div>
</div>
<hr class="dotted">

<div class="row">
  <div class="col-md-6">
    <label>Reduction in hiring costs</label>
  </div>
  <div class="col-md-4 col-md-offset-2">
    <p class="result" id="reduction-hiring-costs">$</p>
  </div>
</div>
<hr class="dotted">

<div class="row">
  <div class="col-md-6">
    <label>Reduction in OJT costs</label>
  </div>
  <div class="col-md-4 col-md-offset-2">
    <p class="result" id="reduction-ojt-turnover">$</p>
  </div>
</div>
<hr>

<div class="row">
  <div class="col-md-6">
    <label>Total savings due to reduction turnover</label>
  </div>
  <div class="col-md-4 col-md-offset-2">
    <p class="subtotal" id="reduction-turnover">$</p>
  </div>
</div>

<hr>

<h2>Cost Savings Resulting from an Education Partnership</h2>
<p>Hiring workers is expensive! Building a pipeline of workers with the right skills can dramatically reduce your costs.</p>
<p>By partnering with a community college, you can lay out your minimum and optimal competencies and help establish a recruiting relationship. One of the most important steps you can take is to identify manufacturing certifications that validate the skills needed on the job.</p>
<p>How much difference can this make? Businesses that have partnered with a community college have estimated it can <strong>reduce by 50% or more</strong> the number of candidates they have to interview.</p>
<p><strong>DIRECTIONS:</strong> Enter a percent reduction you expect to achieve from a partnership that helps you build a pipeline of workers with the right skills. (If you’re not sure, you may leave the figure at 50% to get an idea of the possible cost savings.)</p>

<div class="row">
  <div class="col-md-6">
    <label>Reduction in recruiting expenses</label>
  </div>
  <div class="col-md-4 col-md-offset-2">
    <div class="input-group">
      <input name="recruiting-percent-reduction" type="number" min="0" step="1" max="100" value="<?php echo getValue('recruiting-percent-reduction', 50); ?>" class="form-control no-right-border">
      <div class="input-group-addon">%</div>
    </div>
  </div>
</div>
<hr class="dotted">

<div class="row">
  <div class="col-md-6">
    <label>Reduction in recruitment advertising</label>
  </div>
  <div class="col-md-4 col-md-offset-2">
    <p class="result" id="reduction-recruitment-advertising">$</p>
  </div>
</div>
<hr class="dotted">

<div class="row">
  <div class="col-md-6">
    <label>Reduction in interviews required</label>
  </div>
  <div class="col-md-4 col-md-offset-2">
    <p class="result" id="reduction-interviews">$</p>
  </div>
</div>
<hr class="dotted">

<div class="row">
  <div class="col-md-6">
    <label>Reduction in meetings required</label>
  </div>
  <div class="col-md-4 col-md-offset-2">
    <p class="result" id="reduction-meetings">$</p>
  </div>
</div>
<hr class="dotted">

<div class="row">
  <div class="col-md-6">
    <label>Reduction in preemployment testing</label>
  </div>
  <div class="col-md-4 col-md-offset-2">
    <p class="result" id="reduction-preemployment-testing">$</p>
  </div>
</div>
<hr class="dotted">

<div class="row">
  <div class="col-md-6">
    <label>Reduction in candidate screening</label>
  </div>
  <div class="col-md-4 col-md-offset-2">
    <p class="result" id="reduction-screening">$</p>
  </div>
</div>
<hr>

<div class="row">
  <div class="col-md-6">
    <label>Total reduction in Hiring Cost (company-performed)</label>
  </div>
  <div class="col-md-4 col-md-offset-2">
    <p class="subtotal" id="reduction-company">$</p>
  </div>
</div>

<hr>

<h2>Reduction in Hiring Cost (Staffing or Placement Agency)</h2>
<p>If you rely on temporary/placement agencies for some or all of your technical hires, that’s another potential area where you can save. Some businesses have completely eliminated temporary agencies, and the fees they pay, when they build a robust community college partnership.</p>
<p><strong>DIRECTIONS:</strong> Enter a percent reduction you expect to achieve in your staffing/placement fees. (If you didn’t enter any staffing agency fees before, you can skip this step.)</p>

<div class="row">
  <div class="col-md-8">
    <label>Reduction/Elimination of Staffing Agency Fees</label>
  </div>
  <div class="col-md-4">
    <div class="input-group">
      <input name="staffing-percent-reduction" type="number" min="0" step="1" max="100" value="<?php echo getValue('staffing-percent-reduction', 100); ?>" class="form-control no-right-border">
      <div class="input-group-addon">%</div>
    </div>
  </div>
</div>
<hr>

<div class="row">
  <div class="col-md-6">
    <label>Reduction in staffing/placement agency fees</label>
  </div>
  <div class="col-md-4 col-md-offset-2">
    <p class="subtotal" id="reduction-staffing">$</p>
  </div>
</div>

<hr>

<h2>Reduction in OJT Cost Per Employee</h2>
<p>Frequently, better qualified candidates require less on-the-job training to come up to speed once hired. Many companies have reported a 33% reduction in OJT for employees that already possess an industry certification.</p>
<p><strong>DIRECTIONS:</strong> Enter a percent reduction you expect to achieve in the training time required for a new employee.</p>

<div class="row">
  <div class="col-md-8">
    <label>Reduction/Elimination of Employee Training</label>
  </div>
  <div class="col-md-4">
    <div class="input-group">
      <input name="ojt-percent-reduction" type="number" min="0" step="1" max="100" value="<?php echo getValue('ojt-percent-reduction', 33); ?>" class="form-control no-right-border">
      <div class="input-group-addon">%</div>
    </div>
  </div>
</div>
<hr>

<div class="row">
  <div class="col-md-6">
    <label>Savings due to reduction in employee OJT time</label>
  </div>
  <div class="col-md-4 col-md-offset-2">
    <p class="result" id="reduction-employee-ojt">$</p>
  </div>
</div>
<hr class="dotted">

<div class="row">
  <div class="col-md-6">
    <label>Savings due to reduction in supervisory OJT time</label>
  </div>
  <div class="col-md-4 col-md-offset-2">
    <p class="result" id="reduction-supervisor-ojt">$</p>
  </div>
</div>
<hr>

<div class="row">
  <div class="col-md-6">
    <label>Reduction in OJT costs</label>
  </div>
  <div class="col-md-4 col-md-offset-2">
    <p class="subtotal" id="reduction-ojt">$</p>
  </div>
</div>
<hr>

<h2>Reduction in Overtime Cost</h2>
<p>As you saw in the previous section on Business Impact, overtime needed to cover unfilled positions represents a significant expense. Having a pipeline of qualified candidates is a source of savings that can positively benefit your bottom line.</p>

<div class="row">
  <div class="col-md-6">
    <label>Savings due to reduction in overtime</label>
  </div>
  <div class="col-md-4 col-md-offset-2">
    <p class="subtotal" id="reduction-overtime-impact">$</p>
  </div>
</div>
<br><br><br>

<p class="text-center total-description">Total Possible Savings</p>
<p class="text-center total" id="total-possible-savings">$</p>

<?php include('footer.php');

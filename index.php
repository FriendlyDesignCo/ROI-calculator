<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ROI Calculator</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-fixed-top">
      <div class="container-fluid">
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
            <li><a href="#">Cost-Hire<div class="progress-dot complete"><span></span></div></a></li>
            <li class="active"><a href="#">Business Impact<div class="progress-dot complete"><span></span></div></a></li>
            <li><a href="#">Cost to Implement<div class="progress-dot"><span></span></div></a></li>
            <li><a href="#">Possible Savings<div class="progress-dot"><span></span></div></a></li>
            <li><a href="#">ROI<div class="progress-dot"><span></span></div></a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container" id="content">
      <div class="row">
        <div class="col-md-8">
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

        </div>

        <div class="col-md-4" id="roi-sidebar">
          <?php include('roi-sidebar.php'); ?>
        </div>
      </div>
    </div>

    <div class="container-fluid wizard-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-3 col-xs-4">
                <a href="#" class="btn btn-primary btn-block btn-lg">Previous</a>
              </div>
              <div class="hidden-xs col-md-6 text-center">
                <p class="download-text"><strong>Download Results PDF</strong></p>
                <p class="download-links">
                  <a href="#"><i class="glyphicon glyphicon-download-alt"></i> <span>This Page</span></a>
                  <a href="#"><i class="glyphicon glyphicon-download-alt"></i> <span>Whole Page</span></a>
                </p>
              </div>
              <div class="col-xs-4 col-xs-offset-4 col-md-3 col-md-offset-0">
                <a href="#" class="btn btn-primary btn-block btn-lg">Next</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="col-xs-4 col-md-2">
          <a href="#"><img src="images/footer_logo.png" title="Manufacturing Institute"></a>
        </div>
        <div class="col-xs-4 col-xs-offset-4 col-md-3 col-md-offset-7 text-right">
          <a href="#">Sources</a>
        </div>
      </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $(function(){
        $(function () {
          $('[data-toggle="tooltip"]').tooltip();
        });

        var expandContainerToFit = function() {
          if ($("footer").offset().top+$("footer").height() < $(window).height()) {
            $("#content").height($("#content").height() + ($(window).height()-($("footer").offset().top+$("footer").height())));
          }
        };
        expandContainerToFit();
        $(window).resize(expandContainerToFit);
      });
    </script>
  </body>
</html>

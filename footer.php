
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

    <footer class="hidden-print">
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

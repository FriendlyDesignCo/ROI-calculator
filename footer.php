          </form>
        </div>

        <div class="col-md-4" id="roi-sidebar">
          <?php if (!isset($hideROISidebar) || !$hideROISidebar): ?>
            <?php include('roi-sidebar.php'); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <?php if (!isset($hideDownloadLinks) || !$hideDownloadLinks): ?>
      <div class="container-fluid wizard-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div class="row">
                <div class="col-md-3 col-xs-4">
                  <a href="<?php if (isset($previousPage)) echo $previousPage; ?>" id="previous-button" class="btn btn-primary btn-block btn-lg">Previous</a>
                </div>
                <div class="hidden-xs col-md-6 text-center">
                  <p class="download-text"><strong>Download Results PDF</strong></p>
                  <p class="download-links">
                    <a href="#"><i class="glyphicon glyphicon-download-alt"></i> <span>This Page</span></a>
                    <a href="#"><i class="glyphicon glyphicon-download-alt"></i> <span>Whole Page</span></a>
                  </p>
                </div>
                <div class="col-xs-4 col-xs-offset-4 col-md-3 col-md-offset-0">
                  <a href="#" id="next-button" class="btn btn-primary btn-block btn-lg">Next</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>

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

        var fixHeader = function() {
          if ($(window).scrollTop() > 100) {
            $("nav").addClass('fixed');
          } else {
            $("nav").removeClass('fixed');
          }
        };
        fixHeader();
        $(window).scroll(fixHeader);

        var expandContainerToFit = function() {
          if ($("footer").offset().top+$("footer").height() < $(window).height()) {
            $("#content").height($("#content").height() + ($(window).height()-($("footer").offset().top+$("footer").height())));
          }
        };
        expandContainerToFit();
        $(window).resize(expandContainerToFit);

        function numberWithCommas(x) {
          return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }
        function moneyFormat(x) {
          return '$' + numberWithCommas(x);
        }

        // Remove duplicate hidden variables
        $("input[type!=hidden]").each(function(){
          $("input[name=" + $(this).attr('name') + "][type=hidden]").remove();
        });

        $("input").each(function(){
          if ($(this).data('clone') !== undefined) {
            var thisInput = $(this);
            $("input[name=" + $(this).data('clone') + "]").change(function(){
              thisInput.val($(this).val());
            });
          }
        });

        var calculateResult = function() {
          var technicalEmployees = parseInt($("input[name=number-of-technical-employees]").val());
          var yearlyHires = parseInt($("input[name=number-of-hires-per-year]").val());
          var averageWage = parseFloat($("input[name=average-wage-of-open-positions]").val());
          var positionAdvertisingCost = parseInt($("input[name=average-advertising-cost]").val());
          var interviewLength = parseFloat($("input[name=interview-length]").val());
          var interviewParticipants = parseFloat($("input[name=interview-participants]").val());
          var managementCost = parseInt($("input[name=management-cost]").val());
          var internalInterviewCount = parseInt($("input[name=internal-interview-count]").val());
          var internalInterviewLength = parseFloat($("input[name=internal-interview-length]").val());
          var internalInterviewParticipants = parseFloat($("input[name=internal-participants]").val());
          var internalManagementCost = parseInt($("input[name=internal-management-cost]").val());
          var hrTime = parseFloat($("input[name=hr-time]").val());
          var hrHourly = parseFloat($("input[name=hr-hourly]").val());
          var preemploymentTestingCost = parseInt($("input[name=preemployment-testing]").val());

          var advertisingCost = yearlyHires*positionAdvertisingCost;
          $("#advertising-cost").html(moneyFormat(advertisingCost));

          var interviewCost = yearlyHires*10*interviewLength*interviewParticipants*managementCost;
          $("#interview-cost").html(moneyFormat(interviewCost));

          var internalMeetingCost = internalInterviewCount*internalInterviewLength*internalInterviewParticipants*internalManagementCost;
          $("#internal-meeting-cost").html(moneyFormat(internalMeetingCost));

          var hrCost = yearlyHires*10*hrTime*hrHourly;
          $("#hr-cost").html(moneyFormat(hrCost));

          var recruitingAndHiringCost = advertisingCost+interviewCost+internalMeetingCost+preemploymentTestingCost+hrCost;
          $("#recruiting-and-hiring-cost").html(moneyFormat(recruitingAndHiringCost));

          var recruitingAndHiringCostPerHire = Math.ceil(recruitingAndHiringCost / yearlyHires);
          $("#recruiting-and-hiring-per-hire").html(moneyFormat(recruitingAndHiringCostPerHire));

          var filledByStaffingFirm = parseInt($("input[name=filled-by-staffing-firm]").val());
          var staffingFirmPercentage = parseFloat($("input[name=staffing-firm-percentage]").val());

          var staffingFirmCost = 2000*filledByStaffingFirm*averageWage*staffingFirmPercentage/100;
          $("#staffing-firm-cost").html(moneyFormat(staffingFirmCost));
          $("#staffing-firm-total").html(moneyFormat(staffingFirmCost));

          var ojtHours = parseInt($("input[name=ojt-hours]").val());
          var employeeOJT = ojtHours*averageWage;
          $("#employee-ojt-total").html(moneyFormat(employeeOJT));

          var staffOJTHours = parseInt($("input[name=staff-ojt-hours]").val());
          var staffOJTWage = parseInt($("input[name=staff-ojt-wage]").val());
          var staffOJT = staffOJTHours*staffOJTWage;
          $("#staff-ojt-total").html(moneyFormat(staffOJT));

          var ojtConsumables = parseInt($("input[name=ojt-consumables]").val());
          var ojtTotal = employeeOJT+staffOJT+ojtConsumables;
          $("#ojt-total").html(moneyFormat(ojtTotal));

          var costPerHireBusinessImpact = recruitingAndHiringCostPerHire+staffingFirmCost+ojtTotal;
          $("#cost-per-hire-total").html(moneyFormat(costPerHireBusinessImpact));

          var annualRevenue = parseInt($("input[name=annual-revenue]").val());

          var overtimeHours = parseInt($("input[name=ot-hours]").val());
          var overtimeTotal = overtimeHours*averageWage*1.5*technicalEmployees*52;
          $("#overtime-total").html(moneyFormat(overtimeTotal));

          var overtimePremium = Math.ceil(overtimeTotal*0.1);
          $("#overtime-premium").html(moneyFormat(overtimePremium));

          var downtimeIncrease = Math.ceil(0.00072*annualRevenue);
          $("#downtime-increase").html(moneyFormat(downtimeIncrease));

          var cycleTimeIncrease = Math.ceil(0.00648*annualRevenue);
          $("#cycle-time-increase").html(moneyFormat(cycleTimeIncrease));

          var businessImpactTotal = overtimePremium+downtimeIncrease+cycleTimeIncrease;
          $("#business-impact-total").html(moneyFormat(businessImpactTotal));

          var turnoverPercentReduction = parseInt($("input[name=turnover-percent-reduction]").val());

          var turnoverHiringCostReduction = Math.ceil(recruitingAndHiringCostPerHire*yearlyHires*turnoverPercentReduction/100);
          $("#reduction-hiring-costs").html(moneyFormat(turnoverHiringCostReduction));

          var turnoverOJTReduction = Math.ceil(ojtTotal*yearlyHires*turnoverPercentReduction/100);
          $("#reduction-ojt-turnover").html(moneyFormat(turnoverOJTReduction));

          var reductionTurnover = turnoverHiringCostReduction+turnoverOJTReduction;
          $("#reduction-turnover").html(moneyFormat(reductionTurnover));

          var recruitingPercentReduction = parseInt($("input[name=recruiting-percent-reduction]").val());

          var reductionAdvertisement = Math.ceil(advertisingCost*recruitingPercentReduction/100);
          $("#reduction-recruitment-advertising").html(moneyFormat(reductionAdvertisement));

          var reductionInterviews = Math.ceil(interviewCost*recruitingPercentReduction/100);
          $("#reduction-interviews").html(moneyFormat(reductionInterviews));

          var reductionMeetings = Math.ceil(internalMeetingCost*recruitingPercentReduction/100);
          $("#reduction-meetings").html(moneyFormat(reductionMeetings));

          var reductionPreemploymentTesting = Math.ceil(preemploymentTestingCost*recruitingPercentReduction/100);
          $("#reduction-preemployment-testing").html(moneyFormat(reductionPreemploymentTesting));

          var reductionScreening = Math.ceil(hrCost*recruitingPercentReduction/100);
          $("#reduction-screening").html(moneyFormat(reductionScreening));

          var reductionCompany = reductionAdvertisement+reductionInterviews+reductionMeetings+reductionPreemploymentTesting+reductionScreening;
          $("#reduction-company").html(moneyFormat(reductionCompany));

          var staffingPercentReduction = parseInt($("input[name=staffing-percent-reduction]").val());

          var staffingReduction = Math.ceil(staffingFirmCost*staffingPercentReduction/100);
          $("#reduction-staffing").html(moneyFormat(staffingReduction));

          var ojtPercentReduction = parseInt($("input[name=ojt-percent-reduction]").val());

          var reductionEmployeeOJT = Math.ceil(employeeOJT*yearlyHires*ojtPercentReduction/100);
          $("#reduction-employee-ojt").html(moneyFormat(reductionEmployeeOJT));

          var reductionSupervisorOJT = Math.ceil(staffOJT*yearlyHires*ojtPercentReduction/100);
          $("#reduction-supervisor-ojt").html(moneyFormat(reductionSupervisorOJT));

          var reductionOJT = reductionEmployeeOJT+reductionSupervisorOJT;
          $("#reduction-ojt").html(moneyFormat(reductionOJT));

          var totalPossibleSavings = reductionTurnover+reductionCompany+staffingReduction+reductionOJT;
          $("#total-possible-savings").html(moneyFormat(totalPossibleSavings));
        };
        calculateResult();
        $("input").change(calculateResult);

        // Submit the form
        $("#next-button").click(function(e){
          e.preventDefault();
          $("form").submit();
        });
      });
    </script>
  </body>
</html>

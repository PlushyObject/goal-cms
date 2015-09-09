        <script src="/public_html/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="/public_html/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="/public_html/bower_components/Chart.js/Chart.js"></script>
        <script src="/public_html/js/plugins.js"></script>
        <script src="/public_html/js/main.js"></script>
        <script src="/public_html/js/register-form.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>

        	<script>

              var doughnutData = [
                      {
                          value: 4,
                          color:"#F7464A",
                          highlight: "#FF5A5E",
                          label: "Red"
                      },
                      {
                          value: 1,
                          color: "#46BFBD",
                          highlight: "#5AD3D1",
                          label: "Green"
                      }

                  ];

                  window.onload = function(){
                      var ctx = document.getElementById("chart-area").getContext("2d");
                      window.myDoughnut = new Chart(ctx).Pie(doughnutData, {responsive : true});
                  };



          </script>


    </body>
</html>
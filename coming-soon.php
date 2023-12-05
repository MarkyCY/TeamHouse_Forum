<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
      <meta name="author" content="Coderthemes">

      <link rel="shortcut icon" href="images/favicon_1.ico">

      <title>Evento - TeamHouse</title>

      <!-- Base Css Files -->
      <link href="css/bootstrap.min.css" rel="stylesheet" />

      <!-- Font Icons -->
      <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
      <link href="assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
      <link href="css/material-design-iconic-font.min.css" rel="stylesheet">

      <!-- animate css -->
      <link href="css/animate.css" rel="stylesheet" />

      <!-- Waves-effect -->
      <link href="css/waves-effect.css" rel="stylesheet">

      <!-- Custom Files -->
      <link href="css/helper.css" rel="stylesheet" type="text/css" />
      <link href="css/style.css" rel="stylesheet" type="text/css" />

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->

      <script src="js/modernizr.min.js"></script>
      
  </head>
  <body>


      <!-- HOME -->
      <section class="home bg-dark" id="home">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
                <div class="home-wrapper">
                  <h1 class="home-text"><span class="rotate">Somos FullGame,Somos Modernos,Somos Creativos</span></h1>
                  <p class="m-t-30">Desencadenaremos eventos, eventos para los usuarios de FullGame&#x1F600;<br/> Cuando finalize la cuenta atrás un nuevo servicio será implementado.</p>

                  <!-- COUNTDOWN -->      
                  <div class="row m-t-40">
                    <div class="col-sm-12 lj-countdown">
                      <div class="row">
                        <div>
                          <div>
                            <span>0</span><span>Dias</span></div><div><span>0</span><span>Horas</span></div></div><div class="lj-countdown-ms"><div><span>0</span><span>Minutos</span></div><div><span>0</span><span>Segundos</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /COUNTDOWN -->

                </div>
            </div>
          </div>
        </div>
      </section>
      <!-- END HOME -->


        
    	<script>
        var resizefunc = [];
      </script>
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/waves.js"></script>
      <script src="js/wow.min.js"></script>
      <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
      <script src="js/jquery.scrollTo.min.js"></script>
      <script src="assets/jquery-detectmobile/detect.js"></script>
      <script src="assets/fastclick/fastclick.js"></script>
      <script src="assets/jquery-slimscroll/jquery.slimscroll.js"></script>
      <script src="assets/jquery-blockui/jquery.blockUI.js"></script>


      <!-- CUSTOM JS -->
      <script src="js/jquery.app.js"></script>

      <!-- Countdown -->
      <script src="assets/comingsoon/jquery.countdown.js"></script>
      <script src="assets/comingsoon/jquery.simple-text-rotator.min.js"></script>


      <script type="text/javascript">
        $(document).ready(function (){

        // Countdown
        // To change date, simply edit: var endDate = "June 26, 2015 20:39:00";
        //January, February, March, April, May, June, July, August, September, October, November, December    
        $(function() {
          var endDate = "August 15, 2021 00:00:00";
          $('.lj-countdown .row').countdown({
            date: endDate,
            render: function(data) {
              $(this.el).html('<div><div><span>' + (parseInt(this.leadingZeros(data.years, 2)*365) + parseInt(this.leadingZeros(data.days, 2))) + '</span><span>Dias</span></div><div><span>' + this.leadingZeros(data.hours, 2) + '</span><span>Horas</span></div></div><div class="lj-countdown-ms"><div><span>' + this.leadingZeros(data.min, 2) + '</span><span>Minutos</span></div><div><span>' + this.leadingZeros(data.sec, 2) + '</span><span>Segundos</span></div></div>');
            }
          });
        });
      });
      $(document).ready(function(){
        $(".home-text .rotate").textrotator({
              animation: "fade",
              speed: 2000
          });
      });
    </script>

	
	</body>
</html>
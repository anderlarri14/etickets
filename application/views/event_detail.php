<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Heroic Features - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
     <?php echo link_tag("lib/bootstrap.min.css"); ?> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">
    <?php echo link_tag("css/heroic-features.css"); ?>


    <script src="<?php echo base_url() ?>lib/jquery-3.3.1.min.js"></script>


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
    <link rel='stylesheet prefetch' href='https://i.koya.io/flex/1.1.0.css'>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Nunito:300,400,700'>
    <?php echo link_tag("css/event_detail.css"); ?>
    <?php echo script_tag("lib/jquery-3.3.1.min.js"); ?>
    <!-- Ajax Live Search -->
    <script src="<?php echo base_url() ?>lib/bootstrap.bundle.min.js"></script>
    <?php echo link_tag("css/home.css"); ?>


    <!-- Custom styles for this template -->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Start Bootstrap</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->



    <!-- JUMBOTRON -->



    <div class="contenido">
        <h1 class="upcomming">Evento</h1>



        <div class="jumbo">
            <div class="jumbotron">
                <h1 class="display-4">
                    <?php echo $eventTickets[0]->nombre; ?>
                </h1>
                <p class="lead">
                    <?php echo $eventTickets[0]->descripcion; ?>
                </p>
                <hr class="my-4">
                <p>Evento de
                    <?php echo $eventTickets[0]->categoria; ?> en
                    <?php echo $eventTickets[0]->provincia; ?>. Del
                    <?php echo $eventTickets[0]->fechaIni; ?> al
                    <?php echo $eventTickets[0]->fechaFin; ?>. </p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="#" role="button">Comprar sections</a>
                </p>
            </div>
        </div>
        <div class="tarjetitas">
            <div class="box">
                <div class="prueba">
                    <section>
                        <widget type="ticket" class="--flex-column">
                            <div class="top --flex-column">
                                <div class="bandname -bold">Ghost Mice</div>
                                <div class="tourname">Home Tour</div>
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/199011/concert.png" alt="" />
                                <div class="deetz --flex-row-j!sb">
                                    <div class="event --flex-column">
                                        <div class="date">3rd March 2017</div>
                                        <div class="location -bold">Bloomington, Indiana</div>
                                    </div>
                                    <div class="price --flex-column">
                                        <div class="label">Price</div>
                                        <div class="cost -bold">$30</div>
                                    </div>
                                </div>
                            </div>
                        </widget>
                    </section>
                </div>
            </div>
            <div class="box">
                <div class="prueba">
                    <section>
                        <widget type="ticket" class="--flex-column">
                            <div class="top --flex-column">
                                <div class="bandname -bold">Ghost Mice</div>
                                <div class="tourname">Home Tour</div>
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/199011/concert.png" alt="" />
                                <div class="deetz --flex-row-j!sb">
                                    <div class="event --flex-column">
                                        <div class="date">3rd March 2017</div>
                                        <div class="location -bold">Bloomington, Indiana</div>
                                    </div>
                                            <div class="price --flex-column">
            <div class="label">Price</div>
            <div class="cost -bold">$30</div>
         </div> 
      </div> 
   </div>
   <div class="rip"></div>
   <div class="bottom --flex-row-j!sb">
      <div class="barcode"></div>
      <a class="buy" href="#">BUY TICKET</a>
   </div>
</widget>
                    </section>
                </div>
            </div>
        </div>












        <div class="item">
            <div class="item-right">
                <h2 class="num">23</h2>
                <p class="day">Feb</p>
                <span class="up-border"></span>
                <span class="down-border"></span>
            </div> <!-- end item-right -->

            <div class="item-left">
                <p class="event">Music Event</p>
                <h2 class="title">Live Been Corrage</h2>

                <div class="sce">
                    <div class="icon">
                        <i class="fa fa-table"></i>
                    </div>
                    <p>Monday 15th 2016 <br /> 15:20Pm & 11:00Am</p>
                </div>
                <div class="fix"></div>
                <div class="loc">
                    <div class="icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <p>North,Soth, United State , Amre <br /> Party Number 16,20</p>
                </div>
                <div class="fix"></div>
                <button class="tickets">Tickets</button>
            </div> <!-- end item-right -->
        </div> <!-- end item -->

        <div class="item">
            <div class="item-right">
                <h2 class="num">23</h2>
                <p class="day">Feb</p>
                <span class="up-border"></span>
                <span class="down-border"></span>
            </div> <!-- end item-right -->

            <div class="item-left">
                <p class="event">Music Kaboom</p>
                <h2 class="title">Music Party</h2>

                <div class="sce">
                    <div class="icon">
                        <i class="fa fa-table"></i>
                    </div>
                    <p>Monday 15th 2016 <br /> 15:20Pm & 11:00Am</p>
                </div>
                <div class="fix"></div>
                <div class="loc">
                    <div class="icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <p>North,Soth, United State , Amre <br /> Party Number 16,20</p>
                </div>
                <div class="fix"></div>
                <button class="booked">Booked</button>
            </div> <!-- end item-right -->
        </div> <!-- end item -->

        <div class="item">
            <div class="item-right">
                <h2 class="num">23</h2>
                <p class="day">Feb</p>
                <span class="up-border"></span>
                <span class="down-border"></span>
            </div> <!-- end item-right -->

            <div class="item-left">
                <p class="event">Music Event</p>
                <h2 class="title linethrough">Hello Dubail Visivle</h2>

                <div class="sce">
                    <div class="icon">
                        <i class="fa fa-table"></i>
                    </div>
                    <p>Monday 15th 2016 <br /> 15:20Pm & 11:00Am</p>
                </div>
                <div class="fix"></div>
                <div class="loc">
                    <div class="icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <p>North,Soth, United State , Amre <br /> Party Number 16,20</p>
                </div>
                <div class="fix"></div>
                <button class="cancel">Cancele</button>
            </div> <!-- end item-right -->
        </div> <!-- end item -->
    </div>





    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
        </div>
        <!-- /.container -->
    </footer>

</body>

</html>
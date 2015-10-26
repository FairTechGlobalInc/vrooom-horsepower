<style>
    .navbar{background-color: transparent; height: 10%;}
    .glyphicon{color: #F05F40;}
    #navtext{margin-top: 0.5%}
    #navtext li a:hover{background-color:#23527c; height: 20%}
</style>
<nav id="mainNav" class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="index" id="navtext">VROOOMM :: HORSE POWER</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right" id="navtext">
                <li>
                    <a href="<?php echo base_url().'index.php/Home_controller'?>">Home</a>
                </li>
                <li>
                    <a href="<?php echo base_url().'index.php/Carscontroller'?>">Cars</a>
                </li>

                <li>
                    <a href="<?php echo base_url().'index.php/Aboutuscontroller'?>">About Us</a>
                </li>
                <li>
                    <a href="<?php echo base_url().'index.php/Watchlistcontroller'?>">WatchList <span class="glyphicon glyphicon-list"></span></a>
                </li>
                <li>
                    <a href="<?php echo base_url().'index.php/Rentalcontroller'?>">Rental Cart <span class="glyphicon glyphicon-shopping-cart"></span></a>
                </li>
            </ul>
<!--            <div class="col-md-6 col-md-4 pull-right" id="navtext">-->
<!--                <form class="navbar-form" role="search">-->
<!--                    <div class="input-group">-->
<!--                        <input type="text" class="form-control pull-right" placeholder="Aston Martin DB9" name="srch-term" id="srch-term">-->
<!--                        <div class="input-group-btn">-->
<!--                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </form>-->
<!--            </div>-->
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
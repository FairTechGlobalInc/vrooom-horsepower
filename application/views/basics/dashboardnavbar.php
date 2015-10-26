<?php
#retrive session data
$this->load->library('session');
$session_data =  $this->session->userdata('logged_in');

?>
<style>
    .navbar{background-color: transparent; height: 10%;}
    .glyphicon{color: #F05F40;}
    /*#navtext{margin-top: 0.5%}*/
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
            <ul class="nav navbar-nav navbar-left" id="navtext">
                <li>
                    <a href="<?php echo base_url().'index.php/Carscontroller'?>">Cars</a>
                </li>
                <li>
                    <a href="<?php echo base_url().'index.php/Aboutuscontroller'?>">About Us</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-target="dropdown-menu"><i class="glyphicon glyphicon-user"></i><?php echo $session_data['IDNumber'];?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo base_url().'index.php/profilecontroller'?>"><i class="glyphicon glyphicon-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'index.php/Rentalcontroller'?>"><i class="glyphicon glyphicon-shopping-cart"></i> Rental Cart</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a onclick="javascript:window.location.href='logout'" ><i class="glyphicon glyphicon-log-out"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="col-sm-6 col-md-3 pull-right" id="navtext">
                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control pull-right" placeholder="Search" name="srch-term" id="srch-term">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>


<!--
    this form is responsible for the registration of the users whom wish to keep track of their watchlist
    Points, and availability to gaining a coupon based on the point score.

    To used to register any persons wanting to have an account with VROOOM::HORSE POWER
    Author::Antony CODENAME::ROOT
-->

<!--Calls the bootstrap files and loads them-->
<?php include 'basics/headercontent.php';?>
<!--Calls the Default Navbar-->
<?php include 'basics/navbar.php';?>

<style>
    #container{margin-top: 0.5%; align-content: center}
    #asterisk{font-size:65%;color: rosybrown}
    #status{background-color:transparent;}
    #inner-headline{height: 25%;}
    #loginbtn{text-decoration: none;
        margin-left: 0px;
        background-color: transparent;
    }
    .btn a:hover{text-decoration: none}
</style>
<section id="inner-headline">
    <div class="col-lg-2">
        <div class="btn btn-block btn-info" id="loginbtn">
            <a href="login">Login</a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="alert alert-info alert-dismissible" role="alert" id="status">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <span class="glyphicon glyphicon-road"></span> <strong>Currently! :: </strong> Home / Registration Page .
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container-fluid" id="container">
    <div class="col-lg-8">
        <div class="panel panel-info">
            <div class="panel panel-heading" align="center">User Registration Form</div>
                <div class="panel panel-body">
                    <div class="col-md-6">
                        <?php echo form_open('Home_controller/signup_validation')?>
                        <?php echo validation_errors();?>
                        <div class="form-group">
                            <span class="glyphicon glyphicon-asterisk" id="asterisk"></span>ID Number
                            <input class="form-control" placeholder="33*****09" name="_idnumber" type="text" required autofocus>
                        </div>
                        <div class="form-group">
                            <span></span>Middle Name
                            <input class="form-control" placeholder="" name="_middlename" type="text"  autofocus>
                        </div>
                        <div class="form-group">
                            <span class="glyphicon glyphicon-asterisk" id="asterisk"></span>Email
                            <input class="form-control" placeholder="john@example.com" name="_email" type="text" required="required" autofocus>
                        </div>
                        <div class="form-group">
                            <span class="glyphicon glyphicon-asterisk" id="asterisk"></span>Drivers License
                            <input class="form-control" placeholder="R7X*****89" name="_driverslicense" type="text" required="required" autofocus>
                        </div>
                        <div class="form-group">
                            <span class="glyphicon glyphicon-asterisk" id="asterisk"></span>Password
                            <input class="form-control" placeholder="*******" name="_password" type="password" required="required" autofocus>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <span class="glyphicon glyphicon-asterisk" id="asterisk"></span>First Name
                            <input class="form-control" placeholder="John" name="_firstname" type="text" required="required" autofocus>
                        </div>
                        <div class="form-group">
                            <span class="glyphicon glyphicon-asterisk" id="asterisk"></span>Last Name
                            <input class="form-control" placeholder="Doe" name="_lastname" type="text" required="required" autofocus>
                        </div>
                        <div class="form-group">
                            <span class="glyphicon glyphicon-asterisk" id="asterisk"></span>Phone Number
                            <input class="form-control" placeholder="254777****02" name="_phonenumber" type="text" required="required" autofocus>
                        </div>
                        <div class="form-group">
                            <span class="glyphicon glyphicon-asterisk" id="asterisk"></span>Date of Birth
                            <input class="form-control" placeholder="01/01/1**7" name="_dob" type="date" required="required" autofocus>
                        </div>
                        <div class="form-group">
                            <span class="glyphicon glyphicon-asterisk" id="asterisk"></span>Confirm Password
                            <input class="form-control" placeholder="********" name="_cpassword" type="password" required="required" autofocus>
                        </div>
                    </div>
                    <input class="btn btn-block btn-info btn-lg" value="submit" type="submit" name="_submitbtn">
                    <?php echo form_close()?>
            </div> <!-End of panel-body-->
        </div> <!-End of panel-info-->
    </div> <!-End of col-lg-8-->
    <div class="col-lg-4">
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Caution!</strong> Password must contain At Least a Capital Letter, Number and small Caps, with a length of > 7 characters.
        </div>
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Caution!</strong>All Fields with an <code>*</code> are to be filled in (Mandatory).
        </div>
    </div>
</div> <!-End of container fluid-->


<?php include 'basics/scripttags.php';?>

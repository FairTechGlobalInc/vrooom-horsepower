<?php include 'basics/headercontent.php'; ?>
<style>
    html,body{background-color: #F8F8F8}
    .login-panel{margin-top: 0.2%; align-content: center }
    #Signup{ text-align: center; }
    #Signup a{color: #F05F40}
    #Signup a{text-decoration: none;text-align: center;}
    #status{background-color:transparent;}
    #inner-headline{height: 25%;}
</style>
<?php include 'basics/navbar.php'; ?>
<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-success alert-dismissible" role="alert" id="status">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <span class="glyphicon glyphicon-road"></span> <strong>Currently! ::</strong> Home / Login Page .
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container-fluid">
    <div class="col-md-4">
        <br>
        <div class="login-panel panel panel-info">
            <div class="panel-heading">Login <span class="glyphicon glyphicon-log-in"></span></div><!--End of panel-heading-->
            <div class="panel-body">
<?php echo form_open('logincontroller/user_login_process');?>
                <?php echo validation_errors();?>
                    <fieldset>
                        <span>* ID Number</span>
                        <div class="input-group input-group-md">
                            <span class="input-group-addon" id="sizing-addon2">@</span>
                            <input type="text" class="form-control" placeholder="31*****7" aria-describedby="sizing-addon1" name="_idnumber">
                        </div>
                        <div class="form-group">
                            <span>* Password</span>
                            <input class="form-control" placeholder="Doe" name="_password" type="password"required="required">
                        </div><!--End of form-group-->
                        <input class="btn btn-lg btn-success btn-block" type="submit" value="Submit" name="_loginbtn">
                        <br>
                        <p class="" id="Signup"><a href="signup">Create an Account?</a></p>
                    </fieldset>
<?php echo form_close();?>
            </div><!--End of panel-body-->
        </div><!--End of login-panel-->

    </div>
</div>
    <?php include 'basics/scripttags.php'; ?>


<nav class="navbar navbar-default" style="width: 60%">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Pata Ndai</a>
        </div>
        <?php echo form_open('#'); ?>
        <?php echo validation_errors(); ?>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a class="btn btn-block btn-warning" href="<?php echo base_url().'index.php/Home_controller/login'?>">Login</a></li>
                <li class="active">
                    <div  style="margin-top: 5%; ">
                        <label>
                            <select class="form-control" name="category" id="category">
                                <option value="">Vehicle Model</option>
                                <?php foreach($vehicle_types as $vehicle_type): ?>
                                    <option value="<?php echo $vehicle_type->Make; ?>"><?php echo $vehicle_type->Make; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </label>
                    </div>
                </li>

                <li class="active">
                    <div  style="margin-top: 5%; margin-left: 2%">
                        <label>
                            <select class="form-control" name="category" id="category">
                                <option value="">Vehicle Type</option>
                                <?php foreach($vehicle_models as $vehicle_model): ?>
                                    <option value="<?php echo $vehicle_model->Model; ?>"><?php echo $vehicle_model->Model; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </label>
                    </div>
                </li>
                <li class="active">
                    <div  style="margin-top: 5%; margin-left: 2%">
                        <label>
                            <select class="form-control" name="category" id="category">
                                <option value="">Vehicle Color</option>
                                <?php foreach($vehicle_colors as $vehicle_color):?>
                                    <option value="<?php echo $vehicle_color->Color;?>"><?php echo $vehicle_color->Color;?></option>
                                <?php endforeach;?>
                            </select>
                        </label>
                    </div>
                </li>
                <li class="active">
                    <div  style="margin-top: 3%; margin-left: 2%">
                        <label>
                            <input type="text" class="form-control" name="starting_budget" placeholder="Starting Budget" required="" autofocus="" />
                        </label>
                    </div>
                </li>
                <li class="active">
                    <div  style="margin-top: 3%; margin-left: 2%">
                        <label>
                            <input type="text" class="form-control" name="ending_budget" placeholder="Ending Budget" required="" autofocus="" />
                        </label>
                    </div>
                </li>
                <li class="active">
                    <div style="margin-top: 10%; margin-left: 10%">
                        <label>
                            <button class="btn btn-danger"  name="Submit" value="Find" type="Submit">Find</button>
                        </label>
                    </div>
                </li>
            </ul>


                <?php echo form_close(); ?>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


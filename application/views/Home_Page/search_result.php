<script>
    var timeout = 9000;
    var closetimer = 0;
    var ddmenuitem = 0;

    // open hidden layer
    function mopen(element, id) {

        //description fader timer
        $("#description").fadeIn(9000);

        // cancel close timer
        mcancelclosetime();

        // close old layer
        mclose();


        // get new layer and show it
        ddmenuitem = document.getElementById(id);
        $("#IE6Fix").height($(ddmenuitem).height());
        $("#IE6Fix").width($(ddmenuitem).width() + 2);

        $("#IE6Fix").show();
        $(ddmenuitem).show();

        $("#IE6Fix").position({
            my: "left top",
            at: "left bottom",
            of: $(element),
            collision: "fit"
        });

        $(ddmenuitem).position({
            my: "left top",
            at: "left bottom",
            of: $(element),
            collision: "fit"

        });

    }

    // close showed layer
    function mclose() {
        if (ddmenuitem) {
            $("#IE6Fix").hide();
            $(ddmenuitem).hide();
        }
    }

    // go close timer
    function mclosetime() {
        closetimer = window.setTimeout(mclose, timeout);
    }

    // cancel close timer
    function mcancelclosetime() {
        if (closetimer) {
            window.clearTimeout(closetimer);
            closetimer = null;
        }
    }


    // close layer when click-out
    document.onclick = mclose;

</script>


<div style="margin-left: 10%; margin-right: 10%; margin-top: 5%" xmlns="http://www.w3.org/1999/html">
    <div class="row">

        <!--
            * Beginning of the results
            * Left side
        -->
            <div class="col-md-6" id="result">
                <div class="row">
                <!-- Image-->
                    <div class="col-xs-12 col-md-7" id="popup">
                        <div class="thumbnail">
                            <img id="hover" onmouseover="mopen(this, 'testdiv')" onmouseout="mclosetime()" src="<?php echo base_url("assets/images/image.jpg"); ?>" alt="Vehicle name" onmouseover="function()">
                        </div>
                    </div>
                <!-- Vehicle details-->
                    <div class="col-md-5">
                        <h2>Vehicle Type</h2>
                        <h3>Vehicle Model</h3>
                        <h4>Price</h4>
                    </div>
                </div>
            <!-- Vehicle description-->
                <div id='testdiv' onmouseover="mcancelclosetime()" onmouseout="mclosetime()" style='width:200%; margin-left:-10%;  display:none;'>
                    <div class="row">
                        <div class="col-md-6">
                            <img id="image" style="width: 100%; height: auto" src="<?php echo base_url("assets/images/image.jpg"); ?>" alt="Vehicle name">
                        </div>
                        <!--This is the fade in details-->
                        <div class="col-md-6" id="description">

                            <div class="col-md-3">
                                <h3>Description</h3>
                                <p>Price: </p>
                                <p>Location: </p>
                                <p>Horse Power:</p>
                                <p>Engine: </p>
                                <p>Seats:</p>
                                <p>Airbags:</p>
                                <button class="btn btn-primary">Contact Owner</button>
                            </div>
                            <!-- The calender goes here -->
                            <div class="col-md-9" style="width: 100%">

                            </div>
                        </div>
                    </div>
                </div>


            </div>

       <!--////////////////////////////////////////////////////////////////-->
       <!--////////////////////////////////////////////////////////////////-->
       <!--////////////////////////////////////////////////////////////////-->
       <!--////////////////////////////////////////////////////////////////-->


        <!--
          * Beginning of the results
          * Right side
        -->
        <div class="col-md-6">
            <!-- Image-->
            <div class="col-xs-12 col-md-7" id="popup">
                <div class="thumbnail">
                    <img id="hover" onmouseover="mopen(this, 'right_div')" onmouseout="mclosetime()" src="<?php echo base_url("assets/images/image2.jpg"); ?>" alt="Vehicle name" onmouseover="function()">
                </div>
            </div>

            <!-- Vehicle details-->
                <div class="col-md-5">
                    <h2>Vehicle Type</h2>
                    <h3>Vehicle Model</h3>
                    <h4>Price</h4>
                </div>

        <!-- Vehicle description-->
            <div id='right_div' onmouseover="mcancelclosetime()" onmouseout="mclosetime()" style='width:200%; margin-left:-120%;  display:none;'>
                <div class="row">
                    <div class="col-md-6">
                        <img id="image" style="width: 100%; height: auto" src="<?php echo base_url("assets/images/image2.jpg"); ?>" alt="Vehicle name">
                    </div>
                    <!--This is the fade in details-->
                    <div class="col-md-6" id="description">

                        <div class="col-md-3">
                            <h3>Description</h3>
                            <p>Price: </p>
                            <p>Location: </p>
                            <p>Horse Power:</p>
                            <p>Engine: </p>
                            <p>Seats:</p>
                            <p>Airbags:</p>
                            <button class="btn btn-primary">Contact Owner</button>
                        </div>
                        <!-- The calender goes here -->
                        <div class="col-md-9" style="width: 100%">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
</div>
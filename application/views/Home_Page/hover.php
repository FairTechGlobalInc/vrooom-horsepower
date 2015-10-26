    <script>
        var timeout = 10000;
        var closetimer = 0;
        var ddmenuitem = 0;

        // open hidden layer
        function mopen(element, id) {

           //description fader timer
            $("#description").fadeIn(7000);

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


<a href="#" onmouseover="mopen(this, 'testdiv')" onmouseout="mclosetime()">TEST LINK</a>
<a href="#" onmouseover="mopen(this, 'testdiv')" onmouseout="mclosetime()">TEST LINK</a>
<a href="#" onmouseover="mopen(this, 'testdiv')" onmouseout="mclosetime()">TEST LINK</a>

<div id='testdiv' onmouseover="mcancelclosetime()" onmouseout="mclosetime()" style='width:80%;margin-left:10%; display:none;'>
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

</body>
</html>
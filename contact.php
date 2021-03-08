<?php
//require
require "common.php";


generate_header("Contact", $in_cart_common); ?>

<!-- main content -->
<div class="container">


    <div class="row page-intro">
        <div class="col-lg-122">
            <br>
            <center><h1>Contact Us</h1></center>

            <br>


            <div class="container-fluid">
                <form action="" method="" class="register-form">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-lg-4">
                            <label for="firstName">NAME</label>
                            <input name="firstName" class="form-control" type="text" id="firstName">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-lg-4">
                            <label for="email">EMAIL</label>
                            <input name="email" class="form-control" type="email" id="email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-lg-4">
                            <label for="phone">&nbsp;PHONE</label>
                            <input name="phone" class="form-control" type="phone"id="phone">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-lg-4">
                            <label for="message">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MESSAGE</label>
                            <textarea rows="4" cols="51" name="comment" id="message"></textarea>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                            <button class="btn btn-default regbutton">Submit</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>



</div> <!-- end - main content -->


 <?php

generate_footer(); ?>
</div> <!-- end - main content -->
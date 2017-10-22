<?php
include 'User.php';

$user1 = new User("Andrii", "Andrii Semenkov", "some_email@gmail.com", "123456");




//$user1->show();
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<form style="
      height:150px;
      width:100%;
      position:fixed;
      top:0;
      left:0;   " class="form-horizontal" method="POST" action="userPreview.php">
    <fieldset>

        <!-- Form Name -->
        <legend>Registration form</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Login</label>  
            <div class="col-md-4">
                <input id="login" name="login" type="text" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Password input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="passwordinput">Password</label>
            <div class="col-md-4">
                <input id="pass" name="pass" type="password" placeholder="" class="form-control input-md" required="">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Name &amp; Surname</label>  
            <div class="col-md-4">
                <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" >Email</label>  
            <div class="col-md-4">
                <input id="email" name="email" type="email" placeholder="" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Button (Double) -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="button1id"></label>
            <div class="col-md-8">
                <button id="button1id" type="submit" name="button1id" class="btn btn-success">Rejestruj</button>
                <button id="button2id" name="button2id" type="reset" class="btn btn-danger">Anuluj</button>
            </div>
        </div>

    </fieldset>
</form>

<div id="success">

</div>

<div id="fail">

</div>

<div  id="allUsers" style="height:63%; 
      overflow-y:scroll;overflow-x: hidden;margin-top: 220px">
    <?php
    User::showAllUsers();
    ?>
</div>


<script type="text/javascript" src="formHelper.js"></script>



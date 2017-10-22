<?php
include_once 'FileProcessor.php';


?>

<script>
    function showFound(found) {
        document.getElementById(found).style.display = "block";
    }
    
    function getElement() {
        return document.getElementById("form_52976");
    }

    function showForm() {
        var x = getElement();

        if (x.style.display === "none") {
            x.style.display = "block";
            x.value = getLabel();
        } else {
            x.style.display = "none";
            x.value = getLabel();
        }
    }

    function getLabel() {
        var x = getElement();
        if (x.style.display === "none") {
            return 'Show form';
        } else {
            return 'Hide form';
        }
    }
</script>
<br>
<button onclick="showForm()">Show/Hide Form</button>


<form style="display:none" id="form_52976" class="appnitro"  method="POST" action="./../form/formPreview.php">
    <div class="form_description">

    </div>						
    <ul >

        <li id="li_1" >
            <label class="description" for="element_1">Surname </label>
            <div>
                <input id="element_1" name="element_1" class="element text medium" required type="text" maxlength="255" value=""/> 
            </div> 
        </li>		<li id="li_2" >
            <label class="description" for="element_2">Name </label>
            <div>
                <input id="element_2" name="element_2" class="element text medium" required type="text" maxlength="255" value=""/> 
            </div> 
        </li>		

        <li id="li_2" >
            <label class="description" for="element_2">Wiek </label>
            <div>
                <input id="elem_wiek" name="elem_wiek" class="element text medium" required type="number" maxlength="150" value=""/> 
            </div> 
        </li>	

        <li id="li_3" >
            <label class="description" for="element_3">Country </label>
            <div>
                <input id="element_3" name="element_3" class="element text medium" required type="text" maxlength="255" value=""/> 
            </div> 
        </li>		<li id="li_4" >
            <label class="description" for="element_4">email </label>
            <div>
                <input id="element_4" name="element_4" class="element text medium" required type="email" maxlength="255" value=""/> 
            </div> 
        </li>		<li id="li_5" >
            <label class="description" for="element_5">Programming language </label>
            <span>
                <input id="element_5_1" name="element_5_1" class="element checkbox"  type="checkbox" value="1" />
                <label class="choice" for="element_5_1">PHP</label>
                <input id="element_5_2" name="element_5_2" class="element checkbox" type="checkbox" value="1" />
                <label class="choice" for="element_5_2">C++</label>
                <input id="element_5_3" name="element_5_3" class="element checkbox" type="checkbox" value="1" />
                <label class="choice" for="element_5_3">Java</label>

            </span> 
        </li>		<li id="li_6" >
            <label class="description" for="element_6">Payment </label>
            <span>
                <input id="element_6_1" name="element_6" class="element radio" type="radio" required value="1" />
                <label class="choice" for="element_6_1">eurocard</label>
                <input id="element_6_2" name="element_6" class="element radio" type="radio" value="2" />
                <label class="choice" for="element_6_2">visa</label>
                <input id="element_6_3" name="element_6" class="element radio" type="radio" value="3" />
                <label class="choice" for="element_6_3">bank blabla</label>

            </span> 
        </li>

        <li class="buttons">
            <input type="hidden" name="form_id" value="52976" />

            <input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
            <input type="reset" value="Reset!"/>
            <input type="submit" value="Show"/>
        
        </li></ul>
        <button target="_blank" onclick="showFound('JAVA')">Java</button>
            <button onclick="showFound('PHP')">PHP</button>
            <button onclick="showFound('CPP')">CPP</button>

</form>	

<div>    
    <div style="display:none" id="JAVA">
        <?php searchForValue("Java") ?> </div><br>
        <div style="display:none" id="PHP"><?php searchForValue("PHP") ?> </div><br>
        <div style="display:none" id="CPP"><?php searchForValue("CPP") ?> </div><br>
</div>
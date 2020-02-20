<!DOCTYPE html>
<html>
<head>   
    <title>Center For Applied Research in Information Technology</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <script type="text/javascript">
    //radio button form for status
        function submitRadio()       
        {
            var radiobuttons = document.forms[0].status;          
            if (radiobuttons[0].checked)
                status=radiobuttons[0].value;
            else if (radiobuttons[1].checked)
                status=radiobuttons[1].value;
            dropDown()
        }
//function to trigger the drop down grade form  
        function dropDown(){
            if (status == "grad"){
                document.getElementById("hideDrop").style.display = "block"; 
                document.getElementById("submitButton").style.display = "block";
                document.getElementById("finalResult").innerHTML = "";}
            else if (status == "undergrad"){
                document.getElementById("hideDrop").style.display = "block"; 
                document.getElementById("submitButton").style.display = "block";
                document.getElementById("finalResult").innerHTML = "";}
            if (status == "undergrad"){
               document.getElementById("hideDrop2").style.display = "block";}
            else if (status == "grad"){
                document.getElementById("hideDrop2").style.display = "none";}
            
            var x = document.getElementsByClassName("gradform");
            var y = document.getElementsByClassName("undergradform");
            if (status == "undergrad") {
                y[0].style.display = "block";
                y[1].style.display = "block";
                y[2].style.display = "block";
                y[3].style.display = "block";
                y[4].style.display = "block";
                x[0].style.display = "none";
                x[1].style.display = "none";
                x[2].style.display = "none";
                x[3].style.display = "none";
                x[4].style.display = "none";        
            }
            else if (status == "grad"){
                y[0].style.display = "none";
                y[1].style.display = "none";
                y[2].style.display = "none";
                y[3].style.display = "none";
                y[4].style.display = "none";
                x[0].style.display = "block";
                x[1].style.display = "block";
                x[2].style.display = "block";
                x[3].style.display = "block";
                x[4].style.display = "block";     
            }
            }
//function for calculating GPA and displaying results 
        function submitDrop()
	    {
            
            var grade1 = document.forms[0].grade1.value;
            var grade2 = document.forms[0].grade2.value;
            var grade3 = document.forms[0].grade3.value;
            var grade4 = document.forms[0].grade4.value;
            var grade5 = document.forms[0].grade5.value;
            if (status == "undergrad"){var result=(parseFloat(grade1)+parseFloat(grade2)+parseFloat(grade3)+parseFloat          (grade4)+parseFloat(grade5))/5;}
            else if (status == "grad") {var result=(parseFloat(grade1)+parseFloat(grade2)+parseFloat(grade3)+parseFloat         (grade4))/4;}
            var result = result.toFixed(1);
            if (status == "grad" && result > 3.7){document.getElementById("finalResult").innerHTML = "Your GPA is " + result + ". Congratulations Graduate Student! You are eligible to apply for the student assistant position. Please follow this link to the <a href = 'application.php'>CARIT application</a>.";}
            else if (status == "grad" && result <= 3.7){document.getElementById("finalResult").innerHTML = "Your GPA is " + result + ". Thank you for your interest in CARIT, graduate student. Unfortunately, your GPA does not meet the minimum requirements to apply for the student assistant position.";}
            else if (status =="undergrad" && result > 3.2){document.getElementById("finalResult").innerHTML = "Your GPA is " + result + ". Congratulations undergraduate student! You are eligible to apply for the student assistant position. Please follow this link to the <a href = 'application.php'>CARIT application</a>.";}
            else if (status =="undergrad" && result <= 3.2){document.getElementById("finalResult").innerHTML = "Your GPA is " + result + ". Thank you for your interest in CARIT, undergraduate student. Unfortunately, your GPA does not meet the minimum requirements to apply for the student assistant position.";}
        }
     </script>
</head>
<body>
<div>
<!--header section-->
<header>
    <?php
        include("logophp.html")
    ?>
    <!--menu-->
    <?php
		include("menuphp.html");
	?>
</div> 
</header>
<h2>Apply to CARIT</h2>
<br>
<div id="apply">
    <p><strong>Available Positions</strong></p>
    <hr style="width:30%; height:1px; background-color: #000000; border:none;" /> 
    <p><strong>Student Assistant: </strong>CARIT is currently accepting applications for student assistant positions for the summer of 2019. This position will offer students the opportunity to broaden their knowledge in the areas of data management, data collection and analysis. The student will have a wide range of responsibilities including updating course materials and applied research. We will begin reviewing applications soon. Please view the requirements below and complete the forms to determine your eligibility.</p>
<br>
</div>
<br>
<br>
<!--required courses table-->  
    <table class="myTable">
        <tr>
            <th>Undergraduate Students: <br>GPA greater than <br>3.2 from the required courses below.</th>
            <th>Graduate Students: <br>GPA greater than 3.7<br> from the required courses below.</th>
        </tr>
            <tr>
            <td><p>CSE 3203 Mobile System Overview</a></td>
            <td><p>IT 7113 Data Visualization</a></td>
            </tr>
            <tr>
            <td><p>IT 4213 Mobile Web Development</a></td>
            <td><p>IT 6713 Business Intelligence</a></td>
            </tr>
            <tr>
            <td><p>CS 3410 Intro to Database Systems</a></td>
            <td><p>IT 6773 Practical Data Analytics</a></td> 
            </tr>
            <tr>
            <td><p>CSS 4412 Data Mining</a></td>
            <td><p>IT 5433 Database: Design and Application</a></td>
            </tr>
            <tr>
            <td><p>CS 3502 Operating Systems</a></td>
        </tr>
        </table>
    </div> 
<br>
<br>
<!--Eligibility form-->
<center><strong><font size="5">Eligibility Form</strong></center></font>
<hr style="width:50%; height:1px; background-color: #000000; border:none;" /> </hr>
<div id="radioForm">
<form name="profile">
    <center><strong>Select your current status then click 'Submit'.</strong></center>
    <br>
    <div id="status">
        <input type="radio" name="status" value="undergrad" />Undergraduate 
        <input type="radio" name="status" value="grad" />Graduate
    </div>   
        <br>
        <input type="button" class="button" value="Submit" onclick="submitRadio()" />
        <br>
    <hr style="width:50%; height:1px; background-color: #000000; border:none;" />  </hr>  
</div>
<br>
 <!--drop-down grade form-->
<div id="hideDrop">
<form name="newgrade1" id="testForm">
    <center><strong>Select your grades for the classes below then click 'Evaluate'.</strong></center>
    <br>
    <span class="undergradform">CSE 3203 Mobile System Overview:</span>
    <span class="gradform">IT 7113 Data Visualization:</span>
        <select name="grade1">
            <option value="" selected="selected">-</option>
            <option value="4">A</option>
            <option value="3">B</option>
            <option value="2">C</option>
            <option value="1">D</option>
            <option value="0">F</option>
        </select>
<br>
<form name="newgrade2">
    <span class="undergradform">IT 4213 Mobile Web Development:</span>
    <span class="gradform">IT 6713 Business Intelligence:</span>
        <select name="grade2">
            <option value="" selected="selected">-</option>
            <option value="4">A</option>
            <option value="3">B</option>
            <option value="2">C</option>
            <option value="1">D</option>
            <option value="0">F</option>
        </select>
<form name="newgrade3">
        <span class="undergradform">CS 3410 Intro to Database Systems: </span>
        <span class="gradform">IT 6773 Practical Data Analytics: </span>
            <select name="grade3">
                <option value="" selected="selected">-</option>
                <option value="4">A</option>
                <option value="3">B</option>
                <option value="2">C</option>
                <option value="1">D</option>
                <option value="0">F</option>
            </select>
<form name="newgrade4">
        <span class="undergradform">CSS 4412 Data Mining: </span>
        <span class="gradform">IT 5433 Database: Design and Applications: </span>
            <select name="grade4">
                <option value="" selected="selected">-</option>
                <option value="4">A</option>
                <option value="3">B</option>
                <option value="2">C</option>
                <option value="1">D</option>
                <option value="0">F</option>
            </select>
        </div> 
<div id="hideDrop2">
<form name="newgrade5">
    <span class="undergradform">CS 3502 Operating Systems: </span>
            <select name="grade5">
                <option value="" selected="selected">-</option>
                <option value="4">A</option>
                <option value="3">B</option>
                <option value="2">C</option>
                <option value="1">D</option>
                <option value="0">F</option>
            </select>
        </div>
<br>
    <div id="submitButton">
        <input type="button" class ="button" value="Evaluate" onclick="submitDrop()" />
    </div>   
    <br>
    <div>
    <p id="finalResult"></p>
    </div>
    </form>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div>
        <?php
            include("footerphp.html")
        ?>
    </div>
</body>
</html>  

<!DOCTYPE html>
    <html>
    <head>   
        <?php
            include("titlephp.html")
        ?>
    </head> 
    <body>
    <header>
    <div>
        <?php
            include("logophp.html")
        ?>
    </div>
    <div>    
        <?php
		    include("menuphp.html");
	    ?>
    </div>
  </header>

  <head>   
    <title>Center For Applied Research in Information Technology</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
<body>
  <br>
  <div id="apply">
      <p><strong>Application Form</strong></p>
      <hr style="width:30%; height:1px; background-color: #000000; border:none;" /> 
      <p>Please complete the application form below then click "submit".</p>
  <br>
<form name="information" method="post" action="formsubmit.php">
  <table class="myTable">
    <tr> 
      <td width="180"><p><strong>First Name</strong></td>
      <td><input type="text" name="fname" size="20" maxlength="20" /></td>
    </tr>
    <tr> 
      <td width="150"><p><strong>Last Name</strong></td>
      <td><input type="text" name="lname" size="20" maxlength="20" /></td>
    </tr>
    <tr> 
      <td width="150"><p><strong>KSU ID #</strong></td>
      <td><input type="text" name="id" size="20" maxlength="20" /></td>
    </tr>
    <tr> 
      <td width="180"><p><strong>Email</strong></td>
      <td><input type="text" name="email" size="20" maxlength="20" /></td>
    </tr>
    <tr> 
      <td width="180"><p><strong>Phone #</strong></td>
      <td><input type="text" name="phone" size="20" maxlength="20" /></td>
    </tr>
    <tr> 
      <td width="150"><p><strong>Street Address</strong></td>
      <td><input type="text" name="address" size="20" maxlength="20" /></td>
    </tr>
    <tr> 
      <td width="150"><p><strong>Zip Code</strong></td>
      <td><input type="text" name="zip" size="5" maxlength="5" /></td>
    </tr>
    <tr> 
      <td width="150"><p><strong>State</strong></td>
      <td><input type="text" name="state" size="2" maxlength="2" /></td>
    </tr>
    <tr> 
      <td><p><strong>Status</strong></td>
      <td><input type="radio" name="status" checked="checked" value="Undergraduate" />
        Undergraduate
        <input type="radio" name="status" value="Graduate" />
        Graduate</td>
    </tr>
    <tr> 
      <td><p><strong>Select locations where you are willing to work</strong></td>
      <input type="hidden" name="location[]" value="">
      <td><p><input type="checkbox" name="location[]" value="Marietta"/>Marietta
      <input type="checkbox" name="location[]" value="Kennesaw"/>Kennesaw
      </td>
    </tr>
    <tr> 
      <td><p><strong>What is your main area of insterest?</strong></td>
      <td><select name="interest">
          <option value="" selected="selected">-</option>
          <option value="Data Analytics">Data Analytics</option>
          <option value="Security">Security</option> 
          <option value="Enterprise Management">Enterprise Management</option>
          <option value="Healthcare IT">Healthcare IT</option>
          <option value="Software Engineering">Software Engineering</option>
      </select></td>
    </tr>
  </table>
  <p>
    <input type="submit" class ="button" value="Submit"/>
  </p>
</form>
</div> 
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
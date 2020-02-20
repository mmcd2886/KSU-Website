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

<body>
<br>
<br>	
<br>
<br>
<div id="apply">
	<p><strong>Application Results</strong></p>
		<table class="myTable">
        <tr>
            <td><p>First Name</a></td>
            <td><p><?php echo $_POST["fname"]?></a></td>
            </tr>
            <tr>
            <td><p>Last Name</a></td>
            <td><p><?php echo $_POST["lname"]?></a></td>
            </tr>
            <tr>
            <td><p>KSU ID #</a></td>
            <td><p><?php echo $_POST["id"]?></a></td>
            </tr>
            <tr>
            <td><p>Email</a></td>
            <td><p><?php echo $_POST["email"]?></a></td>
            </tr>
            <tr>
            <td><p>Phone #</a></td>
            <td><p><?php echo $_POST["phone"]?></a></td>
            </tr>
            <tr>
            <td><p>Street Address</a></td>
            <td><p><?php echo $_POST["address"]?></a></td>
            </tr>
            <tr>
            <td><p>Zip Code</a></td>
            <td><p><?php echo $_POST["zip"]?></a></td>
            </tr>
            <tr>
            <td><p>State</a></td>
            <td><p><?php echo $_POST["state"]?></a></td>
            </tr>
            <tr>
            <td><p>Select locations where you are willing to work</a></td>
            <td><p><?php
		        $length=count($_POST["location"]);
		        for ($i=0;$i<$length;$i++)
			    echo $_POST["location"][$i].' ';
	        ?></a></td> 
			</tr>
			<tr>
            <td><p>Status</a></td>
            <td><p><?php echo $_POST["status"]?></a></td> 
            </tr>
            <tr>
            <td><p>What is your main area of interest?</a></td>
            <td><p><?php echo $_POST["interest"]?></a></td>
			</tr>
		</table>
				
    </div> 
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
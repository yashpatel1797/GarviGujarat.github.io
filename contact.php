<?PHP

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $f_name = $_POST['fn'];
    $l_name = $_POST['ln'];
    $e_mail = $_POST['mail'];
	$phone = $_POST['mn'];
	$business =$_POST['bn'];
	$subject = $_POST['sub'];
	$message = $_POST['mess'];
	$gender = $_POST['gender'];
	$country = $_POST['select'];
	
	$uname = htmlspecialchars($f_name);
    $pword = htmlspecialchars($l_name);
	 
	$message =htmlspecialchars($message);
	 
	$database = "mydb";
	
	$db_handle = mysql_connect("localhost","root","");
	$db_found = mysql_select_db($database, $db_handle);
		
		if ($db_found) {
		    			
			$query = "INSERT INTO contact(Firstname,Lastname,Email,Phone,Business,Subject,Message,Gender,Country) 
			VALUES ('$f_name','$l_name','$e_mail','$phone','$business','$subject','$message','$gender','$country')";
			mysql_query($query);

			session_start();
			$_SESSION['login'] = "1";

			header ("Location: http://localhost/final/yash%20file/home.php");
            mysql_close($db_handle);
		}
	else {
		$errorMessage = "Database Not Found";
		mysql_close($db_handle);
	}
  }
?>
<html>
    <head>
        <style>
            body{
                text-align: center;
                font-family: courier;
                font-size: 20px;
                padding: 0;
                margin: auto;
                background-image: url("web_project/myphotos/image-back.jpg");
                background-attachment: fixed;
                background-repeat: no-repeat;
                background-size: auto;
            }
            form{
                margin:5% 30%;
                text-align: left;
                width: auto;
                height: auto;
                border: 1px solid gray;
                padding: 50px;
                padding-top: 0px;
                background-color: rgba(238, 238, 238, 0.81);
            }
            input{
                border: 1px solid gray;
                font-size: 20px;
                padding: 10px;
                margin: auto;
                margin: 3%;
            }
            textarea{
                margin: 3%;
            }
            select{
                border: 1px solid gray;
                padding:20pxpx;
                padding-right: 30px;
                margin: 3%;
                font-size: 20px;
            }
            #sub{
                background-color:#eee;
                border: 1px solid lightgray;
                padding: 5px 80px;
                color: #eee;
                background-color: gray;
            }   
            #sub:hover{
                transition: .3s;
                background-color: #eee;
                color: #454545;
            }
        </style>
    </head>
    <body>
        <form action="contact.php" name="myForm" method="post" onsubmit="return validate();" required>
            <h1>Contact Info...</h1>  
            <label>First Name</label><br>
            <input type="text" name="fn" placeholder="firstName Please..." required><br><br>
            <label>Last Name</label><br>
            <input type="text" name="ln" placeholder="lastName please..." required><br><br>
            <label>Email</label><br>
            <input type="email" name="mail" placeholder="abc@gmail.com" required><br><br>
            <label>Phone Number</label><br>

            <input type="number" name="mn" placeholder="(+91)5555222211" required><br><br>
            <label>Business Name</label><br>
            <input type="text" name="bn" required><br><br>

            <label>Subject *</label><br>
            <select name="sub" required>
                <option></option>
                <option>Technical Issue</option>
                <option>General Question</option>
                <option>other</option>
            </select><br><br>
            <label>Message</label><br>
            <textarea cols="50" rows="10" name="mess" placeholder="start type here..."required></textarea>
            <br><br>
            <label>Gender</label><br>
            <input type="radio" class="radio" name="gender" required>Male
            <input type="radio" class="radio" name="gender" required>Female<br><br>
            <label>Select Your Country</label><br>
            <select name="select">
                <option>------</option>
                <option>India</option>
                <option>U.S.A</option>
                <option>U.A.E</option>
                <option>Chin</option>
                <option>Pakistan</option>
                <option>Nepal</option>
                <option>russia</option>
            </select><br><br>
            <input id="sub" type="submit" name="submit" value="Submit">
        </form>
        <script>
            function validat(){
                var x = document.forms["myForm"]["fn"].value;
                var y = document.forms["myForm"]["ln"].value;
                var z = document.forms["myForm"]["mail"].value;
                var a = document.forms["myForm"]["mn"].value;
                var b = document.forms["myForm"]["bn"].value;
                if (x == "") {
                    alert("Please Enter First_Name");
                    return false;
                } else if (y == "") {
                    alert("please Enter Last_Name");
                    return false;
                } else if (z == "" || z == null) {
                    alert("please Enter Email");
                    return false;
                } else if (a == "") {
                    alert("please Enter your mobile number");
                    return false;
                }else if(b==""){
                    alert("please Enter your firm Name")
                }
            }

        </script>
    </body>
</html>
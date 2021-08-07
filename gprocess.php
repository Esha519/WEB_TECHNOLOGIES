<?php

		
				//Get form data
				$formdata = array
				(
					'name'=> $_POST["name"],
					'email'=> $_POST["email"],
					'gender'=>$_POST["gender"],
					'birthday'=> $_POST["birthday"],
					'phonenumber'=> $_POST["phonenumber"],
					'otp'=>$_POST["otp"],
					'presentAddress'=> $_POST["presentAddress"],
					'permanentAddress'=>$_POST["permanentAddress"],
					'ssc'=>$_POST["ssc"],
					'hsc'=>$_POST["hsc"],
					'cgpa'=>$_POST["cgpa"]
				);
						
				
				$existingdata = file_get_contents('gdata.json');
				$tempJSONdata = json_decode($existingdata);
				$tempJSONdata[] =$formdata;
				
				$jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
				
			
				if(file_put_contents("gdata.json", $jsondata))
			    {
					echo "Application done <br>";

				}
				else 
					echo "no data saved";
			
						
				$data = file_get_contents("gdata.json");
				$mydata = json_decode($data);	
		//}
//}	
?>
<!DOCTYPE html>
<html>
<body>
<br>
<a href="HomePage.php"> Go Back To Home Page </a>
<br>

</body>
</html>

	<script type="text/javascript">
		function validateform()
		{  
			var name=document.myform.name.value; 
			var email=document.myform.email.value;
			var contactno=document.myform.contactno.value;  
			  
			if (name==null || name=="")
			{  
			  alert("Name can't be blank");  
			  return false;  
			}
			else if (email==null || email=="")
			{  
			  alert("email can't be blank");  
			  return false;  
			}else if (contactno==null || contactno=="")
			{  
			  alert("Contactno can't be blank");  
			  return false;  
			}
		}
 		 function checkEmpty() 
		{
		  	if (document.myform.name.value = "") 
		  	{
		  		alert("Name can't be blank");
		        return false;  
		  	}
		 }  
		function checkName() 
		{
			if (document.getElementById("name").value == "") 
			{
			  	document.getElementById("nameErr").innerHTML = "Name can't be blank";
			  	
			  	document.getElementById("nameErr").style.color = "red";
			  	document.getElementById("name").style.borderColor = "red";
			}
			
			else
			{
			  	document.getElementById("nameErr").innerHTML = "";
				document.getElementById("name").style.borderColor = "black";
			}
			
        }
        function checkEmail() 
		{
			reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@(([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3})|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			if (document.getElementById("email").value == "") 
			{
			  	document.getElementById("emailErr").innerHTML = "Email can't be blank";
			  	document.getElementById("emailErr").style.color = "red";
			  	document.getElementById("email").style.borderColor = "red";
			}else if(!reg.test(document.getElementById("email").value))
            {   document.getElementById("emailErr").innerHTML = "Invalid Email format";
			  	document.getElementById("emailErr").style.color = "red";
			  	document.getElementById("email").style.borderColor = "red";
            }
			else
			{
			  	document.getElementById("emailErr").innerHTML = "";
				document.getElementById("email").style.borderColor = "black";
			}
			
        }
        function checkContactno() 
		{
			if (document.getElementById("contactno").value == "") 
			{
			  	document.getElementById("contactnoErr").innerHTML = "Contactno can't be blank";
			  	document.getElementById("contactnoErr").style.color = "red";
			  	document.getElementById("contactno").style.borderColor = "red";
			}
			else
			{
			  	document.getElementById("contactnoErr").innerHTML = "";
				document.getElementById("contactno").style.borderColor = "black";
			}
			
        }
	</script>

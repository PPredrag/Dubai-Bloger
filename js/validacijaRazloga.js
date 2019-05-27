
function pokreni(){
			var ime =document.getElementById("name").value;
			var email =document.getElementById("email").value;
			var provera = document.getElementById("comment").value;
			var znakovi = provera.match(/^((?!&|=|function|#|<|>)[\s\S])*$/g);
			var val = email.match(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);

	if(ime =="" && email =="" && provera =="")
	{
		document.getElementById("errorComment").innerHTML="Please Fill All Fields";
			document.getElementById("errorComment").style.backgroundColor="#a82121";
				document.getElementById("errorComment").style.borderRadius = "5px";
				document.getElementById("errorComment").style.width="auto";
				document.getElementById("errorComment").style.marginTop="50px";
				document.getElementById("errorComment").style.padding="8px";
				document.getElementById("errorComment").style.border="1px solid gray";
				document.getElementById("errorComment").style.color="white";
	
	} 	

		if(ime !="" && email !="" && provera !="")  
		{
			if(znakovi == null)
			{
				document.getElementById("errorComment").innerHTML="&, =, #, < , > Are Not Allowed";
				document.getElementById("errorComment").style.backgroundColor="#a82121";
				document.getElementById("errorComment").style.borderRadius = "5px";
				document.getElementById("errorComment").style.width="auto";
				document.getElementById("errorComment").style.marginTop="50px";
				document.getElementById("errorComment").style.padding="8px";
				document.getElementById("errorComment").style.border="1px solid gray";
				document.getElementById("errorComment").style.color="white";
		    }
				else if(val==null)
		
			{
			document.getElementById("errorComment").innerHTML="Email is not valid";
			document.getElementById("errorComment").style.backgroundColor="#a82121";
			document.getElementById("errorComment").style.borderRadius = "5px";
			document.getElementById("errorComment").style.marginTop="50px";
			document.getElementById("errorComment").style.padding="8px";
			document.getElementById("errorComment").style.border="1px solid gray";
			document.getElementById("errorComment").style.color="white";
		
			}
		
		else{
		$.ajax({
			url:"../classes/porukeClick.php",
			type:"POST",
			data:$("#frmBox").serialize(), //The .serialize() method creates a text string in standard URL-encoded notation. It can act on a jQuery object that has selected individual form controls, such as <input> , <textarea> , and <select> : $( "input, textarea, select" ).serialize();
			success:function(response){			
			$("form").trigger("reset");
				$("#errorComment").html(response);
				$("#errorComment").css("background-color", "#357a44");
				$("#errorComment").css("width", "180px");
				$("#errorComment").css("marginTop", "50px");
				$("#errorComment").css("padding", "8px");
				$("#errorComment").css("border", "1px solid gray");
				$("#errorComment").css("borderRadius", "5px");
				$("#errorComment").css("color", "white");
				
				//$("#errorComment").hide(3000);	
			}
		});
		$("#errorComment")[0].reset();
		return false;
			}
		}

}

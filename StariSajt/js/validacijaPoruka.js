

	function pokreni2(){
	var ime =document.getElementById("ime").value;
	var email =document.getElementById("emailAdresa").value;
	var provera = document.getElementById("area").value;
	var znakovi = provera.match(/^((?!&|=|function|#|<|>)[\s\S])*$/g);
	var val = email.match(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);

if(ime =="" && email =="" && provera ==""){
		document.getElementById("Comment").innerHTML="Please Fill All Fields";
		document.getElementById("Comment").style.backgroundColor="#a82121";
		document.getElementById("Comment").style.borderRadius = "5px";
		document.getElementById("Comment").style.marginTop="50px";
		document.getElementById("Comment").style.padding="8px";
		document.getElementById("Comment").style.border="1px solid gray";
		document.getElementById("Comment").style.color="white";
	
}
		if(ime !="" && email !="" && provera !="")  {
			if(znakovi == null){
				document.getElementById("Comment").innerHTML="&, =, #, < , > Are Not Allowed ";
				document.getElementById("Comment").style.backgroundColor="#a82121";
				document.getElementById("Comment").style.borderRadius = "5px";
				document.getElementById("Comment").style.width="auto";
				document.getElementById("Comment").style.marginTop="50px";
				document.getElementById("Comment").style.padding="8px";
				document.getElementById("Comment").style.border="1px solid gray";
				document.getElementById("Comment").style.color="white";
		}	else if(val==null)
		
			{
			document.getElementById("Comment").innerHTML="Email is not valid";
			document.getElementById("Comment").style.backgroundColor="#a82121";
			document.getElementById("Comment").style.borderRadius = "5px";
			document.getElementById("Comment").style.marginTop="50px";
			document.getElementById("Comment").style.padding="8px";
			document.getElementById("Comment").style.border="1px solid gray";
			document.getElementById("Comment").style.color="white";
		
			}
		else{
		$.ajax({
			//url:"classes/mailer.php",
			url:"classes/mailer.php",
			type:"POST",
			data:$("#frm").serialize(), //The .serialize() method creates a text string in standard URL-encoded notation. It can act on a jQuery object that has selected individual form controls, such as <input> , <textarea> , and <select> : $( "input, textarea, select" ).serialize();
			success:function(response){	
				$("form").trigger("reset");
				$("#Comment").html(response);
				$("#Comment").css("background-color", "#357a44");
				$("#Comment").css("width", "180px");
				$("#Comment").css("marginTop", "50px");
				$("#Comment").css("padding", "8px");
				$("#Comment").css("border", "1px solid gray");
				$("#Comment").css("borderRadius", "5px");
				$("#Comment").css("color", "white");
				
				//$("#Comment").hide(3000);
				
				
			}
		});
		//$("#Comment")[0].reset();
		//var form = document.getElementById('frmBox').reset();
		return false;
			}
		}

}

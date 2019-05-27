           <?php 	
	  include"../classes/conect.php";
	 // include"../classes/porukeClick.php";
	?>
	
	<div id="comments">
	<h2 id="msg"></h2>
		<div id="sakriKomentar">
				<?php				
					class porukeIspisJ
					{
						public function ispisiPorukuJ()
							{
							$q = "SELECT * FROM komentari WHERE idvesti= 3";
							$rez = DB::getInstance()->query($q);
							while($rw = $rez->fetch(PDO::FETCH_OBJ))
							{
								?>

						  <div id="sakriKomentar">
							<h2>Comments</h2>
							<ul>
							  <li>
								<article>
								  <header>
									<figure class="avatar"><img class="srce" src="../images/srce.png" alt=""></figure>
									<address>
									By <a href="#"><?php echo $rw->name ?></a>
									</address>
									<time datetime="2045-04-06T08"><?php echo $rw->datum ?></time>
								  </header>
								  <div class="comcont">
									<p><?php echo $rw->text ?></p>
								  </div>
								</article>
							  </li>
							</ul>
							</div>
						<?php 	
							$duzina=count((array)$rw); 	
								
							}
							
						   }
						 
						}
		$rr = new porukeIspisJ();
		$rr->ispisiPorukuJ();
						?></div>
						<button class="pritisni dugme" type="button">Show Comments <?php //echo $duzina ?></button>
		
	  	 <button class="klik dugme" type="button" style="float:right;">Send Comment</button>
			<div id="sakriUnos">

<h2>Write A Comment</h2>
		<!--<button class="dugme" type="button">Hide Form</button> -->
        <form id="frmBox">
          <div class="one_third first">
            <label for="name">Name <span>*</span></label>
            <input type="text" name="name" id="name">
          </div>
          <div class="one_third">
            <label for="email">Mail <span>*</span></label>
            <input type="email" name="email" id="email">
          </div>
          <div class="one_third">
            <label for="url">Website</label>
            <input type="text" name="url" id="url">
          </div>
          <div class="block clear">
            <label for="comment">Your Comment</label>
            <textarea name="comment" id="comment" cols="25" rows="10"></textarea>
          </div>
          <div>
            <input type="button" name="submit" value="Send Comment" class="porukapolsata dugme" onclick="return pokreni();"/>
            &nbsp;
            <input type="reset" name="reset" value="Delete Comment" class="dugme">
          </div>
        </form>
		</div>


	  </div>
<span id="errorComment"></span>
<script>
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
			else
			{
				$.ajax
				({
				url:"../classes/jumeriahKlik.php",
				type:"POST",
				data:$("#frmBox").serialize(), //The .serialize() method creates a text string in standard URL-encoded notation. It can act on a jQuery object that has selected individual form controls, such as <input> , <textarea> , and <select> : $( "input, textarea, select" ).serialize();
				success:function(response)
				{	
					$(".one_third first").trigger("reset");
					$("#errorComment").html(response);
					$("#errorComment").css("background-color", "#357a44");
					$("#errorComment").css("width", "180px");
					$("#errorComment").css("marginTop", "50px");
					$("#errorComment").css("padding", "8px");
					$("#errorComment").css("border", "1px solid gray");
					$("#errorComment").css("borderRadius", "5px");
					$("#errorComment").css("color", "white");
				}
				});
		return false;
			}
		}

}

  

</script>	
	  
	  
	  
	  
	  
	  
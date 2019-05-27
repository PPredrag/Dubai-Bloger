           <?php 	
	  include"../classes/conect.php";
	?>
	
	<div id="comments">
	<h2 id="msg"></h2>
		<div id="sakriKomentar">
				<?php				
					class porukeIspisJ
					{
						public function ispisiPorukuJ()
							{
							$q = "SELECT * FROM komentari WHERE idvesti= 6";
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
        <form action="../classes/top10Poruka.php" method="POST">
          <div class="one_third first">
            <label for="name">Name <span>*</span></label>
            <input type="text" name="name" id="name" value="" size="22" required>
          </div>
          <div class="one_third">
            <label for="email">Mail <span>*</span></label>
            <input type="email" name="email" id="email" value="" size="22" required>
          </div>
          <div class="one_third">
            <label for="url">Website</label>
            <input type="text" name="url" id="url" value="" size="22">
          </div>
          <div class="block clear">
            <label for="comment">Your Comment</label>
            <textarea name="comment" id="comment" cols="25" rows="10"></textarea>
          </div>
          <div>
            <input type="submit" name="submit" value="Send Comment" class="porukapolsata" onclick="klik()">
            &nbsp;
            <input type="reset" name="reset" value="Reset Form">
          </div>
        </form>
		</div>

	  </div>

	
	  
	  
	  
	  
	  
	  
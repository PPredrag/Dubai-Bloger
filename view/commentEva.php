<?php
include"../classes/conect.php";
?>
<div id="comments">
	<h2 id="msg"></h2>
	<div id="sakriKomentar">
		<?php
		class porukeIspisF
		{
		public function ispisiPorukuF()
		{
		$q = "SELECT * FROM komentari WHERE idvesti= 9";
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
	DB::close();
		
			}	
		}
	}
	$rr = new porukeIspisF();
	$rr->ispisiPorukuF();
?></div>
<button class="pritisni dugme" type="button">Show Comments</button>

<button class="klik dugme" type="button" style="float:right;">Send Comment</button>
<div id="sakriUnos">
	
	<h2>Write A Comment</h2>

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
<script src="../js/vaidacijaEva.js"></script>
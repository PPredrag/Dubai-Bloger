<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="../mojcss.css" rel="stylesheet" type="text/css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</head>
<?php include('wraper1.php')?>
<body id="top">
<?php include('padajuciMeniInclude.php'); ?>
<div class="wrapper row3">
 <div id="breadcrumb" class="hoc clear"> 
    <ul>
      <li><a href="../index.php">Home</a></li>
      <li><a href="instagram.php">Instagaram Galery</a></li>
    </ul>
  </div>
</div>
<main class="hoc container clear"> 

<div id="instafeed" class="instagramALL">
</div>
<button id="load-more" class="dugme instaDugme">More Photos</button>
</main>

<?php include"footerInclude.php";?>
<?php include('footer2.php'); ?>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JS -->
<script src="../js/instafeed.min.js" type="text/javascript"></script>
<script src="../js/instagramALL.js" type="text/javascript"></script> 
<script src="../js/instagramLoadMore.js" type="text/javascript"></script>
<script src="../js/readMoreLess.js"></script>
<script src="../js/jQuerySakri.js"></script>
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
<script src="../js/contact.js"></script>
<!-- IE9 Placeholder Support -->
<script src="../layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->

<script>

</script>
</body>
</html>
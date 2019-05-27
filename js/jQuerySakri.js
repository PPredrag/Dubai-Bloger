$(document).ready(function(){
$("#sakriUnos").hide();
$(".klik").click(function() {
$("#sakriUnos").slideToggle(300);
$(".klik").css("display","none");
});
});

$(document).ready(function() {
$("#sakriKomentar").hide();
$(".pritisni").click(function() {
$("#sakriKomentar").slideToggle(300);
$(".klik").css("float", "left");
$(".pritisni").css("display","none")
});
});

$(document).ready(function(){
var feed = new Instafeed({
	get: "user",
	userId: "1178780979",
	limit:12,
	accessToken: "212699293.1677ed0.160ddbdbe0c0433aa56890198bf4cfd5",
	clientId: "10c59f7fccb74efa9223eba33da37f14",
	sortBy: "most-recent"
	
});
  feed.run();
  });
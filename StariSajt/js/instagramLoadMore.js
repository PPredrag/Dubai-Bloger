    var loadButton = document.getElementById('load-more');
    var feed = new Instafeed({
	get: "user",
	limit:30,
	userId: "1178780979",
	accessToken: "212699293.1677ed0.160ddbdbe0c0433aa56890198bf4cfd5",
	clientId: "10c59f7fccb74efa9223eba33da37f14",
        // every time we load more, run this function
        after: function() {
            // disable button if no more results to load
            if (!this.hasNext()) {
                loadButton.setAttribute('disabled', 'disabled');
            }
        },
    });

    // bind the load more button
    loadButton.addEventListener('click', function() {
        feed.next();
    });

    // run our feed!
    feed.run();
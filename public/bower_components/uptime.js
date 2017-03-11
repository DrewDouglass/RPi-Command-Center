function runUptimeCheck() {

	var getPiUptime = function() {
		$.ajax({
			url: '/index.php/uptime',
			type: 'POST'
		})
		.done(function(data) {
			alert(data);
		})
		.fail(function() {
			console.log("error with AJAX call to uptime");
		});
		
	}

}
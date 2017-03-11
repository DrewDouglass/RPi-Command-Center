jQuery(document).ready(function($) {

	//Temp script
	//Set up Temp chart
	function runTempCheck(){
		var tempChart = $("#temp-chart");
		var highestTemp = 0;
		var lowestTemp = 100;
		var data = {
		    labels: ["Raspberri Pi Temp"],
		    datasets: [
		        {
		            label: "Temp in Celsius",
		            borderWidth: 1,
		            backgroundColor: ["rgba(75, 192, 192, 0.4)"],
		            data: [1],
		        }
		    ]
			};
		var myBarChart = new Chart(tempChart, {
		    type: 'bar',
		    data: data,
		    options: {
		    	responsive: true
		    }
		});
		var getPiTemp = function() { 
			$.ajax({
				url: '/index.php/temp',
				type: 'POST'
			})
			.done(function(tempReturn) {
				myBarChart.data.datasets[0].data[0] = tempReturn;
				myBarChart.update();
				$("#current-temp").html(tempReturn);
				if(tempReturn > highestTemp) {
					$("#highest-temp").html(tempReturn);
					highestTemp = tempReturn;
				}
				if(tempReturn < lowestTemp) {
					$("#lowest-temp").html(tempReturn);
					lowestTemp = tempReturn;
				}
			})
			.fail(function() {
				console.log("Error getting AJAX temps.");
			});
		}
		//run it initially, then every 5 secs.
		getPiTemp();
		setInterval(function() {
			getPiTemp();
		}, 15000);

	}
	runTempCheck();
	/***** UPTIME *****/
	function runUptimeCheck() {
		var getPiUptime = function() {
			$.ajax({
				url: '/index.php/uptime',
				type: 'POST'
			})
			.done(function(data) {
				$("#uptime").html(data);
			})
			.fail(function() {
				console.log("error with AJAX call to uptime");
			});
			
		}
		getPiUptime();
		setInterval(function() {
			getPiUptime();
		}, 100000);

	}
	runUptimeCheck();

});
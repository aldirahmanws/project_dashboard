<script>
	var lineChartData = {
		labels: ['1', 'February', 'March', 'April', 'May', 'June', 'July'],
		datasets: [{
			label: 'Eror',
			borderColor: window.chartColors.red,
			backgroundColor: window.chartColors.red,
			fill: false,
			data: [
				10,12
			],
			yAxisID: 'y-axis-1',
		}, {
			label: 'My Second dataset',
			borderColor: window.chartColors.blue,
			backgroundColor: window.chartColors.blue,
			fill: false,
			data: [
				randomScalingFactor(),
				randomScalingFactor(),
				randomScalingFactor(),
				randomScalingFactor(),
				randomScalingFactor(),
				randomScalingFactor(),
				randomScalingFactor()
			],
			yAxisID: 'y-axis-2'
		}]
	};

</script>
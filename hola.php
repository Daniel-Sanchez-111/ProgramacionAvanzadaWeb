
<!DOCTYPE html>
<html>
<head>
	<title>hola</title>
	<style type="text/css">
		canvas{
			background-color: white;
		}
	</style>

</head>
<body>
	<h2>hola</h2>
	<canvas id="canvas" width="500" height="600">hola</canvas>
	<script type="text/javascript">
		var cv = document.getElementById('canvas');
		var ctx = cv.getContext('2d');
		ctx.fillStyle = "red";
		ctx.fillRect(10,10,50,50);	
		ctx.fillStyle = "green";
		ctx.fillRect(30,30,50,50);	
		ctx.fillStyle = 'rgba(0,0,200,0.5)';
		ctx.fillRect(50,60,50,50);	
		
		ctx.beginPath();
		ctx.arc(200, 75, 50, 0, 2 * Math.PI);
		ctx.stroke();
		ctx.beginPath();
		ctx.arc(350, 75, 50, 0, 2 * Math.PI);
		ctx.stroke();
		ctx.fill();

		/*ctx.moveTo(0,0);
		ctx.lineTo(300,200);
		ctx.moveTo(500,200);
	
		ctx.lineTo(200,300);
		ctx.lineTo(200,300);
		ctx.lineTo(200,200);
		ctx.moveTo(200,200);
		ctx.lineTo(200,300);
		ctx.strokeStyle = "blue";
		ctx.stroke();
		ctx.fill();*/
	</script>
</body>
</html>
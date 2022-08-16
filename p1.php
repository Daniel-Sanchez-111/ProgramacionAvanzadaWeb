<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		canvas{
			background-color: white;
		}
	</style>
</head>
<body>
	<canvas id="canvas" width="800" height="800">hola</canvas>
	<img id = "imagen" src="spiral.jpg" style="display:none">
	<script type="text/javascript">
		
		var cv = document.getElementById('canvas');
		var ctx = cv.getContext('2d');
        ctx.font = "30px Arial";
        ctx.fillText("Daniel Sanchez",130,50);
		ctx.strokeText("Daniel Sanchez",300,50);

		var grd = ctx.createLinearGradient(0,0,600,0);
		grd.addColorStop(0,"yellow");
		grd.addColorStop(1,"blue");

		
		/*ctx.fillStyle = "green";
		ctx.fillRect(30,30,50,50);	
		ctx.fillStyle = 'rgba(0,0,200,0.5)';
		ctx.fillRect(50,60,50,50);	

		ctx.fillStyle = grd;
		ctx.fillRect(300,50,360,80);	
		
		var grd = ctx.createRadialGradient(75,50,5,90,60,100);
		grd.addColorStop(0,"yellow");
		grd.addColorStop(1,"blue");

		ctx.fillStyle = grd;
		ctx.fillRect(0,0,200,200);

		var img = document.getElementById("imagen");
		ctx.drawImage(img,100,100);

		ctx.beginPath();
		ctx.arc(200, 75, 50, 0, 2 * Math.PI);
		ctx.stroke();
		ctx.beginPath();
		ctx.arc(350, 75, 50, 0, 2 * Math.PI);
		ctx.stroke();
		ctx.fill();
		*/
		var color="red";
		
		function generateRandomColor() {
			var letters = '0123456789ABCDEF';
			var color = "#";
			for (var i = 0; i < 6; i++) {
				color += letters[Math.floor(Math.random() * 16)];
			}
			return color;
		}
		cv.addEventListener('mouseover',function(){
			
			color=generateRandomColor();
			console.log(color);
		})
		cv.addEventListener('click',function(e){
			console.log(e.x);
			ctx.fillStyle=color;
			ctx.beginPath();
			ctx.arc(e.offsetX, e.offsetY, 50, 0, 2 * Math.PI);
			ctx.stroke();
			ctx.fill();
		});
			

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
		ctx.fill();

		function circulo(){
			ctx.beginPath();
			ctx.arc(600, 75, 50, 0, 2 * Math.PI);
			ctx.stroke();
			ctx.fill();
		}*/
	</script>
</body>
</html> 
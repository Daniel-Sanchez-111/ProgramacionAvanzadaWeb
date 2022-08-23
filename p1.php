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
	<script type="text/javascript">
		
		var cv = null//document.getElementById('canvas');
		var ctx = null//cv.getContext('2d');
		var super_x=100,super_y=400;
        //ctx.font = "30px Arial";
        //ctx.fillText("Daniel Sanchez",130,50);
		//ctx.strokeText("Daniel Sanchez",300,50);
		//var grd = ctx.createLinearGradient(0,0,600,0);
		//grd.addColorStop(0,"yellow");
		//grd.addColorStop(1,"blue");
		
        function run(){
                window.requestAnimationFrame(paint);
                cv = document.getElementById('canvas');
                ctx = cv.getContext('2d');
                paint();
        }


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
		
		document.addEventListener('keydown',function(e){
			console.log(e);
			if(e.keyCode==87 || e.keyCode==38){
				super_y-=20;
			}
			if(e.keyCode==68 || e.keyCode==39){
				super_x+=20;
			}
			if(e.keyCode==83 || e.keyCode==40){
				super_y+=20;
			}
			if(e.keyCode==65 || e.keyCode==37){
				super_x-=20;
			}
			//paint();
		})		
		window.addEventListener('load',run,false);

		function paint(){
            window.requestAnimationFrame(paint);
			ctx.fillStyle="white";
			ctx.fillRect(0,0,800,800);
			ctx.fillStyle="red";
            super_x+=10;
            super_y+=10;
            if(super_x>=500){
                super_x=0;
                super_y=0;
            }
           
			ctx.fillRect(super_x,super_y,50,50);
		}
		/*function generateRandomColor() {
			var letters = '0123456789ABCDEF';
			var color = "#";
			for (var i = 0; i < 6; i++) {
				color += letters[Math.floor(Math.random() * 16)];
			}
			return color;
		}
		var fig='arc';
		cv.addEventListener('mouseout',function(){
			
			fig=(fig=='arc')?'rec':'arc';
		})
		var press = false;
		cv.addEventListener('mousedown',function(){
			press = true;
			
		})
		cv.addEventListener('mouseup',function(){
			press = false;
			
		})
		cv.addEventListener('mouseover',function(){
			
			r=Math.floor(Math.random()*(255 - 0) + 1)
			g=Math.floor(Math.random()*(255 - 0) + 1)
			b=Math.floor(Math.random()*(255 - 0) + 1)
			
		})
		cv.addEventListener('mousemove',function(e){
			if(press){
				ctx.fillRect(e.offsetX,e.offsetY,10,10);	
				ctx.fillStyle = 'rgba(0,0,0,1)';
			}
			
			
						
		})
		*/
        window.requestAnimationFrame = (function () {
            return window.requestAnimationFrame ||
                window.webkitRequestAnimationFrame ||
                window.mozRequestAnimationFrame ||
                function (callback) {
                    window.setTimeout(callback, 17);
                };
        }());

		/*cv.addEventListener('click',function(e){
			if(fig=='arc'){
				ctx.beginPath();
				ctx.arc(e.offsetX, e.offsetY, 50, 0, 2 * Math.PI);
				ctx.fillStyle="rgba("+ r + ","+g+","+b+",0.3)";
				ctx.stroke();
				ctx.fill();
			}else{
				ctx.fillStyle="rgba("+ r + ","+g+","+b+",0.5)";
				ctx.fillRect(e.offsetX,e.offsetY,50,50);	
				ctx.strokeRect(e.offsetX,e.offsetY,50,50)	
			}
			
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
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
		
		var cv = null;
		var ctx = null;
        var player= null; 
        var se_tocan=false;
        var direccion='right';
		var score=0;
        var speed=10;
        function run(){
                window.requestAnimationFrame(paint);
                cv = document.getElementById('canvas');
                ctx = cv.getContext('2d');
                player = new  cuadro(0,0,10,10,"blue");
                paint();
        }


		
		var color="red";
		
		document.addEventListener('keydown',function(e){
			console.log(e);
			if(e.keyCode==87 || e.keyCode==38){
				direccion='up';
			}
			if(e.keyCode==68 || e.keyCode==39){
				direccion='right';
			}
			if(e.keyCode==83 || e.keyCode==40){
				direccion='down';
			}
			if(e.keyCode==65 || e.keyCode==37){
				direccion='left';
			}
			//paint();
		})		

		window.addEventListener('load',run,false);

		function paint(){
            window.requestAnimationFrame(paint);
            ctx.fillStyle = "red";
            ctx.fillRect=(0,0,500,500);
            player.paint(ctx);
			
            update();
		}

        function update(){
            if(direccion='up'){
				player.y-=speed;
			}
			if(direccion='right'){
				player.x+=speed;;
			}
			if(direccion='down'){
				player.y+=speed;
			}
			if(direccion='left'){
				plauer.x-=speed;
			}
        }


        window.requestAnimationFrame = (function () {
            return window.requestAnimationFrame ||
                window.webkitRequestAnimationFrame ||
                window.mozRequestAnimationFrame ||
                function (callback) {
                    window.setTimeout(callback, 17);
                };
        }());

        function cuadro(x,y,w,h,c){
            this.x=x;
            this.y=y;
            this.w=w;
            this.h=h;
            this.c=c;
            
            this.se_tocan = function(target){
                if(this.x < target.x + target.w &&

                    this.x + this.w > target.x && 
                    this.y < target.y + target.h && 
                    this.y + this.h > target.y)
                    {
                     return true;	 
                        console.log("hola");
                    }  

                    
            
            this.paint = function(ctx){
                ctx.fillStyle=this.c;
                ctx.fillRect(this.x,this.y,this.w,this.h);
                ctx.strokeRect(this.x,this.y,this.w,this.h);
            }
        }
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
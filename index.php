<?php
	if(isset($_POST['password'])){
		if($_POST['password']=='lavneet'){
			session_start();
			$_SESSION['loggedIn'] = true;
			$_SESSION['time'] = time();
			header('Location: main.php'); # Change 'main.php' to the greeting card file name.
		}else{
			$addClass = 'shake';
		};
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<style rel='stylesheet' type="text/css">
		html, body{margin:0;height:100%;}
		body{
		  background: linear-gradient(
		    90deg, #543958 0%,
		    #a06060 25%,#bea27b 50%,
		    #9ca898 75%,#506d8d 100%) no-repeat;
		  background-position: fixed;
		  background-size: 200% auto;
		  -webkit-animation: gradient 60s linear
		    infinite alternate;
		  -ms-animation: gradient 60s linear
		    infinite alternate;
		  -moz-animation: gradient 60s linear
		    infinite alternate;
		  -o-animation: gradient 60s linear
		    infinite alternate;
		}
		@-webkit-keyframes gradient{
		  0%{background-position:0% 0%}
		  50%{background-position:100% 0%}
		  100%{background-position:0% 0%}
		}
		@-ms-keyframes gradient{
		  0%{background-position:0% 0%}
		  50%{background-position:100% 0%}
		  100%{background-position:0% 0%}
		}
		@-o-keyframes gradient{
		  0%{background-position:0% 0%}
		  50%{background-position:100% 0%}
		  100%{background-position:0% 0%}
		}
		@-moz-keyframes gradient{
		  0%{background-position:0% 0%}
		  50%{background-position:100% 0%}
		  100%{background-position:0% 0%}
		}
		::-webkit-input-placeholder {
		   color: rgba(255,255,255,0.5);
		}
		:-moz-placeholder {
		   color: rgba(255,255,255,0.5);
		}
		::-moz-placeholder {
		   color: rgba(255,255,255,0.5);
		}
		:-ms-input-placeholder {
		   color: rgba(255,255,255,0.5);
		}
		.wrap{
		  width:250px;height:70px;
		  background:rgba(255,255,255,0.1);
		  position:absolute;
		  top:0;left:0;right:0;bottom:0;
		  margin:auto;
		  border:2px solid rgba(255,255,255,0);
		  font: 16px verdana;
		  transition:0.2s;
		  -webkit-animation:load 0.5s;-ms-animation:load 0.5s;-moz-animation:load 0.5s;-o-animation:load 0.5s;
		}
		.wrap:hover{
		  border-bottom-color:rgba(255,255,255,0.2);
		}
		@-webkit-keyframes load{
		  0%{top:-10%;opacity:0}
		  100%{top:0;opacity:1}
		}
		@-ms-keyframes load{
		  0%{top:-10%;opacity:0}
		  100%{top:0;opacity:1}
		}
		@-moz-keyframes load{
		  0%{top:-10%;opacity:0}
		  100%{top:0;opacity:1}
		}
		@-o-keyframes load{
		  0%{top:-10%;opacity:0}
		  100%{top:0;opacity:1}
		}
		.shake{
		  -webkit-animation:shake 0.5s;-ms-animation:shake 0.5s;-o-animation:shake 0.5s;-moz-animation:shake 0.5s;
		  -ms-animation:shake 0.5s;-ms-animation:shake 0.5s;-o-animation:shake 0.5s;-moz-animation:shake 0.5s;
		  -o-animation:shake 0.5s;-ms-animation:shake 0.5s;-o-animation:shake 0.5s;-moz-animation:shake 0.5s;
		  -moz-animation:shake 0.5s;-ms-animation:shake 0.5s;-o-animation:shake 0.5s;-moz-animation:shake 0.5s;
		  animation-fill-mode: forwards;
		}
		@-webkit-keyframes shake{
		  0%{border-color:brown;}
		  20%{left:-2%;}
		  40%{left:2%;}
		  60%{left:-0.5%;}
		  80%{left:0.5%;}
		  100%{left:0;border-color:brown;}
		}
		@-ms-keyframes shake{
		  0%{border-color:brown;}
		  20%{left:-2%;}
		  40%{left:2%;}
		  60%{left:-0.5%;}
		  80%{left:0.5%;}
		  100%{left:0;border-color:brown;}
		}
		@-moz-keyframes shake{
		  0%{border-color:brown;}
		  20%{left:-2%;}
		  40%{left:2%;}
		  60%{left:-0.5%;}
		  80%{left:0.5%;}
		  100%{left:0;border-color:brown;}
		}
		@-o-keyframes shake{
		  0%{border-color:brown;}
		  20%{left:-2%;}
		  40%{left:2%;}
		  60%{left:-0.5%;}
		  80%{left:0.5%;}
		  100%{left:0;border-color:brown;}
		}
		.wrap input[type='submit']{
		  position:absolute;visibility:hidden;
		}
		.wrap input[type='password']{
		  width:70%;height:100%;
		  position:absolute;left:0;top:-2px;
		  border:0;background:rgba(255,255,255,0.0);
		  outline:0;padding:0 5%;
		  outline-bottom: 2px;
		  font-size:20px;
		}
		.wrap input[type='password']:focus{
		  border-color:rgba(255,255,255,0.3);
		}
		.wrap .proceed{
		  width:20%;height:100%;
		  display:block;position:absolute;
		  left:80%;
		  font-size:50px;text-align:center;
		  color:rgba(0,0,0,0.7);
		  transition:0.2s;
		}
		.wrap .proceed:hover{
		  left:81.5%;
		  color:rgba(0,0,0,0.8);
		}
		.wrap .proceed:active{
		  color:rgba(0,0,0,1);
		}
	</style>
</head>
<body>
	<form action="index.php" method="POST">
	  <div class="wrap <?php echo $addClass ?>">
	    <input type="password" placeholder="Enter" name='password' />
	    <label class='proceed' for="proceed">&#10095</label>
	    <input id='proceed' type="submit" value='>' />
	  </div>
	</form>
</body>
</html>

<style>body{
	margin: 0;
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	background-color: white;
}
.twt-main{
	height: 100%;
	width: 100%;
}
.twt-login{
	display: inline-grid;
    grid-template-columns: 1fr;
    grid-template-rows: 150px 1fr;
    width: 50%;
    height: 100vh;
    position: relative;
	background-color: white;
	float: right;
}
.twitterIcon-bird{
	position: absolute;
	width: 1200px;
	top: -145px;
	left: 15px;
    overflow: hidden;
}
.login-box{
	margin-left: 60px;
	margin-top: 31px;
	display: grid;
	grid-template-rows: 1fr 1fr;
	grid-template-columns: 1fr 1fr auto;
	font-size: 14px;
	line-height: 20px;
	width: 210px;
	height: 46px;
	grid-column-gap: 10px;
}
.input-box{
	border: 1px solid #e6ecf0;
	border-radius: 3px;
	box-sizing: border-box;
	padding: 15px;
    width: 210px;
}
::placeholder{
	font-size: 14px;
	line-height: 20px;
}
.login-btn{
	background-color: #fff;
    border: 1px solid #1da1f2;
	color: #1da1f2;
	border-radius: 100px;
    font-weight: bold;
	width: 70px;
}
.login-link{
	grid-area: 2/2/3/3;
	color: #aab8c2;
	text-decoration: none;
	font-size: 14px;
}

.slow-login{
	justify-self: center;
	width: 355px;
	height: 100px;
	color: #14171a;
	font-weight: 700;
}
.login-bird{
	width: 60px;
	display: block;
}
.login-small-display{
	display:none;
}
.front-para{
	font-size: 27px;
	line-height: 32px;
	display: block;
	margin-bottom: 50px;
}
.join{
	font-size: 18px;
	line-height: 24px
}
.signup-btn{
	margin-top: 15px;
	background-color: #1da1f2;
    border: 1px solid #1da1f2;
	color: #fff;
}
.signin-btn{
	background-color: #fff;
    border: 1px solid #1da1f2;
	color: #1da1f2;
}
.pri-btn{
	border-radius: 100px;
    font-size: 14px;
    font-weight: bold;
    line-height: 20px;
    padding: 6px 16px;
	margin-bottom: 16px;
	width: 350px;
}
.twt-features{
	background: url('https://logos-download.com/wp-content/uploads/2016/02/Twitter_logo_bird_transparent_png.png');
	background-repeat: no-repeat;
	background-size:1200px;
	background-position:0px -140px;
	width: 50%;
	height: 100vh;
	background-color: #1da1f2;
	float: left;
}
.features-div{
	margin:auto;
	width: 370px;
	margin-top: 230px;
}
.twt-icon{
	position: relative;
	float: left;
	width: 35px;
	margin-right: 20px;
}
.twt-features p{
	position: relative;
	top: 5px;
	font-size: 18px;
	font-weight: 700;
	line-height: 24px;
	color: #fff;
	padding-bottom: 30px;
}
footer{
	position: fixed;
	bottom: 0;
	width: 100%;
	border-top: 1px solid #e6ecf0;
    background-color: #fff;
}
ul{
	background: #fff;
    display: flex;
	color: #aab8c2;
}
li{
    display: inline-block;
	padding-left: 18px;
	font-size: 12px;
}

footer a{
	color: #aab8c2;
	text-decoration: none;
}

@media (max-width:800px){

	.twt-main{
		display: grid;
		min-height: 600px;
	}
	.twt-features{
		width: auto;
		height: 40vh;
		background-size: 180%
	}
	.features-div{
		margin-top: 50px;
	}
	.twt-login{
		width: auto;
		height: 50vh;
	}
	.twt-login form{
		display: none;
	}
	footer ul{
		display: block;
		text-align: center;
	}
	.login-bird{
		display: inline-block;
	}
	.login-small-display{
		display: block;
		float: right;
		width: 76px;
		position: relative;
		top: 15px;
	}

}
</style>
<body>
	<main class="twt-main">
		<section class="twt-login">
				<form class="login-box">
					<input class="input-box" type="email" placeholder="Phone, email, or username">
					<input class="input-box" type="password" placeholder="Password">
					<a class="login-link" href="#">Forgot password?</a>
					<button class="login-btn">Log in</button>
				</form>
				<div class="slow-login">
					<img class="login-bird" src="https://image.ibb.co/d0hbJ9/twt_icon.png" alt="bird">
					<button class="login-small-display signin-btn pri-btn">Log in</button>
					<span class="front-para">See what’s happening in the world right now</span>
					<span class="join">Join Twitter today.</span>
					<button class="signup-btn pri-btn">Sign Up</button>
					<button class="signin-btn pri-btn">Log in</button>
				</div>
		</section>
		<section class="twt-features">
			<div class="features-div">
				<img class="twt-icon" src='https://image.ibb.co/bzvrkp/search_icon.png'>
				<p>Follow your interests.</p>
				<img class="twt-icon" src="https://image.ibb.co/mZPTWU/heart_icon.png">
				<p>Hear what people are talking about.</p>
				<img class="twt-icon" src="https://image.ibb.co/kw2Ad9/conv_icon.png">
				<p>Join the conversation.</p>
			</div>
		</section>
		<footer>
			<ul>
				<li><a href="#">About</a></li>
				<li><a href="#">Help Center</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Status</a></li>
				<li><a href="#">Jobs</a></li>
				<li><a href="#">Terms</a></li>
				<li><a href="#">Privacy Policy</a></li>
				<li><a href="#">Cookies</a></li>
				<li><a href="#">Ads info</a></li>
				<li><a href="#">Brand</a></li>
				<li><a href="#">Apps</a></li>
				<li><a href="#">Advertise</a></li>
				<li><a href="#">Marketing</a></li>
				<li><a href="#">Businesses</a></li>
				<li><a href="#">Developers</a></li>
				<li><a href="#">Directory</a></li>
				<li><a href="#">Settings</a></li>
				<li>© 2018 Twitter</li>
			</ul>
		</footer>
	</main>
</body>

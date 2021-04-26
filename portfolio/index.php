<?php
session_start();
require_once'helpers/security.php';
$errors=isset($_SESSION['errors'])?$_SESSION['errors']:[];
$fields=isset($_SESSION['fields'])?$_SESSION['fields']:[];
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-182477108-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-182477108-1');
	</script>


	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="style.css">
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=KoHo:wght@600&display=swap" rel="stylesheet">
	
	<title>Evan Beyerle</title>
	<link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/6/69/LetterE.svg/768px-LetterE.svg.png">
	
	
	

</head>
<body>

	<div class="header">
  <input class="menu-btn" type="checkbox" id="menu-btn" />
  <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
  <ul class="menu">
    <li><a class="link" href="#about">About</a></li>
		<li><a href="#boxes">Portfolio</a></li>
		<li><a href="#contact">Contact</a></li>
  </ul>
	</div>

	<section id="home">
		<div class="container">
			<div id="circle">
				<div class="name">
					<h2 class="circle-name">Evan Beyerle</h2>
				</div>
			</div>
		</div>
	</section>

	<section id="about">
		<div class="container">
			<h1>About Me</h1>
			<img class='img-border' src='clemson-pic.jpg', alt='A picture of Evan Beyerle.', title='A picture of Evan Beyerle.'>
			<p class="centering">While attending Clemson 
			I attended several different computer science courses. It was in these courses where
			I learned how to create programs in C++, Java, and Python. Not only did I learn how to code in these classes
			but I also learned how to implement different algorithms and data structures for class projects. It wasn't until
			after I graduated from Clemson where I began to learn more about web development.</p>

			<hr>

			<h4>Programming Langauges</h4>
			<p>C++, Java, Python, Javascript, PHP, SQL</p>
			
			<h4>Frameworks & Tools</h4>
			<p>Bootstrap, Node.js, React</p>
			
			<hr>
				
		</div>
	</section>
	
	<section id="boxes">
		<div class="container">
		
			<h1 style="color: white;">Portfolio</h1>
		
			<div class="box">
				<img src="data:image/jpeg;base64,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">
				<h3>OXT Widget</h3>
				<p>Contributed to this project. Helped with the OXT circulation display and created the links for the transactions listed.</p>
				<a href="https://oxt-demo.netlify.app/"><button>Demo</button></a><a href="https://github.com/ebeyerle/oxt"><button>Code</button></a>
			</div>
			<div class="box">
				<img src="https://i1.wp.com/www.alphr.com/wp-content/uploads/2016/07/how_to_get_pikachu_starter_pokemon.jpg?fit=2277%2C1254&ssl=1">
				<h3>Pokedex React App</h3>
				<p>A React app that uses an API to fetch the data of Pokemon. Clicking on the card of the Pokemon bring up a info page.</p>
				<a href="https://eb-react-pokedex.herokuapp.com/#/"><button>Demo</button></a><a href="https://github.com/ebeyerle/ReactPokedex"><button>Code</button></a>
			</div>
			<div class="box">
				<img src="data:image/jpeg;base64,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">
				<h3>Wikipedia Viewer</h3>
				<p>A web app that will show up to 10 wikipedia article links of whatever is typed into the search field.</p>
				<a href="https://wikipedia-app.herokuapp.com/"><button>Demo</button></a><a href="https://github.com/ebeyerle/wikipedia-search-app"><button>Code</button></a>
			</div>
			<div class="box">
				<img src="https://static9.depositphotos.com/1167801/1192/i/450/depositphotos_11928052-stock-photo-page-of-paper-curling.jpg">
				<h3>Notepage Web App</h3>
				<p>Generates notes on the template depending on the selection the user picks on the selection box on the bottom of the page.</p>
				<a href="https://codepen.io/ebeyerle/full/eKGrdX"><button>Demo</button></a><a href="https://codepen.io/ebeyerle/pen/eKGrdX"><button>Code</button></a>
			</div>
					
		</div>
			
	</section>
	
	<section id="contact">
		<div class="container">
			<h1>Contact</h1>
			<form class="contact-info" action="contact.php" method="POST">
				<label class="newsletter-label">Name:</label>
				<input type="text" name="name" placeholder="Enter Name" class="text-input w-input" required />
				<label class="newsletter-label">E-mail:</label>
				<input type="text" placeholder="Enter Email Address" class="text-input w-input" required />
				<label class="newsletter-label">Message:</label>
				<textarea name="message" placeholder="Text goes here..." cols="21" rows="4" class="message-text-field area w-input" required></textarea>
				<input class="form-button" type="submit" value="Send" />
			</form>
			
		</div>

	</section>
	
	<footer>
		<div class="information2">
			<p>Email: EBEYERL@g.clemson.edu</p>
			<div class="git social-icons text-center"><a  href="https://www.linkedin.com/in/evan-beyerle-9a7a1b78/"><i class="fa fa-fw fa-linkedin fa-2x"></i></a></div>
			<div class="git social-icons text-center"><a  href="https://github.com/ebeyerle"><i class="fa fa-fw fa-github fa-2x"></i></a></div>
		</div>
	</footer>
	
	<script>
	
		var x = document.getElementById("drop-hidden");
	
		function showDropdown(){
			console.log("In function");
			
			if (x.className === "other") {
				x.className = "drop-hidden";
		    }
		    else {
			  x.className = "other";
		    }
		}
	
		function myFunction() {
		  var x = document.getElementById("myTopnav");
		  if (x.className === "other") {
			x.className += "drop-hidden";
		  } else {
			x.className = "o";
		  }
		}
		
		function myFunction() {
		  var x = document.getElementById("myLinks");
		  if (x.style.display === "block") {
			x.style.display = "none";
		  } else {
			x.style.display = "block";
		  }
		}
	</script>
	
</body>
</html>

<?php
unset($_SESSION['errors']);
unset($_SESSION['fields']);
?>


<!--
				<input class="text-button" type="submit" value="Send" />
				<div class="form-group">
					<label class="form-control-label text-light" for="nameInput">Name</label>
					<input type="text" class="form-control  form-control-lg" id="nameInput" placeholder="Name">
				</div>
				<div class="form-group">
					<label class="form-control-label text-light" for="emailInput">Email address</label>
					<input type="email" class="form-control form-control-lg" id="emailInput" aria-describedby="Email" placeholder="Enter email">              
				</div>
				<div class="form-group">
					<label class="form-control-label text-light" for="messageTextArea">Message</label>
					<textarea class="form-control form-control-lg" id="messageTextArea" rows="3"></textarea>
				</div>
				<button type="submit" class="btn text-light">Submit</button>
				<input class="text-button" type="submit" value="Send" />
-->
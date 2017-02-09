<!DOCTYPE html>
<html lang="en">
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script>
			$( document ).ready(function() {
				$("#mobile").click(function() {
					$("#img1").toggle(function() {
						if($("#img2").css('display') != 'none') {
							$("#img2").toggle("fast");
						}
					});
				})
				$("#desktop").click(function() {
					$("#img2").toggle(function() {
						if($("#img1").css('display') != 'none') {
							$("#img1").toggle("fast");
						}
					});
				})
			});
		</script>
		<style>
			.clickthing {
				color: blue;
			}
			.wireframe {
				width: 70%;
			}
			.wireframe2 {
				width: 50%;
			}
			.clickthing:hover {
				cursor: pointer;
				color: aqua;
			}
			#img1 {
				display: none;
			}
			#img2 {
				display: none;
			}
			#wireframes {
				margin-bottom: 200px;
			}
		</style>
		<meta charset="utf-8"/>


		<title>Roza</title>

	</head>
	<body>
		<header>
			<h1 class="foo-heading">Adan PWP- Milestone 2</h1>
		</header>
		<h2 class="foo-heading">Content Stategy</h2>
		<p id="description">The objective of this site is to give prospective employers and professionals a place to view my resume and some current
			information about myself, while implementing any creative marketing skills I'm capable of. It will be a simple one page abstract site
			with 3 links that display my resume, an about me summery, and a contact page. The sites background will be one large image,
			possibly with some animation.</p>

		<h2 class="foo-heading">Wireframe</h2>

		<section id="wireframes">
			<h1>Wireframes</h1>
			<p><strong id="mobile" class="clickthing">Mobile View</strong>  ||  <strong id="desktop" class="clickthing">Desktop view</strong></p>
			<div id="img1">
				<img class="wireframe" src="img/mobile.png" alt="smart phone wire frame">
			</div>
			<div id="img2">
				<img class="wireframe2" src="img/desktopwireframes.png" alt="desktop wire frame">
			</div>
		</section>

	</body>
</html>
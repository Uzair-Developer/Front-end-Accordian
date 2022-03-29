<!DOCTYPE html>
<html lang="en">

<head>
	<title>Bootstrap Collapse Demonstration</title>

	<meta charset="utf-8">
	<meta name="viewport"
		content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
	</script>

	<script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
	</script>

	<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
	</script>

	<head>

		<body>
			<div class="container">

				<h2 style="padding-bottom: 15px; color:green;">
				GeeksforGeeks
				</h2>
				<p>A Computer Science Portal for Geeks</p>

				<div id="accordion">
					<div class="card">
						<div class="card-header">
							<a class="card-link"
							data-toggle="collapse"
							href="#description1">
								GeeksforGeeks
							</a>
						</div>

						<div id="description1"
							class="collapse show"
							data-parent="#accordion">
							<div class="card-body">
							GeeksforGeeks is a computer science portal.
							It is the best platform to lean programming.
							</div>
						</div>
					</div>

					<div class="card">
						<div class="card-header">
							<a class="collapsed card-link"
							data-toggle="collapse"
							href="#description2">
							Bootstrap
							</a>
						</div>
						<div id="description2"
							class="collapse"
							data-parent="#accordion">
							<div class="card-body">
							Bootstrap is free and open-source
							collection of tools for creating
							websites and web applications.
							</div>
						</div>
					</div>

					<div class="card">
						<div class="card-header">
							<a class="collapsed card-link"
							data-toggle="collapse"
							href="#description3">
							HTML
							</a>
						</div>
						<div id="description3"
							class="collapse"
							data-parent="#accordion">
							<div class="card-body">
							HTML stands for HyperText Markup Language.
							It is used to design web pages using markup
							language.
							</div>
						</div>
					</div>
				</div>
			</div>
		</body>

</html>

```html
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>My Website</title>

	<!-- Bootstrap CSS -->
	<link
		href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
		rel="stylesheet"
	>

	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
	<div class="container">

		<a class="navbar-brand fw-bold" href="index.html">
			MyWebsite
		</a>

		<button
			class="navbar-toggler"
			type="button"
			data-bs-toggle="collapse"
			data-bs-target="#mainNavbar"
		>
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="mainNavbar">

			<ul class="navbar-nav ms-auto">

				<li class="nav-item">
					<a class="nav-link active" href="index.html">
						Home
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="login.html">
						Login
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="register.html">
						Register
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="admin.html">
						Admin
					</a>
				</li>

			</ul>

		</div>
	</div>
</nav>


<!-- Main Content -->
<main>

	<section class="hero-section">
		<div class="container text-center">

			<h1 class="display-4 fw-bold">
				Welcome to My Website
			</h1>

			<p class="lead text-muted mt-3">
				A simple HTML, CSS and Bootstrap project.
			</p>

			<div class="mt-4">
				<a href="register.html" class="btn btn-primary btn-lg">
					Get Started
				</a>

				<a href="login.html" class="btn btn-outline-dark btn-lg ms-2">
					Login
				</a>
			</div>

		</div>
	</section>

</main>


<!-- Bootstrap JS -->
<script
	src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
</script>

</body>
</html>
```

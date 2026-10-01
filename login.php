
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Login</title>

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
					<a class="nav-link" href="index.html">
						Home
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link active" href="login.html">
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


<!-- Login Form -->
<main>
	<div class="container">

		<div class="auth-container">

			<div class="card shadow-sm">

				<div class="card-body p-4 p-md-5">

					<h2 class="text-center fw-bold mb-4">
						Login
					</h2>

					<form>

						<!-- Username -->
						<div class="mb-3">
							<label for="username" class="form-label">
								Username
							</label>

							<input
								type="text"
								class="form-control"
								id="username"
								name="username"
								placeholder="Enter your username"
							>
						</div>

						<!-- Password -->
						<div class="mb-3">
							<label for="password" class="form-label">
								Password
							</label>

							<input
								type="password"
								class="form-control"
								id="password"
								name="password"
								placeholder="Enter your password"
							>
						</div>

						<button
							type="submit"
							class="btn btn-primary w-100 mt-2"
						>
							Login
						</button>

					</form>

					<p class="text-center mt-4 mb-0">
						Don't have an account?
						<a href="register.html">
							Register
						</a>
					</p>

				</div>

			</div>

		</div>

	</div>
</main>


<!-- Bootstrap JS -->
<script
	src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
</script>

</body>
</html>
```


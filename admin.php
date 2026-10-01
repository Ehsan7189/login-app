```html
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Register</title>

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
					<a class="nav-link" href="login.html">
						Login
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link active" href="register.html">
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


<!-- Register Form -->
<main>
	<div class="container">

		<div class="auth-container">

			<div class="card shadow-sm">

				<div class="card-body p-4 p-md-5">

					<h2 class="text-center fw-bold mb-4">
						Create Account
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

						<!-- Email -->
						<div class="mb-3">
							<label for="email" class="form-label">
								Email
							</label>

							<input
								type="email"
								class="form-control"
								id="email"
								name="email"
								placeholder="Enter your email"
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

						<!-- Confirm Password -->
						<div class="mb-3">
							<label for="confirm_password" class="form-label">
								Confirm Password
							</label>

							<input
								type="password"
								class="form-control"
								id="confirm_password"
								name="confirm_password"
								placeholder="Repeat your password"
							>
						</div>

						<button
							type="submit"
							class="btn btn-primary w-100 mt-2"
						>
							Register
						</button>

					</form>

					<p class="text-center mt-4 mb-0">
						Already have an account?
						<a href="login.html">
							Login
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

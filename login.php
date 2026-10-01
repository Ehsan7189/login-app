<?php

include_once 'partials/header.php';
include_once 'partials/navigation.php';

?>
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

<?php

include_once 'partials/footer.php';


?>

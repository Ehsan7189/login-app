<?php

include_once 'partials/header.php';
include_once 'partials/navigation.php';

?>
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

<?php

include_once 'partials/footer.php';


?>

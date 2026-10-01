<?php

include_once 'partials/header.php';
include_once 'partials/navigation.php';

?>


<!-- Admin Content -->
<main>

	<div class='container py-5'>

		<div class='d-flex justify-content-between align-items-center mb-4'>

			<div>
				<h1 class='fw-bold mb-1'>
					Users
				</h1>

				<p class='text-muted mb-0'>
					Manage registered users
				</p>
			</div>

			<span class='badge text-bg-primary'>
                4 Users
            </span>

		</div>


		<!-- Users Table -->
		<div class='card shadow-sm'>

			<div class='card-body'>

				<div class='table-responsive'>

					<table class='table table-hover align-middle mb-0'>

						<thead class='table-dark'>

						<tr>
							<th>ID</th>
							<th>Username</th>
							<th>Email</th>
							<th>Created At</th>
							<th>Action</th>
						</tr>

						</thead>

						<tbody>

						<tr>
							<td>1</td>
							<td>ehsan</td>
							<td>ehsan@example.com</td>
							<td>2026-09-25</td>
							<td>
								<button class='btn btn-sm btn-outline-primary'>
									Edit
								</button>

								<button class='btn btn-sm btn-outline-danger'>
									Delete
								</button>
							</td>
						</tr>

						<tr>
							<td>2</td>
							<td>milad</td>
							<td>milad@example.com</td>
							<td>2026-09-26</td>
							<td>
								<button class='btn btn-sm btn-outline-primary'>
									Edit
								</button>

								<button class='btn btn-sm btn-outline-danger'>
									Delete
								</button>
							</td>
						</tr>

						<tr>
							<td>3</td>
							<td>saman</td>
							<td>saman@example.com</td>
							<td>2026-09-27</td>
							<td>
								<button class='btn btn-sm btn-outline-primary'>
									Edit
								</button>

								<button class='btn btn-sm btn-outline-danger'>
									Delete
								</button>
							</td>
						</tr>

						<tr>
							<td>4</td>
							<td>ali</td>
							<td>ali@example.com</td>
							<td>2026-09-28</td>
							<td>
								<button class='btn btn-sm btn-outline-primary'>
									Edit
								</button>

								<button class='btn btn-sm btn-outline-danger'>
									Delete
								</button>
							</td>
						</tr>

						</tbody>

					</table>

				</div>

			</div>

		</div>

	</div>

</main>


<?php

include_once 'partials/footer.php';


?>

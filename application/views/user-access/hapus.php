<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
	<!-- Start content -->
	<div class="content">
		<div class="container-fluid">

			<div class="row">
				<div class="col-xl-12">
					<div class="page-title-box">
						<h4 class="page-title float-left">User</h4>

						<ol class="breadcrumb float-right">
							<li class="breadcrumb-item"><a href="<?= base_url('useraccess') ?>">Data User</a></li>
							<li class="breadcrumb-item active"><a>Hapus Data</a></li>
						</ol>

						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<!-- end row -->


			<div class="row d-flex justify-content-center">
				<div class="col-md-4 col-sm-4">
					<div class="card-box">
						<form method="POST" class="" action="<?= base_url('useraccess/hapus') ?>">
							<h5 class="text-semi-bold text-danger pb-2">Hapus data<br>User</h5>
							<h6 class="text-semi-bold">Apakah Anda yakin untuk menghapus data <?= $users['nama'] ?>?</h6>
							<span class="badge badge-pill badge-danger mt-2">Data yang telah dihapus tidak dapat dikembalikan</span>
							<input type="hidden" id="id" name="id" value="<?= $id ?>">
							<div class="pt-4 d-flex justify-content-end">
								<a href="<?= base_url('useraccess') ?>" class="btn btn-secondary mr-1">Batal</a>
								<button type="submit" class="btn btn-danger btn-raised ml-1">Ya, Hapus</a>
							</div>
						</form>
					</div>
				</div>
			</div> <!-- end row -->




		</div> <!-- container -->

	</div> <!-- content -->



</div>
<!-- End content-page -->


<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->

<!-- Right Sidebar -->
<div class="side-bar right-bar">
	<div class="nicescroll">
		<ul class="nav nav-pills nav-justified">
			<li class="nav-item">
				<a href="#home-2" class="nav-link active" data-toggle="tab" aria-expanded="false">
					Activity
				</a>
			</li>
			<li class="nav-item">
				<a href="#messages-2" class="nav-link" data-toggle="tab" aria-expanded="true">
					Settings
				</a>
			</li>
		</ul>

		<div class="tab-content">
			<div class="tab-pane fade active show" id="home-2">
				<div class="timeline-2">
					<div class="time-item">
						<div class="item-info">
							<small class="text-muted">5 minutes ago</small>
							<p><strong><a href="#" class="text-info">John Doe</a></strong> Uploaded a photo <strong>"DSC000586.jpg"</strong></p>
						</div>
					</div>

					<div class="time-item">
						<div class="item-info">
							<small class="text-muted">30 minutes ago</small>
							<p><a href="" class="text-info">Lorem</a> commented your post.</p>
							<p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
						</div>
					</div>

					<div class="time-item">
						<div class="item-info">
							<small class="text-muted">59 minutes ago</small>
							<p><a href="" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
							<p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
						</div>
					</div>

					<div class="time-item">
						<div class="item-info">
							<small class="text-muted">1 hour ago</small>
							<p><strong><a href="#" class="text-info">John Doe</a></strong>Uploaded 2 new photos</p>
						</div>
					</div>

					<div class="time-item">
						<div class="item-info">
							<small class="text-muted">3 hours ago</small>
							<p><a href="" class="text-info">Lorem</a> commented your post.</p>
							<p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
						</div>
					</div>

					<div class="time-item">
						<div class="item-info">
							<small class="text-muted">5 hours ago</small>
							<p><a href="" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
							<p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
						</div>
					</div>
				</div>
			</div>

			<div class="tab-pane fade" id="messages-2">

				<div class="row m-t-10">
					<div class="col-8">
						<h5 class="m-0">Notifications</h5>
						<p class="text-muted m-b-0"><small>Do you need them?</small></p>
					</div>
					<div class="col-4 text-right">
						<input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small" />
					</div>
				</div>

				<div class="row m-t-10">
					<div class="col-8">
						<h5 class="m-0">API Access</h5>
						<p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
					</div>
					<div class="col-4 text-right">
						<input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small" />
					</div>
				</div>

				<div class="row m-t-10">
					<div class="col-8">
						<h5 class="m-0">Auto Updates</h5>
						<p class="m-b-0 text-muted"><small>Keep up to date</small></p>
					</div>
					<div class="col-4 text-right">
						<input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small" />
					</div>
				</div>

				<div class="row m-t-10">
					<div class="col-8">
						<h5 class="m-0">Online Status</h5>
						<p class="m-b-0 text-muted"><small>Show your status to all</small></p>
					</div>
					<div class="col-4 text-right">
						<input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small" />
					</div>
				</div>

			</div>
		</div>
	</div> <!-- end nicescroll -->
</div>
<!-- /Right-bar -->
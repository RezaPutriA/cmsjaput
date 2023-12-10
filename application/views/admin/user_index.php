<div id="jawir">
	<?= $this->session->flashdata('alert') ?>
</div>

<div class="container-fluid pt-4 px-4">
	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
		data-bs-whatever="@mdo">
		tambah user
	</button>
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<form action="<?= base_url('user/simpan')?>" method="post">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Tambah user</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">

						<div class="mb-3">
							<label for="recipient-name" class="col-form-label">Username</label>
							<input type="text" class="form-control" placeholder="username" name="username" required>
						</div>
						<div class="mb-3">
							<label for="recipient-name" class="col-form-label">Nama</label>
							<input type="text" class="form-control" placeholder="nama" name="nama" required>
						</div>
						<div class="mb-3">
							<label for="recipient-name" class="col-form-label">Password</label>
							<input type="password" class="form-control" placeholder="password" name="password" required>
						</div>
						<div class="mb-3">
							<label for="recipient-name" class="col-form-label">Level</label>
							<select name='level' class='fore-control' name="level">
								<option value="Admin">Admin</option>
								<option value="Kontributor">Kontributor</option>
							</select>
						</div>

						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
			</form>
		</div>
	</div>
</div>
</div>
<div class="container-fluid pt-4 px-4">
	<div class="bg-secondary text-center rounded p-4">
		<div class="d-flex align-items-center justify-content-between mb-4">
			<h6 class="mb-0">Data Pengguna</h6>

		</div>
		<div class="table-responsive">
			<table class="table text-start align-middle table-bordered table-hover mb-0">
				<thead>
					<tr class="text-white">
						<th scope="col">No</th>
						<th scope="col">Username</th>
						<th scope="col">Nama</th>
						<th scope="col">Level</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
				<?php $no=1; foreach($user as $aa) {?>
					<tr>
					    <td><?= $no; ?></td>
						<td><?= $aa['username']?></td>
						<td><?= $aa['nama']?></td>
						<td><?= $aa['level']?></td>
						<td>
							<a href="<?php echo site_url('user/delete/'.$aa['id_user']); ?>"> <button type="button"
									class="btn btn-primary" data-toggle="tooltip" title="" data-original-title="Remove"
									onclick="return confirm('Apakah anda yakin menghapus data ini?')">
									<i class="fa fa-trash-alt"></i>
								</button>
				            </a>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal"
								data-bs-target="#edit<?= $aa['id_user']?>" data-bs-whatever="@mdo">

								<i class="fa fa-edit"></i>
							</button>
							<div class="modal fade" id="edit<?= $aa['id_user']?>" tabindex="-1" aria-labelledby="exampleModalLabel"
								aria-hidden="true">
								<div class="modal-dialog">
									<form action="<?= base_url('user/update')?>" method="post">
										<input type="hidden" name="id_user" value="<?= $aa['id_user']?>">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Edit Data</h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">

												<div class="mb-3">
													<label for="recipient-name" class="col-form-label">Username</label>
													<input type="text" class="form-control" value="<?= $aa['username']?>" name="username"
														readonly>
												</div>
												<div class="mb-3">
													<label for="recipient-name" class="col-form-label">Nama</label>
													<input type="text" class="form-control" value="<?= $aa['nama']?>" name="nama">
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-primary">Simpan</button>
												</div>
									</form>
								</div>
							</div>
		</div>
		</td>
		</tr>
		<?php $no++;} ?>
		</tbody>
		</table>
	</div>
</div>
</div>

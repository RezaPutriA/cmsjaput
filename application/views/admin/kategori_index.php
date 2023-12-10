<div id="jawir">
	<?= $this->session->flashdata('alert') ?>
</div>

<div class="container-fluid pt-4 px-4">
	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
		data-bs-whatever="@mdo">
		tambah kategori
	</button>
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<form action="<?= base_url('kategori/simpan')?>" method="post">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Tambah kategori</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="mb-3">
							<label for="recipient-name" class="col-form-label">Nama kategori</label>
							<input type="text" class="form-control" placeholder="nama" name="nama_kategori" required>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">Simpan</button>
							</div>
						</div>
			</form>
		</div>
	</div>
</div>
</div>
<div class="container-fluid pt-2 px-2">
	<div class="bg-secondary text-center rounded p-4">
		<div class="d-flex align-items-center justify-content-between mb-4">
			<h6 class="mb-0">Kategori konten</h6>

		</div>
		<div class="table-responsive">
			<table class="table text-start align-middle table-bordered table-hover mb-0">
				<thead>
					<tr class="text-white">
						<th scope="col">No</th>
						<th scope="col">Nama kategori konten</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; foreach($kategori as $aa) {?>
					<tr>
						<td><?= $no; ?></td>
						<td><?= $aa['nama_kategori']?></td>
						<td>
							<a href="<?php echo site_url('kategori/delete/'.$aa['id_kategori']); ?>"> 
							<button  type="button" class="btn btn-primary" data-toggle="tooltip" title=""
									data-original-title="Remove"
									onclick="return confirm('Apakah anda yakin menghapus data ini?')">
									<i class="fa fa-trash-alt"></i>
								</button>
				        	</a>

							<button type="button" class="btn btn-primary" data-bs-toggle="modal"
								data-bs-target="#edit<?= $aa['id_kategori']?>" data-bs-whatever="@mdo">

								<i class="fa fa-edit"></i>
							</button>							
							<div class="modal fade" id="edit<?= $aa['id_kategori']?>" tabindex="-1"
								aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<form action="<?= base_url('kategori/update')?>" method="post">
										<input type="hidden" name="id_kategori" value="<?= $aa['id_kategori']?>">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Edit
													kategori</h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal"
													aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<div class="mb-3">
													<label for="recipient-name" class="col-form-label">Nama kategori
														konten</label>
													<input type="text" class="form-control"
														value="<?= $aa['nama_kategori']?>" name="nama_kategori">
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary"
														data-bs-dismiss="modal">Close</button>
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

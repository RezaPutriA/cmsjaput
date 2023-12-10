<div id="jawir">
	<?= $this->session->flashdata('alert') ?>
</div>

<div class="container-fluid pt-4 px-4">
	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
		data-bs-whatever="@mdo">
		tambah konten
	</button>
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<form action="<?= base_url('konten/simpan')?>" method="post" enctype='multipart/form-data'>
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Tambah konten</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="mb-3">
							<label for="recipient-name" class="col-form-label">Judul</label>
							<input type="text" class="form-control" placeholder="nama" name="judul" required>
							<label for="recipient-name" class="col-form-label">Kategori</label>
							<select name="id_kategori" class="form-control">
								<?php foreach($kategori as $aa) {?>
								<option value="<?= $aa['id_kategori']?>"><?= $aa['nama_kategori']?></option>
								<?php } ?>
							</select>
							<label for="recipient-name" class="col-form-label">Keterangan</label>
							<textarea name="keterangan" class="form-control"></textarea>
							<label for="recipient-name" class="col-form-label">Foto</label>
							<input type="file" name="foto" class="form-control" accept="image/png, image/jpeg">
						</div>
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
						<th scope="col">Judul</th>
						<th scope="col">Kategori konten</th>
						<th scope="col">Tanggal</th>
						<th scope="col">Kreator</th>
						<th scope="col">Foto</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; foreach($konten as $aa) {?>
					<tr>
						<td><?= $no; ?></td>
						<td><?= $aa['judul']?></td>
						<td><?= $aa['nama_kategori']?></td>
						<td><?= $aa['tanggal']?></td>
						<td><?= $aa['nama']?></td>
						<td>
							<a href="<?= base_url('assets/upload/konten/'.$aa['foto'])?>" target="_blank">
								<i class="fa fa-search"></i>lihat foto
							</a>
						</td>
						<td>
							<a href="<?php echo site_url('konten/delete/'.$aa['foto']); ?>">
								<button type="button" class="btn btn-primary" data-toggle="tooltip" title=""
									data-original-title="Remove"
									onclick="return confirm('Apakah anda yakin menghapus data ini?')">
									<i class="fa fa-trash-alt"></i>
								</button>
							</a>
							<button type="button" class="btn btn-primary <?= $no; ?>" data-bs-toggle="modal"
								data-bs-target="#Konten<?= $no; ?>" data-bs-whatever="@mdo">
								<i class="fa fa-edit"></i>
							</button>
							<div class="modal fade" id="Konten<?= $no; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
								aria-hidden="true">
								<div class="modal-dialog">
									<form action="<?= base_url('konten/update')?>" method="post"
										enctype='multipart/form-data'>
										<input type="hidden" name="nama_foto" value="<?= $aa['foto']?>">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5 text-dark" id="exampleModalLabel"><?= $aa['judul']?></h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal"
													aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<div class="mb-3">
													<label for="recipient-name" class="col-form-label">Judul</label>
													<input type="text" class="form-control" value="<?= $aa['judul']?>"
														name="judul">
													<label for="recipient-name" class="col-form-label">Kategori</label>
													<select name="id_kategori" class="form-control">
														<?php foreach($kategori as $uu) {?>
														<option 
														<?php if($uu['id_kategori']==$aa['id_kategori']){ echo"selected";} ?>
														value="<?= $uu['id_kategori']?>">
															<?= $uu['nama_kategori']?></option>
														<?php } ?>
													</select>
													
													<label for="recipient-name"
														class="col-form-label">Keterangan</label>
													<textarea name="keterangan" class="form-control"><?= $aa['keterangan']?></textarea>
													
													<label for="recipient-name" class="col-form-label">Foto</label>
													<input type="file" name="foto" class="form-control"
														accept="image/png, image/jpeg">
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary"
														data-bs-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-primary">Simpan</button>
												</div>
											</div>
									</form>
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

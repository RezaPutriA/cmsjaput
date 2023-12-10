<div id="jawir">
	<?= $this->session->flashdata('alert') ?>
</div>
<div class="col-xl-12 mt-3">
	<div class="bg-secondary rounded h-100 p-4">
		<form action="<?= base_url('caraousel/simpan')?>" method="post" enctype='multipart/form-data'>
			<h6 class="mb-4">File Input</h6>
			<div class="mb-3">
				<label for="recipient-name" class="col-form-label">Judul</label>
				<input type="text" class="form-control" placeholder="judul foto" name="judul" required>

				<label for="formFile" class="form-label">Pilih Foto dengan ukuran (1:3)</label>
				<input class="form-control bg-dark" type="file" name="foto">
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>
		</form>
	</div>
</div>

<?php foreach ($caraousel as $aa) {?>
<div class="card h-100 mt-3">
	<img class="card-img-top" src="<?= base_url('assets/upload/caraousel/'.$aa['foto'])?>">
	<div class="card-body">
		<h5 class="card-title fs-5 text-dark"><?= $aa['judul'] ?></h5>
		<a href="<?php echo site_url('caraousel/delete/'.$aa['foto']); ?>">
			<button type="button" class="btn btn-primary" data-toggle="tooltip" title="" data-original-title="Remove"
				onclick="return confirm('Apakah anda yakin menghapus foto ini?')">
				<i class="fa fa-trash-alt"></i>
			</button>
		</a>
	</div>
</div>
<?php } ?>

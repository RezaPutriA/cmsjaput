<div id="jawir">
	<?= $this->session->flashdata('alert') ?>
</div>
<form action="<?= base_url('konfigurasi/update')?>" method="post">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Konfigurasi</h1>
					</div>
					<div class="modal-body">
						<div class="mb-3">
							<label for="recipient-name" class="col-form-label">Judul Website</label>
							<input type="text" class="form-control"  name="judul_website" value="<?= $konfig->judul_website; ?>">
							<label for="recipient-name" class="col-form-label">Profil</label>
							<textarea name="profil_website" class="form-control"><?= $konfig->profil_website; ?></textarea>
							<label for="recipient-name" class="col-form-label">Instagram</label>
							<input type="text" class="form-control"  name="instagram" value="<?= $konfig->instagram; ?>">
                            <label for="recipient-name" class="col-form-label">Facebook</label>
							<input type="text" class="form-control"  name="facebook" value="<?= $konfig->facebook; ?>">
                            <label for="recipient-name" class="col-form-label">Email</label>
							<input type="email" class="form-control"  name="email" value="<?= $konfig->email; ?>">
                            <label for="recipient-name" class="col-form-label">Alamat</label>
							<input type="text" class="form-control"  name="alamat" value="<?= $konfig->alamat; ?>">
                            <label for="recipient-name" class="col-form-label">Whatsapp</label>
							<input type="text" class="form-control"  name="no_wa" value="<?= $konfig->no_wa; ?>">
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</div>
			</form>
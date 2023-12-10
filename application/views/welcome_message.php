<a href="<?php echo site_url('kategori/delete/'.$aa['id_kategori']); ?>"> <button
									type="button" class="btn btn-primary" data-toggle="tooltip" title=""
									data-original-title="Remove"
									onclick="return confirm('Apakah anda yakin menghapus data ini?')">
									<i class="fa fa-times"></i>
								</button>
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
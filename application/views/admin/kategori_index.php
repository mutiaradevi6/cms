<?=$this->session->flashdata('alert') ?>
<div class="col-lg-12 col-md-12">
	<div class="mb-3">
		<!-- Button trigger modal -->
		<button type="button" class="btn mb-2 btn-primary" data-toggle="modal" data-target="#defaultModal">
			Tambah Kategori
		</button>
		<!-- Modal -->
		<h2 class="h4 mb-1">Data Pengguna</h2>
		<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel"
			aria-hidden="true">
			<div class="modal-dialog modal-md" role="document">
				<form action="<?= base_url('admin/kategori/simpan')?>" method="post">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="defaultModalLabel">Tambah Kategori</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col mb-3 ">
									<label class="from-label">Nama Kategori</label>
									<input type="text" class="from-control" placeholder="Nama" name="nama_kategori"
										required>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn mb-2 btn-primary">Simpan</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 my-4">
			<div class="card shadow">
				<div class="card-body">
					<!-- table -->
					<table class="table table-hover table-borderless border-v">
						<thead class="thead-dark">
							<tr>
								<th>No</th>
								<th>Nama Kategori Konten</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody class="table-border-bottom-0">
							<?php $no=1; foreach($kategori as $aa) { ?>
							<tr>
								<td><?=$no;?></td>
								<td><?=$aa['nama_kategori']?></td>
								<td>
									<a href="<?= base_url('admin/kategori/delete_data/'.$aa['id_kategori']);?>"
										class="btn btn-sm btn-danger"
										onClick="return confirm('Apakah anda yakin menghapus data ini?')">
										<span class="fe fe-20 fe-trash"></span>
									</a>
									<button type="button" class="btn btn-sm btn-warning" data-toggle="modal"
										data-target="#update-<?=$aa['id_kategori']?>">
										<span class="fe fe-20 fe-edit"></span>
									</button>
									<!-- Edit Modal -->
									<div class="modal fade" id="update-<?=$aa['id_kategori']?>" tabindex="-1"
										role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<form action="<?= base_url('admin/kategori/update/'.$aa['id_kategori']);?>"
												method="post">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="defaultModalLabel">Edit Kategori
														</h5>
														<button type="button" class="close" data-dismiss="modal"
															aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="modal-body">
														<input type="hidden" value="<?= $aa['id_kategori'] ?>"
															name="id_kategori">
														<div class="row">
															<div class="col mb-3">
																<label class="form-label">Nama Kategori Konten</label>
																<input type="text" class="form-control"
																	placeholder="Nama" name="nama_kategori"
																	value="<?= $aa['nama_kategori'] ?>" required>
															</div>
														</div>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn mb-2 btn-secondary"
															data-dismiss="modal">Close</button>
														<button type="submit"
															class="btn mb-2 btn-primary">Simpan</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</td>
							</tr>
							<?php $no++; } ?> 
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div> <!-- end section -->
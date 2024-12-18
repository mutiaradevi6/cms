<?=$this->session->flashdata('alert') ?>
<div class="col-lg-12 col-md-12">
	<div class="mb-3">
		<!-- Button trigger modal -->
		<button type="button" class="btn mb-2 btn-primary" data-toggle="modal" data-target="#defaultModal">
			Tambah Konten
		</button>
		<!-- Modal -->
		<h2 class="h4 mb-1">Data Konten</h2>
		<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel"
			aria-hidden="true">
			<div class="modal-dialog modal-md" role="document">
				<form action="<?= base_url('admin/konten/simpan')?>" method="post" enctype='multipart/form-data'>
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="defaultModalLabel">Tambah Konten</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true"></span>
							</button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col mb-3 ">
									<label class="from-label">Judul</label>
									<input type="text" class="from-control" placeholder="Nama" name="judul" required>
								</div>
							</div>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col mb-3">
									<label class="form-label">Kategori</label>
									<select name="id_kategori" class="form-control">
										<?php foreach ($kategori as $aa) { ?>
										<option value="<?= $aa['id_kategori'] ?>"><?= $aa['nama_kategori'] ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col mb-4 ">
									<label class="from-label">Keterangan</label>
									<textarea name="keterangan" class="from-control"></textarea>
								</div>
							</div>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col mb-3 ">
									<label class="from-label">Foto</label>
									<input type="file" name="foto" class="from-control" accept="image/png, image/jpeg">
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
								<th>Judul</th>
								<th>Nama Kategori Konten</th>
								<th>Tanggal</th>
								<th>Kreator</th>
								<th>Foto</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody class="table-border-bottom-0">
							<?php $no=1; foreach($konten as $aa) { ?>
							<tr>
								<td><?=$no;?></td>
								<td><?=$aa['judul']?></td>
								<td><?=$aa['nama_kategori']?></td>
								<td><?=$aa['tanggal']?></td>
								<td><?=$aa['nama']?></td>
								<td>
									<a href="<?=base_url('assets/upload/konten/'.$aa['foto'])?>" target="blank">
										<span class="fe fe-20 fe-search"></span>Lihat Foto
									</a>
								</td>
								<td>
									<a href="<?= base_url('admin/konten/delete_data/'.$aa['foto']);?>"
										class="btn btn-sm btn-danger"
										onClick="return confirm('Apakah anda yakin menghapus data ini?')">
										<span class="fe fe-20 fe-trash"></span>
									</a>
									<button type="button" class="btn btn-sm btn-warning" data-toggle="modal"
										data-target="#editModal<?= $aa['id_konten']; ?>">
										<span class="fe fe-20 fe-edit"></span>
									</button>
									<!-- Modal Edit -->
									<div class="modal fade" id="editModal<?= $aa['id_konten']; ?>" tabindex="-1"
										role="dialog" aria-labelledby="editModalLabel<?= $aa['id_konten']; ?>"
										aria-hidden="true">
										<div class="modal-dialog modal-md" role="document">
											<form action="<?= base_url('admin/konten/update')?>" method="post"
												enctype='multipart/form-data'>
												<input type="hidden" name="id_konten" value="<?=$aa['id_konten']?>">
												<!-- Tambahkan ID konten -->
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title"
															id="editModalLabel<?= $aa['id_konten']; ?>">
															<?=$aa['judul']?>
														</h5>
														<button type="button" class="btn-close" data-dismiss="modal"
															aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="modal-body">
														<div class="row">
															<div class="col mb-3 ">
																<label class="form-label">Judul</label>
																<input type="text" class="form-control"
																	value="<?=$aa['judul']?>" name="judul" required />
															</div>
														</div>
														<div class="row">
															<div class="col mb-3">
																<label class="form-label">Kategori</label>
																<select name="id_kategori" class="form-control">
																	<?php foreach ($kategori as $uu) { ?>
																	<option
																		<?php if($uu['id_kategori'] == $aa['id_kategori']){echo "selected";} ?>
																		value="<?= $uu['id_kategori'] ?>">
																		<?= $uu['nama_kategori'] ?></option>
																	<?php } ?>
																</select>
															</div>
														</div>
														<div class="row">
															<div class="col mb-4 ">
																<label class="form-label">Keterangan</label>
																<textarea name="keterangan" class="form-control"
																	required><?=$aa['keterangan']?></textarea>
															</div>
														</div>
														<div class="row">
															<div class="col mb-3 ">
																<label class="form-label">Foto</label>
																<input type="file" name="foto" class="form-control"
																	accept="image/png, image/jpeg">
															</div>
														</div>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn mb-2 btn-secondary"
															data-dismiss="modal">Close</button>
														<button type="submit"
															class="btn mb-2 btn-primary">Update</button>
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

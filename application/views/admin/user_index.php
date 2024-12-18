<?=$this->session->flashdata('alert') ?>
<div class="col-lg-12 col-md-12">
	<div class="mb-3">
		<!-- Button trigger modal -->
		<button type="button" class="btn mb-2 btn-primary" data-toggle="modal" data-target="#defaultModal">
			Tambah User
		</button>
		<!-- Modal -->
		<h2 class="h4 mb-1">Data Pengguna</h2>
		<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel"
			aria-hidden="true">

			<div class="modal-dialog modal-md" role="document">
				<form action="<?= base_url('admin/user/simpan')?>" method="post">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="defaultModalLabel">Tambah User</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col mb-3 ">
									<label class="from-label">Nama</label>
									<input type="text" class="from-control" placeholder="Nama" name="nama" required>
								</div>
							</div>
							<div class="row">
								<div class="col mb-3 ">
									<label class="from-label">Username</label>
									<input type="text" class="from-control" placeholder="Username" name="username"
										required>
								</div>
							</div>
							<div class="row">
								<div class="col mb-3 ">
									<label class="from-label">Password</label>
									<input type="password" class="from-control" placeholder="Password" name="password"
										required>
								</div>
							</div>
							<div class="row">
								<div class="col mb-3 ">
									<label class="from-label">Level</label>
									<select name="level" id="from-control">
										<option value="Admin">Admin</option>
										<option value="Kontributor">Kontributor</option>
									</select>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn mb-2 btn-primary">Simpan</button>
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
								<th>Username</th>
								<th>Nama </th>
								<th>Level</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody class="table-border-bottom-0">
							<tr class="accordion-toggle collapsed" id="c-2474" data-toggle="collapse"
								data-parent="#c-2474" href="#collap-2474">
								<?php $no=1; foreach($user as $aa) {?>
								<td><?=$no?></td>
								<td><?=$aa['username']?></td>
								<td><?=$aa['nama']?></td>
								<td><?=$aa['level']?></td>
								<td>
									<a href="<?= base_url('admin/user/delete_data/'.$aa['id_user']);?>"
										class="btn btn-sm btn-danger"
										onClick="return confirm('Apakah anda yakin menghapus data ini?')"><span
											class="fe fe-20 fe-trash"></span>
									</a>
									<button type="button" class="btn btn-sm btn-warning" data-toggle="modal"
										data-target="#update<?= $aa['id_user'] ?>">
										<span class="fe fe-20 fe-edit"></span> </button>
									<div class="row">
										<div class="col-md-3 mb-3">
											<div class="">
												<div>
													<!-- Modal -->
													<form action="<?= base_url('admin/user/update/'.$aa['id_user']);?>"
														method="post">
														<div class="modal fade" id="update<?= $aa['id_user'] ?>" tabindex="-1" role="dialog"
															aria-labelledby="defaultModalLabel" aria-hidden="true">
															<div class="modal-dialog" role="document">
																<div class="modal-content">

																	<input type="hidden" value="<?= $aa['id_user'] ?>"
																		name="id_user">
																	<div class="modal-body">
																		<div class="modal-header">
																			<h5 class="modal-title"
																				id="defaultModalLabel">Edit User</h5>
																			<button type="button" class="close"
																				data-dismiss="modal" aria-label="Close">
																				<span aria-hidden="true">&times;</span>
																			</button>
																		</div>
																		<div class="modal-body">
																			<div class="row">
																				<div class="col mb-3 ">
																					<label
																						class="from-label">Nama</label>
																					<input type="text"
																						class="from-control"
																						placeholder="Nama" name="nama"
																						value="<?= $aa['nama'] ?>"
																						required>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col mb-3 ">
																					<label
																						class="from-label">Username</label>
																					<input type="text"
																						class="from-control"
																						placeholder="Username"
																						name="username"
																						value="<?= $aa['username'] ?>"
																						readonly required>
																				</div>
																			</div>

																			<div class="row">
																				<div class="col mb-3 ">
																					<label
																						class="from-label">Level</label>
																					<select name="level"
																						id="from-control">
																						<option value="Admin">Admin
																						</option>
																						<option value="Kontributor">
																							Kontributor</option>
																					</select>
																				</div>
																			</div>
																		</div>
																		<div class="modal-footer">
																			<button type="button"
																				class="btn mb-2 btn-secondary"
																				data-dismiss="modal">Close</button>
																			<button type="submit"
																				class="btn mb-2 btn-primary">Save
																				changes</button>
																		</div>
																	</div>
																</div>
															</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<?php $no++ ;}?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div> <!-- end section -->

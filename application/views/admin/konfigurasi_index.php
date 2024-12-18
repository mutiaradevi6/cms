<?=$this->session->flashdata('alert') ?>
<div class="modal-dialog modal-lg" role="document">
	<form action="<?= base_url('admin/konfigurasi/update')?>" method="post">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="defaultModalLabel">Konfigurasi</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col mb-3 ">
						<label class="form-label">Judul Website</label>
						<input type="text" class="form-control" name="judul" value="<?= $konfig->judul_website; ?>">
					</div>
				</div>
				<div class="row">
					<div class="col mb-3 ">
						<label class="form-label">Profile</label>
						<textarea name="profil_website" class="form-control"><?= $konfig->profil_website; ?></textarea>
					</div>
				</div>
				<div class="row">
					<div class="col mb-3 ">
						<label class="form-label">Facebook</label>
						<input type="text" class="form-control" placeholder="Facebook" name="facebook" value="<?= $konfig->facebook; ?>">
					</div>
				</div>
				<div class="row">
					<div class="col mb-3 ">
						<label class="form-label">Instagram</label>
						<input type="text" class="form-control" placeholder="Instagram" name="instagram" value="<?= $konfig->instagram; ?>">
					</div>
				</div>
				<div class="row">
					<div class="col mb-3 ">
						<label class="form-label">Email</label>
						<input type="email" class="form-control" placeholder="Email" name="email" value="<?= $konfig->email; ?>">
					</div>
				</div>
				<div class="row">
					<div class="col mb-3 ">
						<label class="form-label">Alamat</label>
						<input type="text" class="form-control" placeholder="Alamat" name="alamat" value="<?= $konfig->alamat; ?>">
					</div>
				</div>
				<div class="row">
					<div class="col mb-3 ">
						<label class="form-label">No Wa</label>
						<input type="text" class="form-control" placeholder="Nomor" name="no_wa" value="<?= $konfig->no_wa; ?>">
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn mb-2 btn-primary">Simpan</button>
			</div>
		</div>
	</form> <!-- Pastikan untuk menutup tag form -->
</div>
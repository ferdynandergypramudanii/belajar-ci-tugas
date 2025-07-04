<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<?php if (session()->getFlashData('success')): ?>
  <div class="alert alert-info alert-dismissible fade show" role="alert">
      <?= session()->getFlashData('success') ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php endif; ?>

<?php if (session()->getFlashData('failed')): ?>
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <?= session()->getFlashData('failed') ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php endif; ?>

<?php if (session('role') === 'admin'): ?>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDiskonModal">
      Tambah Diskon
  </button>
<?php endif; ?>

<!-- Table with stripped rows -->
<table class="table datatable mt-3">
  <thead>
    <tr>
      <th>#</th>
      <th>Tanggal</th>
      <th>Nominal</th>
      <th>Created At</th>
      <th>Updated At</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($diskon as $index => $d): ?>
      <tr>
        <td><?= $index + 1 ?></td>
        <td><?= $d['tanggal'] ?></td>
        <td>Rp <?= number_format($d['nominal'], 0, ',', '.') ?></td>
        <td><?= $d['created_at'] ?></td>
        <td><?= $d['updated_at'] ?></td>
        <td>
          <?php if (session('role') === 'admin'): ?>
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editDiskonModal-<?= $d['id'] ?>">Ubah</button>
            <a href="<?= base_url('diskon/delete/' . $d['id']) ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
          <?php endif; ?>
        </td>
      </tr>

      <!-- Edit Modal -->
      <div class="modal fade" id="editDiskonModal-<?= $d['id'] ?>" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <form action="<?= base_url('diskon/edit/' . $d['id']) ?>" method="post">
              <?= csrf_field(); ?>
              <div class="modal-header">
                <h5 class="modal-title">Ubah Diskon</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="form-group mb-2">
                  <label>Tanggal</label>
                  <input type="date" name="tanggal" class="form-control" value="<?= $d['tanggal'] ?>" readonly>
                </div>
                <div class="form-group">
                  <label>Nominal</label>
                  <input type="number" name="nominal" class="form-control" value="<?= $d['nominal'] ?>" required>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </tbody>
</table>

<!-- Add Modal -->
<div class="modal fade" id="addDiskonModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="<?= base_url('diskon') ?>" method="post">
        <?= csrf_field(); ?>
        <div class="modal-header">
          <h5 class="modal-title">Tambah Diskon</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="form-group mb-2">
            <label>Tanggal</label>
            <input type="date" name="tanggal" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Nominal</label>
            <input type="number" name="nominal" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?= $this->endSection() ?>

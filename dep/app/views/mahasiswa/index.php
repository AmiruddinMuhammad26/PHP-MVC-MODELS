<div class="container mt-3">

    <div class="row">
      <div class="col-lg-6">
        <h3>Daftar Mahasiswa</h3>
        <?php foreach( $data['mhs'] as $mhs ) : ?>
          <ul>
            <li><?= $mhs['nama']; ?></li>
            <li><?= $mhs['nim']; ?></li>
            <li><?= $mhs['email']; ?></li>
            <li><?= $mhs['prodi']; ?></li>
          </ul>
        <?php endforeach; ?>
      </div>
    </div>
</div>





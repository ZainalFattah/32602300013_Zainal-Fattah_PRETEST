<h2>Data Mahasiswa</h2>
<ul>
    <?php foreach ($data as $mhs): ?>
        <li><?= $mhs->nim ?> - <?= $mhs->nama ?> - <?= $mhs->prodi ?></li>
    <?php endforeach; ?>
</ul>

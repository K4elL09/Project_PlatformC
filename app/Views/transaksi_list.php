<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
    <h2>Riwayat Transaksi</h2>

    <?php if (empty($transaksi)): ?>
        <p>Anda belum memiliki riwayat transaksi.</p>
    <?php else: ?>
        <table class="data-table">
            <thead>
                <tr>
                    <th>ID Transaksi</th>
                    <th>Tanggal</th>
                    <th>Total Harga</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($transaksi as $t): ?>
                    <tr>
                        <td>#<?= $t['id_transaksi'] ?></td>
                        <td><?= date('d M Y H:i', strtotime($t['tanggal_transaksi'])) ?></td>
                        <td>Rp <?= number_format($t['total_harga_semua']) ?></td>
                        <td><?= $t['status_pembayaran'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    <?php endif; ?>
<?= $this->endSection() ?>
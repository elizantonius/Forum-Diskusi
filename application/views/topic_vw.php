<h3>Topik tentang <?= $kategori->nama_kat ?></h3>
<table border=1>
    <?php foreach ($item as $baris) { ?>
        <tr>
            <th>Topik</th>
            <th>User</th>
            <th>Tanggal Post</th>
            <th>Isi Topik</th>

        </tr>

        <tbody>

            <td><a href="<?= base_url('komentar/index/') . $baris['id_topik'] ?>"><?php echo $baris['judul_topik'] ?></a></td>
            <td><?php echo $baris['nama_user'] ?></td>
            <td><?php echo $baris['tgl_topik'] ?></td>
            <td><?php echo $baris['isi_topik'] ?></td>


        </tbody>

    <?php } ?>

</table>
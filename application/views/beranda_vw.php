<h3>Selamat Datang di Forum Sepuluh Nopember</h3>
<table border=1>
  <tr>
    <th>Topik</th>
    <th>Deskripsi Topik </th>
  </tr>
  <?php foreach ($kategori as $key => $item) : ?>
    <tr>
      <td><b><a href='<?= base_url('topic/index/') . $item->id_Kategori ?>'><?= $item->nama_kat ?></a></b></td>
      <td><?= $item->deskripsi_kat ?></td>
    </tr>
  <?php endforeach; ?>
</table>
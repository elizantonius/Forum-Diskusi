<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/header.css">
<h2 style="color:black">Menulis Thread:</h2>
<form method="post" action="<?php echo base_url(); ?>menulis/post">
  <input type="hidden" name="id" value="<?= $user['id_user'] ?>">
  Judul: <input type="text" name="judul" /> |
  <label for="tpk">Topik:</label>
  <select name="id_Kategori">
    <option value="">- Pilih</option>
    <?php foreach ($Kategori as $pilih) { ?>
      <option value="<?php echo $pilih->id_Kategori; ?>"><?php echo $pilih->nama_kat; ?> </option>
    <?php } ?>
  </select>
  <br>
  <textarea name="isinya"> </textarea>
  <br>
  <button type="submit">Post!</button>
</form>
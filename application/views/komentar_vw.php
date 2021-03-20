<form method="post" action="<?php echo base_url(); ?>komentar/post">
    <h3><?= $topic['judul_topik'] ?></h3>
    <hr>
    <p><?= $topic['isi_topik'] ?></p>
    <hr>
    <input type="hidden" name="idtpk" value="<?= $topic['id_topik'] ?>">
    <input type="hidden" name="idusr" value="<?= $user['id_user'] ?>">


    <?php


    if (!isset($_SESSION['is_login'])) { ?>
        <h2>Komentar</h2>
        <a class="btn" href="<?= base_url('komentar/checksession?url=') . current_url() ?>">Komentar</a>
        <?php echo $this->session->userdata('is_login'); ?>
    <?php } else { ?>
        <h2>Komentar</h2>
        <textarea name="isinya"></textarea>
        <br>
        <button>Post</button>
        <?php $this->session->userdata('is_login'); ?></div>
        <div id="content">
        <?php } ?>



</form>


<style>
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.5);
        /* Black w/ opacity */
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 10% auto;
        /* 15% from the top and centered */
        padding: 20px;
        border: 1px solid #888;
        width: 50%;
        /* Could be more or less, depending on screen size */
    }

    /* The Close Button */
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    .btn {
        background-color: #5F2121;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
    }
</style>


<!-- Trigger/Open The Modal -->
<!-- <button id="myBtn" href="#">Komentar</button> -->

<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <form method="post" action="<?= base_url('komentar/login?url=') . current_url() ?>">
            <table border=0 align=center>
                <tr>
                    <td>NPM:</td>
                    <td><input type=text name="npm" id="npm"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type=password name="sandi" id="sandi"></td>
                </tr>
                <tr>
                    <td></td>
                    <div id=item>
                        <td><input type=submit value="Masuk"></td>
                    </div>
                </tr>
            </table>
            <small>
                <p>*Jika belum punya akun silahkan, <a href=mendaftar>Mendaftar</a></p>
            </small>
        </form>
    </div>

</div>

<script>
    (function() {
        var modal = document.getElementById("myModal");
        var a = '<?= $this->session->flashdata('pesan'); ?>';
        if (a && a == 'false') {
            modal.style.display = "block";
        }
    })()
    // Get the modal


    // Get the button that opens the modal
    // var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    // btn.onclick = function() {
    //     modal.style.display = "block";
    // }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {}
    if (event.target == modal) {
        modal.style.display = "none";
    }
</script>

<hr>
<table border=1>
    <?php foreach ($komen as $baris) : ?>
        <tr>
            <th>User</th>
            <th>Tanggal </th>
            <th>Isi Komentar</th>
        </tr>
        <tr>

            <td><?= $baris['nama_user'] ?></td>
            <td><?= $baris['tgl_komen'] ?></td>
            <td><?= $baris['isi_komentar'] ?></td>
        </tr>
    <?php endforeach; ?>
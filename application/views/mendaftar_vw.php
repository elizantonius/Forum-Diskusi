    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/header.css">
    <?php echo validation_errors(); ?>
    <h2 style="color:black">Mendaftar:</h2>

    <?php
    if ($this->session->flashdata('error') != '') {
        echo '<div class="alert alert-danger" role="alert">';
        echo $this->session->flashdata('error');
        echo '</div>';
    }
    ?>
    <form method=post action="<?php echo base_url(); ?>mendaftar/proses">
        <table border=0 align=center>
            <tr>
                <input type=hidden name=id>
            </tr>
            <tr>
                <td>NPM:</td>
                <td><input type=text name="npm"></td>
            </tr>
            <tr>
                <td>Nama Lengkap:</td>
                <td><input type=text name="nama"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type=text name="email"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type=password name="sandi"></td>
            </tr>
            <tr>
                <td></td>
                <div id=item>
                    <td><input type=submit value=Daftar></td>
                </div>
            </tr>
        </table>
    </form>
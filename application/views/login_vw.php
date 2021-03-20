    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/header.css">
    <h2 style="color:black">Login:</h2>
    <?php
    if ($this->session->flashdata('error') != '') {
        echo '<div class="alert alert-danger" role="alert">';
        echo $this->session->flashdata('error');
        echo '</div>';
    }
    ?>

    <?php
    if ($this->session->flashdata('success_register') != '') {
        echo '<div class="alert alert-info" role="alert">';
        echo $this->session->flashdata('success_register');
        echo '</div>';
    }
    ?>
    <form method="post" action="<?php echo base_url(); ?>login/proses">
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
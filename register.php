<?php

    if ($user_id){
        header("location: ".BASE_URL);
    }

?>

<div class="container py-4" id="container-user-akses">

    <form action="<?php echo BASE_URL."proses_register.php"; ?>" method="POST">

        <?php
            $notif = isset($_GET['notif']) ? $_GET['notif'] : false;
            $nama_lengkap = isset($_GET['nama_lengkap']) ? $_GET['nama_lengkap'] : false;
            $email = isset($_GET['email']) ? $_GET['email'] : false;
            $phone = isset($_GET['phone']) ? $_GET['phone'] : false;
            $alamat = isset($_GET['alamat']) ? $_GET['alamat'] : false;

            if ($notif == "require"){
                echo "<div class='alert alert-warning' role='alert'>Ada yang kurang, silakan lengkapi formnya dulu ya</div>";
            } else if ($notif == "password"){
                echo "<div class='alert alert-warning' role='alert'>Password yang anda masukkan tidak sama, masukkan lagi</div>";
            } else if ($notif == "email"){
                echo "<div class='alert alert-warning' role='alert'>Email yang anda masukkan sudah digunakan, masukkan lagi</div>";
            }

        ?>

        <h2 class="text-center red-accent-text">Sign Up</h2>

        <div class="form-group">
            <label for="inputNama">Nama Lengkap</label>
            <input type="text" class="form-control" id="inputNama" name="nama_lengkap" value="<?php echo $nama_lengkap; ?>">
        </div>
        <div class="form-group">
            <label for="inputEmail">Alamat Email</label>
            <input type="email" class="form-control" id="inputEmail" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="form-group">
            <label for="inputNoHP">Nomor Telepon</label>
            <input type="text" class="form-control" id="inputNoHP" name="phone" value="<?php echo $phone; ?>">
        </div>
        <div class="form-group">
            <label for="inputAlamat">Alamat</label>
            <textarea class="form-control" id="inputAlamat" name="alamat"><?php echo $alamat; ?></textarea>
        </div>
        <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="password" class="form-control" id="inputPassword" name="password">
        </div>
        <div class="form-group">
            <label for="inputRePassword">Re-type Password</label>
            <input type="password" class="form-control" id="inputRePassword" name="re_password">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-secondary text-white" value='submit'>Submit</button>
        </div>

    </form>

</div>
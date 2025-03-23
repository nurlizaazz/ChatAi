<?php 
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['registerasi'])) {
    $email = $_POST['email'];
    $fullname = $_POST['fullname'];
    $jenis_kelamin = isset($_POST['jenis_kelamin']) ? (int)$_POST['jenis_kelamin'] : null; // Ensure it's an integer
    $nomor_telepon = isset($_POST['nomor_telepon']) ? $_POST['nomor_telepon'] : ''; // Check if no_telp is set
    $alamat = $_POST['alamat'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 
    $image = isset($_POST['image']) && !empty($_POST['image']) ? $_POST['image'] : '';
    $role_id = 1; // Default role ID, adjust as necessary
    $created_at = date('Y-m-d H:i:s');
    $update_at =date('Y-m-d H:i:s') ; // Set to null initially
    

    // Check if email already exists
    $query_check = "SELECT * FROM tb_users WHERE email = ?";
    $stmt_check = $conn->prepare($query_check);
    $stmt_check->bind_param("s", $email);
    $stmt_check->execute();
    $result_check = $stmt_check->get_result();

    if ($result_check->num_rows > 0) {
        echo "<script> alert ('Maaf email sudah terdaftar');</script>";
        echo '<meta http-equiv="refresh" content="0.8; url=?page=registerasi">';
    } else {
        // Insert data
        $query_insert = "INSERT INTO tb_users (fullname, email, password, jenis_kelamin, nomor_telepon, alamat, image, role_id, created_at, update_at) 
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt_insert = $conn->prepare($query_insert);
        $stmt_insert->bind_param("ssssssisss", $fullname, $email, $password, $jenis_kelamin, $nomor_telepon, $alamat,$image, $role_id, $created_at, $update_at);

                // Jalankan pernyataan insert
                if ($stmt_insert->execute()) {
                    echo "<script> alert ('Daftar Berhasil, Silahkan Login !!');</script>";
                    echo '<meta http-equiv="refresh" content="0.8; url=?page=login">';
                } else {
                    echo "<script> alert ('Terjadi kesalahan saat mendaftar: " . $stmt_insert->error . "');</script>";
                }
            }
        
    

    $stmt_check->close();
    $conn->close();
}
?>
<?php include'./_partials/_template/header.php';?>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style.css?v=1:1">

</head>

<div class="container register-container">

<div class="regis-text">
            <h1>HEXABOT</h1>
            <p> Your Favorite Ai</p>
        </div>

        <div class="col-lg-4 d-flex align-items-center justify-content-center">
                <main class="form-signin w-100" >
                     <form method="POST">
                        <h1 class="h3 mb-3 fw-normal text-center">Register Now</h1>

                        <div class="form-floating">
                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" style="background-color: rgb(200, 220, 229)">
                        <label for="floatingInput">Email</label>
                        </div>
                    <div class="form-floating mt-1">
                        <input type="text" name="fullname" class="form-control" id="floatingInput" placeholder="name@example.com" style="background-color: rgb(200, 220, 229)">
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating mt-1">
                        <select name="jenis_kelamin" class="form-select" id="floatingGender" style="background-color: rgb(200, 220, 229)" required >
                            <option value="" disabled selected>Select Gender</option>
                            <option value="male">Laki-laki</option>
                            <option value="female">Perempuan</option>
                        </select>
                        <label for="floatingGender">Jenis Kelamin</label>
                    </div>
                    <div class="form-floating mt-1">
                    <input type="tel" name="nomor_telepon" class="form-control" id="floatingPhone" placeholder="Nomor Telepon" style="background-color: rgb(200, 220, 229)" required>
                        <label for="floatingPhone">No Telepon</label>
                    </div>
                    <div class="form-floating mt-1">
                        <textarea name="alamat" class="form-control" id="floatingAddress" placeholder="Alamat" style="background-color: rgb(200, 220, 229)" required></textarea>
                        <label for="floatingAddress">Alamat</label>
                    </div>
                    <div class="form-floating mt-1">
                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" style="background-color: rgb(200, 220, 229)" required>
                        <label for="floatingPassword">Password</label>
                    </div>


                        <button class="btn btn-warning w-100 py-2 mt-3" type="submit" name="register">Register</button>

                       
                    </form>
                </main>

            </div>
        </div>
    </div>

<!-- Panggil Footer -->
<?php 
include './_partials/_template/footer.php'; 
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
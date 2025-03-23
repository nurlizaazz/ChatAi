<?php 
include 'koneksi.php';

// Proses login jika form disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];


    // Query untuk mencari pengguna berdasarkan email
    $stmt = $conn->prepare("SELECT id, fullname, email, password, role_id FROM tb_users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        // Verifikasi password
        if (password_verify($password, $user['password'])) {
            // Simpan data pengguna ke session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['fullname'] = $user['fullname'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['role_id'] = $user['role_id'];
            
            // Redirect berdasarkan role (opsional)
            if ($user['role_id'] == 2) { // Admin
                header("Location: index.php?page=admin_dashboard");
            }else { // User biasa
                header("Location: index.php?page=user_dashboard");
            }
            exit();
        } else {
            $error = "Invalid password!";
        }
    } else {
        $error = "Email not found!";
    }
    $stmt->close();
}

  

?>
<?php include'./_partials/_template/header.php';?>
<?php if (isset($error)): ?>
    <div class="alert alert-danger" role="alert">
      <?php echo $error; ?>
    </div>
  <?php endif; ?>  
  <head>
  <link rel="stylesheet" href="./css/style.css?v=1:1">
 </head>

 <div class="container login-container">
    
 

 <div class="login-text">
            <h1>HEXABOT</h1>
            <p> Your Favorite Ai</p>
        </div>

        <div class="col-lg-4 d-flex align-items-center justify-content-center">
                <main class="form-signin w-100" >
                    <form action="" method="POST" >
                        <h1 class="h3 mb-3 fw-normal text-center">Login Now</h1>
    
                        <div class="form-floating">
                            <input type="email" name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" style="background-color: rgb(200, 220, 229)">
                            <label for="floatingInput">Email</label>
                        </div>
                        <div class="form-floating mt-2">
                            <input type="password" name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" style="background-color: rgb(200, 220, 229)">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="d-flex justify-content-center align-items-center mt-1 mb-4">
                        <div class="form-check">
                         <input class="form-check-input" type="checkbox" id="rememberMe">
                          <label class="form-check-label" for="rememberMe">Remember me</label>
                            </div>
                            </div>

                        <button class="btn btn-warning w-100 py-2 mt-3" type="submit">Login</button>
                        
                        <div class="text-center mt-3">
                            Belum memiliki akun? <a href="?page=registerasi">Register</a>
                        </div>
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</body>
</html>
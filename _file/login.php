<?php include './_partials/_template/header.php';?>

<div class="container-fluid vh-100">
        <div class="row h-100">
    
            <div class="col-md-5 d-flex flex-column justify-content-center align-items-center text-center mt-n5">

                <h1 class="title"> HEXABOT </h1>
                <p class="subtitle"> YOUR FAVORITE CHATBOT </p>
            </div>


            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <div class="card login-form p-4 shadow-lg" style = " width: 460px; height: 500px; padding: 200px;border-radius: 12px;">
                     <div class="card-body" style = " font-size: 18px ;padding: 20px;">
                        <h1 class="card-title text-center" style = "font-size : 30px" > LOGIN </h1>
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Email address</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control">
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">Remember Me</label>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">LOGIN</button>
                            <p class="text-center mt-2">
                                Don't have an account? <a href="index.php?page=registerasi">Register</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
  </html> 
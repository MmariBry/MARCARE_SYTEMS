<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Staffs</title>
    <link rel="stylesheet" href="../resources/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 p-4 border border-2 rounded-2">
                <form action="" method="post">
                    <!-- Register Heading -->
                    <div class="row">
                        <div class="col-12 col-md-6 mb-3">
                            <h2 class="text-center text-primary">REGISTER</h2>
                        </div>
                     </div>
                    <!-- First Name & Last Name -->
                     <div class="row">
                        <div class="col-12 col-md-6 mb-3">
                            <label for="firstName" class="form-label">First Name:</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" required>
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <label for="lastName" class="form-label">Last Name:</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" required>
                        </div>
                     </div>
                     <!-- Email-->
                      <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                      </div>
                      <!-- Password & confirm password -->
                        <div class="row">
                            <div class="col-12 col-md-6 mb-3">
                                <label for="password" class="form-label">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="confirmPassword" class="form-label">Confirm Password:</label>
                                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                            </div>
                        </div>
                        <!-- Gender -->
                        <div class="row">                        
                            <div class="col-12 col-md-6 mb-3">
                                <label for="phoneNumber" class="form-label">Phone Number:</label>
                                <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" required>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="row mb-3">
                                    <label for="gender" class="col-md-4 col-form-label">Gender</label>
                                    <div class="col-md-8">
                                        <select name="gender" id="gender" class="form-control">
                                            <option value="" disabled selected>--- Select Gender---</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Job Title</label>
                            <input type="text" list="nat" id="title" class="form-control">
                            <datalist id="nat">
                                <option value="general doctor (md)">General Doctor (MD)</option>
                                <option value="eye_specialist">Eye Specialist</option>
                                <option value="pregnance_specialist">Pregnance Specialist</option>
                                <option value="dentist">Dentist</option>
                                <option value="lab_technician">Lab Technician</option>
                                <option value="x-ray_specialist">x-ray Specialist</option>
                                <option value="ultra-sound_specialist">Ultra-sound Specialist</option>
                                <option value="Pharmacyst">Pharmacyst</option>
                                <option value="nurse">Nurse</option>
                                <option value="ward-appointer">Ward Appointer</option>
                            </datalist>
                        </div>
                        <!-- Submit & Reset -->
                        <div class="row">
                            <div class="col-12 col-md-6 mb-3">
                                <input type="submit" value="Register" class="btn btn-primary btn-block">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <input type="reset" value="Reset" class="btn btn-secondary btn-block">
                            </div>
                        </div>
                    <!-- Validation Errors -->
                     <!-- <div class="row">
                         <div class="col-12 col-md-6 offset-md-3 text-center">
                             <?php if(isset($_SESSION['error'])) { echo $_SESSION['error']; unset($_SESSION['error']); }?>
                         </div>
                     </div> -->
                     <!-- login if have account -->
                      <div class="row">
                            <div class="col-12 col-md-6 mt-3">
                                <small id="login" class="form-text text-muted">Already have account?</small>
                                <a href="login.php" class="btn btn-outline-primary btn-block">Login</a>
                            </div>
                      </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
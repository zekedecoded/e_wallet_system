<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Css/bootstrap.min.css" rel="stylesheet">
    <link href="../Css/Other_styles.css" rel="stylesheet">
</head>

<body class="BodyBG2">
    <div class="BodyBG d-flex justify-content-center align-items-center min-vh-100">

        <div class="d-flex flex-column align-items-center">

            <div class="text-center mb-4">
                
                <h1 class="textcolor fw-bold mb-0 ls-2">GJC</h1>
                <p class="textcolor mb-0 fs-6 ls-2" >ECASH</p>
            </div>


            <div class="p-4 rounded-4" style="background-color: #1a7a3c; width: 340px;">
                <form>

                    <!-- Student ID -->
                    <div class="mb-3">
                        <label class="textcolor fw-semibold mb-1 fs-6">Student ID Number</label>
                        <input name="student_id" type="text" class="form-control border-0 rounded-2" placeholder="S-012345ABC">
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <label class="textcolor fw-semibold mb-1" style="font-size: 14px;">Password</label>
                        <input name="password" type="password" class="form-control border-0 rounded-2" placeholder="Enter your password">
                    </div>


                    <div class="d-grid mb-2">
                        <a href="verificationpage.php" class="btn bg-white fw-semibold rounded-2" style="color: #1a7a3c;">Log In</a>
                    </div>


                    <div class="text-center mb-4">
                        <a href="forgotpassword.php" class="textcolor fw-semibold text-decoration-none" style="font-size: 14px;">Forgot Password?</a>
                    </div>

                    <div class="text-center mb-2">
                        <p class="textcolor fw-semibold mb-2" style="font-size: 14px;">Doesn't have an account yet? Create now!</p>
                        <a href="registration.php" class="btn bg-white fw-semibold rounded-2 w-100 textcolorgreen" >Sign Up</a>
                    </div>

                </form>
            </div>

        </div>

    </div>
</body>
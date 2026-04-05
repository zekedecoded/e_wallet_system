<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../Css/bootstrap.min.css" rel="stylesheet">
    <link href="../../Css/style.css" rel="stylesheet">
</head>

<body class="BodyBGfullview">

    <!-- HEADER -->
    <div class="card carDbg rounded-0">
        <div class="card-body">
            <div class="row">
                <div class="col-12 textcolor">
                    <p class="mb-0">General De Jesus College Online Payment System</p>
                </div>
            </div>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <div class="container pt-5 pb-5">
        <div class="card shadow-sm">
            <div class="card-body p-4">
                <h1 class="textcolorgreen mb-4">STORE PROFILE</h1>
            </div>

            <!-- Personal Information -->
            <div class="row px-4 gy-3 pb-4">
                <div>
                    <h4 class="textcolorgreen">PERSONAL INFORMATION</h4>
                </div>
                <div class="col-12 col-sm-3">
                    <label class="textcolorgreen">First Name</label>
                    <input name="firstname" type="text" class="form-control mt-2" placeholder="Michael">
                </div>
                <div class="col-12 col-sm-3">
                    <label class="textcolorgreen">Last Name</label>
                    <input name="lastname" type="text" class="form-control mt-2" placeholder="Garcia">
                </div>
                <div class="col-12 col-sm-3">
                    <label class="textcolorgreen">Middle Name</label>
                    <input name="middlename" type="text" class="form-control mt-2" placeholder="Bañez">
                </div>
                <div class="col-12 col-sm-3">
                    <label class="textcolorgreen">Suffix</label>
                    <input name="suffix" type="text" class="form-control mt-2" placeholder="Jr.">
                </div>
            </div>

            <!-- Store Information -->
            <div class="row px-4 gy-3 pb-4">
                <div>
                    <h4 class="textcolorgreen">STORE INFORMATION</h4>
                </div>
                <div class="col-12 col-sm-3">
                    <label class="textcolorgreen">Store Name</label>
                    <input name="storename" type="text" class="form-control mt-2" placeholder="My Store">
                </div>
            </div>

            <!-- Contact Information -->
            <div class="row px-4 gy-3 pb-4">
                <div>
                    <h4 class="textcolorgreen">CONTACT INFORMATION</h4>
                </div>
                <div class="col-12 col-sm-3">
                    <label class="textcolorgreen">Contact Number</label>
                    <input name="contact" type="text" class="form-control mt-2" placeholder="09123456789">
                </div>
                <div class="col-12 col-sm-3">
                    <label class="textcolorgreen">Email</label>
                    <input name="email" type="text" class="form-control mt-2" placeholder="michael.garcia@example.com">
                </div>
            </div>

            <!-- Buttons -->
            <div class="d-flex justify-content-between px-4 pt-2 pb-4">
                <a href="admin_actions.php" class="text-decoration-none textcolorgreen btn BtN">
                    Back
                </a>
                <a href="admin_manager.php" class="text-decoration-none textcolorgreen btn BtN">
                    Submit information
                </a>
            </div>

        </div>
    </div>

</body>
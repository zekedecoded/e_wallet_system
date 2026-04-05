<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
</head>

<?php include 'header.php'; ?>

<div class="BodyBGfullview2 min-vh-100 pt-5">
    <div class="container">

        <!-- Simple info -->
        <div class="card carDbg border-0 rounded-3">
            <div class="card-body">
                <div class="row align-items-center px-4 gy-3 pb-4">

                    <div class="col-12 col-sm-3">
                        <p class="fw-bold text-white text-uppercase fs-5 mb-0">KEITH</p>
                        <p class="text-white-50 small mb-0">GARCIA</p>
                        <p class="text-white-50 small mb-0"> [ BURGER SHOP ] </p>
                    </div>
                    <div class="col-12 col-sm-3">
                        <a href="store_profile.php" class="btn btn-light btn-sm text-uppercase text-success">
                            View Profile
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <!-- Simple info end -->

        <!-- Current Balance -->
        <div class="pt-4">
            <p class="text-white fw-semibold small mb-0">CURRENT BALANCE</p>
            <p class="text-white fw-bold display-5 mb-0">₱139.00</p>
            <hr class="border-white border-2 opacity-100 mt-2 mb-3">
        </div>


        <div class="row g-2 pt-3">
            <div class="col-12 col-sm-6">
                <a href="store_generateqr.php" class="btn btn-light w-100 text-success fw-semibold">
                    Generate QR Code
                </a>
            </div>
            <div class="col-12 col-sm-6">
                <a href="store_transactionHistory.php" class="btn btn-light w-100 text-success fw-semibold">
                    View Transaction History
                </a>
            </div>
        </div>

        <div class="p-5"></div>

        <!-- Log Out -->
        <div class="pt-5 pb-4">
            <a href="../index.php" class="btn w-100 text-danger text-uppercase py-3 textcolorgreen">
                Log Out
            </a>
        </div>

    </div>
</div>
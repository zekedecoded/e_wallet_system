<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../Css/bootstrap.min.css" rel="stylesheet">
    <link href="../../Css/Other_styles.css" rel="stylesheet">
</head>

<?php include 'header.php'; ?>

<div class="BodyBGfullview2 min-vh-100 pt-3">
    <div class="container">

        <!-- Tab Navigation -->
        <div class="row g-0 mb-3">
            <div class="col-4">
                <a href="admin.php" class="btn btn-light w-100 fw-bold text-uppercase rounded-0 border text-success">
                    Dashboard
                </a>
            </div>
            <div class="col-4">
                <a href="admin_actions.php" class="btn btn-light w-100 fw-bold text-uppercase rounded-0 border text-success">
                    Actions
                </a>
            </div>
            <div class="col-4">
                <a href="admin_transactions.php" class="btn btn-light w-100 fw-bold text-uppercase rounded-0 border text-success">
                    Transactions
                </a>
            </div>
        </div>

        <div class="card carDbg border-0 rounded-3 p-3">

 
            <p class="text-white fw-bold text-uppercase text-center mb-3">Admin Dashboard</p>


            <p class="text-white fw-semibold text-uppercase small mb-1">Student -</p>
            <div class="card border-0 rounded-3 mb-3">
                <div class="card-body py-2 text-center fw-bold text-success">
                    10
                </div>
            </div>


            <p class="text-white fw-semibold text-uppercase small mb-1">Merchant</p>
            <div class="card border-0 rounded-3 mb-3">
                <div class="card-body py-2 text-center fw-bold text-success">
                    10
                </div>
            </div>


            <p class="text-white fw-semibold text-uppercase small mb-1">Transactions</p>
            <div class="card border-0 rounded-3 mb-3">
                <div class="card-body py-2 text-center fw-bold text-success">
                    10
                </div>
            </div>

            <p class="text-white fw-semibold text-uppercase small mb-1">Todays Volume</p>
            <div class="card border-0 rounded-3 mb-3">
                <div class="card-body py-2 text-center fw-bold text-success">
                    10
                </div>
            </div>


            <div class="card border-0 rounded-3 mb-3">
                <div class="card-body py-4">
                    <p class="fw-bold text-uppercase text-center text-success mb-0">Recent Transactions</p>
                </div>

                <di>
                                    <div class="textcolorgreen">
                    <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">TYPE</th>
                            <th scope="col">DATE</th>
                            <th scope="col">TO</th>
                            <th scope="col">FROM</th>
                            <th scope="col">AMOUNT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-active">
                            <th scope="row">PAY</th>
                            <td>4/4/2025</td>
                            <td>Otto</td>
                            <td>Michael</td>
                            <td>₱50</td>
                        </tr>
                        <tr>
                            <th scope="row">PAY</th>
                            <td>4/5/2025</td>
                            <td>Thornton</td>
                            <td>Michael</td>
                            <td>₱100</td>
                        </tr>
                        <tr>
                            <th scope="row">CASH IN</th>
                            <td>4/3/2025</td>
                            <td>Michael</td>
                            <td>ADMIN</td>
                            <td>₱5,000</td>
                        </tr>
                    </tbody>
                    </table>
                </div>


                </di>
            </div>

        </div>

        <!-- Log Out -->
        <div class="pt-4 pb-4">
            <a href="../index.php" class="btn btn-light w-100 fw-bold text-uppercase py-3 text-success">
                Log Out
            </a>
        </div>

    </div>
</div>
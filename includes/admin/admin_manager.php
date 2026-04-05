<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../Css/bootstrap.min.css" rel="stylesheet">
    <link href="../../Css/style.css" rel="stylesheet">
</head>

<body class="BodyBGfullview">

    <!-- Header -->
    <div class="card carDbg">
        <div class="card-body">
            <div class="row">
                <div class="col-12 textcolor">
                    <p class="mb-0">General De Jesus College Online Payment System</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container pt-5 pb-5">
        <div class="card">
            <div class="card-body">
                <h2 class="textcolorgreen">USERS</h2>
            </div>

            <div class="px-4 pb-4">
                <form>
                    <!-- Student Users -->
                    <h4 class="textcolorgreen fw-bold text-uppercase mb-3">Student Users</h4>
                    <div class="table-responsive mb-5">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" class="textcolorgreen">#</th>
                                    <th scope="col" class="textcolorgreen">Name</th>
                                    <th scope="col" class="textcolorgreen">Year Level & Program</th>
                                    <th scope="col" class="textcolorgreen">Email</th>
                                    <th scope="col" class="textcolorgreen">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Ezekiel Clarence Santiago</td>
                                    <td>3rd Year — Computer Science</td>
                                    <td>ezekiel.santiago@example.com</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="admin_view_student_info.php"
                                                class="btn btn-success btn-sm textcolorgreen">
                                                View
                                            </a>
                                            <a href="#" class="btn btn-danger btn-sm textcolorred">
                                                Delete
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                    <!-- Store Users -->
                    <h4 class="textcolorgreen fw-bold text-uppercase mb-3">Store Users</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" class="textcolorgreen">#</th>
                                    <th scope="col" class="textcolorgreen">Name</th>
                                    <th scope="col" class="textcolorgreen">Store Name</th>
                                    <th scope="col" class="textcolorgreen">Email</th>
                                    <th scope="col" class="textcolorgreen">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark Otto</td>
                                    <td>Otto's Burger Shop</td>
                                    <td>mark.otto@example.com</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="admin_view_store_info.php"
                                                class="btn btn-success btn-sm textcolorgreen">
                                                View
                                            </a>
                                            <a href="#" class="btn btn-danger btn-sm textcolorred">
                                                Delete
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </form>
            </div>

            <!-- Back Button -->
            <div class="px-4 pb-4">
                <a href="admin_actions.php" class="text-decoration-none textcolorgreen btn BtN">
                    Back
                </a>
            </div>

        </div>
    </div>

</body>
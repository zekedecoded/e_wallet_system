<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
</head>

<body class="BodyBGfullview2 min-vh-100">


    <div class="card carDbg rounded-0">
        <div class="card-body">
            <div class="row">
                <div class="col-12 textcolor">
                    <p class="mb-0">General De Jesus College Online Payment System</p>
                </div>
            </div>
        </div>
    </div>


    <div class="container pt-5">
        <div class="card carDbg border-0 rounded-3 p-4">


            <p class="text-white fw-bold text-uppercase text-center small mb-1">Generate QRCode</p>
            <h2 class="text-white fw-bold text-uppercase text-center mb-4">ENTER AMOUNT</h2>


            <input type="number" id="amountInput" class="form-control form-control-lg bg-white border-0 rounded-3 mb-3"
                placeholder="">


            <div class="d-flex gap-2 mb-4">
                <button class="btn btn-light text-success fw-semibold rounded-3 px-3">100</button>
                <button class="btn btn-light text-success fw-semibold rounded-3 px-3">150</button>
                <button class="btn btn-light text-success fw-semibold rounded-3 px-3">200</button>
                <button class="btn btn-light text-success fw-semibold rounded-3 px-3">250</button>
            </div>


            <p class="text-white  text-center small mb-2">Item Description</p>
            <input type="text" id="descInput" class="form-control bg-white border-0 rounded-3 mb-4" placeholder="">












            <div class="row g-2 pt-3">
                <div class="col-12 col-sm-6">

                    <a class="btn btn-light text-success  rounded-3 w-100">
                        Generate QR Code
                    </a>
                </div>
                <div class="col-12 col-sm-6 ">
                    <a href="store.php" class="btn btn-light text-danger  rounded-3 w-100">
                        Back
                    </a>
                </div>
            </div>

        </div>
    </div>

</body>
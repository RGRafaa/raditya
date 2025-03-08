<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perbandingan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        ::placeholder { 
            font-weight: bold;
        }
    </style>
</head>
<body class="bg-info-subtle d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    <div class="container text-center bg-info p-5 rounded-3 shadow-lg">
        <?php
        $output = '';
        $operator = '';

        function bandingkanAngka($angka1, $angka2) {
            if ($angka1 > $angka2) {
                return "$angka1 lebih besar dari $angka2";
            } elseif ($angka1 < $angka2) {
                return "$angka1 lebih kecil dari $angka2";
            } else {
                return "$angka1 sama dengan $angka2";
            }
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $angka1 = $_POST['angka1'];
            $angka2 = $_POST['angka2'];

            $output = bandingkanAngka($angka1, $angka2);
            $operator = $angka1 > $angka2 ? ">" : ($angka1 < $angka2 ? "<" : "=");
        }
        ?>

        <div class="display-2 text-warning mb-3 fw-bold"><?php echo $operator ? $operator : '&lt;'; ?></div>
        <h1 class="h4 fw-bold mb-3"><?php echo $output ? $output : 'Cek perbandingan angka'; ?></h1>
        <p class="lead mb-4 fw-bold">Cek Perbandingan</p>
        <form class="row gx-2 gy-1 justify-content-center gap-4 d-flex ms-5" method="post" action="">
            <div class="col-md-4">
                <input type="number" name="angka1" class="form-control form-control-lg fw-bold" placeholder="angka pertama" required>
            </div>
            <div class="col-md-4">
                <input type="number" name="angka2" class="form-control form-control-lg fw-bold" placeholder="angka kedua" required>
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-primary btn-lg w-75 me-5">Kirim</button>
            </div>  
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap
    </body>
    </html>

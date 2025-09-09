<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Umurku - P1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid">

         <!-- NAVBAR -->
            <div class="row">
                <div class="col-12-md">
                    <nav class="mb-4 navbar" id="navbar">
                        <a class="navbar-brand text-white mx-auto fw-bold fs-5" href="https://umurku.great-site.net">Umurku</a>
                    </nav>
                </div>
            </div>

        <div class="container">
           
            <!-- FORM -->
            <div class="row">
                <div class="mt-5 col-md-12 text-white text-center">
                    <h5 class="p-3" id="tittleForm">Hitung Umurku</h5>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 offset-3">
                    <div class="card">

                        <form method="post">
                                <label for="input" class="pb-1 fs-6 text-white form-label">Masukan Tanggal/Bulan/Tahun Lahir :</label>
                                <input type="date" class="p-2 fs-6 form-control" id="input" name="dateBirth">
                                <div id="emailHelp" class="pb-3 form-text">Kami tidak akan membagikan data anda dengan siapapun.</div>
                                <button type="submit" class="p-2 btn btn-danger" name="Count">Hitung Umur</button>
                        </form>
                            
                    </div>
                </div>
            </div>
            

             <!-- CALCULATE -->
            <?php
            if(isset($_POST['Count'])) {
                $input = $_POST['dateBirth'];

                // CHECK $input
                // if (!empty($input)){
                //     echo "Tanggal lahir anda : " . $input;
                // }else {
                //     echo "Tanggal lahir kosong!";
                // }

                $birth = new DateTime($input);
                $now   = new DateTime();
                $age = $now->diff($birth)->y;

                $nowBirth = new DateTime($now->format('Y') . '-' . $birth->format('m-d'));
                
                if ($nowBirth < $now) {
                $nowBirth->modify('+1 year');
                }

                $nextBirth = $now->diff($nowBirth)->days; ?>
           

                <div class="row mt-5">
                        <div class="p-4 me-2 offset-2 col-md-4 text-center text-white" id="card">
                            <h5 class="fs-6">Anda berusia <b class="fs-5"><?php echo $age?></b> tahun</h5>
                        </div>
                        <div class="p-4 col-md-4 text-center text-white" id="card">
                            <h5 class="fs-6">Tersisa  <b class="fs-5"><?php echo $nextBirth?></b> hari menuju ulang tahun berikutnya</h5>
                        </div>
                </div>        
            
            <?php }?>
            
            
        </div>

        <!-- FOOTER -->
            <div class="row">
                <div class="col-md-12">
                        <footer class="text-white text-center fixed-bottom py-2" id="footer">
                            <p class="mb-0">© 2025 Umurku - @fahherd</p>
                        </footer>
                </div>
            </div>
    </div>
    

    <!-- JS -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
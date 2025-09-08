<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Calculator - P1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">

         <!-- NAVBAR -->
            <div class="row">
                <div class="col-12-md">
                    <nav class="navbar bg-light">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">Age Calculator</a>
                        </div>
                    </nav>
                </div>
            </div>

        <div class="container">
           
            <!-- FORM -->
            <div class="row">
                <div class="my-2 col-md-12 bg-light text-dark text-center">
                    <h2 class="p-3"> Hitung Umur Anda</h2>
                </div>
            </div>
            
            <div class="row">
                <dimyclass="col-md-12">

                        <form method="post">
                            <div class="mb-3">
                                <label for="input" class="p-2 form-label">Masukan Tanggal-Bulan-Tahun Lahir:</label>
                                <input type="date" class="p-2 form-control" id="input" name="dateBirth">
                                <div id="emailHelp" class="p-2 form-text">We'll never share your data with anyone else.</div>
                                <button type="submit" class="p-2 btn btn-primary" name="Count">Submit</button>
                            </form>
                            
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

                $nextBirth = $now->diff($nowBirth)->days + 1; ?>
           

            <div class="my-4 row bg-light">
                <div class="p-4 col-md-6 text-center">
                    <h5>Umur anda saat ini : <?php echo $age?></h5>
                </div>
                <div class="p-4 col-md-6 text-center">
                    <h5><?php echo $nextBirth?> hari sebelum ulang tahun selanjutnya!</h5>
                </div>
            </div>
             
            
            <?php }?>
            
            
        </div>

        <!-- FOOTER -->
            <div class="row">
                <div class="col-md-12">
                        <footer class="bg-dark text-white text-center fixed-bottom py-2">
                            <p class="mb-0">© 2025 Age Calculator - @fahherd</p>
                        </footer>
                </div>
            </div>
    </div>
    

    <!-- JS -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
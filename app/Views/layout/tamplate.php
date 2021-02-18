<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="<?= base_url('fontawesome/css/all.css') ?>">
    <link rel="stylesheet" href="<?= base_url('style.css'); ?>">

    <title>Madoo!</title>
</head>
<!-- Header -->

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        <div class="container">
            <h3><i class="fas fa-shopping-cart mr-2"></i></h3>
            <a class="navbar-brand font-weight-bold" href="/">Madoo!</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                </ul>
                <a href="<?= base_url('cart'); ?>" type="button" class="btn btn-outline-dark mx-3"><i class="fas fa-shopping-cart mr-2"></i>Keranjang</a>
            </div>
        </div>
    </nav>
    <div class="row mt-5 no-gutters">

        <?= $this->renderSection('content'); ?>



    </div>

    <!-- Footer -->

    <footer class="page-footer bg-warning pt-4 mt-3 <?= $fixed; ?>" style="width:100%;">

        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">

                    <!-- Content -->
                    <h5>Tentang Madoo!</h5>
                    <p>Madoo! berkomitmen untuk menjual madu dengan kualitas terbaik, keaslian yang terjamin, dan manfaat yang maksimal.</p>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none pb-3">

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5>Sosial Media</h5>

                    <ul class="list-unstyled">
                        <li>
                            <h4><a href="" #!><i class="fab fa-instagram"></i></a></h4>
                        </li>
                        <li>
                            <h4><a href="#!"><i class="fab fa-twitter"></i></a></h4>
                        </li>
                        <li>
                            <h4><a href="#!"><i class="fab fa-linkedin-in"></i></a></h4>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5>Hubungi Kami</h5>

                    <a class="btn btn-dark" href="https://wa.me/089639143290" role="button">Whatsapp</a>

                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3 bg-dark text-white">© 2020 Copyright: Rakha Zufar
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->






















    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
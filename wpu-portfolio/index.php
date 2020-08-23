<?php
function get_cURL($url)
{
    $curl = curl_init(); // untuk menginisialisasi fungsi curl
    curl_setopt($curl, CURLOPT_URL, $url); // opsi-opsi nya
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    curl_close($curl);

    return json_decode($result, true);
}

$result = get_cURL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UC29ju8bIPH5as8OGnQzwJyA&key=AIzaSyDzU6nvdFebxQsrehiZtkCQ2WINgZYcSpI');
// var_dump($result);

$youtubeProfilePic = $result['items'][0]['snippet']['thumbnails']['medium']['url']; // pp youtube
$channelName = $result['items'][0]['snippet']['title']; // nama yt
$subscriber = $result['items'][0]['statistics']['subscriberCount']; // subsriber

// latest video
$urlLatestVideo = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyDzU6nvdFebxQsrehiZtkCQ2WINgZYcSpI&channelId=UC29ju8bIPH5as8OGnQzwJyA&maxResults=1&order=date&part=snippet';
$result = get_cURL($urlLatestVideo);
// var_dump($result);

$latestVideo = $result['items'][0]['id']['videoId'];



?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- CSS -->
    <style>
        section {
            min-height: 420px;
        }

        .ig-thumnail {
            width: 100px;
            height: 100px;
            float: left;
            overflow: hidden;
        }

        .ig-thumnail img {
            width: 100px;
            height: 100px;
        }
    </style>

    <title>Dimas Chronicles</title>
</head>

<body class="mt-5">
    <nav class="navbar fixed-top navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Dimas Chronicles</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <img src="img/user-logo.png" width="30%">
            <h1 class="display-4">Dimas Cahyo Nur Aditya</h1>
            <p class="lead">Cyber Security | Programmer | Gamer</p>
        </div>
    </div>
    <!-- Akhir jumbotron -->


    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row mb-4">
                <div class="col text-center">
                    <h2>About</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5 text-center">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, tempore dolorum! Quos molestias
                        at iusto eos nulla? Beatae tempora eius omnis, assumenda quis inventore velit in temporibus
                        aperiam dolore totam?</p>
                </div>
                <div class="col-md-5 text-center">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis cupiditate consectetur dicta
                        molestias
                        reprehenderit quasi voluptatem nihil necessitatibus inventore, optio a, quia sed ipsa eos
                        voluptate
                        harum, aspernatur odio! Quas.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir about -->


    <!-- Social Media - Youtube & Instagram -->
    <section class="social bg-light" id="social">
        <div class="container">
            <div class="row pt-4">
                <div class="col text-center">
                    <h2>Social Media</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="<?= $youtubeProfilePic; ?>" width="100" class="rounded-circle img-thumbnail">
                        </div>
                        <div class="col-md-8">
                            <h5><?= $channelName; ?></h5>
                            <p><?= $subscriber; ?> Subscribers.</p>
                            <div class="g-ytsubscribe" data-channelid="UC29ju8bIPH5as8OGnQzwJyA" data-layout="default" data-theme="dark" data-count="hidden"></div>
                        </div>
                    </div>
                    <div class="row mt-3 pb-3">
                        <div class="col">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $latestVideo; ?>?rel=0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="img/user-logo.png" width="100" class="rounded-circle img-thumbnail">
                        </div>
                        <div class="col-md-8">
                            <h5>People Who Code</h5>
                            <p>10000 Followers.</p>
                        </div>
                    </div>
                    <div class="row mt-3 pb-3">
                        <div class="col">
                            <div class="ig-thumnail">
                                <img src="img/portfolio/1.png">
                            </div>
                            <div class="ig-thumnail">
                                <img src="img/portfolio/2.png">
                            </div>
                            <div class="ig-thumnail">
                                <img src="img/portfolio/3.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Portfolio -->
    <section id="portfolio" class="portfolio pb-4">
        <div class="container">
            <div class="row mb-4 pt-3">
                <div class="col text-center">
                    <h2>Portfolio</h2>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md">
                    <div class="card">
                        <img src="img/portfolio/1.png" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card">
                        <img src="img/portfolio/2.png" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card">
                        <img src="img/portfolio/3.png" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md">
                    <div class="card">
                        <img src="img/portfolio/4.png" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card">
                        <img src="img/portfolio/5.png" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card">
                        <img src="img/portfolio/6.png" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir portfolio -->


    <!-- Contact -->
    <section id="contact" class="contact mb-5 bg-light">
        <div class="container">
            <div class="row pt-4 mb-4">
                <div class="col text-center">
                    <h2>Contact Us</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="card text-white bg-info mb-3">
                        <div class="card-body text-center">
                            <h5 class="card-title">Contact Us</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, iusto!
                            </p>
                        </div>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <h1>Location</h1>
                        </li>
                        <li class="list-group-item">My Office</li>
                        <li class="list-group-item">Jl. Jendral Soedirman No. 17, Purwokerto</li>
                        <li class="list-group-item">Central Java, Indonesia</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <form>
                        <div class="form-group">
                            <label for="nama">Name</label>
                            <input type="text" class="form-control" id="nama" placeholder="Enter your name..." autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email..." autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="telp">Phone</label>
                            <input type="text" class="form-control" id="telp" placeholder="Enter your phone number..." autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="pesan">Message</label>
                            <textarea class="form-control" id="pesan" rows="5" placeholder="Enter your message..." autocomplete="off"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Send Message!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir contact -->


    <!-- Footer -->
    <footer class="bg-secondary text-white">
        <div class="container">
            <div class="row pt-3">
                <div class="col text-center">
                    <p>&copy; Copyright 2020.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Akhir footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://apis.google.com/js/platform.js"></script>
</body>

</html>
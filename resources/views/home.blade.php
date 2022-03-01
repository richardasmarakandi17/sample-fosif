<!DOCTYPE html>
<html lang="en">
<head>
    <title>Official Website FOSIF-ITS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        .background1{
            background-image: url("image/Mahasiswa.jpg");
        }

        body{
            background-color: aliceblue;
        }
    </style>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div>
                <a class="navbar-brand" href="#">
                    <img src="image/Logo_FOSIF-ITS.png" style="width: 50px;" />
                </a>
            </div>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profil</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="#">Profil 1</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Profil 2</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">FOSIF - ITS</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Rilis</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="#">Rilis 1</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Rilis 2</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Rilis 3</a>
                            </li>
                        </ul>
                    </li>

                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
			
    <div class="container background1 my-2 py-5" style="border-radius: 2.5rem">
        <div class="container py-3">
            <div class="card card-body mx-auto" style="width:25%; border-radius: 2.5rem">
                <img class="" style="" src="image/logokabinet.png" alt="">
            </div>
        </div>
        <div class="container py-3">
            <div class="card card-body mx-auto" style="width:55%; border-radius: 2.5rem; opacity:0.9">
                <h1 class="fw-bolder py-2 text-center" style="font-size:35px;">Forum Studi Islam Fisika ITS</h1>
            </div>
        </div>
    </div>

    <div class="container my-5 py-5">
        <div class="card card-body mx-auto" style="width: 55%;background-color:#f6c8a2;box-shadow: 5px 5px #eaaa79;">
            <h1 class="fw-bolder py-2 text-center" style="font-size:35px;">Tentang Kami</h1>
        </div>
        <div class="my-5 d-flex justify-content-center" style="margin-left: 2px;margin-right: 2px;">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <img class="" style="border-radius:80px;" src="image/gambar.png" alt="">
                </div>
                <div class="row col align-items-center">
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, quis et? Nobis dignissimos perferendis, temporibus porro enim maiores amet fuga provident asperiores praesentium necessitatibus minus, aperiam itaque quo placeat quos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium natus consectetur magni atque perspiciatis ut harum sit cum ipsam molestiae quia, eos beatae et itaque fugit molestias ea rem velit?</h3>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
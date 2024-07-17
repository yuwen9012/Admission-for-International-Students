<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- icon -->
    <link href="images/logo.ico" rel="shortcut icon" />

    <!-- 引入 Poppins 字體 -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="css/study-abroad.css">

    <!-- JS -->
    <script type="text/javascript" src="js/study-abroad.js"></script>

    <title>Study Abroad</title>
</head>
<body>
    <?php include 'header.php'; ?>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary second-navbar">
        <div class="container-fluid d-flex align-items-center">
            <img src="images/06-校徽-英文組合排列.png" id="logo" class="me-3">
            
            <div class="flex-grow-1 text-center">
                <div class="d-flex justify-content-center align-items-center">
                    <span class="navbar-text mx-2 fs-2">— Study Abroad —</span>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid introduction-block">
        <div class="row">

            <div class="col-md-6 left-section">
                <h2 class="fw-bolder">Program Introduction</h2>
                <p class="fw-semibold">The ISC provides advice, information and referrals on matters such as residence regulations, cultural adjustment, volunteer work , overseas travel and study. The ISC staff cares deeply about those who come to campus from other countries, and we are equally invested in domestic students who wish to study abroad on a long term or short term summer program.</p>
            </div>

            <div class="col-md-6 right-section">
                <h2>要放圖片及按鈕</h2>
            </div>
        </div>
    </div>

    <div class="container scorer-block">
        <div class="row">

            <div class="col-md-4 text-center my-5">
                <h4 class="fw-semibold">Partner University</h4>
                <div class="partner-score-container">
                    <div class="score-display" id="partner-score"></div>
                </div>
            </div>

            <div class="col-md-4 text-center my-5">
                <h4 class="fw-semibold">Student number</h4>
                <div class="student-score-container">
                    <div class="score-display" id="student-score"></div>
                </div>
            </div>

            <div class="col-md-4 text-center my-5">
                <h4 class="fw-semibold">World univeristy Ranking</h4>
                <div class="ranking-score-container">
                    <div class="score-display" id="ranking-score"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid info-block">
        <div class="row">
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/banner1.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/banner1.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/banner1.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-6">
                <h2>Text</h2>
            </div>
        </div>
    </div>

    <div class="container qa-block text-center my-5">
        <h3>Q&A</h3>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
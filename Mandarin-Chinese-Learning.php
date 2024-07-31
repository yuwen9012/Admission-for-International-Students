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
    <link rel="stylesheet" href="css/fixed.css">
    <link rel="stylesheet" href="css/study-package.css">
    <link rel="stylesheet" href="css/Mandarin-Chinese-Learning.css">

    <!-- JS -->
    <script type="text/javascript" src="js/study-package.js"></script>

    <title>Mandarin Chinese Learning</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <nav class="navbar navbar-expand-lg bg-body-tertiary second-navbar">
        <div class="container-fluid d-flex align-items-center">
            <img src="images/06-校徽-英文組合排列.png" id="logo" class="me-3">
            
            <div class="flex-grow-1 text-center">
                <div class="d-flex justify-content-center align-items-center">
                    <a href="study-abroad.php"><i class="fas fa-arrow-left"></i></a>
                    <span class="navbar-text mx-2">Mandarin Chinese Learning</span>
                </div>
            </div>
        </div>
    </nav>

     <!-- 第一區塊 -->
     <div class="container-fluid introduction-block1">
        <div class="row">
            <div class="col-md-4 left-section">
                 <div class="box">Free  Courses</div>
                 <div class="box2">
                    <span><br>11 weeks<br>6 hours/week</span>
                    <ul class="navbar-nav d-flex flex-row flex-wrap">
                        <li class="nav-item m-1">
                            <a class="nav-link btn fs-5" href="#Free-Courses" data-scroll="true">Find-out more</a>
                        </li>
                    </ul>
                 </div>

            </div>

            <div class="col-md-4 center-section">
                 <div class="box">Customized Short-term<br>Course</div>
                 <div class="box2">
                    <span><br>International<br>Connections</span>
                     <ul class="navbar-nav d-flex flex-row flex-wrap">
                        <li class="nav-item m-1">
                            <a class="nav-link btn fs-5" href="#Customized-Short-term" data-scroll="true">Find-out more</a>
                        </li>
                    </ul>
                 </div>
            </div>


            <div class="col-md-4 right-section">
                <div class="box">Taiwanese Culture <br>Courses</div>
                <div class="box2">
                    <span><br>Local Culture <br>Experience</span>
                    <ul class="navbar-nav d-flex flex-row flex-wrap">
                        <li class="nav-item m-1">
                            <a class="nav-link btn fs-5" href="#Taiwanese-Culture" data-scroll="true">Find-out more</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

      <!-- 第二區塊 -->
     <div class="container-fluid block5">
        <div class="row">
            <div class="col-md-4 left-section">
            </div>
            <div class="col-md-4 center-section">
                 <img class="Image2" src="images/Mandarin-Learning1.jpg" alt="Description of the image" class="img-fluid">          
            </div>
            <div class="col-md-4 right-section">
            </div>
        </div>
    </div>

    <!-- 第三區塊 -->
      <div class="container-fluid introduction-block">
        <div class="row">
            <div class="col-md-1 left-section">
            </div>

             <div id="Free-Courses" class="col-md-10 center-section">
                <h3 class="my-3 fw-bolder">Free  Courses</h3>
                <span class="justify-text">Our high-quality faculty is capable of teaching both Hanyu Pinyin and Zhuyin (Bopomopho) to meet the individual needs of international students and enhance all aspects of Mandarin Chinese proficiency.FJCU offers various student support programs. There are free weekly evening Mandarin Chinese courses totaling 6 hours, as well as a one-on-one tutoring program aimed at improving language proficiency.</span>
                <span class="justify-text"><br>Note for Applicant：</span>
                <ul class="custom-list">
                    <li>A deposit of NTS1,000 is required to pay before the courses start. It can be returned if your absent hours are less than 12 hours.</li>
                    <li>Placement test only for new students who have studied Mandarin for more than 1 year. The test will be held before the Courses start.</li>
                    <li>This is a non-credit course.</li>
                    <li>Class change or cancellation is only allowed during the first week when the attendance is not counted and the deposit is refundable.</li>
                </ul>
                <h3 id="Customized-Short-term" class="my-3 fw-bolder"><br><br>Customized Short-term course</h3>
            </div>

            <div class="col-md-1 right-section">
            </div>

        </div>
    </div>

    <!-- 第四區塊 -->
      <div class="container-fluid block4">    
        <div class="row">
            <div class="col-md-4 left-section4">
                 <div class="box3">
                    <img class="icon" src="images/Mandarin icon1.png" > <!-- Replace with the actual image path -->
                    <h3 >Business</h3>
                       <p>Improve your communication skills effectively to advance your professional network and cultural competence.</p>
                  <div class="line"></div>
                     <a class="button4" href="#introduction-liberal" data-scroll="true">Find-out more</a>
                </div>
            </div>

            <div class="col-md-4 center-section">
                 <div class="box3">
                    <img class="icon" src="images/Mandarin icon2.png" > <!-- Replace with the actual image path -->
                    <h3>Travel</h3>
                       <p>Learn and practice useful Mandarin phrases that make your travel safer and more enjoyable.</p>
                  <div class="line"></div>
                     <a class="button4" href="#introduction-liberal" data-scroll="true">Find-out more</a>
                </div>
            </div>


            <div class="col-md-4 right-section">
                <div class="box3">
                    <img class="icon" src="images/Mandarin icon3.png" > <!-- Replace with the actual image path -->
                    <h3>TOCFL preparation</h3>
                       <p>The course is to prepare you to achieve your targeted level andopen more global opportunities in academia and profession.</p>
                  <div class="line"></div>
                     <a class="button4" href="#introduction-liberal" data-scroll="true">Find-out more</a>
                </div>
            </div>
        </div>
    </div>

    <!-- 第五區塊 -->
      <div class="container-fluid introduction-block">
        <br>
        <div class="row">
            <div class="col-md-1 left-section">
            </div>
            <div id="Taiwanese-Culture" class="col-md-10 left-section">
                <h3 class="my-3 fw-bolder">Taiwanese Culture Courses</h3>
            </div>
            <div class="col-md-1 left-section">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 left-section">
            </div>

             <div class="col-md-6 center-section">
                <div class="row gx-4 gy-4">
                    <div class="col-md-6">
                        <img class="Image5" src="images/Mandarin-Learning2.jpg" class="img-fixed-height rounded" >
                    </div>
                    <div class="col-md-6">
                        <img class="Image5" src="images/Mandarin-Learning3.jpg" class="img-fixed-height rounded" >
                    </div>
                </div>
                <div class="row gx-4 gy-4">
                    <div class="col-md-6">
                        <img class="Image5" src="images/Mandarin-Learning4.jpg" class="img-fixed-height rounded" >
                    </div>
                    <div class="col-md-6">
                        <img class="Image5" src="images/Mandarin-Learning5.jpg" class="img-fixed-height rounded" >
                    </div>
                </div>
                <span class="justify-text">CCLC offers a variety of culture courses including Chinese calligraphy, seal cutting, Taiwanese tea culture, Introduction of Taiwanese Hokkien (Tâigí). These courses are for students who would like to experience the unique culture of Taiwan.</span>
                <div class="button2-container">
                       <button class="button2" onclick="location.href='https://www.facebook.com/fjulc/'">Find-out more</button>
                </div>
            </div>

            <div class="col-md-3 right-section">
            </div>
            <br><br>
        </div>
        </div>
        <br><br>  
    <?php include 'footer.php'; ?>
<body>
</html>

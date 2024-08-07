<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home</title>

    <!-- bootstrap 5 css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <!-- icons -->
    <link rel="icon" type="icon/x-icon" href="https://icons8.com/icon/83326/home" />

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css" />

  </head>

  <body id="home">

    <a href="#top" class="back-to-top" id="backToTop">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0m-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707z"/>
      </svg>
    </a>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent shadow-sm fixed-top">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto mx-auto">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#projects">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#certificate">Certificate & Skills</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#education">Education</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Junbotron -->
    <section class="jumbotron text-center">
      <h2 class="display-6 fw-light pt-5 mt-5">Hello !</h2>
      <h1 class="display-6 fw-bold">I'm Sayid Muhammad Jundullah</h1>
      <p class="lead text-secondary">Web Developer | Data Analyst</p>

      <!-- get sayid's resume -->
      <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-secondary"><a class="icon-link icon-link-hover" style="color: aliceblue; text-decoration: none;" href="https://drive.google.com/file/d/15B3csmE9iDaNYxN7hpnDkauOz3nrpn31/view?usp=sharing" target="_blank">Get Sayid's CV &raquo</a></button>
        <!-- <button type="button" class="btn btn-success"><a class="icon-link icon-link-hover" style="color: aliceblue; text-decoration: none;" href="https://api.whatsapp.com/send?phone=6285766267769&text=Halo,%20apakah%20bisa%20membuat%20wesite%20untuk%20saya%20?">Whatsapp</a></button> -->
      </div>

      <!-- akhir get sayid's resume -->
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="pt-5 mt-5">
        <path
          fill="#f8f9fa"
          fill-opacity="1"
          d="M0,96L48,90.7C96,85,192,75,288,85.3C384,96,480,128,576,165.3C672,203,768,245,864,245.3C960,245,1056,203,1152,181.3C1248,160,1344,160,1392,160L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Jumbotron -->

    <!-- About Me -->
    <section id="about" class="section-hidden bg-light">
      <div class="container">
        <div class="row text-center mb-3 mt-5">
          <div class="col">
            <h2>
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 20">
              <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
            </svg>
              About Me
            </h2>
          </div>
        </div>
        <div class="row text-center fs-5 justify-content-around mb-5">
          <div class="col-md-10 fw-light">
<<<<<<< HEAD
              <p>I am a 4th-semester Informatics Engineering student with a strong passion for data analysis and processing. My expertise includes data manipulation using Microsoft Excel, Python, SQL queries, and Tableau for visualization, alongside employing statistical techniques to extract and present meaningful insights from data. These skills enable me to interpret data effectively and support informed decision-making.</p>
              <p>In addition, I am proficient in creating simple web applications using frameworks like Bootstrap and Tailwind CSS. My solid understanding of responsive design and UX/UI principles allows me to develop web interfaces that are both visually appealing and highly functional.</p>
              <p>I am eager to further hone my analytical skills through internship opportunities in a professional setting. I am confident that this practical experience will broaden my perspective and deepen my understanding of how data analysis can be leveraged to address real-world challenges in the industry.</p>
=======
              <p class="fs-6 fs-md-5 fs-lg-4">I am a 4th-semester Informatics Engineering student with a strong passion for data analysis and processing. My expertise includes data manipulation using Microsoft Excel, Python, SQL queries, and Tableau for visualization, alongside employing statistical techniques to extract and present meaningful insights from data. These skills enable me to interpret data effectively and support informed decision-making.</p>
              <p class="fs-6 fs-md-5 fs-lg-4">In addition, I am proficient in creating simple web applications using frameworks like Bootstrap and Tailwind CSS. My solid understanding of responsive design and UX/UI principles allows me to develop web interfaces that are both visually appealing and highly functional.</p>
              <p class="fs-6 fs-md-5 fs-lg-4">I am eager to further hone my analytical skills through internship opportunities in a professional setting. I am confident that this practical experience will broaden my perspective and deepen my understanding of how data analysis can be leveraged to address real-world challenges in the industry.</p>
>>>>>>> c8fbcdd (update responsivity)
            <!-- Instagram -->
            <a class="sosmed" href="https://instagram.com/saed.m_" target="_blank"><img src="img/instagram.svg" alt="instagram" style="height: 30px; margin: 5%" /></a>
            <!-- twitter -->
            <a class="sosmed" href="https://sayidmuhammad15@gmail.com" target="_blank"><img src="img/mail.svg" alt="Email" style="height: 30px; margin: 5%" /></a>
            <!-- github -->
            <a class="sosmed" href="https://github.com/muhammadjundullah" target="_blank"><img src="img/github.svg" alt="github" style="height: 30px; margin: 5%" /></a>
            <!-- linkedin -->
            <a class="sosmed" href="https://linkedin.com/in/sayidm" target="_blank"><img src="img/linkedin.svg" alt="linkedin" style="height: 30px; margin: 5%" /></a>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,32L40,74.7C80,117,160,203,240,208C320,213,400,139,480,96C560,53,640,43,720,64C800,85,880,139,960,160C1040,181,1120,171,1200,154.7C1280,139,1360,117,1400,106.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir About -->

    <!-- Project -->
    <section id="projects" class="section-hidden">
      <div class="container" style="padding-bottom: 10rem">

        <div class="row text-center mt-5">
          <div class="col">
            <h2>
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-hammer" viewBox="0 0 16 16">
              <path d="M9.972 2.508a.5.5 0 0 0-.16-.556l-.178-.129a5 5 0 0 0-2.076-.783C6.215.862 4.504 1.229 2.84 3.133H1.786a.5.5 0 0 0-.354.147L.146 4.567a.5.5 0 0 0 0 .706l2.571 2.579a.5.5 0 0 0 .708 0l1.286-1.29a.5.5 0 0 0 .146-.353V5.57l8.387 8.873A.5.5 0 0 0 14 14.5l1.5-1.5a.5.5 0 0 0 .017-.689l-9.129-8.63c.747-.456 1.772-.839 3.112-.839a.5.5 0 0 0 .472-.334"/>
            </svg>
              My Projects
            </h2>
          </div>
        </div>

        <!-- Gambar orang kerja -->
        <div class="row m-5 justify-content-center p-5">
          <img src="img/hello3.svg" alt="mantap" style="width: 500px;">
        </div>

<<<<<<< HEAD
        <!-- card project baris ke satu -->
        <div class="row m-3 fw-light">
          <div class="col-4">
            <div class="card animate">
              <div class="card-body">
                <h5 class="card-title">Website Pengelola Data Mahasiswa</h5>
                <p class="card-text">Web Development.</p>
                <div class="btn-group" role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-primary"><a class="icon-link icon-link-hover" style="color: aliceblue" href="https://github.com/MuhammadJundullah/Belajar_PHP/tree/main/Web%20Pengelola%20Data%20Mahasiswa" target="_blank">Source Code</a></button>
                  <button type="button" class="btn btn-success"><a class="icon-link icon-link-hover" style="color: aliceblue" href="http://data-mahasiswa.portofolio.great-site.net">Visit Site</a></button>
                </div>  
              </div>  
            </div>
          </div>
          <div class="col-4 mb-3">
            <div class="card animate">
              <div class="card-body">
                <h5 class="card-title">Website Pengelola Data Prodi</h5>
                <p class="card-text">Web Development.</p>
                <div class="btn-group" role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-primary"><a class="icon-link icon-link-hover" style="color: aliceblue" href="https://github.com/MuhammadJundullah/Belajar_PHP/tree/main/Web%20Pengelola%20Data%20Prodi%20v2" target="_blank">Source Code</a></button>
                  <button type="button" class="btn btn-success"><a class="icon-link icon-link-hover" style="color: aliceblue" href="http://manajemen-prodi.portofolio.great-site.net/">Visit Site</a></button>
                </div>   
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card animate">
              <div class="card-body">
                <h5 class="card-title">MSIB Vacancy Analysis</h5>
                <p class="card-text">Data Analyst.</p>
                <a href="https://github.com/MuhammadJundullah/Data-Analysis/blob/main/MSIB%20Vacancy%20Analysis/Mitra_MSIB_Analytics.ipynb" target="_blank" class="btn btn-primary">Notebook</a>
              </div>
            </div>
          </div>
        </div> 

        <!-- card project baris ke dua -->
        <div class="row m-3 fw-light">
          <div class="col-4 mb-3">
            <div class="card animate">
              <div class="card-body">
                <h5 class="card-title">Car Sales Analysis</h5>
                <p class="card-text">Data Analyst.</p>
                <a href="https://github.com/MuhammadJundullah/Data-Analysis/blob/main/Car%20Sales%20Analysis/Car_sales_cleaning.ipynb" target="_blank" class="btn btn-primary">Notebook</a>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card animate">
              <div class="card-body">
                <h5 class="card-title">E-Commerse Customer Analysis</h5>
                <p class="card-text">Data Analyst.</p>
                <a href="https://github.com/MuhammadJundullah/Data-Analysis/blob/main/E-Commerse%20Customer%20Analysis/Customers_Analysis.ipynb" target="_blank" class="btn btn-primary">Notebook</a>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card animate">
              <div class="card-body">
                <h5 class="card-title">Car Efficientest Analytics</h5>
                <p class="card-text">Data Analyst.</p>
                <a href="https://github.com/MuhammadJundullah/Data-Analysis/blob/main/E-Commerse%20Customer%20Analysis/Customers_Analysis.ipynb" target="_blank" class="btn btn-primary">Notebook</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#f8f9fa"
          fill-opacity="1"
          d="M0,192L48,202.7C96,213,192,235,288,240C384,245,480,235,576,208C672,181,768,139,864,128C960,117,1056,139,1152,149.3C1248,160,1344,160,1392,160L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Project -->
=======
       <!-- Card Projects -->
<div class="container mt-4">
    <!-- Baris Pertama -->
    <div class="row g-3">
        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
            <div class="card animate">
                <div class="card-body">
                    <h5 class="card-title">Website Pengelola Data Mahasiswa</h5>
                    <p class="card-text">Web Development.</p>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a class="btn btn-primary" href="https://github.com/MuhammadJundullah/Belajar_PHP/tree/main/Web%20Pengelola%20Data%20Mahasiswa" target="_blank">Source Code</a>
                        <a class="btn btn-success" href="http://data-mahasiswa.portofolio.great-site.net">Visit Site</a>
                    </div>  
                </div>  
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
            <div class="card animate">
                <div class="card-body">
                    <h5 class="card-title">Website Pengelola Data Prodi</h5>
                    <p class="card-text">Web Development.</p>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a class="btn btn-primary" href="https://github.com/MuhammadJundullah/Belajar_PHP/tree/main/Web%20Pengelola%20Data%20Prodi%20v2" target="_blank">Source Code</a>
                        <a class="btn btn-success" href="http://manajemen-prodi.portofolio.great-site.net/">Visit Site</a>
                    </div>   
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
            <div class="card animate mb-3">
                <div class="card-body">
                    <h5 class="card-title">MSIB Vacancy Analysis</h5>
                    <p class="card-text">Data Analyst.</p>
                    <a href="https://github.com/MuhammadJundullah/Data-Analysis/blob/main/MSIB%20Vacancy%20Analysis/Mitra_MSIB_Analytics.ipynb" target="_blank" class="btn btn-primary">Notebook</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Baris Kedua -->
    <div class="row g-3">
        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
            <div class="card animate">
                <div class="card-body">
                    <h5 class="card-title">Car Sales Analysis</h5>
                    <p class="card-text">Data Analyst.</p>
                    <a href="https://github.com/MuhammadJundullah/Data-Analysis/blob/main/Car%20Sales%20Analysis/Car_sales_cleaning.ipynb" target="_blank" class="btn btn-primary">Notebook</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
            <div class="card animate">
                <div class="card-body">
                    <h5 class="card-title">E-Commerse Customer Analysis</h5>
                    <p class="card-text">Data Analyst.</p>
                    <a href="https://github.com/MuhammadJundullah/Data-Analysis/blob/main/E-Commerse%20Customer%20Analysis/Customers_Analysis.ipynb" target="_blank" class="btn btn-primary">Notebook</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
            <div class="card animate">
                <div class="card-body">
                    <h5 class="card-title">Car Efficientest Analytics</h5>
                    <p class="card-text">Data Analyst.</p>
                    <a href="https://github.com/MuhammadJundullah/Data-Analysis/blob/main/E-Commerse%20Customer%20Analysis/Customers_Analysis.ipynb" target="_blank" class="btn btn-primary">Notebook</a>
                </div>
            </div>
        </div>
    </div>
</div>
>>>>>>> c8fbcdd (update responsivity)

    <!-- Certificate Section -->
    <section id="certificate" class="section-hidden bg-light">
      <div class="container" style="padding-bottom: 10rem">
        <div class="row text-center mt-5 mb-3">
          <div class="col">
            <h2>
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-award-fill" viewBox="0 0 16 20">
              <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864z"/>
              <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1z"/>
            </svg> 
              Certificate & Skills
            </h2>
          </div>
        </div>
        <div class="row justify-content-center">
<<<<<<< HEAD
          <div class="col-md-4 mt-3">
            <div class="card mx-auto animate" style="width: 18rem;">
=======
          <div class="col-12 col-sm-6 col-md-4 col-lg-4">
            <div class="card mx-auto animate mb-3" style="width: 18rem;">
>>>>>>> c8fbcdd (update responsivity)
              <img src="img/Certificate/dqlab_py.png" class="card-img-top" alt="Dqlab Certificate">
              <div class="card-body">
                <p class="card-text fw-light">Introduction to Data Science with Python. <br><hr>
                <span class="text-secondary fst-italic">12 August 2023</span></p>
              </div>
            </div>
          </div>
<<<<<<< HEAD
          <div class="col-md-4 mt-3">
            <div class="card mx-auto animate" style="width: 18rem;">
=======
          <div class="col-12 col-sm-6 col-md-4 col-lg-4">
            <div class="card mx-auto animate mb-3" style="width: 18rem;">
>>>>>>> c8fbcdd (update responsivity)
              <img src="img/Certificate/dqlab_r.png" class="card-img-top" alt="Dqlab Certificate">
              <div class="card-body">
                <p class="card-text fw-light">Introduction to Data Science with R. <br><hr>
                <span class="text-secondary fst-italic">12 May 2023</span></p>
              </div>
            </div>
          </div>
<<<<<<< HEAD
          <div class="col-md-4 mt-3">
            <div class="card mx-auto animate" style="width: 18rem;">
=======
          <div class="col-12 col-sm-6 col-md-4 col-lg-4">
            <div class="card mx-auto animate mb-3" style="width: 18rem;">
>>>>>>> c8fbcdd (update responsivity)
              <img src="img/Certificate/pmm.png" class="card-img-top" alt="Dqlab Certificate">
              <div class="card-body">
                <p class="card-text fw-light">Pertukaran Mahasiswa Merdeka Batch 3. <br><hr>
                <span class="text-secondary fst-italic">5 April 2024</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,32L40,74.7C80,117,160,203,240,208C320,213,400,139,480,96C560,53,640,43,720,64C800,85,880,139,960,160C1040,181,1120,171,1200,154.7C1280,139,1360,117,1400,106.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir certificate -->

     
    <!-- Education -->
    <section id="education" class="section-hidden">
      <div class="container" style="padding-bottom: 10rem">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-mortarboard-fill" viewBox="0 0 16 20">
              <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917z"/>
              <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466z"/>
            </svg>
              Education
            </h2>
          </div>
        </div>
          <div class="row justify-content-center">
<<<<<<< HEAD
            <div class="col-md-6 mt-3">
              <div class="card mx-auto animate" style="width: 18rem;">
=======
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
              <div class="card mx-auto animate mb-3" style="width: 18rem;">
>>>>>>> c8fbcdd (update responsivity)
                <img src="img/unimal.png" class="card-img-top" alt="Dqlab Certificate">
                <div class="card-body">
                  <hr>
                  <p class="fw-bold">Universitas Malikussaleh</p>
                  <p class="fst-italic">Sarjana Teknin Informatika</p>
                  <p class="fw-light">Juli 2022 - Saat ini (Semester 4)</p>
                </div>
              </div>
            </div>
<<<<<<< HEAD
            <div class="col-md-6 mt-3">
              <div class="card mx-auto animate" style="width: 18rem;" class="animate">
=======
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
              <div class="card mx-auto animate mb-3" style="width: 18rem;" class="animate">
>>>>>>> c8fbcdd (update responsivity)
                <img src="img/fourta.jpeg" class="card-img-top" alt="Dqlab Certificate">
                <div class="card-body">
                  <hr>
                  <p class="fw-bold">SMA Negeri 4 Takengon</p>
                  <p class="fst-italic">Jurusan Mipa</p>
                  <p class="fw-light">Juli 2019 - juli 2022</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Education -->

    <!-- Footer -->
    <p style="margin-bottom: 0px; padding-bottom: 1rem" class="text-dark small text-center">© 2024 Ahmad. All right reserved</p>

    <!-- Js bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>    
    

  </body>
</html>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <title>Generationames</title>
</head>

<body>
  <nav class="navbar position-sticky top-0 navbar-expand-lg bg-dark border-bottom border-body nav-underline shadow-sm z-3" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="images/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top" style="filter: invert(1);">
        Generationames</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Generations
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/gens.html#Alpha">Gen Alpha</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="/gens.html#Gen-Z">Gen Z</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="/gens.html#Millenials">Millenials</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="/gens.html#Gen-X">Generation X</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="/gens.html#Baby-Boom">Baby Boomers</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="/gens.html#Silent-Gen">The Silent Generation</a></li>
              <li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="/gens.html#Great-Gen">The Greatest Generation</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="/gens.html#Lost-Gen">The Lost Generation</a></li>
            </ul>
          <li class="nav-item">
            <a class="nav-link" href="/about.html">About</a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="users.php">Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/faq.html">FAQs</a>
          </li>
        </ul>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button class="btn btn-outline-primary me-md-2" type="button" id="login-btn" data-bs-toggle="modal"
            data-bs-target="#loginModal">Login</button>
          <button class="btn btn-outline-primary" type="button" id="signup-btn" data-bs-toggle="modal"
            data-bs-target="#signupModal">Sign Up</button>
          <!-- Modal -->

        </div>
      </div>
  </nav>
  <main>

    <div id="carouselExampleIndicators" class="carousel slide carousel-fade">
      <div class="carousel-indicators"  style="filter: invert(1);">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/banner1.jpg" class="d-block w-100" alt="..." style="filter: brightness(90%);">
          <div class="carousel-caption d-none d-md-block rounded-pill" style="background-color: rgba(0, 0, 0, 0.5); color:white;">
            <h5>Generation Names Explained!</h5>
            <p>A go to place for understanding named generations.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/banner2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/banner3.jpg" class="d-block w-100" alt="..." style="filter: brightness(90%);">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon rounded" aria-hidden="true"
          style="background-color: rgba(0, 0, 0, 0.5);"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon rounded" aria-hidden="true"
          style="background-color: rgba(0, 0, 0, 0.5);"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="modal fade" id="loginModal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Login</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="login-username"><i class="bi bi-person-circle"></i> Username</label>
                <input type="text" class="form-control" id="login-username" placeholder="Enter Username" required
                  maxlength=50>
              </div>
              <div class="form-group">
                <label for="login-password"><i class="bi bi-incognito"></i> Password</label>
                <input type="password" class="form-control" id="login-password" placeholder="Password" required
                  minlength=8 maxlength=20>
              </div>
              <button type="submit" class="btn btn-primary mt-3" id="login">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="signupModal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Sign Up</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="signup-username"><i class="bi bi-person-add"></i> Username</label>
                <input type="text" class="form-control" id="signup-username" placeholder="Enter Username" required
                  maxlength=50>
              </div>
              <div class="form-group">
                <label for="sigup-password"><i class="bi bi-type"></i> Password</label>
                <input type="password" class="form-control" id="signup-password" placeholder="Password" required
                  minlength=8 maxlength=20>
              </div>
              <div class="form-group">
                <label for="generation"><i class="bi bi-people-fill"></i> Which Generation you belongs to?</label>
                <select class="form-select" id="generation">
                  <option value="ga" selected>Generation Alpha</option>
                  <option value="gz">Generation Z</option>
                  <option value="m">Millenials</option>
                  <option value="gx">Generation X</option>
                  <option value="bb">Baby Boomer</option>
                  <option value="sg">Silent Generation</option>
                  <option value="gg">Greatest Generation</option>
                  <option value="lg">Lost Generation</option>
                </select>
              </div>
              <button type="submit" id='signUp' class="btn btn-primary mt-3">Sign Up</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="container mb-5">
      <h2 class="mt-4">Welcome to Generationames!</h2>
      <p>A named Generations explainer site.
        <button class="btn btn-sm btn-outline-primary mb-1" type="button" data-bs-toggle="collapse"
          data-bs-target="#collapseWelcome">Continue</button>
      <div class="collapse" id="collapseWelcome">
        <div class="card card-body">
          Discover the fascinating differences between generations. Whether you're a Baby Boomer, Gen X, Millennial, or
          Gen Z, our site provides insightful information about each generation's unique traits, cultural impact, and
          more.
        </div>
        </p>
      </div>

      <div class="row mt-4">
        <div class="col-md-9">
          <h2>Discover the Generations:</h2>
          <p>At Generationames, we delve into the fascinating world of generational studies. Understanding the distinct
            characteristics of each generation helps us appreciate the diversity in perspectives, values, and behaviors.
            Whether you're here to learn more about your own generation or to understand others better, you've come to
            the right place.</p>
        </div>
        <div class="col-md-3">
          <img src="images/Generation_timeline.svg.png" alt="" class="img-fluid border border-4 rounded border-secondary">
        </div>
      </div>
      <h2 class="mt-5 mt-md-1">Why It Matters:<button class="btn btn-sm btn-outline-secondary ms-3 rounded-pill"
          data-bs-toggle="collapse" data-bs-target="#collapseWidthExample">Know More</button></h2>
      <div style="min-height: 70px;">
        <div class="collapse collapse-horizontal ps-4 ps-md-2" id="collapseWidthExample">
          <p class="" style="width:80vw;">
            Understanding generational differences is crucial in today's interconnected world. Whether in the workplace,
            at home, or in social settings, recognizing these differences can lead to better communication, stronger
            relationships, and more effective collaboration.
          </p>
        </div>
      </div>

      <h2>Our Mission:</h2>
      <p>Our mission at Generationames is to educate and inform about the unique characteristics and cultural
        contributions of each generation. By providing accurate and engaging content, we aim to bridge the gap between
        generations and foster a greater understanding of the evolving social landscape.</p>
    </div>
  </main>
  <div class="container-fluid position-relative bottom-0 py-4  bg-body-tertiary">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top">
      <p class="col-md-4 mb-0 text-muted">© 2024 Shoaib, SDE</p>

      <a href="/"
        class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none" style="filter: invert(1);">
        <img src="images/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        &nbsp; Generationames
      </a>

      <ul class="nav col-md-4 justify-content-end">
        <li class="nav-item"><a href="/gens.html" class="nav-link px-2 text-muted">Generations</a></li>
        <li class="nav-item"><a href="/about.html" class="nav-link px-2 text-muted">About</a></li>
        <li class="nav-item"><a href="users.php" class="nav-link px-2 text-muted">Users</a></li>
        <li class="nav-item"><a href="/faq.html" class="nav-link px-2 text-muted">FAQs</a></li>
      </ul>
    </footer>
  </div>
  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>
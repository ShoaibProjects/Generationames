<?php
 require 'connection.php';
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <title>Users</title>
</head>

<body>
 <div class="wrapper" style="min-height:100vh; display:flex; flex-direction:column;">
 <nav class="navbar position-sticky top-0 z-3 navbar-expand-lg bg-body-tertiary nav-underline shadow-sm">
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
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
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
            <a class="nav-link active" href="users.php">Users</a>
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
          
        </div>
      </div>
    </div>
  </nav>
  <main>
    <!-- Modal -->
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
                      <input type="text" class="form-control" id="login-username" placeholder="Enter Username" required maxlength=50>
                    </div>
                    <div class="form-group">
                      <label for="login-password"><i class="bi bi-incognito"></i> Password</label>
                      <input type="password" class="form-control" id="login-password" placeholder="Password" required minlength=8 maxlength=20>
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
                      <input type="text" class="form-control" id="signup-username" placeholder="Enter Username" required maxlength=50>
                    </div>
                    <div class="form-group">
                      <label for="sigup-password"><i class="bi bi-type"></i> Password</label>
                      <input type="password" class="form-control" id="signup-password" placeholder="Password" required minlength=8 maxlength=20>
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
    <div class="container mt-4">
      <h2><i class="bi bi-clipboard2-data"></i> User Statistics</h2>
      <p>Below is a table displaying the total number of users belonging to each generation based on their login information:</p>
      <table class="table table-striped table-hover table-bordered w-md-50 ms-auto me-auto mb-5 mb-md-0">
        <thead>
          <tr>
            <th scope="col">S. No.</th>
            <th scope="col">Generation</th>
            <th scope="col">Range</th>
            <th scope="col">Users of this site</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          <tr>
            <td>1</td>
            <td scope="row">Gen Alpha</td>
            <td>2010s-2020s</td>
            <td><?php
            echo "".$alpha;
            ?></td>
          </tr>
          <tr>
            <td>2</td>
            <td scope="row">Gen Z</td>
            <td>1997-2012</td>
            <td><?php
            echo "".$genz;
            ?></td>
          </tr>
          <tr>
            <td>3</td>
            <td scope="row">Millenials</td>
            <td>1981-1996</td>
            <td><?php
            echo "".$mill;
            ?></td>
          </tr>
          <tr>
            <td>4</td>
            <td scope="row">Gen X</td>
            <td>1965-1980</td>
            <td><?php
            echo "".$genx;
            ?></td>
          </tr>
          <tr>
            <td>5</td>
            <td scope="row">Baby Boomers</td>
            <td>1946-1964</td>
            <td><?php
            echo "".$babyboom;
            ?></td>
          </tr>
          <tr>
            <td>6</td>
            <td scope="row">Silent Gen</td>
            <td>1928-1945</td>
            <td><?php
            echo "".$silentgen;
            ?></td>
          </tr>
          <tr>
            <td>7</td>
            <td scope="row">Greatest Gen</td>
            <td>1901-1927</td>
            <td><?php
            echo "".$greatgen;
            ?></td>
          </tr>
          <tr>
            <td>8</td>
            <td scope="row">Lost Gen</td>
            <td>1883-1900</td>
            <td><?php
            echo "".$lostgen;
            ?></td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>
  <div style="margin-top:auto;">
  <div class="container-fluid position-relative bottom-0 py-4 bg-body-tertiary">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top">
            <p class="col-md-4 mb-0 text-muted">© 2024 Shoaib, SDE</p>

            <a href="/"
                class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none" style="filter: invert(1);">
                <img src="images/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                &nbsp; Generationames
            </a>

      <ul class="nav col-md-4 justify-content-end">
        <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">Home</a></li>
        <li class="nav-item"><a href="/gens.html" class="nav-link px-2 text-muted">Generations</a></li>
        <li class="nav-item"><a href="/about.html" class="nav-link px-2 text-muted">About</a></li>
        <li class="nav-item"><a href="/faq.html" class="nav-link px-2 text-muted">FAQs</a></li>
      </ul>
    </footer>
  </div>
 </div>
  </div>
  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>
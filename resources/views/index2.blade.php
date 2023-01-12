<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="icon" type="image/x-icon" href="/image/home.png" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="/css/admin.css" />
    <title>Admin</title>
  </head>
  <body>
    <!-- top navigation bar -->
    <nav style="background-color:silver;" class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#sidebar"
          aria-controls="offcanvasExample"
        >
        
          <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
        <a
          class="navbar-brand me-auto ms-lg-0 ms-3 text-warning text-uppercase fw-bold"
          href="#"
          >AH</a
        >
        <a
          class="navbar-brand me-auto ms-lg-0 ms-3 text-danger text-uppercase fw-bold"
          href="#"
          >WHEELS</a
        >
        <a
          class="navbar-brand me-auto ms-lg-5 margin-left-30 ms-3 text-center text-dark text-uppercase fw-bold"
          href="#"
          >Welcome mr. admin</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#topNavBar"
          aria-controls="topNavBar"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="topNavBar">
          <form class="d-flex ms-auto my-3 my-lg-0">
            <div class="input-group">
              <input
                class="form-control"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-warning" type="submit">
                <i class="bi bi-search"></i>
              </button>
            </div>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle ms-2"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="bi bi-person-fill text-danger"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div
      class="offcanvas offcanvas-start sidebar-nav bg-dark"
      tabindex="-1"
      id="sidebar"
    >
    
      <div class="offcanvas-body p-0">
        <nav class="navbar-dark">
          <ul class="navbar-nav">
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3">
                NAVIGATION
              </div>
            </li>
            <li>
              <a href="http://127.0.0.1:8000/dash" class="nav-link px-3 active">
                <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                <span>Dashboard</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                Admin
              </div>
            </li>
            
            <li>
              <a href="http://127.0.0.1:8000/Add" class="nav-link px-3">
                <span class="me-2"><i  class="bi bi-person-fill "></i></span>
                <span>Add New Car</span>
              </a>
            </li>
            <li>
              <a href="http://127.0.0.1:8000/Show" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-person-fill"></i></span>
                <span>Show All Cars</span>
              </a>
            </li>
            <li>
              <a href="#bookings" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-person-fill"></i></span>
                <span>Bookings</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            
          </ul>
        </nav>
      </div>
    </div>
    <!-- offcanvas -->
    <main class="mt-5 pt-3 fw-bold">
      <div class="container-fluid">
        <div class="row ">
          <div class="col-md-12">
            <h4>Dashboard</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <div style="background-color:silver ;" class="card text-dark h-100">
              <div class="font-weight-bold text-center py-5">3</div>
              <div class=" font-weight-bold text-center ">
                Total Cars
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div style="background-color:silver ;" class="card text-dark h-100">
              <div class="font-weight-bold text-center py-5">000</div>
              <div class="font-weight-bold text-center ">
                Total Bookings
              </div>
            </div>
          </div>

          <div class="col-md-3 mb-3">
            <div style="background-color:silver ;" class="card text-dark h-100">
              <div class="font-weight-bold text-center py-5">000</div>
              <div class="font-weight-bold text-center ">
                Total Customers
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div style="background-color:silver ;" class="card text-dark h-100">
              <div class="font-weight-bold text-center py-5">000</div>
              <div class="font-weight-bold text-center ">
                Orders Delivered
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="./js/dataTables.bootstrap5.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>

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
    <link rel="stylesheet" href="/css/addCar.css" />
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
    
    
    <div class="form-body">
      <div class="row">
          <div class="form-holder">
              <div class="form-content">
                  <div class="form-items">
                      <h3> Update a Car</h3>
                      <form action="{{url('update',$car->id)}}" method="post" class="requires-validation" >
                        @csrf
                          <div class="col-md-12">
                             <input class="form-control" type="File" name="src" accept="image/jpeg,image/jpg,image/png" placeholder="Enter Car Image" required>
                            
                          </div>

                          
                          <div class="col-md-12">
                              <input class="form-control" type="text" name="price" placeholder="Enter Price of Car" required>
                               <div class="valid-feedback">Price is valid!</div>
                               <div class="invalid-feedback">Price field cannot be blank!</div>
                          </div>
                          <div class="col-md-12">
                             <input class="form-control" type="text" name="condition" placeholder="Enter Car Condition" required>
                             <div class="valid-feedback">Car Condition is valid!</div>
                             <div class="invalid-feedback">Car Condition cannot be blank!</div>
                          </div>


                         <div class="col-md-12">
                            <input class="form-control" type="text" name="model" placeholder="Enter Model please" required>
                             <div class="valid-feedback">Model field is valid!</div>
                             <div class="invalid-feedback">Model field cannot be blank!</div>
                         </div>

                         <div class="col-md-12">
                            <input class="form-control" type="text" name="fuel" placeholder="Enter Fuel please" required>
                             <div class="valid-feedback">Fuel field is valid!</div>
                             <div class="invalid-feedback">Fuel field cannot be blank!</div>
                         </div>


                         <div class="col-md-12">
                            <input class="form-control" type="text" name="gear" placeholder="Enter Gear please" required>
                             <div class="valid-feedback">Gear field is valid!</div>
                             <div class="invalid-feedback">Gear field cannot be blank!</div>
                         </div>

                          <div class="col-md-12">
                            <input class="form-control" type="text" name="speed" placeholder="Enter Speed in mph please" required>
                             <div class="valid-feedback">Speed field is valid!</div>
                             <div class="invalid-feedback">Speed field cannot be blank!</div>
                         </div>
                          <div>
                             <div class="valid-feedback mv-up">You selected a Engine Type!</div>
                              <div class="invalid-feedback mv-up">Please select engine type!</div>
                          </div>

                
                

                          <div class="form-button mt-3">
                              <button id="submit" type="submit" class="btn btn-warning">Submit</button>
                          </div>
                      </form>
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

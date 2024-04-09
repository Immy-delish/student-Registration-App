<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- add icon link -->
        <link rel="icon" href=
    "https://cdn.iconscout.com/icon/premium/png-512-thumb/verified-user-6768727-5568582.png?f=webp&w=256"
              type="image/x-icon">

        <!-- Add Bootstrap -->  
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
        <!-- Example Navbar with Logo -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
      <a class="navbar-brand" href="#">
          <img src="https://cdn.iconscout.com/icon/premium/png-512-thumb/verified-user-6768727-5568582.png?f=webp&w=256" alt="Logo" height="30">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/devschool/students">Students</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/devschool/courses">Courses</a>
              </li>
          </ul>
      </div>
  </div>
</nav>

    </head>
    <style>
      p {
          text-align: center;
      }
  </style> 
    <h4><p><b>Students for the available courses.</b></p></h4>
    <body>
        <div class="container mt-5">
            <form method="POST" action="/addcontact">
                @csrf
                <div class="form-group mb-2">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email">
                </div>
                <div class="form-group mb-2">
                    <label for="exampleInputPassword1">Phone Number</label>
                    <input type="text" class="form-control" name="phone" placeholder="Phone">
                </div>
                <div class="form-group mb-2">
                    <label for="exampleInputPassword1">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Name">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>

                <!-- Add a Space after -->
                <span class="d-block p-2 text-gray"></span>
            </form>
       <!-- Create an Accordion to Diplay the List of Registratered students.-->

        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <strong> List of Registered students.</strong>
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>
                  <table class="table mt-5">
                      <thead>
                          <tr>
                              <th scope="col">Id</th>
                              <th scope="col">Name</th>
                              <th scope="col">Phone</th>
                              <th scope="col">Email</th>
                              <th scope="col">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          @if (count($contact) > 0)
                              @foreach ($contact as $cont)
                                  <tr>
                                      <th>{{ $cont->id }}</th>
                                      <th>{{ $cont->name }}</th>
                                      <th>{{ $cont->phone }}</th>
                                      <th>{{ $cont->email }}</th>
                                      <th><a href="/edit/{{ $cont->id }}" class="btn btn-primary">Edit</a>
                                          <a href="/delete/{{ $cont->id }}" class="btn btn-danger">Delete</a>
                                      </th>
                                  </tr>
                              @endforeach
                          @else
                              <tr>
                                  <th>No Data</th>
                              </tr>
                          @endif
                      </tbody>
                  </table>
              <!--</div></strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>-->
            </div>
          </div>
          <!--<div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Accordion Item #2
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div> -->
           <!--<div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Accordion Item #3
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div> -->
        </div>
        
        <!-- Add a slight space after the accordion. -->

        <span class="d-block p-2 text-gray"></span>

        <!-- Add two Cards -->

        <div class="row">
          <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Students Who Have Fully Registered</h5>
                <p class="card-text">These students have fully registered and paid Tuition</p>
                <a href="#" class="btn btn-primary">Assign Lecturers</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Not Fully Registered Students</h5>
                <p class="card-text">These students have pending balances and missing Documents.</p>
                <a href="#" class="btn btn-primary">Send Notice</a>
              </div>
            </div>
          </div>
        </div>
    </body>
</html>

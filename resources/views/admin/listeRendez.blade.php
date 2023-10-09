<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="../../css/styles.css" />
    <title>laravel</title>
    {{-- link bootstrap --}}
    <link rel="stylesheet" href="/bootstrap-5.0.2-dist/css/bootstrap.css">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"> <img  src="{{ asset('Img/trf.png') }}" alt="Example Image" class="w-50" ></div>
            <div class="list-group list-group-flush my-3">
             
              
              <a href={{ route("rendezAousAujourdhui")}} class="btn btn-success ">les rendez-vous d'aujourd'hui</a>
              <a href={{ route("listeRendez.dashboard")}} class="btn btn-success mt-3">Liste des rendez-vous</a>
              
                        <a href={{ route("ajouterrendezvous")}} class="btn btn-success mt-3">ajouter</a>
                        {{-- <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Projects</a> --}}
                {{-- <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-chart-line me-2"></i>Analytics</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-paperclip me-2"></i>Reports</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-shopping-cart me-2"></i>Store Mng</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-gift me-2"></i>Products</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-comment-dots me-2"></i>Chat</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-map-marker-alt me-2"></i>Outlet</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a> --}}
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            {{-- <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>John Doe
                            </a> --}}
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">

                </div>

                <div class="row my-5">
                    
                    <h3 class="fs-4 mb-3">Recent Orders</h3>
                    <div class="col">
              
                        





{{-- <a href="articulos/create" class="btn btn-primary">CREAR</a> --}}
<a href={{ route("ajouterrendezvous")}} class="btn btn-success">ajouter</a>
<a href={{ route("rendezAousAujourdhui")}} class="btn btn-success ">les rendez-vous d'aujourd'hui</a>


{{-- {{ route("editerendezvous") --}}
<div class="mb-3">
  {{-- <form method="GET" action="{{ route('appointmentsearch') }}"> --}}
    <form method="GET" action="{{ url('/appointmentsearch') }}">
      <div class="input-group">
          <input type="search" name="query" class="form-control" placeholder="Search by National Number" value="{{ request('search') }}">
          <button type="submit" class="btn btn-primary">Search</button>
      </div>
  </form>
</div>


<table class="table table-primary table-striped mt-4">

  
  <thead>
    <tr>
     
        <th>cin</th>
        <th>name</th>
        <th>prenom</th>
        <th>téléphone</th>
        <th>Email</th>
        <th>Appointment Day</th>
        <th>Appointment Hour</th>
        <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $appointment)
    <tr>
        <td>{{ $appointment->cin }}</td>
        <td>{{ $appointment->name }}</td>
        <td>{{ $appointment->prenom }}</td>
        <td>{{ $appointment->téléphone }}</td>
        <td>{{ $appointment->email }}</td>
        <td>{{ $appointment->appointment_day }}</td>
        <td>{{ $appointment->appointment_hour }}</td>
        <td>
          <a href={{ route("editerendezvous")."/".$appointment->id}} class="btn btn-info">Editar</a>         
          
          <form method="POST" action="{{ route('deleterendezvous') }}">
            <input type="hidden" name="id" value=" {{$appointment->id}} ">

            {{-- method="POST" onsubmit="return confirm('Are you sure you want to delete this appointment?')"> --}}
            {{-- <a class="btn btn-primary" href="{{"/deleterendezvous"}}">Edit</a> --}}
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>





       
        </td>



      

        




    </tr>
    @endforeach
  
</tbody>

</table>



{{ $data->links() }}



                    </div> 
                </div>

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <style>
        :root {
  --main-bg-color: #009d63;
  --main-text-color: #009d63;
  --second-text-color: #bbbec5;
  --second-bg-color: #c1efde;
}

.primary-text {
  color: var(--main-text-color);
}

.second-text {
  color: var(--second-text-color);
}

.primary-bg {
  background-color: var(--main-bg-color);
}

.secondary-bg {
  background-color: var(--second-bg-color);
}

.rounded-full {
  border-radius: 100%;
}

#wrapper {
  overflow-x: hidden;
  background-image: linear-gradient(
    to right,
    #baf3d7,
    #c2f5de,
    #cbf7e4,
    #d4f8ea,
    #ddfaef
  );
}

#sidebar-wrapper {
  min-height: 100vh;
  margin-left: -15rem;
  -webkit-transition: margin 0.25s ease-out;
  -moz-transition: margin 0.25s ease-out;
  -o-transition: margin 0.25s ease-out;
  transition: margin 0.25s ease-out;
}

#sidebar-wrapper .sidebar-heading {
  padding: 0.875rem 1.25rem;
  font-size: 1.2rem;
}

#sidebar-wrapper .list-group {
  width: 15rem;
}

#page-content-wrapper {
  min-width: 100vw;
}

#wrapper.toggled #sidebar-wrapper {
  margin-left: 0;
}

#menu-toggle {
  cursor: pointer;
}

.list-group-item {
  border: none;
  padding: 20px 30px;
}

.list-group-item.active {
  background-color: transparent;
  color: var(--main-text-color);
  font-weight: bold;
  border: none;
}

@media (min-width: 768px) {
  #sidebar-wrapper {
    margin-left: 0;
  }

  #page-content-wrapper {
    min-width: 0;
    width: 100%;
  }

  #wrapper.toggled #sidebar-wrapper {
    margin-left: -15rem;
  }
}
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>

    {{-- link bootstrap      --}}
<script src="/bootstrap-5.0.2-dist/js/bootstrap.js"></script>

</body>

</html>
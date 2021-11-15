@extends('layouts.app')

@section('content')

  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">
      <h2 style="text-align:center;"> Surat Menyurat</h2>
      <hr>
      </div>
      <h5>Fitur</h5>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
          <div class="card rounded-0 p-0 shadow-sm">
            <img src="img/masuk.jpeg" class="card-img-top rounded-0" alt="Angular pro sidebar" width="101" height="200">
            <div class="card-body text-center">
                <h6 class="card-title">Surat Masuk</h6>
                <a href="/surat/admin" target="_blank" class="btn btn-primary btn-sm">Masuk</a>
            </div>
          </div>
        </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
          <div class="card rounded-0 p-0 shadow-sm">
            <img src="img/keluar.jpeg" class="card-img-top rounded-0" alt="Angular pro sidebar" width="101" height="200">
            <div class="card-body text-center">
                <h6 class="card-title">Surat Keluar</h6>
                <a href="#" target="_blank" class="btn btn-success btn-sm">Keluar</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>
  <!-- page-content" -->
</div>
<!-- page-wrapper -->
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/esm/popper.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.js'></script><script  src="./script.js"></script>

</body>
</html>

@endsection

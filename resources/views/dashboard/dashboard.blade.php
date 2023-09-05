@extends('dashboard.main')

@section('konten')
   <!-- Begin Page Content -->
   <div class="container-fluid">

      <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Selamat Datang Admin ! </h1>
          <h3>Aplikasi Finance Komite | WebDev School</h3>
          <br>
          {{-- <div class="alert alert success">Hallo, Selamat Datang !!</div> --}}

    
          <!-- tingkat 1-->
          <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                      <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                  DATA TINGKAT I</div>
                                  <div class="h5 mb-0 font-weight-bold text-gray-800">Lihat Data</div>
                                </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Tingkat 2-->
          <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                  <div class="card-body">
                      <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                  DATA TINGKAT II</div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800">Lihat Data</div>
                          </div>
                          <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

           <!-- Tingkat 3-->
           <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                DATA TINGKAT III</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Lihat Data</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        

         
@endsection
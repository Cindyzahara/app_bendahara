@extends('dashboard.main')
@section('konten')
<div class="col-xl-12 col-md-12 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    
                    <div class="h5 mb-0 font-weight-bold text-gray-800" style="text-align: center">TINGKAT II</div>
                </div>
               
            </div>
       
        </div>
    </div>
</div>
{{-- RPL --}}
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <a href="{{ route('T2Rpl.index') }}">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <img src="{{ asset('logo/1.png') }}" width="50px" height="50px" style="margin-left:4em" alt="Logo Jurusan">
                    <div class="h5 mb-0 font-weight-bold text-gray-800" style="text-align: center">RPL</div>
                </div>
                <div class="col-auto">
                   
                </div>
            </div>
        </a>
        </div>
    </div>
</div>
{{-- TITL --}}
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <a href="{{ route('T2Titl.index') }}">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <img src="{{ asset('logo/5.png') }}" width="50px" height="50px" style="margin-left:4em" alt="Logo ">
                    <div class="h5 mb-0 font-weight-bold text-gray-800" style="text-align: center">TITL</div>
                </div>
                <div class="col-auto">
                 
                </div>
            </div>
        </a>
        </div>
    </div>
</div>
{{-- TSM --}}
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <a href="{{ route('T2Tsm.index') }}">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <img src="{{ asset('logo/11.png') }}" width="50px" height="50px" style="margin-left:4em" alt="Logo Jurusan">
                    <div class="h5 mb-0 font-weight-bold text-gray-800" style="text-align: center">TSM</div>
                </div>
                <div class="col-auto">

                </div>
            </div>
        </a>
        </div>
    </div>
</div>
{{-- TPM --}}
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <a href="{{ route('T2Tpm.index') }}">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <img src="{{ asset('logo/12.png') }}" width="50px" height="50px" style="margin-left:4em" alt="Logo">
                    <div class="h5 mb-0 font-weight-bold text-gray-800" style="text-align: center">TPM</div>
                </div>
                <div class="col-auto">
         
                </div>
            </div>
        </a>
        </div>
    </div>
</div>
{{-- TLOG --}}
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <a href="{{ route('T2Tlog.index') }}">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <img src="{{ asset('logo/14.png') }}" width="50px" height="50px" style="margin-left:4em" alt="Logo">
                    <div class="h5 mb-0 font-weight-bold text-gray-800" style="text-align: center">TLOG</div>
                </div>
                <div class="col-auto">
                   
                </div>
            </div>
        </a>
        </div>
    </div>
</div>
{{-- ULW --}}
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <a href="{{ route('T2Ulw.index') }}">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <img src="{{ asset('logo/16.png') }}" width="50px" height="50px" style="margin-left:4em" alt="Logo">
                    <div class="h5 mb-0 font-weight-bold text-gray-800" style="text-align: center">ULW</div>
                </div>
                <div class="col-auto">
              
                </div>
            </div>
        </a>
        </div>
    </div>
</div>
{{-- KULINER --}}
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <a href="{{ route('T2Kuliner.index') }}">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <img src="{{ asset('logo/4.png') }}" width="50px" height="50px" style="margin-left:4em" alt="Logo Jurusan">
                    <div class="h5 mb-0 font-weight-bold text-gray-800" style="text-align: center">KULINER</div>
                </div>
                <div class="col-auto">
                  
                </div>
            </div>
        </a>
        </div>
    </div>
</div>
{{-- DPB --}}
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <a href="{{ route('T2Dpb.index') }}">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <img src="{{ asset('logo/17.png') }}" width="50px" height="50px" style="margin-left:4em" alt="Logo">
                    <div class="h5 mb-0 font-weight-bold text-gray-800" style="text-align: center">DPB</div>
                </div>
                <div class="col-auto">
                  
                </div>
            </div>
        </a>
        </div>
    </div>
</div>
{{-- ATPH --}}
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <a href="{{ route('T2Atph.index') }}">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <img src="{{ asset('logo/9.png') }}" width="50px" height="50px" style="margin-left:4em" alt="Logo">
                    <div class="h5 mb-0 font-weight-bold text-gray-800" style="text-align: center">ATPH</div>
                </div>
                <div class="col-auto">
                  
                </div>
            </div>
        </a>
        </div>
    </div>
</div>
{{-- APHP --}}
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <a href="{{ route('T2Aphp.index') }}">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <img src="{{ asset('logo/18.png') }}" width="50px" height="50px" style="margin-left:4em" alt="Logo">
                    <div class="h5 mb-0 font-weight-bold text-gray-800" style="text-align: center">APHP</div>
                </div>
                <div class="col-auto">
                 
                </div>
            </div>
        </a>
        </div>
    </div>
</div>
{{-- APAT --}}
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <a href="{{ route('T2Apat.index') }}">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <img src="{{ asset('logo/10.png') }}" width="50px" height="50px" style="margin-left:4em" alt="Logo">
                    <div class="h5 mb-0 font-weight-bold text-gray-800" style="text-align: center">APAT</div>
                </div>
                <div class="col-auto">
                 
                </div>
            </div>
        </a>
        </div>
    </div>
</div>
{{-- ATU --}}
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <a href="{{ route('T2Atu.index') }}">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <img src="{{ asset('logo/6.png') }}" width="50px" height="50px" style="margin-left:4em" alt="Logo">
                    <div class="h5 mb-0 font-weight-bold text-gray-800" style="text-align: center">ATU</div>
                </div>
                <div class="col-auto">
                
                </div>
            </div>
        </a>
        </div>
    </div>
</div>
{{-- NKN --}}
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <a href="{{ route('T2Nkn.index') }}">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <img src="{{ asset('logo/7.png') }}" width="50px" height="50px" style="margin-left:4em" alt="Logo">
                    <div class="h5 mb-0 font-weight-bold text-gray-800" style="text-align: center">NKN</div>
                </div>
                <div class="col-auto">
                  
                </div>
            </div>
        </a>
        </div>
    </div>
</div>
{{-- TKN --}}
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <a href="{{ route('T2Tkn.index') }}">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <img src="{{ asset('logo/13.png') }}" width="50px" height="50px" style="margin-left:4em" alt="Logo">
                    <div class="h5 mb-0 font-weight-bold text-gray-800" style="text-align: center">TKN</div>
                </div>
                <div class="col-auto">
                 
                </div>
            </div>
        </a>
        </div>
    </div>
</div>
{{-- NKPI --}}
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <a href="{{ route('T2Nkpi.index') }}">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <img src="{{ asset('logo/3.png') }}" width="50px" height="50px" style="margin-left:4em" alt="Logo">
                    <div class="h5 mb-0 font-weight-bold text-gray-800" style="text-align: center">NKPI</div>
                </div>
                <div class="col-auto">
                  
                </div>
            </div>
        </a>
        </div>
    </div>
</div>
{{-- TAB --}}
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <a href="{{ route('T2Tab.index') }}">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <img src="{{ asset('logo/8.png') }}" width="50px" height="50px" style="margin-left:4em" alt="Logo Jurusan">
                    <div class="h5 mb-0 font-weight-bold text-gray-800" style="text-align: center">TAB</div>
                </div>
                <div class="col-auto">
             
                </div>
            </div>
        </a>
        </div>
    </div>
</div>
@endsection
@extends('dashboard.main')
@section('konten')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Edit Data XII TITL</h4>
            
        </div>
            <div class="card-body">
                    <form action="{{ route('T3Titl.update', $t3titl->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-floating mb-3">
                            <label for="tanggal1" class="col-sm-2 col-form-label">Tanggal</label>
                            <div class="col-sm-10">
                            <input type="date" class="form-control" id="tanggal1" placeholder="Tanggal" name="tanggal1" value="{{ $t3titl->tanggal1 }}">
                            </div>
                            </div>
                            <div class="form-floating mb-3">
                                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" value="{{ $t3titl->nama }}" >
                            </div>
                            <div class="form-floating mb-3">
                                <label for="nominal" class="col-sm-2 col-form-label">Nominal</label>
                                <div class="col-sm-10">
                                <input type="number" class="form-control" id="nominal"  onkeyup="sum()" placeholder="Nominal" name="nominal" value="{{ $t3titl->nominal }}" >
                            </div>
                            <div class="form-floating mb-3">
                                <label for="pembayaran1" class="col-sm-2 col-form-label">Pembayaran Satu</label>
                                <div class="col-sm-10">
                                <input type="number" class="form-control" id="pembayaran1" onkeyup="sum()" placeholder="Pembayaran Satu" name="pembayaran1" value="{{ $t3titl->pembayaran1 }}" >
                            </div>
                            <div class="form-floating mb-3">
                                <label for="sisa1" class="col-sm-2 col-form-label">Sisa</label>
                                <div class="col-sm-10">
                                <input type="number" class="form-control" id="sisa1" onkeyup="sum()" placeholder="Sisa" name="sisa1" value="{{ $t3titl->sisa1 }}" readonly>
                            </div>
                            <div class="form-floating mb-3">
                                <label for="tanggal2" class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-sm-10">
                                <input type="date" class="form-control" id="tanggal2" placeholder="Tanggal" name="tanggal2" value="{{ $t3titl->tanggal2 }}" >
                            </div>
                            <div class="form-floating mb-3">
                                <label for="pembayaran2" class="col-sm-2 col-form-label">Pembayaran Kedua</label>
                                <div class="col-sm-10">
                                <input type="number" class="form-control" id="pembayaran2" onkeyup="sum()" placeholder="Pembayaran Dua" name="pembayaran2" value="{{ $t3titl->pembayaran2 }}" >
                            </div>
                            <div class="form-floating mb-3">
                                <label for="sisa2" class="col-sm-2 col-form-label">Sisa</label>
                                <div class="col-sm-10">
                                <input type="number" class="form-control" id="sisa2" onkeyup="sum()" placeholder="Sisa" name="sisa2" value="{{ $t3titl->sisa2 }}" readonly>
                            </div>
                            <div class="form-floating mb-3">
                                <label for="tanggal3" class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-sm-10">
                                <input type="date" class="form-control" id="tanggal3" placeholder="Tanggal" name="tanggal3" value="{{ $t3titl->tanggal3 }}" >
                            </div>
                            <div class="form-floating mb-3">
                                <label for="pembayaran3" class="col-sm-2 col-form-label">Pembayaran Ketiga</label>
                                <div class="col-sm-10">
                                <input type="number" class="form-control" id="pembayaran3" onkeyup="sum()" placeholder="Pembayaran Ketiga" name="pembayaran3" value="{{ $t3titl->tanggal1 }}" >
                            </div>
                            <div class="form-floating mb-3">
                                <label for="sisa3" class="col-sm-2 col-form-label">Sisa</label>
                                <div class="col-sm-10">
                                <input type="number" class="form-control" id="sisa3" onkeyup="sum()" placeholder="Sisa" name="sisa3" value="{{ $t3titl->sisa3 }}" readonly>
                            </div>
                            <div class="form-floating mb-3">
                                <label for="tanggal4" class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-sm-10">
                                <input type="date" class="form-control" id="tanggal4" placeholder="Tanggal" name="tanggal4" value="{{ $t3titl->tanggal4 }}" >
                            </div>
                            <div class="form-floating mb-3">
                                <label for="pembayaran4" class="col-sm-2 col-form-label">Pembayaran Keempat</label>
                                <div class="col-sm-10">
                                <input type="number" class="form-control" id="pembayaran4" onkeyup="sum()" placeholder="Pembayaran Keempat" name="pembayaran4" value="{{ $t3titl->pembayaran4 }}" >
                            </div>
                            <div class="form-floating mb-3">
                                <label for="sisa4" class="col-sm-2 col-form-label">Sisa</label>
                                <div class="col-sm-10">
                                <input type="number" class="form-control" id="sisa4" onkeyup="sum()" placeholder="Sisa" name="sisa4" value="{{ $t3titl->sisa4 }}" readonly>
                            </div>
                            <div class="form-floating mb-3">
                                <label for="tanggal5" class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-sm-10">
                                <input type="date" class="form-control" id="tanggal5" placeholder="Tanggal" name="tanggal5" value="{{ $t3titl->tanggal5 }}" >
                            </div>
                            <div class="form-floating mb-3">
                                <label for="pembayaran5" class="col-sm-2 col-form-label">Pembayaran Kelima</label>
                                <div class="col-sm-10">
                                <input type="number" class="form-control" id="pembayaran5" onkeyup="sum()" placeholder="Pembayaran Kelima" name="pembayaran5" value="{{ $t3titl->pembayaran5 }}" >
                            </div>
                            <div class="form-floating mb-3">
                                <label for="sisa5" class="col-sm-2 col-form-label">Sisa</label>
                                <div class="col-sm-10">
                                <input type="number" class="form-control" id="sisa5" onkeyup="sum()" placeholder="Sisa" name="sisa5" value="{{ $t3titl->sisa5 }}" >
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update data</button>
                            </div>
                      </div>
                    </form>
                </div>
            </div>
            <!-- /# card -->
        </div>
    
    <script>
        function sum() {
            var txtFirstNumberValue = document.getElementById('nominal').value;
            var txtSecondNumberValue = document.getElementById('pembayaran1').value;
            var result = parseInt(txtFirstNumberValue) - parseInt(txtSecondNumberValue);
            if (!isNaN(result)) {
                document.getElementById('sisa1').value=result;
            }
    
            var txtFirstNumberValue = document.getElementById('sisa1').value;
            var txtSecondNumberValue = document.getElementById('pembayaran2').value;
            var result = parseInt(txtFirstNumberValue) - parseInt(txtSecondNumberValue);
            if (!isNaN(result)) {
                document.getElementById('sisa2').value=result;
            }
    
            var txtFirstNumberValue = document.getElementById('sisa2').value;
            var txtSecondNumberValue = document.getElementById('pembayaran3').value;
            var result = parseInt(txtFirstNumberValue) - parseInt(txtSecondNumberValue);
            if (!isNaN(result)) {
                document.getElementById('sisa3').value=result;
            }
    
            var txtFirstNumberValue = document.getElementById('sisa3').value;
            var txtSecondNumberValue = document.getElementById('pembayaran4').value;
            var result = parseInt(txtFirstNumberValue) - parseInt(txtSecondNumberValue);
            if (!isNaN(result)) {
                document.getElementById('sisa4').value=result;
            }
    
            var txtFirstNumberValue = document.getElementById('sisa4').value;
            var txtSecondNumberValue = document.getElementById('pembayaran5').value;
            var result = parseInt(txtFirstNumberValue) - parseInt(txtSecondNumberValue);
            if (!isNaN(result)) {
                document.getElementById('sisa5').value=result;
            }
        }
       </script>
    
    @endsection

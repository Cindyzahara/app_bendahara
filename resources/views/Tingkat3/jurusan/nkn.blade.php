@extends('dashboard.main')
@section('konten')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">XII NKN</h4>
            <div class="card-tools">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#basicModal">+ Pembayaran</button>
                    <a href="{{ route('cetak-nkn')}}" target="_blank" class="btn btn-danger">Cetak PDF <i class="fa-solid fa-print"></i></a>
                </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal </th>
                <th>Nama</th>
                <th>Nominal</th>
                <th>Pembayaran</th>
                <th>Sisa</th>
                <th>Tanggal </th>
                <th>Pembayaran</th>
                <th>Sisa</th>
                <th>Tanggal </th>
                <th>Pembayaran</th>
                <th>Sisa</th>
                <th>Tanggal </th>
                <th>Pembayaran</th>
                <th>Sisa</th>
                <th>Tanggal </th>
                <th>Pembayaran</th>
                <th>Sisa</th>
                <th>Aksi</th>
                        </tr>
                    </thead>
                    @foreach ($t3nkn as $item)
                    <tbody>
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->tanggal1_indo}}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ formatRupiah ($item->nominal) }}</td>
                            <td>{{ formatRupiah ($item->pembayaran1) }}</td>
                            <td>{{ formatRupiah ($item->sisa1) }}</td>
                            <td>{{ $item->tanggal2_indo}}</td>
                            <td>{{ formatRupiah ($item->pembayaran2) }}</td>
                            <td>{{ formatRupiah ($item->sisa2) }}</td>
                            <td>{{ $item->tanggal3_indo}}</td>
                            <td>{{ formatRupiah ($item->pembayaran3) }}</td>
                            <td>{{ formatRupiah ($item->sisa3) }}</td>
                            <td>{{ $item->tanggal4_indo}}</td>
                            <td>{{ formatRupiah ($item->pembayaran4) }}</td>
                            <td>{{ formatRupiah ($item->sisa4) }}</td>
                            <td>{{ $item->tanggal5_indo}}</td>
                            <td>{{ formatRupiah ($item->pembayaran5) }}</td>
                            <td>{{ formatRupiah ($item->sisa5) }}</td>
                            <td>
                                <div class="dropdown mb-4">
                                    <button class="btn btn-sm btn-primary dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                   
                                        {{-- <i class="fas fa-fw fa-cog "></i> --}}
                                    </button>
                                    <div class="dropdown-menu animated--fade-in"
                                        aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="{{ route('T3Nkn.edit',  $item->id)}}">Edit</a>
                                        <form onsubmit="return confirm('Yakin mau hapus data ini?')" action="{{ route('T3Nkn.destroy', $item->id) }}" class="d-inline" method="POST">
                                            @csrf
                                            @method('DELETE')
                                     <button class="dropdown-item" type="submit" name='submit'>Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
                <div class="my-5">
                    {{ $t3nkn->links()}}
                </div> 
            </div>
        </div>
    </div>
    <!-- /# card -->
</div>

<!-- Modal -->

<!-- Modal -->
<div class="modal fade" id="basicModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Input Data</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('T3Nkn.store')}}" method="post">
                    @csrf
                    <div class="form-floating mb-3">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control" id="inputPassword" placeholder="Tanggal" name="tanggal1">
                        </div>
                        <div class="form-floating mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" placeholder="Nama" name="nama">
                        </div>
                        <div class="form-floating mb-3">
                            <label for="nominal" class="col-sm-2 col-form-label">Nominal</label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control" id="nominal"  onkeyup="sum()" placeholder="Nominal" name="nominal">
                        </div>
                        <div class="form-floating mb-3">
                            <label for="pembayaran1" class="col-sm-2 col-form-label">Pembayaran Pertama</label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control" id="pembayaran1" onkeyup="sum()" placeholder="Pembayaran" name="pembayaran1">
                        </div>
                        <div class="form-floating mb-3">
                            <label for="sisa1" class="col-sm-2 col-form-label">Sisa</label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control" id="sisa1" onkeyup="sum()" placeholder="Sisa" name="sisa1" readonly>
                        </div>
                        <div class="form-floating mb-3">
                            <label for="tanggal2" class="col-sm-2 col-form-label">Tanggal</label>
                            <div class="col-sm-10">
                            <input type="date" class="form-control" id="tanggal2" placeholder="Tanggal" name="tanggal2">
                        </div>
                        <div class="form-floating mb-3">
                            <label for="pembayaran2" class="col-sm-2 col-form-label">Pembayaran Kedua</label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control" id="pembayaran2" onkeyup="sum()" placeholder="Pembayaran" name="pembayaran2">
                        </div>
                        <div class="form-floating mb-3">
                            <label for="sisa2" class="col-sm-2 col-form-label">Sisa</label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control" id="sisa2" onkeyup="sum()" placeholder="Sisa" name="sisa2" readonly>
                        </div>
                        <div class="form-floating mb-3">
                            <label for="tanggal3" class="col-sm-2 col-form-label">Tanggal</label>
                            <div class="col-sm-10">
                            <input type="date" class="form-control" id="tanggal3" placeholder="Tanggal" name="tanggal3">
                        </div>
                        <div class="form-floating mb-3">
                            <label for="pembayaran3" class="col-sm-2 col-form-label">Pembayaran Ketiga</label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control" id="pembayaran3" onkeyup="sum()" placeholder="Pembayaran" name="pembayaran3">
                        </div>
                        <div class="form-floating mb-3">
                            <label for="sisa3" class="col-sm-2 col-form-label">Sisa</label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control" id="sisa3" onkeyup="sum()" placeholder="Sisa" name="sisa3" readonly>
                        </div>
                        <div class="form-floating mb-3">
                            <label for="tanggal4" class="col-sm-2 col-form-label">Tanggal</label>
                            <div class="col-sm-10">
                            <input type="date" class="form-control" id="tanggal4" placeholder="Tanggal" name="tanggal4">
                        </div>
                        <div class="form-floating mb-3">
                            <label for="pembayaran4" class="col-sm-2 col-form-label">Pembayaran Keempat</label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control" id="pembayaran4" onkeyup="sum()" placeholder="Pembayaran" name="pembayaran4">
                        </div>
                        <div class="form-floating mb-3">
                            <label for="sisa4" class="col-sm-2 col-form-label">Sisa</label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control" id="sisa4" onkeyup="sum()" placeholder="Sisa" name="sisa4" readonly>
                        </div>
                        <div class="form-floating mb-3">
                            <label for="tanggal5" class="col-sm-2 col-form-label">Tanggal</label>
                            <div class="col-sm-10">
                            <input type="date" class="form-control" id="tanggal5" placeholder="Tanggal" name="tanggal5">
                        </div>
                        <div class="form-floating mb-3">
                            <label for="pembayaran5" class="col-sm-2 col-form-label">Pembayaran Kelima</label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control" id="pembayaran5" onkeyup="sum()" placeholder="Pembayaran" name="pembayaran5">
                        </div>
                        <div class="form-floating mb-3">
                            <label for="sisa5" class="col-sm-2 col-form-label">Sisa</label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control" id="sisa5" onkeyup="sum()" placeholder="Sisa" name="sisa5">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save data</button>
                        </div>
                  </div>
                </form>
            </div>
    </div>
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
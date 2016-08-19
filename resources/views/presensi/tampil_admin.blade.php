@extends('layouts.tampilan')

@section('konten')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default"">
                <div class="panel-heading" style="background-color: #b0e0a1;">
                    <h4>Pilih Karyawan</h4>
                </div>
                <div class="panel-body">
                    <table class="table table-responsive">
                        <thead style="text-align: left;">
                            <tr style="border-style: none;">
                                <th>Nama</th>
                                <th>Menu</th>
                            </tr>
                        </thead>
                        <tbody style="text-align: left;">
                            @foreach($user as $karyawan)
                            <tr style="border-style: none;">
                                <td>{{ $karyawan->nama }}</td>
                                <td><a href="/tampil_presensi/{{$karyawan->email}}/{{$tahun}}/{{$bulan}}"><button type="button" class="btn btn-info" style="margin-top: 0px;">Lihat Rekap</button></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>      
    </div>
</div>

@endsection
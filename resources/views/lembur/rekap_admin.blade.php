@extends('layouts.tampilan')

@section('konten')
<div class="col-md-2">
    <div class="panel panel-default">
	    <div class="panel-heading">
	    	<h4>Pengajuan Lembur</h4>
	    </div>
	    <div class="panel-body">
	    	<button type="button" style="background-color: blue;"><a href="{{url('/ajukan_lembur')}}" style="color: #fff;"><i class="fa fa-envelope"></i><br>Ajukan lembur</a></button>
	    </div>
    </div>
</div>
<div class="col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading">
        	<h4>Rekapan Lembur Karyawan</h4>
        </div>
        <div class="panel-body">
        	
        	@if($data_lembur->isEmpty())
        		<h4>Tidak ada rekapan lembur dari karyawan</h4>
        	@elseif(!$data_lembur->isEmpty())
                @foreach($data_user as $user)
                    <?php $sudah = false; ?>
            		@foreach($data_lembur as $daftar_lembur)
                        @if($daftar_lembur->email == $user->email)
        			        @if($daftar_lembur->persetujuan_lembur == "sudah disetujui")
                                @foreach($data_presensi as $daftar_presensi)
                                    @if($daftar_lembur->tanggal_lembur == $daftar_presensi->tanggal_presensi)
                                        <?php $sudah = true; ?>
                                    @endif
                                @endforeach
                            @endif
                        @endif
                    @endforeach

                    @if($sudah)
                        <h5 style="text-align: left;">Rekapan lembur {{ $user->nama }}</h5>
                        <div class="col-md-12">
                            <table class="table table-responsive" style="text-align: left;">
                                <thead>
                                    <tr style="border-style: none">
                                        <th style="width: 500px;">Uraian</th>
                                        <th>Tanggal</th>
                                        <th>Mulai</th>
                                        <th>Selesai</th>
                                    </tr>
                                </thead>
                                <tbody>
                        @foreach($data_lembur as $daftar_lembur)
                            @if($daftar_lembur->email == $user->email)
                                @if($daftar_lembur->persetujuan_lembur == "sudah disetujui")
                                    @foreach($data_presensi as $daftar_presensi)
                                        @if($daftar_lembur->tanggal_lembur == $daftar_presensi->tanggal_presensi)
                                            @if($user->email == $daftar_presensi->email)
                                                <tr style="border-style: none">
                                                    <td>{{ $daftar_lembur->uraian_lembur }}</td>
                                                    <td>{{ $daftar_lembur->tanggal_lembur }}</td>
                                                    <td>{{ $daftar_lembur->jam_mulai }}</td>
                                                    <td>{{ $daftar_lembur->jam_selesai }}</td>
                                                </tr>
                                            @endif
                                        @endif
                                    @endforeach
                                @endif
                            @endif
                        @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                    <div class="col-md-12">
                        <hr>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
<div class="col-md-2">
    <div class="panel panel-default">
        <div class="panel-heading">
        	<h4>Rekap Lembur</h4>
        </div>
        <div class="panel-body">
            <button type="button"><a href="{{url('/rekap_lembur')}}" style="color: #fff;"><i class="fa fa-print"></i><br>Lihat Rekapan</a></button>
        </div>
    </div>
</div>
@endsection
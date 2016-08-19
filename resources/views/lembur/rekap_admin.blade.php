<?php $nomor = 0; ?>
@extends('layouts.tampilan')

@section('konten')
<div class="col-md-2">
    <div class="panel panel-default">
	    <div class="panel-heading" style="background-color: #b0e0a1;">
	    	<h4>Menu</h4>
	    </div>
	    <div class="panel-body">
	    	<a href="{{url('/ajukan_lembur')}}" style="color: #fff;"><button type="button" style="background-color: blue;"><i class="fa fa-envelope"></i><br>Berikan lembur</button></a>
            <a href="{{url('/lembur')}}" style="color: #fff;"><button type="button" class="btn btn-warning">Kembali</button></a>	       
        </div>
    </div>
</div>
<div class="col-md-10">
    <div class="panel panel-default">
        <div class="panel-heading" style="background-color: #b0e0a1;">
        	<h4>Rekapan Lembur Karyawan</h4>
        </div>
        <div class="panel-body">
        	<div class="col-md-12">
                <table class="table table-responsive" style="text-align: left;">
                    <thead>
                        <tr style="border-style: none">
                            <th>Nomor</th>
                            <th>Nama</th>
                            <th style="width: 100px;">Uraian</th>
                            <th>Tanggal</th>
                            <th>Mulai</th>
                            <th>Selesai</th>
                        </tr>
                    </thead>
                    <tbody>
        	@if($data_lembur->isEmpty())
        		<h4>Tidak ada rekapan lembur dari karyawan</h4>
        	@elseif(!$data_lembur->isEmpty())
                @foreach($data_user as $user)
                    <?php $sudah = false; ?>
            		@foreach($data_lembur as $daftar_lembur)
                        @if($daftar_lembur->email == $user->email)
        			        @if($daftar_lembur->persetujuan_id == 2)
                                @foreach($data_presensi as $daftar_presensi)
                                    @if($daftar_lembur->tanggal_lembur == $daftar_presensi->tanggal_presensi)
                                        <?php $sudah = true; ?>
                                    @endif
                                @endforeach
                            @endif
                        @endif
                    @endforeach

                    @if($sudah)
                        
                        @foreach($data_lembur as $daftar_lembur)
                            @if($daftar_lembur->email == $user->email)
                                @if($daftar_lembur->persetujuan_id == 2)
                                    @foreach($data_presensi as $daftar_presensi)
                                        @if($daftar_lembur->tanggal_lembur == $daftar_presensi->tanggal_presensi)
                                            @if($user->email == $daftar_presensi->email)
                                                <tr style="border-style: none">
                                                    <td>{{ $nomor+=1 }}</td>
                                                    <td>{{ $user->nama }}</td>
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
                    @endif
                @endforeach
            @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
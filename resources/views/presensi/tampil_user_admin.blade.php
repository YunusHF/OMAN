<?php
    $jumlahTanggal = cal_days_in_month(CAL_GREGORIAN, $bulan, $tahun);
    $tanggal = 0;
    function hariIndo($hari) {
        if ($hari == "Sunday") $hari = "Minggu";
        elseif ($hari == "Monday") $hari = "Senin";
        elseif ($hari == "Tuesday") $hari = "Selasa";
        elseif ($hari == "Wednesday") $hari = "Rabu";
        elseif ($hari == "Thursday") $hari = "Kamis";
        elseif ($hari == "Friday") $hari = "Jumat";
        elseif ($hari == "Saturday") $hari = "Sabtu";
        return $hari;
    }

    function bulanIndo($bulan) {
        if ($bulan == "01") $bulan = "Januari";
        elseif ($bulan == "02") $bulan = "Februari";
        elseif ($bulan == "03") $bulan = "Maret";
        elseif ($bulan == "04") $bulan = "April";
        elseif ($bulan == "05") $bulan = "Mei";
        elseif ($bulan == "06") $bulan = "Juni";
        elseif ($bulan == "07") $bulan = "Juli";
        elseif ($bulan == "08") $bulan = "Agustus";
        elseif ($bulan == "09") $bulan = "September";
        elseif ($bulan == "10") $bulan = "Oktober";
        elseif ($bulan == "11") $bulan = "November";
        elseif ($bulan == "12") $bulan = "Desember";
        return $bulan;
    }

    $alpa = 0;

    $tahun_awal = 9999;
    foreach($tampil as $_tampil){
        $tahun_presensi = strtotime($_tampil->tanggal_presensi);
        if($tahun_awal > date("Y", $tahun_presensi)) {
            $tahun_awal = date("Y", $tahun_presensi);
        }
    }

    // $arr_bulan = array("Pilih Bulan");
    // $i = 0;
    // foreach($tampil as $_tampil){
    //     $bulan_presensi = strtotime($_tampil->tanggal_presensi);
    //     if($arr_bulan[$i] != date("Y-m", $bulan_presensi)) {
    //         $arr_bulan[$i+1] = date("Y-m", $bulan_presensi);
    //         $i++;
    //     }
    // }
?>
@extends('layouts.tampilan')

@section('konten')
<div class="col-md-2">
    <div class="panel panel-default"">
        <div class="panel-heading" style="background-color: #b0e0a1;">
            <h4>Menu</h4>
        </div>
        <div class="panel-body">
            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">{{$tahun}} &nbsp <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    @for($i=date("Y"); $i>=$tahun_awal; $i--)
                        <li><a href="/tampil_presensi/{{$email}}/{{$i}}/{{$bulan}}">{{$i}}</a></li>
                    @endfor
                </ul>
            </div>
             <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">{{bulanIndo($bulan)}} &nbsp <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="/tampil_presensi/{{$email}}/{{$tahun}}/01">Januari</a></li>
                    <li><a href="/tampil_presensi/{{$email}}/{{$tahun}}/02">Februari</a></li>
                    <li><a href="/tampil_presensi/{{$email}}/{{$tahun}}/03">Maret</a></li>
                    <li><a href="/tampil_presensi/{{$email}}/{{$tahun}}/04">April</a></li>
                    <li><a href="/tampil_presensi/{{$email}}/{{$tahun}}/05">Mei</a></li>
                    <li><a href="/tampil_presensi/{{$email}}/{{$tahun}}/06">Juni</a></li>
                    <li><a href="/tampil_presensi/{{$email}}/{{$tahun}}/07">Juli</a></li>
                    <li><a href="/tampil_presensi/{{$email}}/{{$tahun}}/08">Agustus</a></li>
                    <li><a href="/tampil_presensi/{{$email}}/{{$tahun}}/09">September</a></li>
                    <li><a href="/tampil_presensi/{{$email}}/{{$tahun}}/10">Oktober</a></li>
                    <li><a href="/tampil_presensi/{{$email}}/{{$tahun}}/11">November</a></li>
                    <li><a href="/tampil_presensi/{{$email}}/{{$tahun}}/12">Desember</a></li>
                </ul>
            </div>
            <a href="{{url('/cetak_pdf')}}"><button type="button" class="btn"><i class="fa fa-print"></i><br>Cetak PDF</button></a>
            <a href="/tampil_presensi/{{$tahun}}/{{$bulan}}"><button type="button" class="btn btn-warning" style="margin-top: 30px;">Kembali</button></a>
        </div>
    </div>
</div>
<div class="col-md-10">
    <div class="panel panel-default">
        <div class="panel-heading" style="background-color: #b0e0a1;">
            <h4>Absensi Bulan {{ bulanIndo($bulan)." ".$tahun }}</h4>
        </div>
        <div class="panel-body">
            <table class="table table-responsive" style="text-align: left;">
                <thead>
                    <tr style="border-style: none">
                        <th>Tanggal</th>
                        <th>Hari</th>
                        <th>Status</th>
                        <th>Jam Masuk</th>
                        <th>Jam Pulang</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                @for($i=1; $i<=$jumlahTanggal; $i++)
                    <?php $adaPresensi = false; $lemburan = false;?>
                    <tr style="border-style: none">
                        <td><?php $tanggal += 1; $tanggalJadi = $tahun."-".$bulan."-".$tanggal; echo $tanggalJadi; ?></td>
                        <td><?php $date = strtotime($tanggalJadi); $day = date('l', $date); echo hariIndo($day);?></td>
                    @foreach($tampil as $presensi)
                        @if($presensi->tanggal_presensi == date("Y-m-d", $date))
                            @foreach($data_lembur as $lembur)
                                @if( $lembur->tanggal_lembur == date("Y-m-d", $date) )
                                    <?php $lemburan = true; ?>
                                @endif
                            @endforeach
                            @if($lemburan == true)
                                <td>Lembur</td>
                            @else
                                @foreach($status_presensi as $status)
                                    @if($presensi->status_presensi_id == $status->id_status_presensi)
                                        <td>{{ $status->status_presensi }}</td>
                                    @endif
                                @endforeach
                            @endif
                            <td>{{ $presensi->jam_masuk }}</td>
                            <td>{{ $presensi->jam_pulang }}</td>
                            <?php $liburan = false; $sabmin = false; $kerja = false;?>
                            @foreach($hari_libur as $libur)
                                @if( $libur->tanggal_libur == date("Y-m-d", $date) )
                                    <?php $liburan = true ?>
                                @elseif(hariIndo($day) == "Sabtu" or hariIndo($day) == "Minggu" )
                                    <?php $sabmin = true ?>
                                @else
                                    <?php $kerja = true ?>
                                @endif
                            @endforeach
                            @if ( $liburan == true )
                                <td>Libur Tanggal Merah</td>
                            @elseif ( $sabmin == true )
                                <td>Libur Sabtu/Minggu</td>
                            @elseif ( $kerja == true )
                                <td>Hari Kerja</td>
                            @endif
                        <?php $adaPresensi = true ?>
                        @endif
                    @endforeach
                        @if($adaPresensi == false)
                            <?php $liburan = false; $sabmin = false; $kerja = false; $lemburan = true;?>
                            @foreach($hari_libur as $libur)
                                @if( $libur->tanggal_libur == date("Y-m-d", $date) )
                                    <?php $liburan = true; ?>
                                @elseif(hariIndo($day) == "Sabtu" or hariIndo($day) == "Minggu" )
                                    <?php $sabmin = true; ?>
                                @else
                                    <?php $kerja = true;?>
                                @endif
                            @endforeach
                            
                            @if ( $liburan == true )
                                <td>Libur</td>
                            @elseif ( $sabmin == true )
                                <td>Libur</td>
                            @elseif ( $kerja == true )
                                <?php
                                if ($date<strtotime("now")) {
                                    echo "<td>Tanpa Izin</td>";
                                }
                                else echo "<td>belum masuk</td>";
                                ?>
                            @endif
                            <td>--:--:--</td>
                            <td>--:--:--</td>
                            @if ( $liburan == true )
                                <td>Libur Tanggal Merah</td>
                            @elseif ( $sabmin == true )
                                <td>Libur Sabtu/Minggu</td>
                            @elseif ( $kerja == true )
                                <td>Hari Kerja</td>
                                <?php
                                if ($date<strtotime("now")) $alpa += 1;
                                ?>
                            @endif
                        @endif
                    </tr>
                @endfor
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
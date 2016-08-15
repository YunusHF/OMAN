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
?>
@extends('layouts.tampilan')

@section('konten')
<div class="col-md-2">
    <div class="panel panel-default"">
        <div class="panel-heading">
            <h4>Rekap Absen</h4>
        </div>
            <div class="panel-body">
                <div class="form-group">
                    <form action="tampil_presensi" method="post" accept-charset="utf-8">
                        <label>Pilih Tahun:</label>
                        <select class="form-control" name="tahun">
                            <option value="2015">2015</option>
                            <option value="2016" selected="selected">2016</option>
                        </select>
                        <label>Pilih Bulan:</label>
                        <select class="form-control" name="bulan">
                            <option value="01">Januari</option>
                            <option value="02">Februari</option>
                            <option value="03">Maret</option>
                            <option value="04">April</option>
                            <option value="05">Mei</option>
                            <option value="06">Juni</option>
                            <option value="07">Juli</option>
                            <option value="08" selected="selected">Agustus</option>
                            <option value="09">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit">Lihat Rekap</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading">
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
                                <td>{{ $presensi->status_presensi }}</td>
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
                                    echo "<td>alpa</td>";
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
<div class="col-md-2">
    <div class="panel panel-default">
        <div class="panel-heading"><h4>Cetak</h4></div>
            <div class="panel-body">
                <button type="button"><a href="{{url('/cetak_pdf')}}" style="color: #fff;"><i class="fa fa-print"></i><br>Cetak PDF</a></button>
            </div>
        </div>
    </div>
</div>
@endsection
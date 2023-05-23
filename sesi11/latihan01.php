<?php
    $dta[0]["nama"] = "Made Wisma";
    $dta[0]["alamat"] = "Jl. Danau Beratan";
    $dta[0]["tgl_lahir"] = "2002-12-11";
    $dta[0]["jenis_kelamin"] = "Laki-laki";
    $dta[0]["status"] = "Menikah";

    $dta[1]["nama"] = "Agus";
    $dta[1]["alamat"] = "Jl. Lebih, Gianyar";
    $dta[1]["tgl_lahir"] = "2002-07-01";
    $dta[1]["jenis_kelamin"] = "Perempuan";
    $dta[1]["status"] = "Mahasiswa";

    $dta[2]["nama"] = "Ana";
    $dta[2]["alamat"] = "Jl. Raya Ubud";
    $dta[2]["tgl_lahir"] = "2004-03-01";
    $dta[2]["jenis_kelamin"] = "Perempuan";
    $dta[2]["status"] = "Mahasiswa";
    
    // header("content-type: appliaction/json; charset=utf-8"); 
    echo json_encode($dta);
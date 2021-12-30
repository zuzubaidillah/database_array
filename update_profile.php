<?php
$data = [
    [
        "nama" => "saya",
        "email" => "saya@gmail.com",
        "telp" => "089",
        "password" => "saya",
    ],
    [
        "nama" => "kamu",
        "email" => "kamu@gmail.com",
        "telp" => "089",
        "password" => "kamu",
    ]
];

// KITA LAKUKAN PENGECEKAN DULU APAKAH $_POST['NAMA'] DLL DI LAKUKAN REQUEST
if (isset($_POST['nama']) AND isset($_POST['email']) AND isset($_POST['telp']) AND isset($_POST['password'])) {
    $nm = "kamu";
    //    cek apakah sudah ada nama
    foreach ($data as $k => $v){
        if ($data[$k]['nama']==$nm){
            $update_id = $k;
        }else{
//            proses simpan data
        }
    }

    $data_register = [
        "nama" => $_POST['nama'],
        "email" => $_POST['email'],
        "telp" => $_POST['telp'],
        "password" => $_POST['password'],
    ];
    $h = array_replace($data[$update_id], $data_register);
    if ($h) {
        $hasil = [
            "status_code" => 200,
            "data" => [
                "hasil" => $h,
                "awal" => $data[$update_id],
                "message" => "Berhasil Diupdate"
            ]
        ];
    } else {
        $hasil = [
            "status_code" => 400,
            "data" => [
                "user" => null,
                "message" => "Gagal Daftar"
            ]
        ];
    }
}else{
    $hasil = [
        "status_code" => 400,
        "data" => null,
        "message" => "Nilai yang dikirim bernilai null"
    ];
}

header("Content-Type: application/json;charset=utf-8");
http_response_code($hasil['status_code']);
echo json_encode($hasil);

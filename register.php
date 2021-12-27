<?php

$data_awal = [
    [
        "nama" => "a",
        "email" => "b",
        "telp" => "c",
        "password" => "d",
        "confirm_password" => "d",
    ]
];
$data = [
    [
        "nama" => "a",
        "email" => "b",
        "telp" => "c",
        "password" => "d",
        "confirm_password" => "d",
    ]
];
$data_register = [
    "nama" => $_POST['nama'],
    "email" => $_POST['email'],
    "telp" => $_POST['telp'],
    "password" => $_POST['password'],
    "confirm_password" => $_POST['confirm_password'],
];
if (array_push($data, $data_register)) {
    $hasil = [
        "status_code" => 200,
        "data" => [
            "user" => $data_register,
            "message" => "Berhasil Daftar"
        ],
        "hasil_awal" => $data_awal,
        "hasil_akhir" => $data,
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

header("Content-Type: application/json;charset=utf-8");
http_response_code($hasil['status_code']);
echo json_encode($hasil);

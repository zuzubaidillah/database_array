<?php
$data = [
    [
        "nama" => "a",
        "email" => "b",
    ],
    [
        "nama" => "admin",
        "email" => "admin",
    ]
];
$n = $_GET['nama'];
$p = $_GET['password'];
if ($n==$data[1]['nama']) {
    $hasil = [
        "status_code" => 200,
        "nama" => $n,
        "password" => $p,
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

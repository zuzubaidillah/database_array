<?php
$data = [
    [
        "nama" => "a",
        "email" => "b",
        "password" => "a",
    ]
];

//mendeklarasikan permintaan dari client
$n = $_GET['nama'];
$p = $_GET['password'];

if ($n==$data[0]['nama']) {
    $hasil = [
        "status_code" => 200,
        "data" => [
            "user" => $data[0],
            "message" => "data ditemukan"
        ]
    ];
} else {
    $hasil = [
        "status_code" => 400,
        "data" => [
            "user" => null,
            "message" => "nama tidak ada"
        ]
    ];
}

header("Content-Type: application/json;charset=utf-8");
http_response_code($hasil['status_code']);
echo json_encode($hasil);

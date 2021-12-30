<?php
$data = [
    [
        "nama" => "a",
        "email" => "b",
        "password" => "a",
    ]
];

if (isset($_GET['nama']) && !empty($_GET['nama']) && isset($_GET['password']) && !empty($_GET['password'])){
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
}else{
    $hasil = [
        "status_code" => 400,
        "data" => [
            "user" => null,
            "message" => "permintaan tidak ditemukan, harap mengirim."
        ]
    ];
}

header("Content-Type: application/json;charset=utf-8");
http_response_code($hasil['status_code']);
echo json_encode($hasil);

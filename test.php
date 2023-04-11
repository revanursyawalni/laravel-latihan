<?php
$a = '[
{
        "nama" : "ayam",
        "satuan" : "kg",
        "banyak" : 1,
        "keterangan" : "keterangan",
    },
    {
        "nama" : "tepung",
        "satuan" : "kg",
        "banyak" : 100,
        "keterangan" : "keterangan",
    }
]';

$js = json_decode($a, true);

var_dump($js);
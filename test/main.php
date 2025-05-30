<?php

$date = new DateTime();
if (is_a($date, 'DateTime')) {
    echo "Variabel berisi nilai tanggal (DateTime)";
    var_dump($date);
} else {
    echo "Variabel tidak berisi nilai tanggal";
    var_dump($date);
}

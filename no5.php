
<?php
function hitungTotalNilai($nilai) {
    $total = 0;
    foreach ($nilai as $n) {
        $total += $n;
    }
    return $total;
}

$nilaiSiswa = [80, 75, 90, 85];
echo hitungTotalNilai($nilaiSiswa);
?>
```

<?php
// //Viết một chương trình PHP để đọc ngày (từ 2016/1/1 đến 2016/12/31) và in ngày
// trong ngày. Ngày 1 tháng 1 năm 2016, là Thứ Sáu. Lưu ý rằng năm 2016 là một năm nhuận. Đi tới trình chỉnh sửa
// Hai số nguyên m và d cách nhau một khoảng trắng trên một dòng, m, d đại diện cho tháng và ngày.
$days = explode(',', '0,31,60,91,121,152,182,213,244,274,305,335');
$format = explode(',', 'Wednesday,Thursday,Friday,Saturday,Sunday,Monday,Tuesday');
while (($line = '3 7') !== '') {
    sscanf($line, '%d %d', $d, $m);
    if ($m === 0) {
        break;
    }
    $n = $days[$m - 1] + $d;
    $today = $format[$n % 7];
    echo "The day is: ".$today, PHP_EOL;
    break;
}
?>
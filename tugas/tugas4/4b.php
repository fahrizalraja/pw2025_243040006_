<?php
$perangkatKeras = [
    'Motherboard',
    'Processor',
    'Hard Disk',
    'PC Cooler',
    'VGA Card',
    'SSD'
];

echo "<h2>Macam-macam perangkat keras komputer</h2>";
echo "<ol>";
foreach ($perangkatKeras as $perangkat) {
    echo "<li>$perangkat</li>";
}
echo "</ol>";

array_push($perangkatKeras, 'Card Reader', 'Modem');

sort($perangkatKeras);

echo "<h2>Macam-macam perangkat keras komputer baru</h2>";
echo "<ol>";
foreach ($perangkatKeras as $perangkat) {
    if ($perangkat == 'Card Reader' || $perangkat == 'Modem') {
        echo "<li>$perangkat</li>";
    } else {
        echo "<li>$perangkat</li>";
    }
}
echo "</ol>";
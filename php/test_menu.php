<?php
function readJsonFiles($directory) {
    $files = glob($directory . '/*.json');
    $menuData = [];

    foreach ($files as $file) {
        echo "Reading file: $file<br>";  // Hata ayıklama bilgisi
        $jsonContent = file_get_contents($file);
        if ($jsonContent === false) {
            echo "Error reading file: $file<br>";
            continue;
        }

        echo "File content: $jsonContent<br>";  // Hata ayıklama bilgisi

        $data = json_decode($jsonContent, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            echo "JSON decode error in file $file: " . json_last_error_msg() . "<br>";
            continue;
        }

        echo "Decoded JSON data: <pre>" . print_r($data, true) . "</pre><br>";  // Hata ayıklama bilgisi

        if (isset($data['categories'])) {
            $menuData = array_merge($menuData, $data['categories']);
        } else {
            echo "No categories found in file $file<br>";
        }
    }

    return $menuData;
}

$directory = '/home/dci-admin/restaurant-management/data';
$menuData = readJsonFiles($directory);

header('Content-Type: application/json');
echo json_encode($menuData, JSON_PRETTY_PRINT);
?>

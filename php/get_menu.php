<?php
function readJsonFiles($directory) {
    $files = glob($directory . '/*.json');
    $menuData = [];

    foreach ($files as $file) {
        $jsonContent = file_get_contents($file);
        $data = json_decode($jsonContent, true);
        if (isset($data['categories'])) {
            $menuData = array_merge($menuData, $data['categories']);
        }
    }

    return $menuData;
}

$directory = '/home/dci-admin/restaurant-management/data';
$menuData = readJsonFiles($directory);

header('Content-Type: application/json');
echo json_encode($menuData);
?>

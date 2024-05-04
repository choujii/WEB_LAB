<?php
if (false === isset( $_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'] ) ){
    header('Location: /');
    exit();
}

require __DIR__ . "/vendor/autoload.php";
$client = new Google_Client();
$client->setApplicationName('Google and PHP');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$client->setAuthConfig(__DIR__ . "/creditionals.json");
$service = new Google_service_Sheets($client);
$spreadsheetId = "15Y0yMnL32dCRLpmPSk18AEXRXGBjQqgpS1p0v26A-T4";

$category = $_POST['category'];
$title = $_POST['title'];
$description = $_POST['description'];
$path = "categories/{$category}/{$title}.txt";

$range = "Лист1";
$dataRow =[[$category, $title, $description]];

$body = new Google_Service_Sheets_ValueRange();
$body->setValues($dataRow);

$insert = ['insertDataOption' => "INSERT_ROWS"];
$params = ['valueInputOption' => 'RAW'];
try {
    $service->spreadsheets_values->append(
        $spreadsheetId,
        $range,
        $body,
        $params);
} catch (\Google\Service\Exception $e) {
    echo "error" . $e;
}
exit();
?>
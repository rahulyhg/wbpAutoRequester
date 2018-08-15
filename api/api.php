<?PHP
function send_request($a, $b) {
$fields_string = "";
$fields = array(
    'parent' => 'task',
    'action' => 'add',
    'status' => 'on',
    'limit'  => urldecode( $a ),
    'param'  => urldecode( $b ),
);

foreach ( $fields as $key => $value ) {
    $fields_string .= $key . '=' . $value . '&';
}

rtrim( $fields_string, '&' );

$curl = curl_init();
curl_setopt_array( $curl, array(
    CURLOPT_URL            => "http://webserver_ip/webpanel/?parent=task&action=add",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_MAXREDIRS      => 10,
    CURLOPT_TIMEOUT        => 30,
    CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST  => "POST",
    CURLOPT_POSTFIELDS     => $fields_string,
    CURLOPT_HTTPHEADER     => array(
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8",
        "accept-encoding: gzip, deflate",
        "accept-language: en-US,en;q=0.8",
        "authorization: Basic WvGYYWtaW6WkRmQRpb0a4FY2zhM5Ej9",
        "cache-control: no-cache",
        "content-type: application/x-www-form-urlencoded",
        "origin: http://webserver_ip",
        "upgrade-insecure-requests: 1",
        "user-agent: Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36"
    ),
) );

curl_exec( $curl );
curl_close( $curl );
}

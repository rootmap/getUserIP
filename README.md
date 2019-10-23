Get User Computer IP


Example Code 

require_once __DIR__ . '/vendor/autoload.php';

use GetIP\GetIP;

$ip_address = GetIP::getIPAddress();

echo($ip_address);exit;
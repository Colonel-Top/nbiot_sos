<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Device;
use App\Alarm;

class APIController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('web');
//    }

    public function data_incoming(Request $request)
    {

        $request = $request->json()->all();
        $request = $request['Sensors'];


//dd($request);
        if (is_null($request))
            return response()->json(['error' => 'Not Authorized, we accept package in format only'], 555);
        $device_id = $request['deviceid'];

        $search = Device::all();
        $flag = 0;
        foreach ($search as $item) {

            if ($item->device_id == $device_id) {
                $search = $item;
                $flag = 1;
                break;
            }

        }

        if (is_null($search) or $flag == 0)
            return response()->json(['error' => 'Device Not Found in DB Please Add New device'], 500);


        $alarm = [];
        $alarm['device_id'] = $search->id;
        $alarm['stage'] = $request['state'];
        $alarm = Alarm::Create($alarm);
//        $fp = fopen('lidn.txt', 'w');
//        fwrite($fp, json_encode($alarm));
//        fclose($fp);

        $device_id = (string)$device_id;
//        CURL
        $groupid = "Ca16df5140162b8ea657fa396fc53250f";
        $bearer = "Authorization: Bearer Za0Dmrk+vTQXXNrWcfh37JaZC1od9vFg+hbeveOKz7McweWVsE5VJLBBGBErt6LAqwetzg0b7bEQgmFROsoX235yYlT+ncKoo5tltqBWuaeRmJGHomYKY6eVj66h+UTFG8qArb+bcU2QKYgZoSANbAdB04t89/1O/w1cDnyilFU=";

        $message = "Device ID Alarm: $device_id";
        $message2 = "Checkout at: http://aed.colonel-tech.com/user/device/info/$alarm->device_id ";
//        $$message = "No Permission"; //Replace Message
//                $message = "ALL PERMISSION HAS BEEN RESET, You are not have permission"; //Replace Message
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://api.line.me/v2/bot/message/push');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//
//        curl_setopt($ch, CURLOPT_POSTFIELDS, "{\n  \"to\": \"$groupid\",\n  \"messages\": [\n    {\n      \"type\": \"text\",\n      \"text\": \"$message\"\n    }\n  ]\n}");

$valuepush = "{\n
    \"to\": \"$groupid\",\n
            \"messages\": [\n
                {\n
  
  \"type\": \"bubble\",\n
  \"body\": {\n
    \"type\": \"box\",\n
    \"layout\": \"vertical\",\n
    \"contents\": [\n
      {\n
        \"type\": \"text\",\n
        \"text\": \"AED ALERT!\",\n
        \"weight\": \"bold\",\n
        \"size\": \"xl\",\n
        \"color\": \"#f54242\"\n
      },\n
      {\n
        \"type\": \"box\",\n
        \"layout\": \"vertical\",\n
        \"margin\": \"lg\",\n
        \"spacing\": \"sm\",\n
        \"contents\": [\n
          {\n
            \"type\": \"box\",\n
            \"layout\": \"baseline\",\n
            \"spacing\": \"sm\",\n
            \"contents\": [\n
              {\n
                \"type\": \"text\",\n
                \"text\": \"Device ID:\",\n
                \"color\": \"#aaaaaa\",\n
                \"size\": \"sm\",\n
                \"flex\": 2\n
              },\n
              {\n
                \"type\": \"text\",\n
                \"text\": \"$device_id\",\n
                \"wrap\": true,\n
                \"color\": \"#666666\",\n
                \"size\": \"sm\",\n
                \"flex\": 5\n
              }\n
            ]\n
          },\n
          {\n
            \"type\": \"box\",\n
            \"layout\": \"baseline\",\n
            \"spacing\": \"sm\",\n
            \"contents\": [\n
              {\n
                \"type\": \"text\",\n
                \"text\": \"Alert time\",\n
                \"color\": \"#aaaaaa\",\n
                \"size\": \"sm\",\n
                \"flex\": 2\n
              },\n
              {\n
                \"type\": \"text\",\n
                \"text\": \"$alarm->created_at\",\n
                \"wrap\": true,\n
                \"color\": \"#666666\",\n
                \"size\": \"sm\",\n
                \"flex\": 5\n
              }\n
            ]\n
          }\n
        ]\n
      }\n
    ]\n
  },\n
  \"footer\": {\n
    \"type\": \"box\",\n
    \"layout\": \"vertical\",\n
    \"spacing\": \"sm\",\n
    \"contents\": [\n
      {\n
        \"type\": \"button\",\n
        \"style\": \"link\",\n
        \"height\": \"sm\",\n
        \"action\": {\n
          \"type\": \"uri\",\n
          \"label\": \"CHECK OUT\",\n
          \"uri\": \"http://aed.colonel-tech.com/user/device/info/$alarm->device_id\"\n
        }\n
      },\n
      {\n
        \"type\": \"spacer\",\n
        \"size\": \"sm\"\n
      }\n
    ],\n
    \"flex\": 0\n
  }\n
}\n
                  }\n
                    ]\n
                    }";

    

        curl_setopt($ch, CURLOPT_POSTFIELDS, $valuepush);
        curl_setopt($ch, CURLOPT_POST, 1);


//                while ($checker == 1)
//                {
//                    $checker = $database->getReference('state')->getValue();
//                }
        $headers = array();
        $headers[] = $bearer;
        $headers[] = 'Cache-Control: no-cache';
        $headers[] = 'Content-Type: application/json';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);


        }

        curl_close($ch);

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://api.line.me/v2/bot/message/push');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//
        curl_setopt($ch, CURLOPT_POSTFIELDS, "{\n  \"to\": \"$groupid\",\n  \"messages\": [\n    {\n      \"type\": \"text\",\n      \"text\": \"$message2\"\n    }\n  ]\n}");

        curl_setopt($ch, CURLOPT_POST, 1);


//                while ($checker == 1)
//                {
//                    $checker = $database->getReference('state')->getValue();
//                }
        $headers = array();
        $headers[] = $bearer;
        $headers[] = 'Cache-Control: no-cache';
        $headers[] = 'Content-Type: application/json';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);


        }
        curl_close($ch);


        //CURL
        return response()->json(['success' => 'Data recorded'], 200);
    }
}
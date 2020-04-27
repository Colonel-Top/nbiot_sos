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


//        CURL
        $groupid = "Ca16df5140162b8ea657fa396fc53250f";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.line.me/v2/bot/message/push');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$iddd= substr($search->id,0,10);
$message = "Alarm Device: $alarm=>device_id";
                    curl_setopt($ch, CURLOPT_POSTFIELDS, "{\n  \"to\": \"$groupid\",\n  \"messages\": [\n    {\n      \"type\": \"text\",\n      \"text\": \"$message\"\n    }\n  ]\n}");
        $valuepush = "{  
   \"to\":\"Ca16df5140162b8ea657fa396fc53250f\",
   \"messages\":[  
      {  
         \"type\":\"flex\",
         \"altText\":\"SMART AED Alarm\",
         \"contents\":{  
            \n\"type\":\"bubble\",
            \n\"styles\":{  
               \n\"footer\":{  
                  \n\"separator\":true                  \n
               }               \n
            },
            \n\"body\":{  
               \n\"type\":\"box\",
               \n\"layout\":\"vertical\",
               \n\"contents\":[  
                  \n                  {  
                     \n\"type\":\"text\",
                     \n\"text\":\"CN321\",
                     \n\"weight\":\"bold\",
                     \n\"color\":\"#1DB446\",
                     \n\"size\":\"sm\"                     \n
                  },
                  \n                  {  
                     \n\"type\":\"text\",
                     \n\"text\":\"AED Equipments\",
                     \n\"weight\":\"bold\",
                     \n\"color\":\"#1DB446\",
                     \n\"size\":\"sm\"                     \n
                  },
                  
                  \n                  {  
                     \n\"type\":\"text\",
                     \n\"text\":\"ALERT\",
                     \n\"weight\":\"bold\",
                     \n\"size\":\"xl\",
                     \n\"color\":\"#FF3333\",
                     \n\"margin\":\"md\"                     \n
                  },
                  \n                  {  
                     \n\"type\":\"text\",
                     \n\"text\":\"Log Alert to medical service\",
                     \n\"size\":\"xs\",
                     \n\"color\":\"#aaaaaa\",
                     \n\"wrap\":true                     \n
                  },
                  \n                  {  
                     \n\"type\":\"separator\",
                     \n\"margin\":\"xxl\"                     \n
                  },
                  \n                  {  
                     \n\"type\":\"box\",
                     \n\"layout\":\"vertical\",
                     \n\"margin\":\"xxl\",
                     \n\"spacing\":\"sm\",
                     \n\"contents\":[  
                        \n                        {  
                           \n\"type\":\"box\",
                           \n\"layout\":\"horizontal\",
                           \n\"contents\":[  
                              \n                              {  
                                 \n\"type\":\"text\",
                                 \n\"text\":\"$iddd\",
                                 \n\"size\":\"sm\",
                                 \n\"color\":\"#555555\",
                                 \n\"flex\":0                                 \n
                              }                         \n
                           ]                           \n
                        },
                        \n                        {  
                           \n\"type\":\"box\",
                           \n\"layout\":\"horizontal\",
                           \n\"contents\":[  
                              \n                              {  
                                 \n\"type\":\"text\",
                                 \n\"text\":\"Join at\",
                                 \n\"size\":\"sm\",
                                 \n\"color\":\"#555555\",
                                 \n\"flex\":0                                 \n
                              },
                              \n                              {  
                                 \n\"type\":\"text\",
                                 \n\"text\":\"$alarm->created_at\",
                                 \n\"size\":\"sm\",
                                 \n\"color\":\"#111111\",
                                 \n\"align\":\"end\"                                 \n
                              }                              \n
                           ]                           \n
                        },
                        \n                        {  
                           \n\"type\":\"box\",
                           \n\"layout\":\"horizontal\",
                           \n\"contents\":[  
                              \n                              {  
                                 \n\"type\":\"text\",
                                 \n\"text\":\"Roles\",
                                 \n\"size\":\"sm\",
                                 \n\"color\":\"#555555\",
                                 \n\"flex\":0                                 \n
                              },
                              \n                              {  
                                 \n\"type\":\"text\",
                                 \n\"text\":\"NONE\",
                                 \n\"size\":\"sm\",
                                 \n\"color\":\"#111111\",
                                 \n\"align\":\"end\"                                 \n
                              }                              \n
                           ]                           \n
                        },
                        \n                        {  
                           \n\"type\":\"separator\",
                           \n\"margin\":\"xxl\"                           \n
                        },
                        \n                        {  
                           \n\"type\":\"box\",
                           \n\"layout\":\"horizontal\",
                           \n\"margin\":\"xxl\",
                           \n\"contents\":[  
                              \n                              {  
                                 \n\"type\":\"text\",
                                 \n\"text\":\"Permission\",
                                 \n\"size\":\"sm\",
                                 \n\"color\":\"#555555\"                                 \n
                              },
                              \n                              {  
                                 \n\"type\":\"text\",
                                 \n\"text\":\"$alarm->stage\",
                                 \n\"size\":\"sm\",
                                 \n\"color\":\"#111111\",
                                 \n\"align\":\"end\"                                 \n
                              }                              \n
                           ]                           \n
                        },
                        \n                        {  
                           \n\"type\":\"box\",
                           \n\"layout\":\"horizontal\",
                           \n\"contents\":[  
                              \n                              {  
                                 \n\"type\":\"text\",
                                 \n\"text\":\"Times Enter\",
                                 \n\"size\":\"sm\",
                                 \n\"color\":\"#555555\"                                 \n
                              },
                              \n                              {  
                                 \n\"type\":\"text\",
                                 \n\"text\":\"WHAT\",
                                 \n\"size\":\"sm\",
                                 \n\"color\":\"#111111\",
                                 \n\"align\":\"end\"                                 \n
                              }                              \n
                           ]                           \n
                        },
                        \n                        {  
                           \n\"type\":\"box\",
                           \n\"layout\":\"horizontal\",
                           \n\"contents\":[  
                              \n                              {  
                                 \n\"type\":\"text\",
                                 \n\"text\":\"Last Enter\",
                                 \n\"size\":\"sm\",
                                 \n\"color\":\"#555555\"                                 \n
                              },
                              \n                              {  
                                 \n\"type\":\"text\",
                                 \n\"text\":\"NO\",
                                 \n\"size\":\"sm\",
                                 \n\"color\":\"#111111\",
                                 \n\"align\":\"end\"                                 \n
                              }                              \n
                           ]                           \n
                        },
                        \n                        {  
                           \n\"type\":\"box\",
                           \n\"layout\":\"horizontal\",
                           \n\"contents\":[  
                              \n                              {  
                                 \n\"type\":\"text\",
                                 \n\"text\":\"Security Key: \",
                                 \n\"size\":\"sm\",
                                 \n\"color\":\"#555555\"                                 \n
                              },
                              \n                              {  
                                 \n\"type\":\"text\",
                                 \n\"text\":\"YEAH|\",
                                 \n\"size\":\"sm\",
                                 \n\"color\":\"#111111\",
                                 \n\"align\":\"end\"                                 \n
                              }                              \n
                           ]                           \n
                        }                        \n
                     ]                     \n
                  },
                  \n                  {  
                     \n\"type\":\"separator\",
                     \n\"margin\":\"xxl\"                     \n
                  },
                  \n                  {  
                     \n\"type\":\"box\",
                     \n\"layout\":\"horizontal\",
                     \n\"margin\":\"md\",
                     \n\"contents\":[  
                        \n                        {  
                           \n\"type\":\"text\",
                           \n\"text\":\"Dev. Promsurin P.\",
                           \n\"size\":\"xs\",
                           \n\"color\":\"#aaaaaa\",
                           \n\"flex\":0                           \n
                        },
                        \n                        {  
                           \n\"type\":\"text\",
                           \n\"text\":\"#COLONEL ENTERPRISE\",
                           \n\"color\":\"#aaaaaa\",
                           \n\"size\":\"xs\",
                           \n\"align\":\"end\"                           \n
                        }
                     ]                     \n
                  }                  \n
               ]               \n
            }            \n
         }
      }
   ]
}";
//        curl_setopt($ch, CURLOPT_POSTFIELDS, $valuepush);


        curl_setopt($ch, CURLOPT_POST, 1);
        $headers = array();
        $headers[] = "Za0Dmrk+vTQXXNrWcfh37JaZC1od9vFg+hbeveOKz7McweWVsE5VJLBBGBErt6LAqwetzg0b7bEQgmFROsoX235yYlT+ncKoo5tltqBWuaeRmJGHomYKY6eVj66h+UTFG8qArb+bcU2QKYgZoSANbAdB04t89/1O/w1cDnyilFU=";
        $headers[] = 'Cache-Control: no-cache';
        $headers[] = 'Content-Type: application/json';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        /*Dead HER E FIREBASE */

//                    $response = str_replace('\"','',$valuepush);
//                    $response = str_replace('\n','',$valuepush);
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
            $response = curl_error($ch);
                    $fp = fopen('lidn.txt', 'w');
        fwrite($fp, ($response));
        fclose($fp);
        }
        curl_close($ch);



     //CURL
        return response()->json(['success' => 'Data recorded'], 200);
    }
}
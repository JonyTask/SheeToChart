<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google_Client;
use Google_Service_Sheets;
use Illuminate\Support\Str;

class GoogleSheetController extends Controller
{
    const SPREADSHEET_ID = '1t_0qPhl3jHkk34mjo4Lu8JxU4NDP-RFeZ2GX4P1SRR0';
    const MAX_ROW = 100000;

    public function webhook(Request $request){
        dd($request);
    }

    public function hello(){
        return 'hello';
    }

    // public function webhook(Request $request)
    // {
    //     $spreadsheet_id = $request->spreadsheet_id;

    //     if($spreadsheet_id !== self::SPREADSHEET_ID) {
    //         abort(400, '不正なアクセスです');
    //     }

    //     $sheet = $this->getSheetClient();
    //     $range = 'A1:B'. self::MAX_ROW;
    //     $response = $sheet->spreadsheets_values->get(self::SPREADSHEET_ID, $range);
    //     $sheet_data = $response->getValues();
    //     return $Sheet_data;
    // }

    // private function getSheetClient(): Google_Service_Sheets
    // {
    //     $credentials_path = storage_path('app/json/credentials.json');

    //     $client = new Google_Client();
    //     $client->setAuthConfig($credentials_path);
    //     $client->setScopes([
    //         Google_Service_Sheets::SPREADSHEETS,
    //     ]);

    //     return new Google_Service_Sheets($client);
    // }
}

<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class GoogleSheetController extends Controller
{
    public function index()
    {
        $client = new Client();
        $apiKey = 'AIzaSyDtxNUkk4Vk1vF5NMYEJ9ef0hcgrpxu7gA';
        $spreadsheetId = '11KjP7rwfHaKTr6ESiHlWmQEE3-jADZX4l0gqeIJdLwo';

        try {
            $responseGiroRupiah = $client->get("https://sheets.googleapis.com/v4/spreadsheets/{$spreadsheetId}/values/giro-rupiah!A1:Z1000?key={$apiKey}");
            $dataGiroRupiah = json_decode($responseGiroRupiah->getBody(), true);

            $responseGiroValas = $client->get("https://sheets.googleapis.com/v4/spreadsheets/{$spreadsheetId}/values/giro-valas!A1:Z1000?key={$apiKey}");
            $dataGiroValas = json_decode($responseGiroValas->getBody(), true);

            $responseBritama = $client->get("https://sheets.googleapis.com/v4/spreadsheets/{$spreadsheetId}/values/britama!A1:Z1000?key={$apiKey}");
            $dataBritama = json_decode($responseBritama->getBody(), true);

            $responseBritamaBisnis = $client->get("https://sheets.googleapis.com/v4/spreadsheets/{$spreadsheetId}/values/britama-bisnis!A1:Z1000?key={$apiKey}");
            $dataBritamaBisnis = json_decode($responseBritamaBisnis->getBody(), true);

            $responseBritamaValas = $client->get("https://sheets.googleapis.com/v4/spreadsheets/{$spreadsheetId}/values/britama-valas!A1:Z1000?key={$apiKey}");
            $dataBritamaValas = json_decode($responseBritamaValas->getBody(), true);

            $responseSimpedes = $client->get("https://sheets.googleapis.com/v4/spreadsheets/{$spreadsheetId}/values/simpedes!A1:Z1000?key={$apiKey}");
            $dataSimpedes = json_decode($responseSimpedes->getBody(), true);

            $responseDepositoRupiah = $client->get("https://sheets.googleapis.com/v4/spreadsheets/{$spreadsheetId}/values/deposito-rupiah!A1:Z1000?key={$apiKey}");
            $dataDepositoRupiah = json_decode($responseDepositoRupiah->getBody(), true);

            $responseDepositoDollar = $client->get("https://sheets.googleapis.com/v4/spreadsheets/{$spreadsheetId}/values/deposito-dollar!A1:Z1000?key={$apiKey}");
            $dataDepositoDollar = json_decode($responseDepositoDollar->getBody(), true);

            $responseInstalmentSavingJunio = $client->get("https://sheets.googleapis.com/v4/spreadsheets/{$spreadsheetId}/values/instalment-saving-junio!A1:Z1000?key={$apiKey}");
            $dataInstalmentSavingJunio = json_decode($responseInstalmentSavingJunio->getBody(), true);

            $responseBritamaRencana = $client->get("https://sheets.googleapis.com/v4/spreadsheets/{$spreadsheetId}/values/britama-rencana!A1:Z1000?key={$apiKey}");
            $dataBritamaRencana = json_decode($responseBritamaRencana->getBody(), true);

            $responseSimpedesImpian = $client->get("https://sheets.googleapis.com/v4/spreadsheets/{$spreadsheetId}/values/simpedes-impian!A1:Z1000?key={$apiKey}");
            $dataSimpedesImpian = json_decode($responseSimpedesImpian->getBody(), true);

            $responseValas = $client->get("https://sheets.googleapis.com/v4/spreadsheets/{$spreadsheetId}/values/valas!B1:Z1000?key={$apiKey}");
            $dataValas = json_decode($responseValas->getBody(), true);


            $valuesGiroRupiah = $dataGiroRupiah['values'];
            $valuesGiroValas = $dataGiroValas['values'];
            $valuesBritama = $dataBritama['values'];
            $valuesBritamaBisnis = $dataBritamaBisnis['values'];
            $valuesBritamaValas = $dataBritamaValas['values'];
            $valuesSimpedes = $dataSimpedes['values'];
            $valuesDepositoRupiah = $dataDepositoRupiah['values'];
            $valuesDepositoDollar = $dataDepositoDollar['values'];
            $valuesInstalmentSavingJunio = $dataInstalmentSavingJunio['values'];
            $valuesBritamaRencana = $dataBritamaRencana['values'];
            $valuesSimpedesImpian = $dataSimpedesImpian['values'];
            $valuesValas = $dataValas['values'];

            return view('index', compact('valuesGiroRupiah', 'valuesGiroValas', 'valuesBritama', 'valuesBritamaBisnis', 'valuesBritamaValas', 'valuesSimpedes', 'valuesDepositoRupiah', 'valuesDepositoDollar', 'valuesInstalmentSavingJunio', 'valuesBritamaRencana', 'valuesSimpedesImpian', 'valuesValas'));
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], $e->getCode());
        }
    }
}

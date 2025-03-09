<?php

namespace App\Http\Controllers\userside;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use \App\Models\settings;


class pdfController extends Controller
{


    protected $baseUrl;

    public function __construct()
    {
        $requestScheme = isset($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : 'http';
        $host = $_SERVER['HTTP_HOST'];
        $this->baseUrl = $requestScheme . '://' . $host;
    }

    public function viewPdfF(Request $req)
    {
        // $pdf = App::make('dompdf.wrapper');
        // $pdf = Pdf::loadView('pdf', $data);
        // $pdf = Pdf::loadView('pdf');
        // return $pdf->download('1.pdf');

        // $d = vehicleHistoryReports::with(['additionalh', 'ownershiph', 'ownerslisth', 'titleh'])
        //     ->where('vId', $req->id)
        //     ->first();
        // dd($d);

        $check = "Not Found";
        $resp = [];
        $data = vehicleHistoryReports::where('vId', $req->id)->where('showReports', 1)->first();
        if ($data) {
            $additionalHistory = additionalHistory::where('vId', $req->id)->get()->first();
            $ownershipHistory = ownershipHistory::where('vId', $req->id)->get()->first();
            $titleHistory = titleHistory::where('vId', $req->id)->get()->first();
            $ownersList = ownersList::where('vId', $req->id)->get();

            $glossary = glossary::all();
            $reportSetting = reportSetting::first();
            $settings = settings::first();
            $resp = [
                'baseUrl' => $this->baseUrl,
                'settings' => $settings,
                'vehicleHistory' => $data,
                'additionalHistory' => $additionalHistory,
                'ownershipHistory' => $ownershipHistory,
                'titleHistory' => $titleHistory,
                'ownersList' => $ownersList,
                'glossary' => $glossary,
                'reportSetting' => $reportSetting,
            ];
        } else {
            $check = "Not Found";
            return redirect()->route('notfound');
        }
        // dd($resp);

  
            
            $pdf = Pdf::loadView('pdf', ['resp' => $resp]);
            return $pdf->stream();
        
    }


    public function downloadPdfF(Request $req)
    {
        $check = "Not Found";
        $resp = [];
        $data = vehicleHistoryReports::where('vId', $req->id)->where('showReports', 1)->first();
        if ($data) {
            $additionalHistory = additionalHistory::where('vId', $req->id)->get()->first();
            $ownershipHistory = ownershipHistory::where('vId', $req->id)->get()->first();
            $titleHistory = titleHistory::where('vId', $req->id)->get()->first();
            $ownersList = ownersList::where('vId', $req->id)->get();

            $glossary = glossary::all();
            $reportSetting = reportSetting::first();
            $settings = settings::first();
            $resp = [
                'baseUrl' => $this->baseUrl,
                'settings' => $settings,
                'vehicleHistory' => $data,
                'additionalHistory' => $additionalHistory,
                'ownershipHistory' => $ownershipHistory,
                'titleHistory' => $titleHistory,
                'ownersList' => $ownersList,
                'glossary' => $glossary,
                'reportSetting' => $reportSetting,
            ];
        } else {
            $check = "Not Found";
            return redirect()->route('notfound');
        }

        $pdf = Pdf::loadView('pdf', ['resp' => $resp]);
        return $pdf->download($resp['settings']['websiteName'].'_1.pdf');
    }
}
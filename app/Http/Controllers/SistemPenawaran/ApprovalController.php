<?php

namespace App\Http\Controllers\SistemPenawaran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Dompdf\Dompdf;

class ApprovalController extends Controller
{
    public function index(){
        return view('sistemPenawaran.approval.index');
    }
    public function preview(){
        return view('sistemPenawaran.approval.preview');
    }
    public function document(){

        // $dompdf = new Dompdf();


        // $weeklyPdf = view('projects.weeklyProgress')->render();
        

        // // Load HTML content into Dompdf
        // $dompdf->loadHtml($weeklyPdf);
        
        // $dompdf->setPaper('A4', 'landscape'); // Set paper orientation
        // $dompdf->render();

        

        // Save PDFs to storage or public directory
        // return $dompdf->stream('print_preview.pdf');

        // Create Dompdf instance
        // $dompdf = new Dompdf();

        // $penawaranPdf = view('sistemPenawaran.approval.pdf')->render();

        // // Load HTML content
        // $dompdf->loadHtml($penawaranPdf);

        // // Set paper size and orientation (optional)
        // $dompdf->setPaper('A4', 'portrait');

        // // Render the HTML as PDF
        // $dompdf->render();

        // // Output the generated PDF (temporary file)
        // $pdf = $dompdf->output();

        // // Return response with PDF content
        // return response($pdf, 200, [
        //     'Content-Type' => 'application/pdf',
        //     'Content-Disposition' => 'inline; filename="generated.pdf"'
        // ]);

        return view('sistemPenawaran.approval.pdf');
    }
}

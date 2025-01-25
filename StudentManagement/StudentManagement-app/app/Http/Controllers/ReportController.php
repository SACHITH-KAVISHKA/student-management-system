<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;

class ReportController extends Controller
{
    public function report1($pid)
    {
        // Fetch the payment details
        $payment = Payment::find($pid);

        // Handle the case where the payment doesn't exist
        if (!$payment) {
            return response()->json(['error' => 'Payment not found'], 404);
        }

        // Generate the PDF
        $pdf = App::make('dompdf.wrapper');
        $print = "<div style='margin:20px; padding:20px; font-family: Arial, sans-serif;'>";
        $print .= "<h1 align='center'>Payment Receipt</h1>";
        $print .= "<hr/>";
        $print .= "<p>Receipt No: <b>" . htmlspecialchars($pid) . "</b></p>";
        $print .= "<p>Date: <b>" . htmlspecialchars($payment->paid_date) . "</b></p>";
        $print .= "<p>Enrollment No: <b>" . htmlspecialchars($payment->enrollment->enroll_no) . "</b></p>";
        $print .= "<p>Student Name: <b>" . htmlspecialchars($payment->enrollment->student->name) . "</b></p>";
        $print .= "<hr/>";
        $print .= "<table style='width: 100%; border-collapse: collapse;'>";
        $print .= "<tr>";
        $print .= "<th style='text-align: left; border-bottom: 1px solid #ddd;'>Description</th>";
        $print .= "<th style='text-align: left; border-bottom: 1px solid #ddd;'>Amount</th>";
        $print .= "</tr>";
        $print .= "<tr>";
        $print .= "<td style='padding: 8px;'>" . htmlspecialchars($payment->enrollment->batch->name) . "</td>";
        $print .= "<td style='padding: 8px;'>" . htmlspecialchars($payment->amount) . "</td>";
        $print .= "</tr>";
        $print .= "</table>";
        $print .= "<hr/>";
        $print .= "<p>Printed Date: <b>" . now()->format('Y-m-d') . "</b></p>";
        $print .= "</div>";

        $pdf->loadHTML($print);
        return $pdf->stream('Payment_Receipt.pdf');
    }
}

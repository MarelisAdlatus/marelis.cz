<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Mail\ReportMail;
use Mail;

class ReportFormController extends Controller
{
    public function ReportForm(Request $request) {

        $msg = gzuncompress(base64_decode($request->message));

        $request->merge([
            'message' => $msg,
        ]);

        $request->validate([
            'group' => 'required|min:3|max:50',
            'item' => 'required|min:3|max:50',
            'name' => 'nullable|max:50',
            'email' => 'required|email',
            'option' => 'required||min:3|max:50',
            'message' => 'required|min:12'
        ]);

        $lang = app()->getLocale();

        // create new report
        $report = Report::create($request->all());

        // create new email
        $mail = new ReportMail($report);

        // get admin email
        $admin = config('settings.admin_email');

        // form checkbox: "Send me a copy of this message ?"
        if ($request->has('check-send-copy')) {
            // send email to admin and copy to guest
            Mail::to($admin)->cc($report->email)->locale($lang)->queue($mail->onQueue('notification'));
        } else {
            // send email to admin
            Mail::to($admin)->locale($lang)->queue($mail->onQueue('notification'));
        }

        return response('Created', 201);
    }
}

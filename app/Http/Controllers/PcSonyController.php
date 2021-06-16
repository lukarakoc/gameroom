<?php

namespace App\Http\Controllers;

use App\PCSony;
use App\Report;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PcSonyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function toggleStatus(Request $request,$id) {

       $device = PCSony::find($id);

        if($device->status == false) {

            $device->update(['status' => true, 'start_time' => Carbon::now()]);

            return redirect()->back();
        }
        if($device->status == true) {

            $device->update(['status' => false, 'end_time' => Carbon::now()]);

            Report::create([
               'deviceName' => $device->name,
               'time' => $device->end_time->diffInMinutes($device->start_time),
                'start_time' => $device->start_time,
                'end_time' => $device->end_time
            ]);
            $device->update(['start_time' => null, 'end_time' => null]);
            return redirect()->back();
        }


    }

    public function reportShow() {

        $report = Report::all();
        return view('admin.report', compact('report'));
    }

    public function reportReset() {

        Report::truncate();

        return redirect()->back();
    }

    public function reportDownload() {


    }
}

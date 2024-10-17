<?php

namespace App\Http\Controllers\Institute;

use App\Http\Controllers\Controller;
use App\Models\InstitutePns;
use Illuminate\Http\Request;

class PnSController extends Controller
{
    public function showPnSHeader()
    {
        $pns_header = InstitutePns::select('id', 'header_image', 'header_caption', 'header_body')->where('id', 1)->first();
        return view('pages.Institute.pns.header', compact('pns_header'));
    }
}

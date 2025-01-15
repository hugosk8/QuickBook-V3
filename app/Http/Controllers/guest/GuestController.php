<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index() {
        return view('pages/index');
    }

    public function contact() {
        return view('pages/contact');
    }

    public function prestations() {
        $services = Service::Paginate(6);
        return view('pages/services', compact('services'));
    }

    public function reservation() {
        $services = Service::Paginate(6);
        return request()->ajax()
        ? response()->json(view('partials.services', compact('services'))->render())
        : view('pages/reservation', compact('services'));
    }
}

<?php

namespace App\Http\Controllers\Contacto;

use App\Models\Distribuidor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\NotificationsController;
use App\Models\Product;
use Carbon\Carbon;

class ContactoController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('pages.contacto.index');
    }
}

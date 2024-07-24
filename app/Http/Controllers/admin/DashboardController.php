<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\KategoriEvent;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $param;
    public function index()
    {
        $this->param['vendor'] = User::where('role', 'Mitra')->count();
        $this->param['pengguna'] = User::where('role', 'Pengguna')->count();
        $this->param['kategori'] = KategoriEvent::count();
        $this->param['event'] = Event::count();
        return view('admin.pages.dashboard', $this->param);
    }
}

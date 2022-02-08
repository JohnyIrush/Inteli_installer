<?php

namespace App\Http\Controllers\Installer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class InstallerController extends Controller
{
    public function home()
    {
        return Inertia::render('inteli_installer/ui/themes/Installer');
    }
}

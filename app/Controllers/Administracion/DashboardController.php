<?php
namespace App\Controllers\Administracion;

use App\Controllers\BaseController;

class DashboardController extends BaseController{
	public function index() {
    $data['titulo'] = 'Dashboard';
		return view('Administracion/dashboard', $data);
	}
}

<?php
namespace App\Controllers\Compania;

use App\Controllers\BaseController;

class DashboardController extends BaseController{
	public function index() {
    $data['titulo'] = 'Dashboard';
		return view('Compania/dashboard', $data);
	}
}

<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;

class DashController extends BaseController {

    public $layout = 'template.back';

    public function showDashboard() {
        return view('dashboard');//$this->layout->content = View::make('dashboard');
    }

}

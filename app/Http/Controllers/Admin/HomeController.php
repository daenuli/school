<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	private $folder = 'admin.home';
    private $uri = 'home';
	private $title = 'Dashboard';

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	$data['title'] = $this->title;
        return view($this->folder.'.index',$data);
    }
}

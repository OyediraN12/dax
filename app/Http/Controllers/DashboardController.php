<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller {
    
    // home
    public function dashboardHome(){
        return redirect( route('app.chat') );
    }
}

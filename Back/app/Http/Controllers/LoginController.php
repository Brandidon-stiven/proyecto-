<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // app/Http/Controllers/LoginController.php

public function showLoginForm()
{
    return view('layout.login');
}

// app/Http/Controllers/Auth/LoginController.php

protected function authenticated(Request $request, $usuarios)
{
    return redirect('/login');
}

}






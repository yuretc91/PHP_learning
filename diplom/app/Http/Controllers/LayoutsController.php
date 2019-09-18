<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutsController extends Controller
{
    public $layout = 'layouts.common';

    public function action_profile()
    {
        $this->layout->nest('content', 'user.profile');
    }
}

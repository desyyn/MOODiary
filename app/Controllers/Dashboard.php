<?php

namespace App\Controllers;

use App\Models\MoodEntryModel;
use App\Models\MoodTypeModel;

class Dashboard extends BaseController
{
    public function index()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        $data['user_name'] = session()->get('user_name');

        return view('dashboard', $data);
    }
}

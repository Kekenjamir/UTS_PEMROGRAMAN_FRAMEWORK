<?php

namespace App\Controllers;

use App\Models\HondaModel;
use CodeIgniter\Controller;

class Honda extends BaseController
{
    public function index()
    {
        $model = new HondaModel();
        $data['honda_list'] = $model->get_honda_list();

        return view('honda', $data);
    }
}

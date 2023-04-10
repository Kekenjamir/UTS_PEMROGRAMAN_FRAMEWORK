<?php

namespace App\Controllers;

use App\Models\YamahaModel;
use CodeIgniter\Controller;

class Yamaha extends BaseController
{
    public function index()
    {
        $model = new YamahaModel();
        $data['yamaha_list'] = $model->get_yamaha_list();

        return view('yamaha', $data);
    }
}

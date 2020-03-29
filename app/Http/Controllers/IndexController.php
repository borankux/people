<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Skill;
use App\Models\User;
use Dingo\Api\Routing\Helpers;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function index()
    {
        return $this->response->accepted("good");
    }
}

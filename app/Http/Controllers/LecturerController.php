<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\DatabaseHelper;

class LecturerController extends Controller
{
    public function index()
    {
        $database = DatabaseHelper::getLecturerIndex();
        $view = view('lecturer.index');
        $view->lecturer = $database->lecturer;
        $view->program_study = $database->program_study;
        return $view;
    }
}

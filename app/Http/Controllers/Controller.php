<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insertcourse(Request $req) {
      $courseID = $req->input('ID');
      $courseName = $req->input('courseName');
      $createdOn = $req->input('createdOn');

      $data = array("ID"=>$courseID, "courseName"=>$courseName, "createdOn"=>$createdOn);

      DB::table('course')->insert($data);
      return redirect('/home');
    }

}

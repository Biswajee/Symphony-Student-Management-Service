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

    function application(Request $req) {
      $msgID = 0;
      $subject = $req->input('subject');
      $description = $req->input('description');
      $filepath = $req->input('filepath');

      $data = array("msgID"=>$msgID, "subject"=>$subject, "description"=>$description, "filepath"=>$filepath);

      DB::table('feedback')->insert($data);

      return redirect('/home');
    }

    function fetchcourse(Request $req) {
      $data['data'] = DB::table('course')->get();

      if(count($data) > 0)
      {
        return view('viewcourse', $data);
      }
      else
      {
        return view('viewcourse');
      }
    }

    function testscores(Request $req) {
      $data['data'] = DB::table('test')->get();

      if(count($data) > 0)
      {
        return view('scores', $data);
      }
      else
      {
        return view('scores');
      }
    }

}

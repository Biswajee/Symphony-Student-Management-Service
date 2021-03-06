@extends('layouts.header')

@section('content')
<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h4 class="page-header"> WELCOME {{ Auth::user()->name }}</h4>
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          Student Academic Reports
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-12">
              <table class="table table-hover table-responsive">
                <tr>
                  <td>Test ID</td>
                  <td colspan="6"></td>
                  <td>Score</td>
                  <td colspan="6"></td>
                  <td>Grade</td>
                  <td colspan="6">
                  <td>Total Marks</td>
                  <td colspan="6">
                  <td>Subject Teacher</td>
                </tr>
                @foreach ($data as $value)
                <tr>
                  <td>{{$value->testno}}</td>
                  <td colspan="6"></td>
                  <td>{{$value->score}}</td>
                  <td colspan="6"></td>
                  <td>{{$value->grade}}</td>
                  <td colspan="6">
                  <td>{{$value->total_marks}}</td>
                  <td colspan="6">
                  <td>{{$value->evaluator}}</td>
                </tr>
                @endforeach
              </table>
            </div>
          </div>
          <!-- /.row (nested) -->
        </div>
        <!-- /.panel-body -->
      </div>
      <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
</div>
<!-- /#page-wrapper -->
@endsection

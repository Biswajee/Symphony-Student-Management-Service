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
          Student Course Table
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-6">
              <table class="table table-hover table-responsive">
                <tr>
                  <td>Course ID</td>
                  <td colspan="3"></td>
                  <td>Course Name</td>
                  <td colspan="3"></td>
                  <td>Started on</td>
                </tr>
                @foreach ($data as $value)
                <tr>
                  <td>{{$value->ID}}</td><td colspan="3"></td>
                  <td>{{$value->courseName}}</td><td colspan="3"></td>
                  <td>{{$value->createdOn}}</td>
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

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
          To the Authorities Desk
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-6">
              <form role="form" action="/desk_application">
                <div class="form-group">
                  <label>Subject of message</label>
                  <input class="form-control" placeholder="Enter your query / grievance" name="subject">
                </div>
                <div class="form-group">
                  <label>Reporting to:</label>
                  <p class="form-control-static">office@denobilifri.in</p>
                </div>
                <div class="form-group">
                  <label>Relevant Attachments</label>
                  <input type="file" name="filepath">
                </div>
                <div class="form-group">
                  <label>Description of issue / query</label>
                  <textarea class="form-control" rows="3" name="description"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Submit Button</button>
                <button type="reset" class="btn btn-default">Reset Button</button>
              </form>
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

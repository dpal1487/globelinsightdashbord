@extends('backend.layout')
@section('title')
Dashboard
@endsection
@section('page_name')
Dashboard
@endsection
@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <!-- /.card-header -->
          <div class="form" style="padding: 20px;">
            <form action="{{asset('/dashboard')}}" method="post">
              {{@csrf_field()}}
              <div class="row">
                <div class="form-group col-sm-3">
                  <input type="text" placeholder="PID" value="{{Request::get('pid')}}" name="pid" id="pid" class="form-control" required />
                </div>
                <div class="form-group col-sm-3">
                  <select name="status" class="form-control">
                    <option value="complete" {{Request::get('status')=='complete' ? 'selected' : '' }}>Completed</option>
                    <option value="terminate" {{Request::get('status')=='terminate' ? 'selected' : '' }}>Terminated</option>
                    <option value="quotafull" {{Request::get('status')=='quotafull' ? 'selected' : '' }}>Quotafull</option>
                  </select>
                </div>
                <div class="form-group col-sm-3">
                  <input type="text" placeholder="PID,UID" value="{{Request::get('q')}}" name="q" id="q" class="form-control" />
                </div>
                <div class="col-sm-3">
                  <input type="submit" class="btn btn-primary" value="submit" />
                </div>
              </div>
            </form>
          </div>
          <div class="card-body">

            <table class="table table-hover  text-center">
              <thead>
                <tr style="background-color:#343a40e6; color:#c2c7d0;">
                  <th>S. NO</th>
                  <th>Project ID</th>
                  <th>Respondent ID</th>
                  <th>Status</th>
                  <th>IP Address</th>
                  <th>Date/Time</th>
                </tr>
              </thead>

              <tbody>
                <?php $i = 1 ?>
                @forelse($surveys as $survey)
                <?php
                $color = "";
                $bgc = "";
                if ($survey->status == "complete") {
                  $color = "success";
                  $bgc = "#d4ffde";
                } else if ($survey->status == "terminate") {
                  $color = "danger";
                  $bgc = "#ffd4d8";
                } else {
                  $color = "warning";
                  $bgc = "#fff2cc";
                }
                ?>
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$survey->project_id}}</td>
                  <td>{{$survey->user_id}}</td>
                  <td class="text-center">
                    <div style="background-color: {{$bgc }}; width: fit-content; margin: auto; padding: 0 15px;" class="text-{{$color}} rounded-pill">
                      {{$survey->status}}
                    </div>
                  </td>
                  <td>{{$survey->ip_address}}</td>

                  <td>
                    {{ date('Y, M, d : h:i', strtotime($survey->created_at)) }}
                  </td>
                </tr>
                @empty
                <tr>
                  <td colspan="5">No Result Found</td>
                </tr>
                @endforelse
              </tbody>
            </table>
          </div>
          <div class="d-flex justify-content-end mx-5">
            {{ $surveys->links() }}
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
@endsection
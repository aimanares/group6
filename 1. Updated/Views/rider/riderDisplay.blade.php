@extends('riderDashboard')

@section('content')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Order Received</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
        <td>ID</td>
        <td>Status</td>
          
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($orders as $orders)
        <tr>
        <td>{{$orders['id']}}</td>
        <td>{{$orders['status']}}</td>
            
            <td>
                <a  class="btn btn-primary">Accept</a>
            </td>
            <td>
                <a  class="btn btn-danger" >Cancel</a>
                
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection
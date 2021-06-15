@extends('customerDashboard')
 
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <h1>Customer Home Page la woi!</h1>
        </tr>
        
    </table>
      
@endsection
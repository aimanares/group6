@extends('menus.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>View Menu</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('menus.create') }}"> Create new menu</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Menu Name</th>
            <th>Price</th>
            <th>Availability</th>
            <th>Cafe</th>
            <th width="250px">Action</th>
        </tr>
        @foreach ($menus as $menu)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $menu->menuName }}</td>
            <td>{{ $menu->price }}</td>
            <td>{{ $menu->availability }}</td>
            <td>{{ $menu->cafe_id }}</td>
            <td>
                <form action="{{ route('menus.destroy',$menu->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('menus.show',$menu->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('menus.edit',$menu->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $menus->links() !!}
      
@endsection

@extends('admin.layouts.app')
               
@section('content')
                  
             
<!-- Striped Rows -->
<table class="table table-striped">

    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">orders</th>
         
        </tr>
    </thead>
    <tbody>
        @foreach ($tataorders as $tataorders)
            
        
        <tr>
            <th scope="row">{{$tataorders->id}}</th>
            <td>{{$tataorders->name}}</td>
            <td>{{$tataorders->phone}}</td>
            <td>{{$tataorders->orders}}</td>

            

        </tr>
    @endforeach
      
     
    </tbody>
</table>

@endsection
                <!-- container-fluid -->
          

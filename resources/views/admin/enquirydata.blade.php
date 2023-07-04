@extends('admin.layouts.app')
               
@section('content')
                  
             
<!-- Striped Rows -->
<table class="table table-striped">

    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Message</th>
         
        </tr>
    </thead>
    <tbody>
        @foreach ($enquiry as $enquiry)
            
        
        <tr>
            <th scope="row">{{$enquiry->id}}</th>
            <td>{{$enquiry->name}}</td>
            <td>{{$enquiry->email}}</td>
            <td>{{$enquiry->phone}}</td>
            <td>{{$enquiry->message}}</td>

            

        </tr>
    @endforeach
      
     
    </tbody>
</table>

@endsection
                <!-- container-fluid -->
          

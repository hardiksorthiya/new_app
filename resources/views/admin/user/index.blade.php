@extends('layouts.admin.admin')

@section('title', 'Users')

@section('content')

<div class="container table-responsive py-5"> 
    <table id="myUserTable" class="table table-bordered table-hover">
      <thead class="thead-dark">
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          {{-- <th scope="col">Password</th> --}}
          <th scope="col">Phone Number</th>
          <th scope="col">Role</th>
          <th scope="col">Last Update</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php 
                $n = 1;
                ?>
        @foreach ($users as $item)
        <tr>
            
            <th scope="row">{{$n}} 
                <?php 
                $n ++;
                ?>
            </th>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            {{-- <td> {{$item->password}}</td> --}}
            <td>{{$item->mobile}}</td>
            <td>{{$item->role_as == '1' ? 'Admin':'User'}}</td>
            <td>{{$item->updated_at}}</td>
            <td><a href="{{url('admin/user/'.$item->id.'/edit')}}" class="btn btn-success">Edit</a></td>
            <td><a href="{{url('admin/user/'.$item->id.'/delete')}}" class="btn btn-danger">Delete</a></td>
            
          </tr>
          
        @endforeach
        
        
      </tbody>
    </table>
    </div>


@endsection


<div id="wrapper">
    @extends('layouts.admin.admin')
    @section('Welcometitle', 'Welcome' )
    @section('title', 'Post')
    @include('layouts.admin.inc.sidebar')
    
    <section id="content-wrapper">
      <div class="row">
          <div class="col-lg-12">
              <div class="heading-with-btn">
                  <h3 class="content-title">@yield('title')</h3><a href="{{url('admin/create-post')}}" class="hp-border-btn">Add New Post</a>
              </div>
          </div>
          
          {{-- <div class="col-lg-12">
              <div class="table-responsive py-4"> 
                  <table class="table table-hover hp-table-style">
                    <thead class="thead-dark">
                      <tr class="table-heading-text">
                        <th scope="col">Sr. No</th>
                        <th scope="col">Profile</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone No</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-body-hp">
                      <?php 
                      $n = 1;
                      ?>
                      @foreach ($users as $row)
                      <tr>
                         
                          <th scope="row">{{$n}} 
                              <?php 
                              $n ++;
                              ?>
                          </th>                            
                          <td><img src="{{(!empty($row->image)) ? url('assets/images/admin/'.$row->image): url('assets/images/avtar.jpg')}}" alt="avtar" class="avtar"></td>
                          <td>{{$row->name}}</td>
                          <td>{{$row->email}}</td>
                          <td>{{$row->mobile}}</td>
                          <td><a href="{{url('admin/user/'.$row->id.'/edit')}}" class="hp-border-btn">Edit</a><a href="{{url('admin/user/'.$row->id.'/delete')}}" class="hp-border-btn">Delete</a></td>
                         
                        </tr>
                      @endforeach
                      
                      
                      
                    </tbody>
                  </table>
                  </div>
          </div> --}}
      </div>
  </section>
  </div>   
  
  
  
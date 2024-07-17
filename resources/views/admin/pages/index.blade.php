<div id="wrapper">
    @extends('layouts.admin.admin')
    @section('title', 'Pages')
    @include('layouts.admin.inc.sidebar')
    
    <section id="content-wrapper">
      <div class="row">
          <div class="col-lg-12">
              <div class="heading-with-btn">
                  <h3 class="content-title">@yield('title')</h3><a href="create-page" class="hp-border-btn">Add New Page</a>
              </div>
          </div>
          
          <div class="col-lg-12">
              <div class="table-responsive py-4"> 
                  <table class="table table-hover hp-table-style">
                    <thead class="thead-dark">
                      <tr class="table-heading-text">
                        <th scope="col">Sr. No</th>
                        <th scope="col">Name</th>
                        <th scope="col">slug</th>
                        <th scope="col">breadcum</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-body-hp">
                      <?php 
                      $n = 1;
                      ?>
                      @foreach ($page as $row)
                      <tr>
                         
                          <th scope="row">{{$n}} 
                              <?php 
                              $n ++;
                              ?>
                          </th>                            
                          <td>{{$row->name}}</td>
                          <td>{{$row->slug}}</td>
                          <td><img src="{{(!empty($row->breadcumimage)) ? url('assets/images/admin/'.$row->breadcumimage): url('assets/images/avtar.jpg')}}" alt="avtar" class="avtar"></td>
                          <td><a href="{{url('admin/pages/'.$row->id)}}" class="hp-border-btn">Edit</a>
                        </tr>
                      @endforeach
                      
                      
                      
                    </tbody>
                  </table>
                  </div>
          </div>
      </div>
  </section>
  </div>   
  
  
  
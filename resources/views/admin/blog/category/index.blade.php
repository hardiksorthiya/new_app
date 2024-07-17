<div id="wrapper">
  @extends('layouts.admin.admin')
  @section('title', 'Categories')
  @include('layouts.admin.inc.sidebar')
  
  <section id="content-wrapper">
      <div class="row">
          <div class="col-lg-12">
              <div class="heading-with-btn">
                  <h3 class="content-title">@yield('title')</h3>
              </div>
          </div>
          @if ($errors->any())
          @foreach ($errors->all() as $error)
              <div>{{$error}}</div>
          @endforeach
          @endif

          @if (session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
          @endif
          <div class="col-lg-12">
              <div class="section-ineer-main">

                  
                  <div class="row">
                      <div class="col-lg-4">
                          <form action="" method="POST" enctype="multipart/form-data">
                              @csrf
                              <div class="row edit-form">
                                <div class="col-lg-12">
                                  <h5>Add New Category</h5>
                                </div>
                                  <div class="col-lg-12">
                                      <label for="fullname">Name</label></br>
                                      <input type="text" name="name" class="input-field-hp edit-field-hp">
                                  </div>
                                  <div class="col-lg-12">
                                      <label for="fullname">Slug</label></br>
                                      <input type="text" name="slug" class="input-field-hp edit-field-hp">
                                  </div>
                                  <div class="col-lg-12">
                                      <label for="fullname">description</label></br>
                                      <textarea name="description" class="input-field-hp edit-field-hp"  rows="5"></textarea>
                                  </div>
                                  <div class="col-lg-12">
                                      <label for="fullname">image</label></br>
                                      <input type="file" name="image" class="input-field-hp edit-field-hp">
                                  </div>

                                  <h6>SEO Tags</h6>

                                  <div class="col-lg-12">
                                      <label for="fullname">Meta Title</label></br>
                                      <input type="text" name="meta_title" class="input-field-hp edit-field-hp">
                                  </div>
                                  <div class="col-lg-12">
                                      <label for="fullname">Meta Description</label></br>
                                      <input type="textarea" name="meta_description" class="input-field-hp edit-field-hp">
                                  </div>
                                  <div class="col-lg-12">
                                      <label for="fullname">Meta Keyword</label></br>
                                      <input type="text" name="meta_keyword" class="input-field-hp edit-field-hp">
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col">
                                      <button type="submit" class="btn btn-hp-style">Add</button>
                                  </div>
                              </div>
                          </form>
                      </div>
                      <div class="col-lg-8">
                          <div class="col-lg-12">
            <div class="table-responsive py-4"> 
                <table class="table table-hover hp-table-style">
                  <thead class="thead-dark">
                    <tr class="table-heading-text">
                      <th scope="col">Sr. No</th>
                      <th scope="col">Image</th>
                      <th scope="col">Name</th>
                      <th scope="col">Slug</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody class="table-body-hp">
                    <?php 
                    $n = 1;
                    ?>
                    @foreach ($blog as $row)
                    <tr>
                       
                        <th scope="row">{{$n}} 
                            <?php 
                            $n ++;
                            ?>
                        </th>                            
                        <td><img src="{{(!empty($row->image)) ? url('assets/images/admin/blog/category/'.$row->image): url('assets/images/avtar.jpg')}}" alt="avtar" class="avtar"></td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->slug}}</td>


                        <td><a href="{{url('admin/edit-category/'.$row->id.'')}}" class="hp-border-btn">Edit</a>
                          <a href="{{url('admin/delete-category/'.$row->id.'')}}" class="hp-border-btn">Delete</a></td>
                       
                      </tr>
                    @endforeach
                    
                    
                    
                  </tbody>
                </table>
                </div>
        </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
</div>


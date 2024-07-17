
    <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>

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
                <div class="col-lg-12">
                    <div class="section-ineer-main">
                        <div class="row">
                            <div class="col-lg-12">
                                <form action="{{url('admin/update-category/'.$blogcategory->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row edit-form">
                                      <div class="col-lg-12">
                                        <h5>Edit Category</h5>
                                      </div>
                                        <div class="col-lg-12">
                                            <label for="fullname">Name</label></br>
                                            <input type="text" value="{{$blogcategory->name}}" name="name" class="input-field-hp edit-field-hp">
                                        </div>
                                        <div class="col-lg-12">
                                            <label for="fullname">Slug</label></br>
                                            <input type="text" value="{{$blogcategory->slug}}" name="slug" class="input-field-hp edit-field-hp">
                                        </div>
                                        <div class="col-lg-12">
                                            <label for="fullname">description</label></br>
                                            <input type="textarea" name="description" value="{{$blogcategory->description}}" class="input-field-hp edit-field-hp text-area-hp">
                                        </div>
                                        <div class="col-lg-12">
                                            <label for="fullname">image</label></br>
                                            <img src="{{(!empty($blogcategory->image)) ? url('assets/images/admin/blog/category/'.$blogcategory->image): url('assets/images/avtar.jpg')}}" alt="avtar" class="avtar">
                                            
                                            <input type="file" name="image" value="{{$blogcategory->image}}" class="input-field-hp edit-field-hp">
                                        </div>
      
                                        <h5 class="mt-4">SEO Tags</h5>
      
                                        <div class="col-lg-12">
                                            <label for="fullname">Meta Title</label></br>
                                            <input type="text" name="meta_title" value="{{$blogcategory->meta_title}}" class="input-field-hp edit-field-hp">
                                        </div>
                                        <div class="col-lg-12">
                                            <label for="fullname">Meta Description</label></br>
                                            <input type="textarea" name="meta_description" value="{{$blogcategory->meta_description}}" class="input-field-hp edit-field-hp">
                                        </div>
                                        <div class="col-lg-12">
                                            <label for="fullname">Meta Keyword</label></br>
                                            <input type="text" name="meta_keyword" value="{{$blogcategory->meta_keyword}}" class="input-field-hp edit-field-hp">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <button type="submit" class="btn btn-hp-style">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      </div>



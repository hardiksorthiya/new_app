
<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<div id="wrapper">
    @extends('layouts.admin.admin')
    @section('title', 'Create Post')
    @include('layouts.admin.inc.sidebar')
    
    <section id="content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-with-btn">
                    <h3 class="content-title">Add New Post</h3>
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
                         {{-- <form action="{{url('admin/update-category/'.$blogcategory->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT') --}}
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="right-side-dreate-post">
                                    <div class="col-lg-12">
                                        <label for="fullname">Name</label></br>
                                        <input type="text"  name="name" class="input-field-hp edit-field-hp">
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="fullname">Slug</label></br>
                                        <input type="text"  name="slug" class="input-field-hp edit-field-hp">
                                    </div>
                                    <div class="col-lg-12">
                                        
                                        <label for="fullname">Description</label></br>
                                        <textarea id="summernote" name="description" class="input-field-hp edit-field-hp text-area-hp" cols="30" rows="10"></textarea>
                                        <script>
                                            $(document).ready(function() {
                                                $('#summernote').summernote(
                                                    {
                                                        height: 500
                                                    }
                                                );
                                                
                                            });
                                          </script>
                                        {{-- <input type="textarea" name="description" class="input-field-hp edit-field-hp text-area-hp"> --}}
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        <div class="col-lg-3">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="category-box-hp">
                                        <label for="fullname">Categories</label></br>
                                        <div class="d-flex flex-column hp-cat-data">
                                            @foreach ($category as $cat)
                                            <div class="category-lable-hp my-2">
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" value="{{$cat->id}}">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">{{$cat->name}}</label>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="image-box-hp">
                                        <div class="image-section-profile">
                                            <label class="filelabel">
                                                <i class="fa fa-paperclip">
                                                </i>
                                                <span class="title">
                                                    Add Featured Image
                                                </span>
                                                <input class="FileUpload1" id="FileInput" name="image" type="file"/>
                                            </label>
                                        </div>                                       
                                    </div>
                                </div>
                                <h5 class="mt-4">SEO Tags</h5>
  
                                <div class="col-lg-12">
                                    <label for="fullname">Meta Title</label></br>
                                    <input type="text" name="meta_title"  class="input-field-hp edit-field-hp">
                                </div>
                                <div class="col-lg-12">
                                    <label for="fullname">Meta Description</label></br>
                                    <input type="textarea" name="meta_description"  class="input-field-hp edit-field-hp">
                                </div>
                                <div class="col-lg-12">
                                    <label for="fullname">Meta Keyword</label></br>
                                    <input type="text" name="meta_keyword"  class="input-field-hp edit-field-hp">
                                </div>
                            </div>
                        </div>
                    </form>















                        <div class="col-lg-12">
                            {{-- <form action="{{url('admin/update-category/'.$blogcategory->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT') --}}
                                <div class="row edit-form">
                                  
                                    
                                    
                                   
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



@extends('layouts.admin.admin')
@section('title', 'Edit Banner')
@section('content')
    <div class="row">
            <div class="col-lg-12">
                <div class="heading-with-btn">
                    <h3 class="content-title">@yield('title')</h3>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="section-ineer-main">
                    <form action="{{url('admin/banner/'.$banner->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="right-side-create-page">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="title">Title</label></br>
                                                <input type="text" name="title" value="{{$banner->title}}" class="input-field-hp edit-field-hp">
                                                @error('title')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="small_text">Small Text</label></br>
                                                <input type="text" name="small_text" value="{{$banner->small_text}}"  class="input-field-hp edit-field-hp">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="description">Description</label></br>
                                                <textarea name="description" cols="30" rows="3" class="input-field-hp edit-field-hp"> {{$banner->description}}" </textarea>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="background">Background Image</label></br>
                                                    <img src="{{ asset('uploads/images/banner/' .$banner->bg_image)  }}" alt="" class="edit-image-section">
                                                    <input type="file" name="bg_image" class="file-input">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="background">Main Image</label></br>
                                                    <img src="{{ asset('uploads/images/banner/' .$banner->main_image)  }}" alt="" class="edit-image-section">
                                                    <input type="file" name="main_image" class="file-input">
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-hp-style">Update</button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    
</div>
@endsection


@extends('layouts.admin.admin')
@section('title', 'Add New Banner')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="heading-with-btn">
                <h3 class="content-title">Add Banner</h3>
            </div> 
        </div>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        @endif
        <div class="col-lg-12">
            <div class="section-ineer-main page-design">
                <form action="/admin/banner" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="right-side-create-page">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="title">Title</label></br>
                                            <input type="text" name="title" class="input-field-hp edit-field-hp">
                                            @error('title')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="small_text">Small Text</label></br>
                                            <input type="text" name="small_text" class="input-field-hp edit-field-hp">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="description">Description</label></br>
                                            <input type="text" name="description" class="input-field-hp edit-field-hp">
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="background">Background Image</label></br>
                                                <input type="file" name="bg_image" class="file-input">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="background">Main Image</label></br>
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
                            <button type="submit" class="btn btn-hp-style">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


   
@endsection

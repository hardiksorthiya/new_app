@extends('layouts.admin.admin')
@section('title', 'Edit Page')
@section('content')
<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <div class="row">
        <div class="col-lg-12">
            <div class="heading-with-btn">
                <h3 class="content-title">Edit Page</h3>
            </div>
        </div>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        @endif
        <div class="col-lg-12">
            <div class="section-ineer-main page-design">
                <form action="{{url('admin/iconbox/'.$page->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="right-side-create-page">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="heading">Heading</label></br>
                                            <input type="text" value="{{$page->box_text}}" name="box_text" class="input-field-hp edit-field-hp">
                                            @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="description">Description</label></br>
                                            <textarea name="box_description" class="input-field-hp edit-field-hp" rows="3">{{$page->box_description}}</textarea>

                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="boxicon">Icon</label></br>
                                            <div class="avatar-upload inner-page-image one-image-page-sol">
                                                <div class="imageWrapper">
                                                    <img class="image"  src="{{ asset('uploads/icon/'.$page->box_image) }}">
                                                    <button class="file-upload ">
                                                        <input type="file" name="box_image" class="file-input">Choose
                                                        File
                                                    </button>
                                                </div>

                                                <div class="size-suggation"><small>(size: 60*60 px)</small>
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
                </form>
            </div>
        </div>
    </div>

    
<script>
  
 
$('.file-input').change(function(){
    var curElement = $('.image');
    console.log(curElement);
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        curElement.attr('src', e.target.result);
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
});



</script>
@endsection

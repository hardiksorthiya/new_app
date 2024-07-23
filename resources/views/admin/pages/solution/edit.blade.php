@extends('layouts.admin.admin')
@section('title', 'Edit Page')
@section('content')
<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<script src="https://bsite.net/savrajdutta/cdn/multi-select.js"></script>
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
                <form action="{{url('admin/solution/'.$page->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="right-side-create-page">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="pagename">Name</label></br>
                                            <input type="text" name="name" value="{{$page->name}}"
                                                class="input-field-hp edit-field-hp">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="slug">Slug</label></br>
                                            <input type="text" name="slug" value="{{$page->slug}}"
                                                class="input-field-hp edit-field-hp">
                                        </div>
                                    </div>
                                    <hr class="hr-line-hp">

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="PageTitle">Page title</label></br>
                                            <input type="text" name="titletext" value="{{$page->titletext}}"
                                                class="input-field-hp edit-field-hp">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="fullname">Description</label></br>
                                            <textarea id="summernote" name="description"
                                            class="input-field-hp edit-field-hp text-area-hp">{{$page->description}}</textarea>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="oneimage">Image One</label></br>
                                                <div class="avatar-upload inner-page-image one-image-page-sol">
                                                    <div class="imageWrapper">
                                                        <img class="image" src="{{'/assets/images/admin/'.$page->imageone}}">
                                                        <button class="file-upload ">
                                                            <input type="file"  value="{{$page->imageone}}" name="imageone" class="file-input">Choose File
                                                          </button>
                                                      </div>

                                                    <div class="size-suggation"><small>(size: 2000*20000 px)</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="imagesecond">Image Second</label></br>
                                                <div class="avatar-upload inner-page-image one-image-page-sol">
                                                    <div class="imageWrapper">
                                                        <img class="image2" src="{{'/assets/images/admin/'.$page->imagesecond}}">
                                                        <button class="file-upload">
                                                            <input type="file" class="file-input2" value="{{$page->imagesecond}}" name="imagesecond" id="imageUpload2"
                                                            accept=".png, .jpg, .jpeg, .webp, .svg"  class="file-input">Choose File
                                                          </button>
                                                      </div>

                                                    <div class="size-suggation"><small>(size: 2000*20000 px)</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="descriptiontwo">Description Little</label></br>
                                            <textarea id="summernotetwo" name="descriptiontwo"
                                            class="input-field-hp edit-field-hp text-area-hp">{{$page->descriptiontwo}}</textarea>

                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group sd-multiSelect">
                                            <label for="oneimage">Add icon Boxes</label></br>
                                            <select name="iconbox_id[]" multiple id="current-job-role" class="sd-CustomSelect">
                                               

                                                @foreach($icon_box as $i)
                                                @if(count($slected_iconbox)>0)
                                                <option value="{{$i->id}}" {{ in_array($i->id, $slected_iconbox) ? "selected" : '' }}>
                                                        {{$i->box_text}}
                                                    </option>
                                                    @else
                                                    <option value="{{$i->id}}">
                                                        {{$i->box_text}}
                                                    </option>
                                                    @endif
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>







                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="PageTitleSecond">Second title</label></br>
                                            <input type="text" name="titletextsecond" value="{{$page->titletextsecond}}"
                                                class="input-field-hp edit-field-hp">
                                        </div>

                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="fullname">Second Description</label></br>
                                            <textarea id="summernotethree" name="descriptionsecond"
                                            class="input-field-hp edit-field-hp text-area-hp">{{$page->descriptionsecond}}</textarea>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="row right-side-create-page">

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="breadcumimage">Breadcum Image</label></br>
                                        <div class="avatar-upload">
                                            <div class="avatar-edit">
                                                {{-- <img src="{{(!empty($page->breadcumimage)) ? url('assets/images/admin/'.$page->breadcumimage): url('assets/images/avtar.jpg')}}" alt="avtar" class="avtar"> --}}
                                                <input type='file' name="breadcumimage" id="imageUpload" value="{{$page->breadcumimage}}"
                                                    accept=".png, .jpg, .jpeg, .webp, .svg" />
                                                <label for="imageUpload"></label>
                                            </div>
                                            <div class="avatar-preview">
                                                <div id="imagePreview"
                                                    >
                                                <img src="{{(!empty($page->breadcumimage)) ? url('assets/images/admin/'.$page->breadcumimage): url('assets/images/avtar.jpg')}}" alt="avtar" class="avtar">

                                                </div>
                                            </div>
                                            <div class="size-suggation"><small>(size: 1920*510 px)</small></div>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="mt-4">SEO Tags</h5>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="fullname">Meta Title</label></br>
                                        <input type="text" name="meta_title" value="{{$page->meta_title}}"
                                            class="input-field-hp edit-field-hp">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="fullname">Meta Description</label></br>
                                        <textarea name="meta_description" class="input-field-hp edit-field-hp" rows="5">{{$page->meta_description}}</textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="fullname">Meta Keyword</label></br>
                                        <input type="text" name="meta_keyword"  value="{{$page->meta_keyword}}"
                                            class="input-field-hp edit-field-hp">
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
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 300
        });

    });
    $(document).ready(function() {
        $('#summernotetwo').summernote({
            height: 100
        });

    });
    $(document).ready(function() {
        $('#summernotethree').summernote({
            height: 200
        });

    });
    $('.file-input2').change(function(){
    var curElement = $('.image2');
    console.log(curElement);
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        curElement.attr('src', e.target.result);
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
});

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



    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function() {
        readURL(this);
    });
    $(document).ready(function() {
                                          $(".sd-CustomSelect").multipleSelect({
                                            selectAll: false,
                                            onOptgroupClick: function(view) {
                                              $(view).parents("label").addClass("selected-optgroup");
                                            }
                                          });
                                        });
</script>
@endsection

<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<div id="wrapper">
    @extends('layouts.admin.admin')
    @section('title', 'Add New Page')
    @include('layouts.admin.inc.sidebar')

    <section id="content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-with-btn">
                    <h3 class="content-title">Add New Page</h3>
                </div>
            </div>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            @endif
            <div class="col-lg-12">
                <div class="section-ineer-main page-design">
                    <form action="add-page" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="right-side-create-page">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="pagename">Name</label></br>
                                                <input type="text" name="name"
                                                    class="input-field-hp edit-field-hp">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="slug">Slug</label></br>
                                                <input type="text" name="slug"
                                                    class="input-field-hp edit-field-hp">
                                            </div>
                                        </div>
                                        <hr class="hr-line-hp">

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="PageTitle">Page title</label></br>
                                                <input type="text" name="titletext"
                                                    class="input-field-hp edit-field-hp">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="fullname">Description</label></br>
                                                <textarea id="summernote" name="description"
                                                class="input-field-hp edit-field-hp text-area-hp"></textarea>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="oneimage">Image One</label></br>
                                                    <div class="avatar-upload inner-page-image">
                                                        <div class="avatar-edit">
                                                            <input type='file' name="imageone" id="imageUploadone"/>
                                                            <label for="imageUpload"></label>
                                                        </div>
                                                        <div class="avatar-preview">
                                                            <div id="#imagePreviewone"
                                                                style="background-image: url({{ asset('assets/images/frontend/otherpages/breadcumb-bg.jpg') }});">
                                                            </div>
                                                        </div>
                                                        <div class="size-suggation"><small>(size: 2000*20000 px)</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="imagesecond">Image Second</label></br>
                                                    <div class="avatar-upload inner-page-image">
                                                        <div class="avatar-edit">
                                                            <input type='file' name="imagesecond" id="imageUpload2"
                                                                accept=".png, .jpg, .jpeg, .webp, .svg" />
                                                            <label for="imageUpload"></label>
                                                        </div>
                                                        <div class="avatar-preview">
                                                            <div id="imagePreview2"
                                                                style="background-image: url({{ asset('assets/images/frontend/otherpages/breadcumb-bg.jp') }});">
                                                            </div>
                                                        </div>
                                                        <div class="size-suggation"><small>(size: 2000*2000 px)</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="descriptiontwo">Description Little</label></br>
                                                <textarea id="summernotetwo" name="descriptiontwo"
                                                class="input-field-hp edit-field-hp text-area-hp"></textarea>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="PageTitleSecond">Second title</label></br>
                                                <input type="text" name="titletextsecond"
                                                    class="input-field-hp edit-field-hp">
                                            </div>

                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="fullname">Second Description</label></br>
                                                <textarea id="summernotethree" name="descriptionsecond"
                                                class="input-field-hp edit-field-hp text-area-hp"></textarea>
                                                
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
                                                    <input type='file' name="breadcumimage" id="imageUpload"
                                                        accept=".png, .jpg, .jpeg, .webp, .svg" />
                                                    <label for="imageUpload"></label>
                                                </div>
                                                <div class="avatar-preview">
                                                    <div id="imagePreview"
                                                        style="background-image: url({{ asset('assets/images/frontend/otherpages/breadcumb-bg.jpg') }});">
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
                                            <input type="text" name="meta_title"
                                                class="input-field-hp edit-field-hp">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="fullname">Meta Description</label></br>
                                            <textarea name="meta_description" class="input-field-hp edit-field-hp" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="fullname">Meta Keyword</label></br>
                                            <input type="text" name="meta_keyword"
                                                class="input-field-hp edit-field-hp">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <button type="submit" class="btn btn-hp-style">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
</div>

<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 500
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
</script>
<script>
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


  
</script>

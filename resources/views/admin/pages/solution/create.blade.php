@extends('layouts.admin.admin')
@section('title', 'Add New Page')
@section('content')
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
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
                <form action="/admin/solution" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="right-side-create-page">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="pagename">Page Name</label></br>
                                            <input type="text" name="name" class="input-field-hp edit-field-hp">
                                            @error('name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="slug">Slug</label></br>
                                            <input type="text" name="slug" class="input-field-hp edit-field-hp">
                                        </div>
                                    </div>
                                    <hr class="hr-line-hp">

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="PageTitle">First Title</label></br>
                                            <input type="text" name="titletext" class="input-field-hp edit-field-hp">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="fullname">Description</label></br>
                                            <textarea id="summernote" name="description" class="input-field-hp edit-field-hp text-area-hp"></textarea>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="oneimage">Image One</label></br>
                                                <div class="avatar-upload inner-page-image one-image-page-sol">
                                                    <div class="imageWrapper">
                                                        <img class="image" src="http://via.placeholder.com/700x500">
                                                        <button class="file-upload ">
                                                            <input type="file" name="imageone" class="file-input">Choose
                                                            File
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
                                                        <img class="image2" src="http://via.placeholder.com/700x500">
                                                        <button class="file-upload">
                                                            <input type="file" class="file-input2" name="imagesecond"
                                                                id="imageUpload2" accept=".png, .jpg, .jpeg, .webp, .svg"
                                                                class="file-input">Choose File
                                                        </button>
                                                    </div>

                                                    <div class="size-suggation"><small>(size: 2000*20000 px)</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    {{-- icon box section --}}
                                    <div class="d-flex">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="oneimage">Add icon Boxes</label></br>
                                                {{-- <form method="post" action="submit.php"> --}}
                                                <!-- Group of input fields -->
                                                <div class="form-group fieldGroup">
                                                    <div class="input-group mb-3">
                                                        <input type="hidden" name="solutionpages_id">
                                                        <input type="file" name="image_box" class="form-control" />
                                                        <input type="text" name="box_text" class="form-control"
                                                            placeholder="Box Title" />
                                                        <input type="textarea" name="box_description" class="form-control"
                                                            placeholder="Box Description" />
                                                        <span class="input-group-text">
                                                            <a href="javascript:void(0);" class="btn btn-success addMore"><i
                                                                    class="custicon plus"></i> Add</a>
                                                        </span>
                                                    </div>
                                                </div>

                                                <!--Submit button -->
                                                {{-- <input type="submit" name="submit" class="btn btn-primary" value="Submit"/> --}}
                                                {{-- </form> --}}
                                                <div class="form-group fieldGroupCopy" style="display: none;">
                                                    <div class="input-group mb-3">
                                                        <input type="text" name="first_name[]" class="form-control"
                                                            placeholder="First Name" />
                                                        <input type="text" name="last_name[]" class="form-control"
                                                            placeholder="Last Name" />
                                                        <input type="text" name="email[]" class="form-control"
                                                            placeholder="Email address" />
                                                        <span class="input-group-text">
                                                            <a href="javascript:void(0)" class="btn btn-danger remove"><i
                                                                    class="custicon cross"></i> Remove</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>






                                    {{-- second --}}
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="descriptiontwo">Description Little</label></br>
                                            <textarea id="summernotetwo" name="descriptiontwo" class="input-field-hp edit-field-hp text-area-hp"></textarea>

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
                                            <textarea id="summernotethree" name="descriptionsecond" class="input-field-hp edit-field-hp text-area-hp"></textarea>

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
                                        <input type="text" name="meta_title" class="input-field-hp edit-field-hp">
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
                                        <input type="text" name="meta_keyword" class="input-field-hp edit-field-hp">
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
        $('.file-input2').change(function() {
            var curElement = $('.image2');
            console.log(curElement);
            var reader = new FileReader();

            reader.onload = function(e) {
                // get loaded data and render thumbnail.
                curElement.attr('src', e.target.result);
            };

            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        });

        $('.file-input').change(function() {
            var curElement = $('.image');
            console.log(curElement);
            var reader = new FileReader();

            reader.onload = function(e) {
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
            // Maximum number of groups can be added
            var maxGroup = 10;

            // Add more group of input fields
            $(".addMore").click(function() {
                if ($('body').find('.fieldGroup').length < maxGroup) {
                    var fieldHTML = '<div class="form-group fieldGroup">' + $(".fieldGroupCopy").html() +
                        '</div>';
                    $('body').find('.fieldGroup:last').after(fieldHTML);
                } else {
                    alert('Maximum ' + maxGroup + ' groups are allowed.');
                }
            });

            // Remove fields group
            $("body").on("click", ".remove", function() {
                $(this).parents(".fieldGroup").remove();
            });
        });
    </script>
@endsection

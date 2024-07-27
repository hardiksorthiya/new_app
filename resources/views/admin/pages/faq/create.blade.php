@extends('layouts.admin.admin')
@section('title', 'Add FAQ')
@section('content')
<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<div class="row">
    <div class="col-lg-12">
        <div class="heading-with-btn">
            <h3 class="content-title">Add FAQ</h3>
        </div>
    </div>
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <div>{{ $error }}</div>
    @endforeach
    @endif
    <div class="col-lg-12">
        <div class="section-ineer-main page-design">
            <form action="/admin/faq/create" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group sd-multiSelec">
                                    <label for="oneimage">Choose Solution Pages</label></br>
                                    <select name="solution_id" multiple id="current-job-role" class="sd-CustomSelect">
                                        @foreach ($solutionpages as $i)
                                        <option value="{{$i->id}}">{{$i->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label for="description">Question</label></br>
                                    <textarea name="question" class="input-field-hp edit-field-hp" rows="3"></textarea>

                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label for="description">Answer</label></br>
                                    <textarea name="answer" class="input-field-hp edit-field-hp" rows="3"></textarea>

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


    $('.file-input').change(function () {
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
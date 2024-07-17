<div id="wrapper">
    @extends('layouts.admin.admin')
    @section('title', 'Edit')
    @include('layouts.admin.inc.sidebar')
    <section id="content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-with-btn">
                    <h3 class="content-title">@yield('title')</h3>
                </div>
            </div>
        </div>
    </section>
<section class="background-section">
    <div class="container">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div>{{$error}}</div>
            @endforeach
            @endif
        <form action="edit-setting" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
               
                <div class="col-lg-6">
                    <label for="image profile">Logo Image</label></br>
                    <input type="file" name="logo" value="{{$setting->logo}}"  class="input-field-hp">
                </div>
                
                
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-hp-style">Add</button>
                </div>
            </div>
        </form>
    </div>
</section>
</div>


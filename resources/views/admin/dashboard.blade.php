
    @extends('layouts.admin.admin')
    @section('Welcometitle', 'Welcome')
    @section('title', 'Admin Dashboard')

@section('content')
<div class="row">
  <div class="col-lg-12">
      <div class="heading-with-btn">
          <h3 class="content-title">@yield('title')</h3>
      </div>
  </div>
</div>

@endsection
    


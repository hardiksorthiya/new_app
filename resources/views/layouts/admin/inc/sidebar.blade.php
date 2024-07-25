
<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <img src="{{asset('assets/images/logo-ipsum1.png')}}" alt="Site Logo" class="site_logo"> 
    </div>
    <ul class="sidebar-nav">
      <li class="{{Request::is('admin/dashboard') ? 'active':''}}">
        <a href="{{url('admin/dashboard')}}"><i class="fa fa-home"></i>Dashboard</a>
      </li>
      <li class="{{Request::is('admin/user') ? 'active':''}}">
        <a href="{{url('admin/user')}}"><i class="fa fa-user"></i>User</a>
      </li>
      {{-- <li>
        <a href="post"><i class="fa fa-plug"></i>Post</a>
        <ul class="drop-down-hp">
          <li class="drop-down-item-hp"><a href="post"><i class="fa fa-plug"></i>All Post</a></li>
          <li class="drop-down-item-hp"><a href="create-post"><i class="fa fa-plug"></i>Add Post</a></li>
          <li class="drop-down-item-hp"><a href="category"><i class="fa fa-plug"></i>Categories</a></li>
        </ul>
      </li> --}}
      {{-- <li>
        <a href="pages"><i class="fa fa-user"></i>Pages</a>
      </li> --}}
      <li class="{{Request::is('admin/solution') ? 'active':''}}">
        <a href="{{url('admin/solution')}}"><i class="fa fa-user"></i>Solution</a>
      </li>
      <li class="{{Request::is('admin/iconbox') ? 'active':''}}">
        <a href="{{url('admin/iconbox')}}"><i class="fa fa-user"></i>Icon Box</a>
      </li>
      <li class="{{Request::is('admin/settings') ? 'active':''}}">
        <a href="{{url('admin/settings')}}"><i class="fa fa-user"></i>Setting</a>
      </li> 
    </ul>
  </aside>
  

  <div id="navbar-wrapper">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="#" class="navbar-brand" id="sidebar-toggle"><i class="fa fa-bars"></i></a>
        </div>
        <div class="admin_profile">
          <button class="btn btn-toggle align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
            <img src="{{(!empty($row->profile_image)) ? url('assets/images/admin'.$row->profile_image): url('assets/images/avtar.jpg')}}" alt="avtar" class="avtar">
          </button>
          <div class="collapse hp_collap" id="dashboard-collapse">
              <ul class="dropdown-avtar-ul">
                <li><a href="#">Profile</a></li>
                <li><a href="#">Password Change</a></li>
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form></li>
              </ul>
          </div>
      </div>
      </div>
    </nav>
  </div>

   
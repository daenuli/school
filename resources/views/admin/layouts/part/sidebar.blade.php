<div class="sidebar" data-color="rose" data-background-color="black" data-image="{{asset('material/assets/img/sidebar-1.jpg')}}">
<!--
Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

Tip 2: you can also add an image using data-image tag
-->
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">CT</a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">Creative Tim</a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{asset('material/assets/img/faces/avatar.jpg')}}" />
            </div>
            <div class="user-info">
                <a data-toggle="collapse" href="#collapseExample" class="username">
                    <span>Tania Andrew<b class="caret"></b></span>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini"> MP </span>
                                <span class="sidebar-normal"> My Profile </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini"> EP </span>
                                <span class="sidebar-normal"> Edit Profile </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini"> S </span>
                                <span class="sidebar-normal"> Settings </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{url('home')}}">
                    <i class="material-icons">dashboard</i>
                    <p> Dashboard </p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('student') || Request::is('student/*')? 'active' : '' }}">
              <a class="nav-link" data-toggle="collapse" href="#mapsExamples">
                <i class="material-icons">emoji_people</i>
                <p> Santri
                  <b class="caret"></b>
                </p>
              </a>
              <div class="collapse {{ Request::is('student') || Request::is('student/*')? 'show' : '' }}" id="mapsExamples">
                <ul class="nav">
                  <li class="nav-item {{ Request::is('student/create') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('student.create') }}">
                      <span class="sidebar-mini"> TS </span>
                      <span class="sidebar-normal"> Tambah Santri </span>
                    </a>
                  </li>
                  <li class="nav-item {{ Request::is('student') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('student.index') }}">
                      <span class="sidebar-mini"> DS </span>
                      <span class="sidebar-normal"> Daftar Santri </span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item ">
              <a class="nav-link" data-toggle="collapse" href="#mapsExamples">
                <i class="material-icons">people</i>
                <p> Users
                  <b class="caret"></b>
                </p>
              </a>
              <div class="collapse" id="mapsExamples">
                <ul class="nav">
                  <li class="nav-item ">
                    <a class="nav-link" href="{{url('users/create')}}">
                      <span class="sidebar-mini"> C </span>
                      <span class="sidebar-normal"> Tambah </span>
                    </a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="{{url('users')}}">
                      <span class="sidebar-mini"> L </span>
                      <span class="sidebar-normal"> List </span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
        </ul>
    </div>
</div>

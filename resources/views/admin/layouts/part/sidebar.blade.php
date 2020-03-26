<div class="sidebar" data-color="rose" data-background-color="black" data-image="{{asset('material/assets/img/sidebar-1.jpg')}}">
<!--
Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

Tip 2: you can also add an image using data-image tag
-->
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini"></a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal"><b>Ar</b> Rabwah</a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                {{-- <img src="{{asset('material/assets/img/faces/avatar.jpg')}}" /> --}}
                @auth
                  @if(auth()->user()->avatar)
                    <img src="{{Storage::url(auth()->user()->avatar)}}">
                  @else
                    <img src="{{Avatar::create(auth()->user()->name)->toBase64()}}">
                  @endif
                @endauth
            </div>
            <div class="user-info">
                <a data-toggle="collapse" href="#collapseExample" class="username">
                    <span>{{ Auth::user()->name }}<b class="caret"></b></span>
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
            <li class="nav-item {{ Request::is('home') ? 'active' : ''}}">
                <a class="nav-link" href="{{url('home')}}">
                    <i class="material-icons">dashboard</i>
                    <p> Dashboard </p>
                </a>
            </li>
            @can ('manage-hafalans')
                <li class="nav-item {{ Request::is('hafalan') || Request::is('hafalan/*')? 'active' : '' }}">
                  <a class="nav-link" data-toggle="collapse" href="#collapseHafalan">
                    <i class="material-icons">assessment</i>
                    <p> Hafalan Tahfizh
                      <b class="caret"></b>
                    </p>
                  </a>
                  <div class="collapse {{ Request::is('hafalan') || Request::is('hafalan/*')? 'show' : '' }}" id="collapseHafalan">
                    <ul class="nav">
                      <li class="nav-item {{ Request::is('hafalan/create') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('hafalan.create') }}">
                          <span class="sidebar-mini"> TH </span>
                          <span class="sidebar-normal"> Tambah Hafalan </span>
                        </a>
                      </li>
                      <li class="nav-item {{ Request::is('hafalan') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('hafalan.index') }}">
                          <span class="sidebar-mini"> DH </span>
                          <span class="sidebar-normal"> Data Hafalan </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
            @endcan
            @can ('manage-santris')
                <li class="nav-item {{ Request::is('student') || Request::is('student/*') || Request::is('parent/*') || Request::is('illness/*') || Request::is('school/*') ? 'active' : '' }}">
                {{-- <li class="nav-item {{ Request::is('student') || Request::is('student/*')? 'active' : '' }}"> --}}
                  <a class="nav-link" data-toggle="collapse" href="#mapsExamples">
                    <i class="material-icons">emoji_people</i>
                    <p> Santri
                      <b class="caret"></b>
                    </p>
                  </a>
                  <div class="collapse {{ Request::is('student') || Request::is('student/*') || Request::is('parent/*') || Request::is('illness/*') || Request::is('school/*') ? 'show' : '' }}" id="mapsExamples">
                    <ul class="nav">
                      @can ('button-santris')
                          <li class="nav-item {{ Request::is('student/create') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('student.create') }}">
                              <span class="sidebar-mini"> TS </span>
                              <span class="sidebar-normal"> Tambah Santri </span>
                            </a>
                          </li>
                      @endcan
                      <li class="nav-item {{ Request::is('student') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('student.index') }}">
                          <span class="sidebar-mini"> DS </span>
                          <span class="sidebar-normal"> Daftar Santri </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
            @endcan
            @can ('manage-spps')
                <li class="nav-item {{ Request::is('spp') || Request::is('spp/*')? 'active' : '' }}">
                  <a class="nav-link" data-toggle="collapse" href="#spp">
                    <i class="material-icons">credit_card</i>
                    <p> Kategori SPP
                      <b class="caret"></b>
                    </p>
                  </a>
                  <div class="collapse {{ Request::is('spp') || Request::is('spp/*')? 'show' : '' }}" id="spp">
                    <ul class="nav">
                      <li class="nav-item {{ Request::is('spp/create') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('spp.create') }}">
                          <span class="sidebar-mini"> TS </span>
                          <span class="sidebar-normal"> Tambah SPP </span>
                        </a>
                      </li>
                      <li class="nav-item {{ Request::is('spp') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('spp.index') }}">
                          <span class="sidebar-mini"> DS </span>
                          <span class="sidebar-normal"> Daftar SPP </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
            @endcan
            @can ('manage-kelas')
                <li class="nav-item {{ Request::is('grade') || Request::is('grade/*')? 'active' : '' }}">
                  <a class="nav-link" data-toggle="collapse" href="#class">
                    <i class="material-icons">account_balance</i>
                    <p> Kelas
                      <b class="caret"></b>
                    </p>
                  </a>
                  <div class="collapse {{ Request::is('grade') || Request::is('grade/*')? 'show' : '' }}" id="class">
                    <ul class="nav">
                      <li class="nav-item {{ Request::is('grade/create') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('grade.create') }}">
                          <span class="sidebar-mini"> TK </span>
                          <span class="sidebar-normal"> Tambah Kelas </span>
                        </a>
                      </li>
                      <li class="nav-item {{ Request::is('grade') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('grade.index') }}">
                          <span class="sidebar-mini"> DK </span>
                          <span class="sidebar-normal"> Daftar Kelas </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
            @endcan
            @can ('manage-gurus')
                <li class="nav-item {{ Request::is('teacher') || Request::is('teacher/*')? 'active' : '' }}">
                  <a class="nav-link" data-toggle="collapse" href="#teacher">
                    <i class="material-icons">person</i>
                    <p> Guru
                      <b class="caret"></b>
                    </p>
                  </a>
                  <div class="collapse {{ Request::is('teacher') || Request::is('teacher/*')? 'show' : '' }}" id="teacher">
                    <ul class="nav">
                      <li class="nav-item {{ Request::is('teacher/create') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('teacher.create') }}">
                          <span class="sidebar-mini"> TG </span>
                          <span class="sidebar-normal"> Tambah Guru </span>
                        </a>
                      </li>
                      <li class="nav-item {{ Request::is('teacher') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('teacher.index') }}">
                          <span class="sidebar-mini"> DG </span>
                          <span class="sidebar-normal"> Daftar Guru </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
            @endcan
            @can ('manage-donaturs')
            <li class="nav-item {{ Request::is('donatur') || Request::is('donatur/*')? 'active' : '' }}">
              <a class="nav-link" data-toggle="collapse" href="#donatur">
                <i class="material-icons">how_to_vote</i>
                <p> Donatur
                  <b class="caret"></b>
                </p>
              </a>
              <div class="collapse {{ Request::is('donatur') || Request::is('donatur/*')? 'show' : '' }}" id="donatur">
                <ul class="nav">
                  <li class="nav-item {{ Request::is('donatur/create') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('donatur.create') }}">
                      <span class="sidebar-mini"> TG </span>
                      <span class="sidebar-normal"> Tambah Donatur </span>
                    </a>
                  </li>
                  <li class="nav-item {{ Request::is('donatur') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('donatur.index') }}">
                      <span class="sidebar-mini"> DG </span>
                      <span class="sidebar-normal"> Daftar Donatur </span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            @endcan
            @can ('manage-users')
            <li class="nav-item {{ Request::is('users') || Request::is('users/*') ? 'active' : ''}}">
                <a class="nav-link" href="{{ route('users.index') }}">
                    <i class="material-icons">people</i>
                    <p> Users </p>
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
            @endcan
        </ul>
    </div>
</div>

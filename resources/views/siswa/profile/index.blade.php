@extends('layouts.siswa.master')
@section('title', isset($pageTitle) ? $pageTitle : 'Profil')
<!-- App Header -->
    @section('pageTitle')
        Profile
    @stop
    @section('back')
        <div class="left">
            <a href="javascript:;" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
    @endsection
<!-- App Header -->
@section('content')
    <div class="section mt-2">
        <div class="card mb-3">
            <div class="card-body text-center">
                <img src="{{asset('siswa/assets/img/sample/avatar/avatar4.jpg')}}" alt="Christina Mason" class="img-fluid rounded-circle mb-2" width="128"
                    height="128" />
                <h5 class="card-title mb-0">{{ auth()->user()->siswa->nama_siswa }}</h5>
                <div class="text-muted mb-2">{{ auth()->user()->siswa->jurusan->nama_jurusan }}</div>
            </div>
            <hr class="my-0" />
            <div class="listview-title mt-2">Navigation</div>
            <ul class="listview image-listview flush transparent">
                <li>
                    <div class="item">
                        <div class="icon-box bg-primary">
                            <ion-icon name="moon-outline"></ion-icon>
                        </div>
                        <div class="in">
                            Dark Mode
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input dark-mode-switch" id="darkmodesidebar">
                                <label class="custom-control-label" for="darkmodesidebar"></label>
                            </div>
                        </div>
                    </div>
                </li>
                <br />
                <hr />
                <li>
                    <a href="javascript:void(0);"
                    onclick="formConfirmationId('#form-logout','Logout Dari Aplikasi?')" class="item">
                    <div class="icon-box bg-danger">
                        <ion-icon name="log-out-outline"></ion-icon>
                    </div>
                        <div class="in text-danger">
                            Logout
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <form action="{{ route('logout') }}" method="post" id="form-logout">
        @csrf
    </form>
@endsection

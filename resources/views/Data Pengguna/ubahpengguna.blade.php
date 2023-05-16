@extends('layout.layout')

@section('content')

<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Ubah Data Pengguna</h1>
                    </div>

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-solid fa-eclipse"></i>Ubah Data  Pengguna</h6>
                                </div>

                                <div class="m-3">
                                    <div class="row">
                                        <div class="col-6">
                                @foreach($user as $u)
                                <form class="text-dark" action="/simpanubahpengguna/{{$u->user_id}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                    <label class=""><b>Nama</b></label>
                                    <input class="form-control" type="text" name="username" placeholder="Masukkan Nama" value="{{$u -> username}}">
                                    @error('username')
                                    <label class="text-danger">{{$message}}</label>
                                    @enderror
                                    </div>

                                    <div class="form-group">
                                    <label class=""><b>Password</b></label>
                                    <input class="form-control" type="password" name="password" placeholder="" value="">
                                    <i class="text-danger">Abaikan Password Jika Tidak Ada Perubahan!</i>
                                    @error('password')
                                    <label class="text-danger">{{$message}}</label>
                                    @enderror
                                    </div>

                                    <div class="form-group">
                                    <label class=""><b>Level</b></label>
                                    <select class="form-control" name="level">
                                        <option hidden selected value="{{$u->level}}">{{$u->level}}</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Petugas">Petugas</option>
                                    </select>
                                    @error('level')
                                    <label class="text-danger">{{$message}}</label>
                                    @enderror
                                    </div>
                                     
                                    <input type="submit" value="Simpan" class="btn btn-primary mt-4 mb-2">
                                    <a href="/datapengguna" class="btn btn-secondary mt-4 mb-2">Kembali</a>

                                </form>
                                @endforeach
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <!-- @include('sweetalert::alert') -->

                <!-- /.container-fluid -->

@endsection
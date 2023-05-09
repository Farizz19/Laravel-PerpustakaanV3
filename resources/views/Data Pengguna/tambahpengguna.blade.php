@extends('layout.layout')

@section('content')

<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tambah Pengguna Baru</h1>
                    </div>

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-solid fa-eclipse"></i>Tambah Data  Pengguna</h6>
                                </div>

                                <div class="m-3">
                                    <div class="row">
                                        <div class="col-6">
                                <form class="text-dark" action="/userstore" method="POST">
                                    @csrf
                                    <label class=""><b>Nama</b></label>
                                    <input class="form-control" type="text" name="username" placeholder="Masukkan Nama">

                                    <label class=""><b>Password</b></label>
                                    <input class="form-control" type="password" name="password" placeholder="Masukkan Password">

                                    <label class=""><b>Level</b></label>
                                    <select class="form-control" name="level">
                                        <option hidden>Pilih Level</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Petugas">Petugas</option>
                                    </select>

                                    <input type="submit" value="Simpan" href="" class="btn btn-primary mt-4 mb-2">
                                    <a href="/datapengguna" class="btn btn-secondary mt-4 mb-2">Kembali</a>

                                </form>

                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

@endsection
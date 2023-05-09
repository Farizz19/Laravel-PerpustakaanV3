@extends('layout.layout')

@section('content')

<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Selamat Datang Di Perpustakaan V3</h1>
                    </div>

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-solid fa-eclipse"></i> Data  Pengguna</h6>
                                </div>

                                <div>
                                <a href="/tambahpengguna" class="btn btn-primary m-3"><b>Tambah Data Pengguna</b></a>
                                </div>

                                <thead>
                                <table class="m-3">

                                <tr class="text-center text-dark">
                                    <hr>
                                    <th>No</th>
                                    <th>Nama Pengguna</th>
                                    <th>Level</th>  
                                    <th>Aksi</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr class="text-center">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a href="#" class="btn btn-success">Ubah</a>
                                        <a href="#" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                                </tbody>

                                </table>

                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

@endsection
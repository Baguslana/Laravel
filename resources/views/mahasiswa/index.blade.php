@extends('layout/main');

@section('title', 'Daftar Mahasiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Daftar Mahasiswa</h1>

                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Bagus Nurlana</td>
                        <td>11800827</td>
                        <td>bagusnurlana@gmail.com</td>
                        <td>Rekayasa Perangkat Lunak</td>
                        <td>
                            <a href="" class="btn btn-success">edit</a>
                        </td>
                        <td>
                            <a href="" class="btn btn-danger">delete</a>
                        </td>
                        </tr>
                        
                        <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>@fat</td>
                        </tr>
                        
                        <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>

                        <td>@twitter</td>
                        </tr>
                    </tbody>
                    </table>
            </div>
        </div>
    </div>
@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pegawai - Cendana Snack</title>
    <link rel="stylesheet" href="css/ins-up-del.css">
</head>
@include('navbar')
<body >
<div class="container">
        <h1>PEGAWAI</h1>
        <hr>
        <div class="row">
            <div class="col" style="margin-bottom: 15px;"">
                <div class="card">
                    <div class="card-body" style="background-color: #EBEBEB;">
                        <h5 class="text-center card-title fw-bold">Detail</h5>
                        <table class="table table-striped table-hover border rounded">
                            <thead>
                                <tr>
                                    <th scope="col">ID Pegawai</th>
                                    <th scope="col">Nama Pegawai</th>
                                    <th scope="col">Job Pegawai</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data_pegawai as $listpegawai)
                                    <tr>
                                        <th scope="row">{{$listpegawai->PEGAWAI_ID}}</th>
                                        <td>{{$listpegawai->NAMA_PEGAWAI}}</td>
                                        <td>{{$listpegawai->JOB_PEGAWAI}}</td>
                                        <form action="/updatepegawai" method="POST">
                                        @csrf
                                        <input type="hidden" name="id_pegawai" value="{{$listpegawai->PEGAWAI_ID}}">
                                        <td><input type="submit" value="Update"></td>
                                        </form>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body" style="height: 180px; background-color: #EBEBEB;">
                        <a href="/insertpegawai" style="text-decoration: none; color: black;"><button type="button" class="block">Insert</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>

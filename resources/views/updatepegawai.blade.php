<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Pegawai - Cendana Snack</title>
</head>
@include('navbar')
<body>
    <div class="container">
        <div class="d-flex justify-content-between mb-3 mt-2">
            <h1 class="fw-bold">Update Pegawai</h1>
            <button type="button" class="btn border-end border-bottom border-3 rounded fw-bold mt-2 shadow bg-body" style="background-color:green; color: red;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Delete
            </button>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <form action="/deletepegawai" method="POST">
                @csrf
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hapus Pegawai ?</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Yakin Menghapus Pegawai ?
                            <input type="hidden" name="id_pegawai_delete" value="{{$data_pegawai[0]->PEGAWAI_ID}}">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="row">
            <form action="/updatedatapegawai" method="POST">
                @csrf
                <div class="col">
                    <div class="card">
                        <div class="card-body" style="height:550px; background-color: #EBEBEB;">
                            <div class="row">
                                <label class="col-6 col-sm-3" for="namapegawai"><h5>Nama Pegawai:</h5></label>
                                <div class="col-4">
                                    <input type="hidden" name="id_pegawai" value="{{$data_pegawai[0]->PEGAWAI_ID}}">
                                    <input class="form-control" type="text" id="namapegawai" name="namapegawai" required value="{{$data_pegawai[0]->NAMA_PEGAWAI}}">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label class="col-6 col-sm-3" for="jobpegawai"><h5>Job Pegawai:</h5></label>
                                <div class="col-4">
                                    <input class="form-control" type="text" id="jobpegawai" name="jobpegawai" required value="{{$data_pegawai[0]->JOB_PEGAWAI}}">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label class="col-6 col-sm-3" for="passpegawai"><h5>Password Pegawai:</h5></label>
                                <div class="col-4">
                                    <input class="form-control" type="password" name="passpegawai" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label class="col-6 col-sm-3" for="passbarupegawai"><h5>Password Baru:</h5></label>
                                <div class="col-4">
                                    <input class="form-control" type="password" id="passbarupegawai" name="passbarupegawai">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label class="col-6 col-sm-3" for="passkonbarupegawai"><h5>Konfirmasi Password Baru:</h5></label>
                                <div class="col-4">
                                    <input class="form-control" type="password" id="passkonbarupegawai" name="passkonbarupegawai">
                                </div>
                            </div>
                            <br>
                            <div class="row position-absolute bottom-0 start-50 translate-middle-x mb-4">
                                <div class="col">
                                    <a href="/pegawai"></a><div class="btn border-end border-bottom border-3 rounded fw-bold shadow bg-body" style="background-color:white; color: grey;">Cancel</div></a>
                                </div>
                                <div class="col">
                                    <input class="btn border-end border-bottom border-3 rounded fw-bold shadow bg-body" style="background-color:white; color: #1672EC;" value="Update" type="submit">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

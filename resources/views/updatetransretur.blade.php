<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Transaksi Retur - Cendana Snack</title>
    <style>
        .btn span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
        }

        .btn span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
        }

        .btn:hover span {
        padding-right: 25px;
        }

        .btn:hover span:after {
        opacity: 1;
        right: 0;
        }
    </style>
</head>
<body>
    @include('navbar')
    <div class="container">
        <h1 class="fw-bold">Update Transaksi Retur</h1>
        <div class="col">
            <div class="card">
                <div class="card-body" style="height: 500px; background-color: #EBEBEB;">
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <div class="btn border-end border-bottom border-3 rounded fw-bold shadow bg-body" style="background-color:white; color: grey;">Cancel</div>
            </div>
            <div class="col-1" style="display: flex;justify-content: flex-end;">
                <div class="btn border-end border-bottom border-3 rounded fw-bold shadow bg-body" style="background-color:white; color: #1672EC;"><span>Next</span></div>
            </div>
        </div>
    </div>
</body>
</html>

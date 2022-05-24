<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produk Jadi - Cendana Snack</title>
    <style>
            .block{
        display: block;
        width: 100%;
        border-radius: 10px;
        background-color: white;
        color: black;
        padding: 14px 28px;
        font-size: 24px;
        cursor: pointer;
        text-align: center;
        margin-top: 17%;
        }
        .block:hover {
            background-color: #ddd;
            color: black;
        }
    </style>
</head>
<body>
    @include('navbar')
    <div class="container">
        <h1>Produk Jadi</h1>
        <hr>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body" style="height: 500px; background-color: #EBEBEB;">
                        <h5 class="text-center card-title fw-bold">Detail</h5>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body" style="height: 500px; background-color: #EBEBEB;">
                        <button type="button" class="block">Insert</button>
                        <button type="button" class="block">Update</button>
                        <button type="button" class="block">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

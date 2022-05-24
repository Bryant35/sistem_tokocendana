<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaksi Penjualan - Toko Cendana</title>
</head>
<body>
    @include('navbar')
    <div class="container">
        <h1>Transaksi Penjualan</h1>
        <div class="row">
            <div class="col-8">
                <table class="table table-hover border rounded">
                    <thead>
                        <tr>
                            <th scope="col">ID Customer</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Harga Jual</th>
                            <th scope="col">Jumlah Produk</th>
                            <th scope="col">Total Jual</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data_penjualan as $listjual)
                        <tr>
                            <th scope="row">{{$listjual->ID_Customer}}</th>
                            <td>{{$listjual->Nama_Produk}}</td>
                            <td>{{$listjual->Harga_Jual}}</td>
                            <td>{{$listjual->Jumlah_Produk}}</td>
                            <td>{{$listjual->Total_Jual}}</td>
                        </tr>
                        @endforeach
                        {{-- <tr>
                            <th scope="row">TJ0000002</th>
                            <td>TR0000002</td>
                            <td>CHY0001</td>
                            <td>Keciput Bulat 300gr, Keju Stick 200gr</td>
                            <td>6</td>
                            <td>69000</td>
                        </tr>
                        <tr>
                            <th scope="row">TJ0000003</th>
                            <td>TR0000003</td>
                            <td>CRS0001</td>
                            <td>Koro Keju 300gr</td>
                            <td>2</td>
                            <td>28000</td>
                        </tr> --}}
                    </tbody>
                </table>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body" style=" height: 275px;">
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <a href="#" class="btn btn-primary d-flex justify-content-center mt-3"><div class="mx-2">Insert</div></a>
                            <a href="#" class="btn btn-primary d-flex justify-content-center mt-3"><div class="mx-2">Update</div></a>
                            <a href="#" class="btn btn-primary d-flex justify-content-center mt-3"><div class="mx-2">Delete</div></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        $q = intval($_GET['q']);

        $con = mysqli_connect('localhost','peter','abc123','my_db');
        if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
        }

        mysqli_select_db($con,"ajax_demo");
        $sql="SELECT * FROM user WHERE id = '".$q."'";
        $result = mysqli_query($con,$sql);

        echo "<table>
        <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Age</th>
        <th>Hometown</th>
        <th>Job</th>
        </tr>";
        while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['FirstName'] . "</td>";
        echo "<td>" . $row['LastName'] . "</td>";
        echo "<td>" . $row['Age'] . "</td>";
        echo "<td>" . $row['Hometown'] . "</td>";
        echo "<td>" . $row['Job'] . "</td>";
        echo "</tr>";
        }
        echo "</table>";
        mysqli_close($con);s
    ?>
</body>
</html>

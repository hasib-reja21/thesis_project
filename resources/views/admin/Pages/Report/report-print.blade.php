<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.22.1/dist/bootstrap-table.min.css">
    <style>
        .center {
            margin-left: auto;
            margin-right: auto;
            margin-top: 40px;
        }
    </style>
</head>

<body>
    <div class=" center col-md-8  " id="print">
    <button onclick="printTable()" class="btn btn-primary mb-3"><a style="text-decoration: none; color:white;" href="">Print Table</a></button>

        <table class="table table-inverse border" id="myTable">
            <thead>
                <tr>
                   
                    <th>Items</th>
                    <th>total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>total Number of Product</td>
                    <td>{{$products}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>total Bids</td>
                    <td>{{$biddings}}</td>

                </tr>
                <tr>
                    <td>Total Registered User</td>
                    <td>{{$users}}</td>

                </tr>
                <tr>
                    <td>total Categories</td>
                    <td>{{$categories}}</td>

                </tr>

            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.22.1/dist/bootstrap-table.min.js"></script>
    <script>
    function printTable() {
        var printContents = document.getElementById("myTable").outerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
</body>

</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getlocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>

<body class="antialised">
    <form action="{{ url('item/post') }}" method="post">
        @csrf
        <table style="border: solid 1px #000;">
            <tr>
                <td>Nama Item</td>
                <td><input type="text" name="item_name"></td>
            </tr>
            <tr>
                <td>Tipe Item</td>
                <td><input type="text" name="item_type"></td>
            </tr>
            <tr>
                <td>Harga Item</td>
                <td><input type="text" name="item_price"></td>
            </tr>
            <tr>
                <td>Deskripsi Item</td>
                <td><input type="text" name="item_desc"></td>
            </tr>
            <tr>
                <td><button type="submit">Submit</button></td>
            </tr>
        </table>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
</body>

</html>

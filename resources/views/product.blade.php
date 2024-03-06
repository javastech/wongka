<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $page_title }}</title>
</head>
<body>
    <table cellpadding="7">
        <thead>
            <tr>
                <th align="left">No.</th>
                <th align="left">Name</th>
                <th align="left">Category</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $key => $product)
                <tr>
                    <td>{{ intval($key) + 1 }}</td>
                    <td>{{ $product->name }}</td>
                    <td>
                        {{-- Add some codes here... --}}
                    </td>
                    <td>
                        <a href="#">Edit</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" align="center">Empty</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
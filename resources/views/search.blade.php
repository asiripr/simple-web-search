<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table with Edit and Delete Buttons</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contactdata as $cdata)
                <tr>
                    <td>{{$cdata->name}}</td>
                    <td>{{$cdata->email}}</td>
                    <td>{{$cdata->phone_number}}</td>
                    <td><button class="edit-btn">Edit</button></td>
                    <td><button class="delete-btn">Delete</button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Incoming Message</title>
</head>
<body>
<div class="container">
    <table>
        <th>
            <tr>Name</tr>
            <tr>Email</tr>
            <tr>Message</tr>
        </th>
        <tbody>
            <tr>
                <td>{{ $name }}</td>
                <td>{{ $email }}</td>
                <td>{{ $Usermessage }}</td>
            </tr>
        </tbody>
    </table>
</div>
</body>
</html>

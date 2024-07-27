<!DOCTYPE html>
<html>
<head>
    <title>Email Inbox</title>
</head>
<body>
    <h1>Email Inbox</h1>
    <table border="1">
        <tr>
            <th>Subject</th>
            <th>From</th>
            <th>Date</th>
        </tr>
        @foreach ($emails as $email)
        <tr>
            <td>{{ $email['subject'] }}</td>
            <td>{{ $email['from'] }}</td>
            <td>{{ $email['date'] }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>

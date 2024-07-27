<!DOCTYPE html>
<html>
<head>
    <title>Settings</title>
</head>
<body>
    <h1>Settings</h1>
    <table>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        @foreach($settings as $setting)
        <tr>
            <td>{{ $setting->key }}</td>
            <td>{{ $setting->value }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>

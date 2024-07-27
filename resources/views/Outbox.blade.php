@extends('layouts.app')

@section('content')
<h1>Outbox</h1>
<table>
    <thead>
        <tr>
            <th>Recipient</th>
            <th>Subject</th>
            <th>Body</th>
            <th>Sent At</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($sentEmails as $email)
        <tr>
            <td>{{ $email->recipient }}</td>
            <td>{{ $email->subject }}</td>
            <td>{{ $email->body }}</td>
            <td>{{ $email->sent_at }}</td>
            <td>{{ $email->status }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $sentEmails->links() }}
@endsection

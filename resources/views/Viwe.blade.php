@foreach($categories as $category)
    <h2>{{ $category->name }}</h2>
    <ul>
        @foreach($category->emails as $email)
            <li>{{ $email->subject }} - {{ $email->body }}</li>
        @endforeach
    </ul>
@endforeach

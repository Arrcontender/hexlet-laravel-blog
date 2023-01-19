@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{ Form::label('name', 'Name') }}
{{ Form::text('name') }}<br>
{{ Form::label('body', 'Body') }}
{{ Form::textarea('body') }}<br>
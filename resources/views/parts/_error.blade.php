@if (count($errors) > 0)
    <div align="center">
        <b>ERROR!</b><br>
        @foreach ($errors->all() as $error)
            {{ $error }}<br>
        @endforeach
        <br>
    </div>
@endif

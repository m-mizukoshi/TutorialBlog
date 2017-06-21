<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <style>
    table.main
    {
        width: 900px;
        margin-left: auto;
        margin-right: auto;
    }
    table.sub
    {
        width: 900px;
    }
    th
    {
        text-align: center;
        padding-top: 15px;
        padding-bottom: 15px;
    }
    td.list
    {
        vertical-align: top;
        padding-bottom: 15px;
    }
    </style>
</head>

<body>
    <table class="main">
        <tr>
            <td align="right">
                @section('header')
                @include('parts._header')
                @show
            </td>
        </tr>
        <tr>
            <td><h2>@yield('title')</h2></td>
        </tr>
        <tr>
            <td>
                <table class="sub">
                    @yield('content')
                </table>
            </td>
        </tr>
        <tr>
            <td align="center">
                <br>
                @section('footer')
                @include('parts._footer')
                @show
            </td>
        </tr>
    </table>
</body>

</html>

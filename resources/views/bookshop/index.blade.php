<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of bookshops</title>
</head>
<body>

    <h1>List of bookshops</h1>

    <a class="create-button" href="{{ action('BookshopController@create') }}">Create a new bookshop</a>

    <div class="bookshops">

        @foreach ($bookshops as $bookshop)

            <div class="bookshop">
                <h3 class="bookshop__name">{{ $bookshop->name }}</h3>

                <div class="bookshop__city">{{ $bookshop->city }}</div>
            </div>

        @endforeach

    </div>

</body>
</html>
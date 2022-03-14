<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <header>
        <h1><?php echo $data['title'] ?></h1>
    </header>
    <main>
        <!-- ??? -->

        @foreach($students as $student)
        <ul>
            <li>
                {{student}}
            </li>
        </ul>
        @endforeach

        <div>
            <a href="{{route('content')}}">CONTENT</a>
        </div>
    </main>
    <footer>

    </footer>

</body>

</html>
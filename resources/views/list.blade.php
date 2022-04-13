<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/css/app.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <h1 calss="text-center"> List Of Applications</h1>
    <table class="table">
        <th scope="col">candidate ID</th>
        <th scope="col">job Post ID</th>
        <th scope="col"> Date </th>
        <th scope="col">status</th>
        @foreach ($applications as $value)
        <tr>
            <td>{{$value->candidate_id}}</td>
            <td>{{$value->jobPost_id}}</td>
            <td>{{$value->appliedDate}}</td>
            <td>{{$value->status}}</td>
        </tr>
        @endforeach

    </table>
    <script src="/js/app.js"></script>
</body>

</html>
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
    <h1 calss="text-center"> Company Information</h1>
    <table class="table">

        @foreach ($company as $company)
        <tr>
            <td scope="row">Company Name</td>
            <td>{{$company-> companyName}}</td>
        </tr>
        <tr>
            <td scope="col"> Phone</td>
            <td>{{$company-> phone}}</td>
        </tr>
        <tr>
            <td scope="col">email</td>
            <td>{{$company->email}}</td>
        </tr>
        <tr>
            <td scope="col"> URL </td>
            <td>{{$company-> websiteURL}}</td>
        </tr>
        <tr>
            <td scope="col">Location</td>
            <td>{{$company->Location_id}}</td>
        </tr>
        @endforeach

    </table>
    <hr>
    <a href="/company/{{$company->id}}/edit" calss="btn btn-default"> Edit </a>

    <script src="/js/app.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <link href="/css/app.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="card-header text-center font-weight-bold">
        List Of Applications for company {{$companyName}}
    </div>

    <table class="table">
        <thead class="table-light">
            <th>candidate firstName</th>
            <th>LastName</th>
            <th>job Post Title</th>
            <th> Applied Date </th>
            <th>Accepted</th>
        </thead>
        @foreach ($applications as $value)
        <tr>
            <td>{{$value->firstName}}</td>
            <td>{{$value->lastName}}</td>
            <td>{{$value->title}}</td>
            <td>{{$value->appliedDate}}</td>
            {{$value->id}}
            <td>
                <input data-id="{{$value->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $value->status ? 'checked' : '' }}>
            </td>
        </tr>
        @endforeach

    </table>
    <script src="/js/app.js"></script>
</body>

</html>

<script>
    $(function() {
        $('.toggle-class').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var application_id = $(this).data('id');
            $.ajax({

                type: "GET",
                dataType: "json",
                url: '/status/update',
                data: {
                    'status': status,
                    'id': application_id
                },
                success: function(data) {
                    console.log(data.success)
                }
            });
        })
    });
</script>
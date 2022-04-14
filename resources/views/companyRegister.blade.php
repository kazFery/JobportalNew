<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container mt-4">
        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <div class="card">
            <div class="card-header text-center font-weight-bold">
                - Add Company Form
            </div>
            <div class="card-body">
                <form name="add-company" id="add-company" method="post" action="{{url('/company/register')}}">
                    <div class="form-group">
                        <label for="companyName">Company Name:</label>
                        <input type="text" id="companyName" name="companyName" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone: </label>
                        <input type="text" name="phone" id="phone" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label for="phone">Email: </label>
                        <input type="text" name="email" id="email" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label for="phone">WebURL: </label>
                        <input type="text" name="weburl" id="weburl" class="form-control" required="">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

</html>
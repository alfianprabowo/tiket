<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - Tiket Online</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container"><br>
        <div class="col-md-4 col-md-offset-4">
            <h2 class="text-center"><b>Agent X</b><br>Buy Your Ticket Now</h3>
            <hr>
            @if(session('error'))
            <div class="alert alert-danger">
                <b>Opps!</b> {{session('error')}}
            </div>
            @endif
            {{-- <form action="{{ route('actionlogin') }}" method="post"> --}}
                <div class="container">
                    <div class="card" style="width:250px">
                      <img class="card-img-top" src="img1.png" alt="Card image" style="width:100%">
                      <div class="card-body">
                        <h4 class="card-title">90's Festival</h4>
                        <p class="card-text">Stadion GBK - 1 Desember 2025</p>
                        <a href="#" class="btn btn-primary stretched-link">Buy Ticket</a>
                      </div>
                    </div>
                  </div>
            <form method="post">
            @csrf 
                <button type="submit" class="btn btn-primary btn-block">Log In</button>
                <hr>
                
            </form>
        </div>
    </div>
</body>
</html>
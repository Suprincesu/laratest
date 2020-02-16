<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
  

    <div class="container">
        <div class="row mt-3">
            @foreach($incomes as $income)
            <div class="col-md-3 col-sm-12">
                <div class="card p-3 m-1">
                    <h5 class="card-title">Salary- {{$income->salary}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$income->salary_received}}</h6> 
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="container mt-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Sn</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Salary Received</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($incomes as $key=>$income)
                <tr>
                    <th>{{$key +1}}</th>
                    <td>{{$income->salary}}</td>
                    <td>{{$income->salary_received}}</td>
                    <td>
                    <form method="post" action="/income/{{$income->id}}">
                            @csrf
                            @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <form method="POST" action="{{ action('IncomeController@store') }}">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Salary</label>
                      <input type="text" name="salary" class="form-control" >
                    </div>
                    <div class="form-group">
                       
                      <label for="exampleInputPassword1">Salary Received</label>
                   
                      <input class="date form-control" type="text" name="salary_received">
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
            <div class="col-6">
             
                <form method="POST" action="{{ action('UserController@register') }}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1" >Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name" >
                      </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1" >Email</label>
                      <input type="text" name="email" class="form-control" placeholder="Email" >
                    </div>
                    <div class="form-group">
                       
                      <label for="exampleInputPassword1">Password</label>
                   
                      <input class="form-control" type="password" name="password" placeholder="Password">
                    </div>
                    @if (count($errors) > 0)
                    <div class = "alert alert-danger">
                       <ul>
                          @foreach ($errors->all() as $error)
                             <li>{{ $error }}</li>
                          @endforeach
                       </ul>
                    </div>
                 @endif
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
    
</body>
</html>


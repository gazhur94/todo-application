<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://www.iconarchive.com/download/i49405/designcontest/outline/Pen-2.ico">

    <title>Todo</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
      
      
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Task</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
    
              @foreach ($tasks as $task)
                <tr>
                  <td>{{$task->task}}</td>
                  <td>
                  <a href="delete/{{$task->id}}"><button class="btn btn-danger">DELETE</button></a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        

    <form class="form-signin" method="POST">
      
     
      <label for="addTask" class="sr-only">Add your task</label>
      <input type="text" id="addTask" name="task" class="form-control" placeholder="New task" required autofocus>
      
      
      <button class="btn btn-lg btn-primary btn-block" type="submit">Add</button>
      
      {{ csrf_field() }}
    </form>
    
    
    


  </body>
</html>
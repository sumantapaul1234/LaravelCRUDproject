<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show member list</title>
</head>
<body>
    <h1 style="display:inline">member list -----------------</h1>  <h2 style="display:inline"><button><a href="register" style="text-decoration: none;color:blue"> insert more member</a></button></h2>
<br>
<br>
<br>
<table border='1px'>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>phone</th>
        <th>password</th>
        <th>action</th>
    </tr>
    @foreach($users as $item)
    <tr>
        
        <td>{{$item['id']}}</td>
        <td>{{$item['name']}}</td>
        <td>{{$item['phone']}}</td>
        <td>{{$item['password']}}</td>
        <td><button ><a href={{"delete/".$item['id']}} style="text-decoration: none;color:red">delete</a></button>
        <button ><a href={{"edit/".$item['id']}} style="text-decoration: none;color:green">edit</a></button></td>
        @endforeach
        
    </tr>
</table>
<div class="pt-lg-3">
    {{$users->links()}}
</div>
</body>
</html>

<style>
    .w-5{ 
        display:none; 
    }
</style>

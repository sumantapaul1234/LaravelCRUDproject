<h1>update members data</h1>
<form action="/edit" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}">
    <input type="text" name="name" id="" value="{{$data['name']}}"><br>
    <input type="text" name="phone" id="" value="{{$data['phone']}}"><br>
    <input type="text" name="password" id="" value="{{$data['password']}}"><br>
    <button type="submit">update</button><button href="list">back</button>
</form>
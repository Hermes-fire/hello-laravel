<form action="http://127.0.0.1:8000/verify" method="POST">
    @csrf
    <label>Name</label>
    <input type="text" />
    <input type="submit" value="ok" />
</form>
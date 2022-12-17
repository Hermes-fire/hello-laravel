<h1>
    New Product
</h1>
<form action="{{ route('products.store') }}" method="post">
    @csrf
    Product's name:
        <input type="text" name="name"><br>
        <input type="submit" value="submit">
</form>
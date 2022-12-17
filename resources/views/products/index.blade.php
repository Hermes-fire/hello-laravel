<h1>list of products</h1>

@foreach($products as $product)
    {{ $product->name }} <hr>
@endforeach
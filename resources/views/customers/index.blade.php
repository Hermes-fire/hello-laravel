<h2>List of customers</h2>

<ul>

    @foreach($customers as $customer)
    
        <li> {{ $customer->id }} - {{ $customer->name }}

        <form action="{{route('customers.destroy', $customer)}}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="delete">
        </form>
        
    @endforeach


</ul>
<x-app-layout>
<!-- ----------------cart items------------->
<div class="small-container cart-page">
<form action="{{ route('commande') }}" method="post">
    {{-- @csrf
    <table>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr> --}}
        @foreach ($products as $product)
        <input type="hidden" value="{{$product->id}}" name=item[{{ $loop->index}}][id]>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="{{ asset($product->image) }}">
                    <div>
                        <p>{{ $product->name }}</p>
                        <small>{{ $product->cost }}</small>
                        <a href="{{ route('panier.card',['id' => $product->id, 'qty' => 0]) }}">Remove</a>
                    </div>
                </div>
            </td>
            <td><input type="number" value="{{ $cards[$loop->index]['qty'] }}" name=item[{{ $loop->index }}][quantite]></td>
            <td>$35.00</td>
        </tr>
        @endforeach
    </table>
    <div class="total-price">
        <table>
            <tr>
                <td>Subtotal</td>
                <td>$20.00</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>$10.00</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>$20.00</td>
            </tr>
            <tr>
            <td><button class="btn">Buy Now &#8594; </button></td>


            </tr>
        </table>

</form>
</div>

</x-app-layout>
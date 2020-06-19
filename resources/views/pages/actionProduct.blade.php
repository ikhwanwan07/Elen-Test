<a href="{{ route('product.edit', $model) }}" class="btn btn-warning">Edit</a>
<form action="{{ route('product.destroy',$model) }}" method="POST">
    @csrf
    @method("DELETE")

    <button type="submit">Delete</button>
</form>


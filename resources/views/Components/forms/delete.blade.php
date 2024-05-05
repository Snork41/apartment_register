<form 
    action="{{ route($actionRoute, [$object => $objectId]) }}" 
    method="POST" 
    onsubmit="return confirm('Вы уверены, что хотите удалить {{ $confirmMessage }}?');"
    class="col-6">
    @csrf
    @method('DELETE')
    <button class="button-delete">
        <img src="{{ asset('img/svg/' . $buttonImage) }}" alt="{{ $buttonImage }}">
    </button>
</form>
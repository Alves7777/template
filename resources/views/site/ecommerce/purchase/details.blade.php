<table class="table table-bordered">
    <tr>
        <th>Produto</th>
        <th>Quantidade</th>
        <th>Valor</th>
    </tr>
    @foreach($listItems as $items)
        <tr>
            <td>{{ $items->name }}</td>
            <td>{{ $items->quantity }}</td>
            <td>{{ $items->valueitem }}</td>
        </tr>
    @endforeach
</table>

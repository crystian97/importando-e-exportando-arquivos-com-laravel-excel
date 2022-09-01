

<table class="table">
    <thead>
        <tr>
            <th>Nome</th><th>Email</th><th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach($clients as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->nome }}</td><td>{{ $item->email }}</td>
           
        </tr>
    @endforeach
    </tbody>
</table>


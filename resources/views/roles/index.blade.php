<table>
    <thead>
        <tr>
            <th>Rol Adı</th>
            <th>Əməliyyatlar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($roles as $role)
        <tr>
            <td>{{ $role->name }}</td>
            <td>
                <a href="{{ route('roles.edit', $role->id) }}">Redaktə et</a> |
                <a href="{{ route('roles.show', $role->id) }}">Bax</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

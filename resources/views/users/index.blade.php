<table>
    <thead>
        <tr>
            <th>İstifadəçi Adı</th>
            <th>Email</th>
            <th>Rollar</th>
            <th>Əməliyyatlar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                @foreach($user->roles as $role)
                    {{ $role->name }}
                @endforeach
            </td>
            <td><a href="{{ route('users.edit', $user->id) }}">Redaktə et</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

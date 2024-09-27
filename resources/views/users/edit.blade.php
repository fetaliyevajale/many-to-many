<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="roles">Rolları seçin:</label>
        <select name="roles[]" multiple>
            @foreach($roles as $role)
            <option value="{{ $role->id }}" {{ $user->roles->contains($role->id) ? 'selected' : '' }}>
                {{ $role->name }}
            </option>
            @endforeach
        </select>
    </div>
    <button type="submit">Yenilə</button>
</form>

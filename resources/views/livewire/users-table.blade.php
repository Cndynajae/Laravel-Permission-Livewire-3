<div>
    <h1>Daftar Pengguna</h1>
    <form wire:submit.prevent="store">
        <input type="text" wire:model="name" placeholder="Nama">
        <input type="email" wire:model="email" placeholder="Email">
        <input type="password" wire:model="password" placeholder="Password">
        <select wire:model="role">
            @foreach($roles as $role)
                <option value="{{ $role->name }}">{{ $role->name }}</option>
            @endforeach
        </select>
        <button type="submit">Simpan</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->roles->pluck('name')->implode(', ') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

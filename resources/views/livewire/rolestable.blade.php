<div>
    <h1>Daftar Role</h1>
    <form wire:submit.prevent="store">
        <input type="text" wire:model="name" placeholder="Nama Role">
        <button type="submit">Simpan</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Nama Role</th>
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $role)
                <tr>
                    <td>{{ $role->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

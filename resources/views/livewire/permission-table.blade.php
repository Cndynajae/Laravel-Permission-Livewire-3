<div>
    <h1>Daftar Permissions</h1>
    <form wire:submit.prevent="store">
        <input type="text" wire:model="name" placeholder="Nama Permission">
        <button type="submit">Simpan</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Nama Permission</th>
            </tr>
        </thead>
        <tbody>
            @foreach($permissions as $permission)
                <tr>
                    <td>{{ $permission->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

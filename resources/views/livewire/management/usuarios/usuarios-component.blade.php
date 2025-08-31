<div>
    {{-- Be like water. --}}
    <div class="overflow-x-auto">
            @foreach ($users as $user)
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                    </tbody>
                </table>
            @endforeach

    </div>
</div>

<x-layout>
    <x-labels>
        <a class="active" href="#">Users</a>
    </x-labels>
    <x-table>
        <div class="head">
            <h3>Users</h3>
            <div class="action-icons">
                <a href="{{ route('add-user') }}"> <i class='bx bxs-plus-circle'></i></a>
            </div>
        </div>
        <thead>
            <tr>
                <th>S.N</th>
                <th>Email</th>
                <th>Role</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if (!$users)
                <tr>
                    <td colspan="4">
                        No data found
                    </td>
                </tr>
            @else
                @foreach ($users as $user)
                    <tr>
                        <td>
                            {{ $loop->iteration }}
                        </td>
                        <td>
                            {{ $user->email }}
                        </td>
                        <td>
                            Users
                        </td>
                        <td>
                            {{ $user->created_at }}
                        </td>
                        <td>
                            {{ $user->updated_at }}
                        </td>
                        <td>
                            <div class="action-icons">
                                <a href="{{ route('edit-user', $user->id) }}" class="mr-4"><i
                                        class='bx bxs-edit'></i></a>
                                <a href="#" data-toggle="modal"
                                data-target="#delete_team"> <i class='bx bxs-trash-alt'></i></a>
                            </div>
                        </td>
                        <!-- Modal -->
                        <div class="modal fade" id="delete_team" tabindex="-1" role="dialog"
                            aria-labelledby="delete_teamTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">
                                            Delete User</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body text-dark">
                                        Are you sure want to delete this?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary text-white"
                                            data-dismiss="modal">Close</button>
                                        <form action="{{ route('delete-user', $user->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger text-white">Delete</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </x-table>
</x-layout>

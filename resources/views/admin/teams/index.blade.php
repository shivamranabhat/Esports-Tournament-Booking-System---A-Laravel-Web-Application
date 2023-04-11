<x-layout>
    <x-labels>
        <a class="active" href="#">Teams</a>
    </x-labels>
    <x-table>
        <div class="head">
            <h3>Teams</h3>
            <div class="action-icons">
                <a href="{{ route('add-team') }}"> <i class='bx bxs-plus-circle'></i></a>
            </div>
        </div>
        <thead>
            <tr>
                <th>S.N</th>
                <th>Team Name</th>
                <th>Player 1</th>
                <th>Player 2</th>
                <th>Player 3</th>
                <th>Player 4</th>
                <th>Action</th>
                <th>

                </th>
            </tr>
        </thead>
        <tbody>
            @if ($teams->count() == 0)
                <tr>
                    <td colspan="4">
                        No data found
                    </td>
                </tr>
            @else
                @foreach ($teams as $team)
                    <tr>
                        <td>
                            {{ $loop->iteration }}
                        </td>
                        <td>
                            <div class="tournament-image">
                                <img src="{{ asset('storage/' . $team->logo) }}" alt="tournament-image">
                                {{ $team->name }}
                            </div>

                        </td>
                        <td>
                            {{ $team->player_1 }}
                        </td>
                        <td>
                            {{ $team->player_2 }}
                        </td>
                        <td>
                            {{ $team->player_3 }}
                        </td>
                        <td>
                            {{ $team->player_4 }}
                        </td>
                        <td>
                            <div class="action-icons">
                                <a href="{{ route('edit-team',$team->id) }}" class="mr-4"><i class='bx bxs-edit'></i></a>
                                <a href="#" data-toggle="modal"
                                data-target="#delete_team"> <i class='bx bxs-trash-alt'></i></a>
                            </div>
                        </td>
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="delete_team" tabindex="-1" role="dialog"
                        aria-labelledby="delete_teamTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">
                                        Delete Team</h5>
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
                                    <form action="{{ route('delete-team', $team->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger text-white">Delete</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </tbody>
    </x-table>
    <div class="pagination d-flex justify-content-end mt-5">
        <ul class="pagination">
            <li class="page-item">
                {{ $teams->links('vendor.pagination.simple-tailwind') }}
            </li>
        </ul>
    </div>
</x-layout>

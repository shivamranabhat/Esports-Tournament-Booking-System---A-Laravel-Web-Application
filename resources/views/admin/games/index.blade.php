<x-layout>
    <x-labels>
        <a class="active" href="#">Game</a>
    </x-labels>
    <x-table>
        <div class="head">
            <h3>Game</h3>
            <div class="action-icons">
               <a href="{{route('add-game')}}">  <i class='bx bxs-plus-circle'></i></a>
            </div>
        </div>
        <thead>
            <tr>
                <th>S.N</th>
                <th>Image</th>
                <th>Name</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
           @if ($games->count()==0)
           <tr>
            <td colspan="4">
                No data found
            </td>
            </tr>
           @else
          @foreach ($games as $game)
          <tr>
            <td>
                {{$loop->iteration}}
            </td>
            <td>
                <div class="tournament-image">
                    <img src="{{asset('storage/'.$game->image)}}" alt="game-image">
                </div>

            </td>
            <td>
                {{$game->name}}
            </td>
            <td>
                {{$game->created_at}}
            </td>
            <td>
                {{$game->updated_at}}
            </td>
            <td>
                <div class="action-icons">
                    <a href="{{route('edit-game',$game->id)}}" class="mr-4"><i class='bx bxs-edit'></i></a>
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
                                  Delete Game</h5>
                              <button type="button" class="close"
                                  data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body text-dark">
                              Are you sure want to delete this?
                          </div>
                          <div class="modal-footer">
                              <button type="button"
                                  class="btn btn-secondary text-white"
                                  data-dismiss="modal">Close</button>
                              <form action="{{route('delete-game',$game->id)}}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit"
                                      class="btn btn-danger text-white">Delete</button>
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
                {{ $games->links('vendor.pagination.simple-tailwind') }}
            </li>
        </ul>
    </div>
</x-layout>

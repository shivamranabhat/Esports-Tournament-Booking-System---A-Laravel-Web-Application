<x-layout>
    <x-labels>
        <a class="active" href="#">Game</a>
    </x-labels>
    <x-table>
        <div class="head">
            <h3>Game</h3>
            <div class="action-icons">
               <a href="#">  <i class='bx bxs-plus-circle'></i></a>
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
                    <a href="#"><i class='bx bxs-edit'></i></a>
                   <a href="#"> <i class='bx bxs-trash-alt'></i></a>
                </div>
            </td>
            </tr>
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

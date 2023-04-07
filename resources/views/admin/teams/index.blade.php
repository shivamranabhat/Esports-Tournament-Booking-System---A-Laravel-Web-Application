<x-layout>
    <x-labels>
        <a class="active" href="#">Teams</a>
    </x-labels>
    <x-table>
        <div class="head">
            <h3>Teams</h3>
            <div class="action-icons">
               <a href="#">  <i class='bx bxs-plus-circle'></i></a>
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
           @if ($teams->count()==0)
           <tr>
            <td colspan="4">
                No data found
            </td>
            </tr>
           @else
          @foreach ($teams as $team)
          <tr>
            <td>
                {{$loop->iteration}}
            </td>
            <td>
                <div class="tournament-image">
                    <img src="{{asset('storage/'.$team->logo)}}" alt="tournament-image">
                {{$team->name}}
                </div>

            </td>
            <td>
                {{$team->player_1}}
            </td>
            <td>
                {{$team->player_2}}
            </td>
            <td>
                {{$team->player_3}}
            </td>
            <td>
                {{$team->player_4}}
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
                {{ $teams->links('vendor.pagination.simple-tailwind') }}
            </li>
        </ul>
    </div>
</x-layout>

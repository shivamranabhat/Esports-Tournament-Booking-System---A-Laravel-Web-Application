<x-layout>
    <x-labels>
        <a class="active" href="#">Tournaments</a>
    </x-labels>
    <x-table>
        <div class="head">
            <h3>Tournaments</h3>
            <div class="action-icons">
               <a href="#">  <i class='bx bxs-plus-circle'></i></a>
            </div>
        </div>
        <thead>
            <tr>
                <th>S.N</th>
                <th>Name</th>
                <th>Type</th>
                <th>Game</th>
                <th>Fees</th>
                <th>Team Size</th>
                <th>Prize Pool</th>
                <th>Closing Time</th>
                <th>Bookings</th>
                <th>Action</th>
                <th>

                </th>
            </tr>
        </thead>
        <tbody>
           @if ($tournaments->count()==0)
           <tr>
            <td colspan="4">
                No data found
            </td>
            </tr>
           @else
          @foreach ($tournaments as $tournament)
          <tr>
            <td>
                {{$loop->iteration}}
            </td>
            <td>
                <div class="tournament-image">
                    <img src="{{asset('storage/'.$tournament->image->image)}}" alt="tournament-image">
                {{$tournament->name}}
                </div>

            </td>
            <td>
                {{$tournament->type}}
            </td>
            <td>
                {{$tournament->game->name}}
            </td>
            <td>
                {{$tournament->fees}}
            </td>
            <td>
                {{$tournament->team_size}}
            </td>
            <td>
                {{$tournament->prize_pool}}
            </td>
            <td>
                {{$tournament->closing_time}}
            </td>
            <td>
                {{$tournament->bookings->count()}}
            </td>
            <td>
                <div class="action-icons">
                    <a href="#" class="mr-4"><i class='bx bxs-edit'></i></a>
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
                {{ $tournaments->links('vendor.pagination.simple-tailwind') }}
            </li>
        </ul>
    </div>
</x-layout>

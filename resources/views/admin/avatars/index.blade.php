<x-layout>
    <x-labels>
        <a class="active" href="#">Avatar</a>
    </x-labels>
    <x-table>
        <div class="head">
            <h3>Avatar</h3>
            <div class="action-icons">
               <a href="{{route('add-avatar')}}">  <i class='bx bxs-plus-circle'></i></a>
            </div>
        </div>
        <thead>
            <tr>
                <th>S.N</th>
                <th>Image</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
           @if ($avatars->count()==0)
           <tr>
            <td colspan="4">
                No data found
            </td>
            </tr>
           @else
          @foreach ($avatars as $avatar)
          <tr>
            <td>
                {{$loop->iteration}}
            </td>
            <td>
                <div class="tournament-image">
                    <img src="{{asset('storage/'.$avatar->image)}}" alt="avatar-image">
                </div>

            </td>
            <td>
                {{$avatar->created_at}}
            </td>
            <td>
                {{$avatar->updated_at}}
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
                {{ $avatars->links('vendor.pagination.simple-tailwind') }}
            </li>
        </ul>
    </div>
</x-layout>

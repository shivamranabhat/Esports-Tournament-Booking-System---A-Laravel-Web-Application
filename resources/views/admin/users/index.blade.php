<x-layout>
    <x-labels>
        <a class="active" href="#">Users</a>
    </x-labels>
    <x-table>
        <div class="head">
            <h3>Users</h3>
            <div class="action-icons">
               <a href="#">  <i class='bx bxs-plus-circle'></i></a>
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
                {{$loop->iteration}}
            </td>
            <td>
                {{$user->email}}
            </td>
            <td>
               Users
            </td>
            <td>
                {{$user->created_at}}
            </td>
            <td>
                {{$user->updated_at}}
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
</x-layout>


<x-layout>
    <x-labels>
        <a class="active" href="#">Message</a>
    </x-labels>
    <x-table>
        <div class="head">
            <h3>Message</h3>
        </div>
        <thead>
            <tr>
                <th>S.N</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
           @if ($contacts->count()==0)
           <tr>
            <td colspan="4">
                No data found
            </td>
            </tr>
           @else
          @foreach ($contacts as $contact)
          <tr>
            <td>
                {{$loop->iteration}}
            </td>
            <td>
                {{$contact->name}}
            </td>
            <td>
                {{$contact->email}}
            </td>
            <td>
                {{$contact->message}}
            </td>
            <td>
                {{$contact->created_at}}
            </td>
            <td>
                {{$contact->updated_at}}
            </td>
            </tr>
          @endforeach

           @endif
        </tbody>
    </x-table>
    <div class="pagination d-flex justify-content-end mt-5">
        <ul class="pagination">
            <li class="page-item">
                {{ $contacts->links('vendor.pagination.simple-tailwind') }}
            </li>
        </ul>
    </div>
</x-layout>

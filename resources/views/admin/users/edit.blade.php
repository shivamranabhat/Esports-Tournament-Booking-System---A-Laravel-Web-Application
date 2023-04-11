<x-layout>
    <x-labels>
        <a class="active" href="#">Users</a>
    </x-labels>
    <x-table>
        <div class="head">
            <h3>Edit</h3>
            <div class="action-icons">
                <a href="{{ route('users') }}"> <i class='bx bxs-left-arrow-circle'></i></a>
            </div>
        </div>
        <div class="form-container pr-5">
            <form method="POST" action="{{route('update-user',$user->id)}}">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="col-12 col-sm-6 col-lg-6">
                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="text" class="form-control" name="email" id="email"
                                value="{{ $user->email }}">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-6">
                        <div class="form-group">
                            <label for="name">Password</label>
                            <input type="password" class="form-control" name="password" id="password"
                                value="{{ $user->password}}">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-sm-6 col-lg-6">
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select class="form-control" id="role" name="role">
                                <option value="#">Select Role</option>
                                <option value="0">User</option>
                                <option value="1">Admin</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6">
                        <div class="form-group">
                            <label for="confirmed">Email Confirmed</label>
                            <select class="form-control" id="confirmed" name="confirmed">
                                <option value="#">Select</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="submit-btn">
                    <input type="submit" value="Submit" class="button mt-2">
                </div>
            </form>
        </div>
    </x-table>
</x-layout>

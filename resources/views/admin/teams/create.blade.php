<x-layout>
    <x-labels>
        <a class="active" href="#">Games</a>
    </x-labels>
    <x-table>
        <div class="head">
            <h3>Create</h3>
            <div class="action-icons">
                <a href="{{ route('teams') }}"> <i class='bx bxs-left-arrow-circle'></i></a>
            </div>
        </div>
        <div class="form-container pr-5">
            <form method="POST" action="{{route('store-team')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="col-12 col-sm-12 col-lg-6">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name"
                                value="{{ old('name') }}">
                            @error('name')
                                <p class="d-flex justify-content-start text-danger mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-lg-6">
                        <div class="form-group">
                            <label for="user_id">User</label>
                            <select class="form-control" id="user_id" name="user_id">
                                <option value="#">Select User</option>
                                @foreach ($users as $user)
                                   <option value="{{$user->id}}">{{$user->email}}</option>
                                @endforeach
                            </select>
                            @error('user_id')
                                <p class="d-flex justify-content-start text-danger mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="logo" class="form-label">Upload Logo</label>
                    <input class="form-control" type="file" id="logo" name="logo" onchange="readURL(this);" multiple />
                        @error('image')
                            <p class="d-flex justify-content-start text-danger mt-2">{{ $message }}</p>
                        @enderror
                </div>
                <div class="image-area mt-4"><img id="imageResult" src="http://127.0.0.1:8000/images/preview.png" width="250"></div>
                <div class="form-row mt-3">
                    <div class="col-12 col-sm-12 col-lg-6">
                        <label for="player_1">Player 1</label>
                        <input type="text" class="form-control" name="player_1" id="player_1"
                            value="{{ old('player_1') }}">
                        @error('player_1')
                            <p class="d-flex justify-content-start text-danger mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-12 col-sm-12 col-lg-6">
                        <label for="player_2">Player 2</label>
                        <input type="text" class="form-control" name="player_2" id="player_2"
                            value="{{ old('player_2') }}">
                        @error('player_2')
                            <p class="d-flex justify-content-start text-danger mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="form-row mt-3">
                    <div class="col-12 col-sm-12 col-lg-6">
                        <label for="player_3">Player 3</label>
                        <input type="text" class="form-control" name="player_3" id="player_3"
                            value="{{ old('player_3') }}">
                        @error('player_3')
                            <p class="d-flex justify-content-start text-danger mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-12 col-sm-12 col-lg-6">
                        <label for="player_4">Player 4</label>
                        <input type="text" class="form-control" name="player_4" id="player_4"
                            value="{{ old('player_4') }}">
                        @error('player_4')
                            <p class="d-flex justify-content-start text-danger mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="submit-btn mt-2">
                    <input type="submit" value="Submit" class="button mt-2">
                </div>
            </form>
        </div>
    </x-table>
</x-layout>

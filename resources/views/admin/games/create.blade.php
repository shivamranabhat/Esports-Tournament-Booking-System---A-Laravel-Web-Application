<x-layout>
    <x-labels>
        <a class="active" href="#">Games</a>
    </x-labels>
    <x-table>
        <div class="head">
            <h3>Create</h3>
            <div class="action-icons">
                <a href="{{ route('games') }}"> <i class='bx bxs-left-arrow-circle'></i></a>
            </div>
        </div>
        <div class="form-container pr-5">
            <form method="POST" action="{{route('store-game')}}" enctype="multipart/form-data">
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
                </div>
                <div class="form-row">
                    <div class="col-12 col-sm-12 col-lg-6">
                        <label for="image" class="form-label">Upload image</label>
                        <input class="form-control" type="file" id="image" name="image" multiple />
                        @error('image')
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

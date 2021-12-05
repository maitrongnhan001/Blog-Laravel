<form action="{{ route('baiviet.store') }}" method="POST">
    @csrf
    <div>
        <label for="title">Tieu de</label>
        <input type="text" name="title">
        @error('title')
            <span class="invalid-feeback" role='alert'>
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <br>
    <br>
    <div>
        <label for="content">Noi dung</label>
        <br>
        <textarea name="content" id="" cols="30" rows="10"></textarea>
        @error('content')
            <span class="invalid-feeback" role='alert'>
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <br>
    <input type="submit" name='submit' value="Dang bai">
</form>
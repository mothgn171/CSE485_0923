<form action="{{ route('authors.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="name">Name: </label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="bio">Bio: </label>
        <template name="bio" class="form-control" required ></template>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

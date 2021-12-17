<form method="POST" action="{{ route('product.store') }}">
    @csrf

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Post title">
    </div>

    <div class="form-group">
        <label for="slug">Slug</label>
        <input type="text" name="slug" class="form-control" value="{{ old('slug') }}" placeholder="post-slug">
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" rows="8" cols="80" class="form-control">{{ old('description') }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Create Post</button>
</form>

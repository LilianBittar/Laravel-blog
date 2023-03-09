<x-layout>
    <form action="/create/post" method="POST">
        <div class="container text-center">
            <div class="row">

                @csrf

                <div class="col-12">
                    <label for="title">Title</label>
                    <input id="title" type="text" name="title">
                </div>

                <div class="col-12">
                    <label for="slug">Slug</label>
                    <input id="slug" type="text" name="slug">
                </div>

                <div class="col-12">
                    <label for="excerpt">Excerpt</label>
                    <input id="excerpt" type="text" name="excerpt">
                </div>

                <div class="col-12">
                    <label for="body">Body</label>
                    <textarea id="body" type="text" name="body"></textarea>
                </div>

                <select class="form-select col-12" aria-label="Default select example" name="category_id">
                    <option selected>Select Category</option>
                    @foreach ($category_list as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <example-component></example-component>
                <div class="col-12">
                    <button>Submit</button>
                </div>

            </div>
        </div>
    </form>
</x-layout>

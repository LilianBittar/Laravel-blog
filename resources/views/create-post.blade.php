<x-layout>
    <form action="/create/post" method="POST">
        @csrf
        <div>
            <label for="title">Title</label>
            <input id="title" type="text" name="title">
        </div>

        <div>
            <label for="slug">Slug</label>
            <input id="slug" type="text" name="slug">
        </div>

        <div>
            <label for="excerpt">Excerpt</label>
            <input id="excerpt" type="text" name="excerpt">
        </div>

        <div>
            <label for="body">Body</label>
            <textarea id="body" type="text" name="body"></textarea>
        </div>
       
        <select  class="form-select" aria-label="Default select example" name="category_id">
            <option selected>Select Category</option>
            @foreach ($category_list as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
          </select>

        <div> 
            <button>Submit</button>
        </div>
    </form>

</x-layout>

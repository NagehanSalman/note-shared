<form action="{{ route('contacts.store') }}" method="POST">
    @csrf
    <div>
        <label for="email">E-mail</label>
        <input id="email" name="email" type="text" required>
    </div>
    <div>
        <label for="title">Title</label>
        <input id="title" name="title" type="text" required>
    </div>
    <div>
        <label for="category">Category</label>
        <input id="category" name="category" type="number" required>
    </div>
    <div>
        <label for="sub_category">Sub Category</label>
        <input id="sub_category" name="sub_category" type="number" required>
    </div>
    <div>
        <label for="description">Description</label>
        <textarea id="description" name="description" required></textarea>
    </div>
    <button type="submit">Save</button>
</form>


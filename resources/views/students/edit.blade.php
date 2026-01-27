<form action="{{ route('students.update', $student->id) }}" method="POST" class="max-w-md mx-auto bg-white p-6 rounded shadow">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $student->name }}" class="w-full mb-3 p-2 border rounded">
    <input type="email" name="email" value="{{ $student->email }}" class="w-full mb-3 p-2 border rounded">
    <input type="text" name="role" value="{{ $student->role }}" class="w-full mb-3 p-2 border rounded">

    <button class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
</form>

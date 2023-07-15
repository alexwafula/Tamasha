<x-admin-layout>















<div class="h-full px-3 py-4 bg-gray-50">
   <h2 class="text-2xl font-bold mb-4">Edit Event</h2>

   <form method="POST" action="{{ route('Admin.events.update', $event->id) }}" enctype="multipart/form-data" class="bg-white p-6 rounded-md shadow-md">
      @csrf
      @method('PUT')

      <div class="mb-4">
         <label for="title" class="block">Title:</label>
         <input type="text" name="title" id="title" value="{{ $event->title }}" required class="w-full p-2 border border-gray-300 rounded-md">
      </div>

      <div class="mb-4">
         <label for="image" class="block">Image:</label>
         <input type="file" name="image" id="image" class="w-full p-2 border border-gray-300 rounded-md">
      </div>

      <div class="mb-4">
         <label for="description" class="block">Description:</label>
         <textarea name="description" id="description" rows="4" class="w-full p-2 border border-gray-300 rounded-md">{{ $event->description }}</textarea>
      </div>

      <div class="mb-4">
         <label for="start_time" class="block">Start Time:</label>
         <input type="datetime-local" name="start_time" id="start_time" value="{{ $event->start_time }}" required class="w-full p-2 border border-gray-300 rounded-md">
      </div>

      <div class="mb-4">
         <label for="venue" class="block">Venue:</label>
         <input type="text" name="venue" id="venue" value="{{ $event->venue }}" required class="w-full p-2 border border-gray-300 rounded-md">
      </div>

      <div class="mb-4">
         <label for="price" class="block">Price:</label>
         <input type="text"  name="price" id="price" value="{{ $event->price }}"  class="w-full p-2 border border-gray-300 rounded-md">
      </div>

      <div class="mb-4">
         <label for="status" class="block">Status:</label>
         <input type="checkbox" name="status" id="status" value="1" {{ $event->status ? 'checked' : '' }}>
      </div>

      <div class="flex justify-center">
         <button type="submit" class="px-4 py-2 bg-blue-500 text-gray rounded-md hover:bg-blue-600">Update</button>
      </div>
   </form>
</div>

</x-admin-layout>

<x-admin-layout>

   <div class="h-full px-3 py-4 bg-gray-50">
      <div class="flex justify-between items-center mb-4">
         <h2 class="text-2xl font-bold">Events</h2>
         <a href="{{ route('Admin.events.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Add Event</a>
      </div>

      <table class="w-full bg-white border border-gray-300">
         <thead>
            <tr>
               <th class="px-6 py-4 border-b">Title</th>
               <th class="px-6 py-4 border-b">Image</th>
               <th class="px-6 py-4 border-b">Description</th>
               <th class="px-6 py-4 border-b">Start Time</th>
               <th class="px-6 py-4 border-b">Venue</th>
               <th class="px-6 py-4 border-b">Status</th>
               <th class="px-6 py-4 border-b">Actions</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($events as $event)
            <tr>
               <td class="px-6 py-4 border-b">{{ $event->title }}</td>
               <td class="px-6 py-4 border-b">{{ $event->image }}</td>
               <td class="px-6 py-4 border-b">{{ $event->description }}</td>
               <td class="px-6 py-4 border-b">{{ $event->start_time }}</td>
               <td class="px-6 py-4 border-b">{{ $event->venue }}</td>
               <td class="px-6 py-4 border-b">{{ $event->status }}</td>
               <td class="px-6 py-4 border-b">
                  <a href="{{ route('Admin.events.edit', $event->id) }}" class="text-blue-500 hover:underline">Edit</a>
                  <form action="{{ route('Admin.events.destroy', $event->id) }}" method="POST" class="inline">
                     @csrf
                     @method('DELETE')
                     <button type="submit" class="text-red-500 hover:underline">Delete</button>
                  </form>
               </td>
            </tr>
            @endforeach
         </tbody>
      </table>
   </div>
</x-admin-layout>

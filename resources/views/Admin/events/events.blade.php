<x-admin-layout>
   <style>
      .heading {
         color: blue;
         font-weight: bold;
      }

      .styled-button {
         border: 1px solid;
         border-radius: 20px;
         padding: 5px 10px;
         text-align: center;
         text-decoration: none;
         display: inline-block;
      }

      .green-button {
         background-color: green;
         color: white;
      }

      .red-button {
         background-color: red;
         color: white;
      }

      .blue-button {
         background-color: blue;
         color: white;
      }

      table {
         border-collapse: collapse;
         width: 100%;
      }

      th, td {
         padding: 8px;
         text-align: left;
         border-bottom: 1px solid black;
      }
   </style>

   <div class="h-full px-3 py-4 bg-gray-50">
      <div class="flex justify-center items-center mb-4 border-b border-gray-300 pb-2">
         <h2 class="text-2xl font-bold heading">Event Details</h2>
      </div>

      <table class="w-full bg-white">
         <thead>
            <tr>
               <th class="px-6 py-4">#</th>
               <th class="px-6 py-4">Title</th>
               <th class="px-6 py-4">Image</th>
               <th class="px-6 py-4">Description</th>
               <th class="px-6 py-4">Start Time</th>
               <th class="px-6 py-4">Venue</th>
               <th class="px-6 py-4">Status</th>
               <th class="px-6 py-4">Actions</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($events as $index => $event)
            <tr>
               <td class="px-6 py-4">{{ $index + 1 }}</td>
               <td class="px-6 py-4 text-center">{{ $event->title }}</td>
               <td><img src="{{ $event->image ? asset('storage/' .$event->image) : asset('images/no-image.jpg') }}" alt="Event Image" style="height: 250px;"/></td>
               <td class="px-6 py-4">{{ $event->description }}</td>
               <td class="px-6 py-4">{{ $event->start_time }}</td>
               <td class="px-6 py-4">{{ $event->venue }}</td>
               <td class="px-6 py-4">{{ $event->status }}</td>
               <td class="px-6 py-4">
                  <a href="{{ route('Admin.events.edit', $event->id) }}" class="styled-button green-button">Edit</a>
                  <form action="{{ route('Admin.events.destroy', $event->id) }}" method="POST" class="inline">
                     @csrf
                     @method('DELETE')
                     <button type="submit" class="styled-button red-button">Delete</button>
                  </form>
                  <a href="{{ route('dashboard', $event->id) }}" class="styled-button blue-button">Display Event</a>
               </td>
            </tr>
            @endforeach
         </tbody>
      </table>
   </div>
</x-admin-layout>
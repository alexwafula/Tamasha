<!DOCTYPE html>
<html>
<head>
   <title>Events Dashboard</title>
   <style>
      .event-box {
         width: calc(33.33% - 20px);
         padding: 10px;
         box-sizing: border-box;
         float: left;
         border: 1px solid #e2e8f0;
         margin-bottom: 20px;
         transition: transform 0.2s ease-in-out;
      }

      .event-box:hover {
         transform: translate(0, -5px);
      }

      .show-more-link {
         clear: both;
         display: block;
         text-align: center;
         margin-top: 10px;
      }
   </style>
</head>
<body>
   <div class="h-full px-3 py-4 bg-gray-50">
      <div class="flex justify-between items-center mb-4 border-b border-gray-300 pb-2">
         <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
         </h2>
      </div>

      <div class="grid grid-cols-3 gap-4">
         @foreach ($events as $event)
            <div class="bg-white rounded-lg shadow-md p-4 event-box">
               <h3 class="text-lg font-semibold mb-2">{{ $event->title }}</h3>
              <td><img src="{{ $event->image ? asset('storage/' .$event->image) : asset('images/no-image.jpg') }}" alt="Event Image" style="height: 250px;"/></td>
               <p class="text-sm text-gray-500">{{ $event->description }}</p>
               <p class="text-sm text-gray-500 mb-2">{{ $event->start_time }}</p>
               <p class="text-sm text-gray-500">{{ $event->venue }}</p>
            </div>
         @endforeach
      </div>

      @if ($events->count() > 9)
         <div class="mt-4 text-center">
            <a href="{{ route('dashboard') }}" class="text-blue-500 hover:underline">Show More</a>
         </div>
      @endif
   </div>
</body>
</html>

   









<x-app-layout>
<!DOCTYPE html>
<html>
<head>
   <title>Events Dashboard</title>
   <style>
      body {
         font-family: Arial, sans-serif;
         margin: 0;
         padding: 0;
         background-color: #f3f7fc;
      }

      .event-container {
         max-width: 1200px;
         margin: 0 auto;
         padding: 20px;
      }

      .event-box {
         width: calc(33.33% - 20px);
         padding: 20px;
         box-sizing: border-box;
         float: left;
         background-color: #ffffff;
         border-radius: 8px;
         box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
         margin-bottom: 20px;
         transition: transform 0.2s ease-in-out;
      }

      .event-box:hover {
         transform: translate(0, -5px);
      }

      .event-title {
         font-size: 18px;
         font-weight: bold;
         color: #333333;
         margin-bottom: 10px;
      }

      .event-image {
         height: 200px;
         width: 100%;
         object-fit: cover;
         border-radius: 4px;
         margin-bottom: 10px;
      }

      .event-description {
         font-size: 14px;
         color: #666666;
         margin-bottom: 10px;
      }

      .event-time {
         font-size: 12px;
         color: #999999;
         margin-bottom: 5px;
      }

      .event-price {
         font-size: 14px;
         font-weight: bold;
         color: #0099ff;
         margin-bottom: 5px;
      }

      .event-venue {
         font-size: 12px;
         color: #999999;
         margin-bottom: 5px;
      }

      .buy-ticket-link {
         display: inline-block;
         font-size: 14px;
         color: #0099ff;
         text-decoration: none;
         transition: opacity 0.2s ease-in-out;
      }

      .buy-ticket-link:hover {
         opacity: 0.8;
      }
   </style>
</head>
<body>
   <div class="event-container">
      <div class="grid grid-cols-1 gap-4">
         @foreach ($events as $event)
            <div class="event-box">
               <h3 class="event-title">{{ $event->title }}</h3>
               <img src="{{ $event->image ? asset('storage/' .$event->image) : asset('images/no-image.jpg') }}" alt="Event Image" class="event-image">
               <p class="event-description">{{ $event->description }}</p>
               <p class="event-time">{{ $event->start_time }}</p>
               <p class="event-price">{{ $event->price }}</p>
               <p class="event-venue">{{ $event->venue }}</p>
               <a href="{{'purchaseTickets'}}" class="buy-ticket-link">Buy Ticket</a>
            </div>
         @endforeach
      </div>
   </div>
</body>
</html>

</x-app-layout>


   









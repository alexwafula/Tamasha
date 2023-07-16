
<x-app-layout>

   <div class="event-container">
      <div class="grid grid-cols-1 gap-4">
         <div class="event-box">
            <h3 class="event-title">{{ $event->title }}</h3>
            <img src="{{ $event->image ? asset('storage/' .$event->image) : asset('images/no-image.jpg') }}" alt="Event Image" class="event-image">
            <p class="event-description">{{ $event->description }}</p>
            <p class="event-time">{{ $event->start_time }}</p>
            <p class="event-price">{{ $event->price }}</p>
            <p class="event-venue">{{ $event->venue }}</p>

            <form method="POST" action="{{ route('cart.add') }}">
               @csrf
               <input type="hidden" name="event_id" value="{{ $event->id }}">
               <div class="quantity">
                  <label for="quantity">Quantity:</label>
                  <input type="number" name="quantity" id="quantity" value="1" min="1">
               </div>

               <p class="total-price">Total Price: KSH<span id="total-price">{{ $event->price }}</span></p>

               <button type="submit" class="buy-ticket-button">Add to Cart</button>
            </form>
         </div>
      </div>
   </div>

   
</x-app-layout>

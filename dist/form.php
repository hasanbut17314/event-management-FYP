<?php include "includes/header.php" ?>
<style>
  #book-container input,
  textarea,
  select {
    outline: none !important;
  }
</style>

<!-- Booking Form -->
<main>
  <section class="my-10">
    <form action="code/codes.php" method="post">
      <div class="w-fit mx-auto sm:px-10 px-4 border bg-white border-gray-300 rounded-2xl " id="book-container">
        <div>
          <h1 class="text-center font-semibold text-4xl py-6">Booking Form</h1>
        </div>
        <div class="grid grid-cols-1 gap-4 py-2">
          <div class="flex items-center border-gray-500 rounded-lg outline-none">
            <span class="inline-flex items-center justify-center h-12 px-4 bg-white border-gray-300">
              <i class="fa-regular fa-user text-gray-400"></i>
            </span>
            <input id="firstName" type="text" name="name" placeholder="Enter Name" class="flex-grow  px-4 py-3 rounded-l-md bg-white border border-gray-300" required />
          </div>
        </div>

        <div class="grid grid-cols-1 gap-4 py-2">
          <div class="flex items-center">
            <span class="inline-flex items-center justify-center h-12 px-4 bg-white border-gray-300">
              <i class="fa-regular fa-envelope text-gray-400"></i>
            </span>
            <input id="email" type="email" name="email" placeholder="Enter Email" class="flex-grow px-4 py-3 rounded-md bg-white border border-gray-300" required />
          </div>
        </div>

        <div class="grid grid-cols-1 gap-4 py-2">
          <div class="flex items-center">
            <span class="inline-flex items-center justify-center h-12 px-4 bg-white border-gray-300">
              <i class="fa-solid fa-phone text-gray-400"></i>
            </span>
            <input id="number" type="number" name="phone" placeholder="Enter Phone Number" class="flex-grow px-4 py-3 rounded-md bg-white border border-gray-300" />
          </div>
        </div>
        <div class="grid grid-cols-1 gap-4 py-2">
          <div class="flex items-center">
            <span class="inline-flex items-center justify-center h-12 px-4 bg-white border-gray-300">
              <i class="fa-solid fa-location-dot text-gray-400"></i>
            </span>
            <input id="address" type="text" name="address" placeholder="Enter Address" class="flex-grow px-4 py-3 rounded-md bg-white border border-gray-300" required />
          </div>

          <div class="grid grid-cols-1 gap-4 py-2">
            <div class="flex items-center">
              <span class="inline-flex items-center justify-center h-12 px-4 bg-white border-gray-300">
                <i class="fa-regular fa-calendar-days text-gray-400"></i>
              </span>
              <input id="time" type="datetime-local" name="datetime" class="flex-grow px-4 py-3 rounded-md bg-white border border-gray-300" required />
            </div>

            <div class="grid grid-cols-1 gap-4 py-2">
              <div class="flex items-center">
                <span class="inline-flex items-center justify-center h-12 px-4 bg-white border-gray-300">
                  <i class="fa-solid fa-person text-gray-400"></i>
                </span>
                <input id="number" type="number" name="numberofguest" placeholder="Number of Guests" class="flex-grow px-4 py-3 rounded-md bg-white border border-gray-300" required />
              </div>
            </div>

            <div class="flex flex-col mt-3 px-3 py-2">
              <h3 class="text-lg font-semibold mb-2">Event Type</h3>
              <div class="flex flex-wrap items-center md:gap-x-16 gap-x-8 md:gap-y-0 gap-y-6">
                <label class="inline-flex items-center">
                  <input type="radio" name="event-type" id="party" class="form-radio h-5 w-5" required value="Party" />
                  <span class="ml-2">Party</span>
                </label>
                <label class="inline-flex items-center">
                  <input type="radio" name="event-type" id="wedding" class="form-radio h-5 w-5" required value="Wedding" />
                  <span class="ml-2">Wedding</span>
                </label>
                <label class="inline-flex items-center">
                  <input type="radio" name="event-type" id="private" class="form-radio h-5 w-5" required value="Private" />
                  <span class="ml-2">Private</span>
                </label>
                <label class="inline-flex items-center">
                  <input type="radio" name="event-type" id="cooperate" class="form-radio h-5 w-5" required value="Corperate" />
                  <span class="ml-2">Corperate</span>
                </label>
              </div>
            </div>

            <div class="flex flex-col mt-3 px-3 py-2">
              <h3 class="text-lg font-semibold mb-2">Payment method</h3>
              <div class="flex flex-wrap items-center md:gap-x-16 gap-x-8 md:gap-y-0 gap-y-6">

                <label class="inline-flex items-center">
                  <input type="radio" name="payment-method" id="cash" class="form-radio text-indigo-600 h-5 w-5" required value="Cash" />
                  <span class="ml-2">Cash</span>
                </label>
                <label class="inline-flex items-center">
                  <input type="radio" name="payment-method" id="cheque" class="form-radio text-indigo-600 h-5 w-5" required value="Cheque" />
                  <span class="ml-2">Cheque</span>
                </label>
                <label class="inline-flex items-center">
                  <input type="radio" name="payment-method" id="Paypal" class="form-radio text-indigo-600 h-5 w-5" required value="Paypal" />
                  <span class="ml-2">Paypal</span>
                </label>
                <label class="inline-flex items-center">
                  <input type="radio" name="payment-method" id="others" class="form-radio text-indigo-600 h-5 w-5" required value="Others" />
                  <span class="ml-2">Others</span>
                </label>
              </div>
              <div class="grid grid-cols-1 gap-4 py-2 mt-5">
                <div class="flex items-center">
                  <span class="inline-flex h-12 px-4 bg-white border-gray-300">
                    <i class="fa-solid fa-list text-gray-400"></i>
                  </span>
                  <textarea name="comments" id="comments" class="flex-grow px-4 py-3 rounded-md bg-white border border-gray-300" placeholder="Special Instructions(if any) ..." rows="4"></textarea>
                </div>
              </div>
            </div>

            <div class="flex justify-end">
              <button class="bg-blue-600 text-white px-4 py-2 rounded-md font-semibold hover:bg-blue-800 transition-all duration-200" type="submit" name="confirm_booking_btn">
                Confirm Booking
              </button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </section>
</main>

<?php include "includes/footer.php" ?>
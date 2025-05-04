<!-- Head -->
<?= loadPartial('head'); ?>

<!-- Nav -->
<?= loadPartial('navbar'); ?>

<!-- Recipes -->
<section>
  <div class="container mx-auto p-4 mt-4">
    <div class="text-center text-3xl mb-4 font-bold border border-gray-300 p-3 shadow-md">All Recipes</div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">

      <!-- Recipe 1: Chicken Dinner -->
      <div class="rounded-lg shadow-md bg-white">
        <div class="p-4">
          <div class='img-container mx-auto'>
            <img class="img-size" src="../images/chicken_dinner.jpg" alt="">
          </div>
          <h2 class="text-xl font-semibold mb-2 mt-2 text-center">Chicken Dinner</h2>
          <a href="details.html"
            class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-white bg-gray-300 hover:bg-gray-300">
            Details
          </a>
        </div>
      </div>

      <!-- Recipe 2: Pot Roast -->
      <div class="rounded-lg shadow-md bg-white">
        <div class="p-4">
          <div class='img-container mx-auto'>
            <img class="img-size" src="../images/chicken_dinner.jpg" alt="">
          </div>
          <h2 class="text-xl font-semibold text-center mb-2 mt-2">Pot Roast</h2>
          <a href="details.html"
            class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-white bg-gray-300 hover:bg-gray-300">
            Details
          </a>
        </div>
      </div>

      <!-- Recipe 3: Lasagna -->
      <div class="rounded-lg shadow-md bg-white">
        <div class="p-4">
          <div class='img-container mx-auto'>
            <img class="img-size" src="../images/chicken_dinner.jpg" alt="">
          </div>
          <h2 class="text-xl font-semibold text-center mb-2 mt-2">Lasagna</h2>
          <a href="details.html"
            class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-white bg-gray-300 hover:bg-gray-300">
            Details
          </a>
        </div>
      </div>

      <!-- Recipe 4: All Star Steak Dinner -->
      <div class="rounded-lg shadow-md bg-white">
        <div class="p-4">
          <div class='img-container mx-auto'>
            <img class="img-size" src="../images/chicken_dinner.jpg" alt="">
          </div>
          <h2 class="text-xl font-semibold text-center mb-2 mt-2">All Star Steak Dinner</h2>
          <a href="details.html"
            class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-indigo-700 text-white bg-gray-300 hover:bg-gray-300">
            Details
          </a>
        </div>
      </div>

      <!-- Recipe 5: Tuna Casserole -->
      <div class="rounded-lg shadow-md bg-white">
        <div class="p-4">
          <div class='img-container mx-auto'>
            <img class="img-size" src="../images/chicken_dinner.jpg" alt="">
          </div>
          <h2 class="text-xl font-semibold text-center mb-2 mt-2">Tuna Casserole</h2>
          <a href="details.html"
            class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-indigo-700 text-white bg-gray-300 hover:bg-gray-300">
            Details
          </a>
        </div>
      </div>

      <!-- Recipe 6: Mac n Cheese -->
      <div class="rounded-lg shadow-md bg-white">
        <div class="p-4">
          <div class='img-container mx-auto'>
            <img class="img-size" src="../images/chicken_dinner.jpg" alt="">
          </div>
          <h2 class="text-xl font-semibold text-center mb-2 mt-2">Mac n Cheese</h2>
          <a href="details.html"
            class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-indigo-700 text-white bg-gray-300 hover:bg-gray-300">
            Details
          </a>
        </div>
      </div>

</section>

<!-- Bottom Banner -->
<?= loadPartial('bottom-banner'); ?>

<!-- Footer -->
<?= loadPartial('footer'); ?>
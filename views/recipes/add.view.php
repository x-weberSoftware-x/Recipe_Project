<!-- Head -->
<?= loadPartial('head'); ?>
<!-- Nav -->
<?= loadPartial('navbar'); ?>

<!-- Add a Recipe Form Box -->
<section class="flex justify-center items-center mt-20">
      <div class="bg-white p-8 rounded-lg shadow-md w-full md:w-600 mx-6">
        <h2 class="text-4xl text-center font-bold mb-4">Add A Recipe</h2>
        <!-- <div class="message bg-red-100 p-3 my-3">This is an error message.</div>
        <div class="message bg-green-100 p-3 my-3">
          This is a success message.
        </div> -->
        <form method="POST">
          <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">
            Recipe Info
          </h2>
          <div class="mb-4">
            <input
              type="text"
              name="name"
              placeholder="Name"
              class="w-full px-4 py-2 border rounded focus:outline-none"
            />
          </div>
          <div class="mb-4">
            <textarea
              name="ingredients"
              placeholder="Ingredients and Measurements ( sperate with a , )"
              class="w-full px-4 py-2 border rounded focus:outline-none"
            ></textarea>
          </div>
          <div class="mb-4">
            <textarea
              name="instructions"
              placeholder="Instructions"
              class="w-full px-4 py-2 border rounded focus:outline-none"
            ></textarea>
          </div>
          <div class="mb-4">
            <input
              type="text"
              name="type"
              placeholder="Recipe Type"
              class="w-full px-4 py-2 border rounded focus:outline-none"
            />
          </div>
         
          <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">
            Upload an Image
          </h2>
          <div class="mb-4">
            <input
              type="text"
              name="image"
              placeholder="Placeholder for image upload functionality"
              class="w-full px-4 py-2 border rounded focus:outline-none"
            />
          </div>
          <button
            class="w-full bg-green-500 hover:bg-green-600 text-white px-4 py-2 my-3 rounded focus:outline-none"
          >
            Save
          </button>
          <a
            href="/"
            class="block text-center w-full bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded focus:outline-none"
          >
            Cancel
          </a>
        </form>
      </div>
    </section>


<!-- Bottom Banner -->
<?= loadPartial('bottom-banner'); ?>
<!-- Footer -->
<?= loadPartial('footer'); ?>
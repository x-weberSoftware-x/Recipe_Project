<section
  class="showcase relative bg-cover bg-center bg-no-repeat h-72 flex items-center">
  <div class="overlay"></div>
</section>

<section class="bg-gray-900 text-white py-2.5 text-center">
  <div class="container mx-auto text-center z-10">
    <h2 class="text-4xl text-white font-bold mb-4">Search your Recipes</h2>
    <form class="mb-4 block mx-5 md:mx-auto">
      <input
        type="text"
        name="recipe-type"
        placeholder="Recipe Type"
        class="w-full md:w-auto mb-2 px-4 py-2 focus:outline-none" />
      <input
        type="text"
        name="ingredients"
        placeholder="Ingredients"
        class="w-full md:w-auto mb-2 px-4 py-2 focus:outline-none" />
      <button
        class="w-full md:w-auto bg-yellow-500 hover:bg-yellow-600 text-black px-4 py-2 focus:outline-none">
        <i class="fa fa-search"></i> Search
      </button>
    </form>
  </div>
  <a href="recipes.html" class="block text-l text-center mb-6">
    <i class="fa fa-arrow-alt-circle-right"></i>
    Show All Recipes
  </a>

</section>
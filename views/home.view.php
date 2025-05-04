<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/style.css" />
  <title>The Recipe Room</title>
</head>

<body class="bg-gray-100">
  <!-- Nav -->
  <header class="bg-gray-900 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
      <h1 class="text-3xl font-semibold">
        <a href="index.html">The Recipe Room</a>
      </h1>
      <nav class="space-x-4">
        <a href="login.html" class="text-white hover:underline">Login</a>
        <a href="register.html" class="text-white hover:underline">Register</a>
        <a
          href="add-recipe.html"
          class="bg-yellow-500 hover:bg-yellow-600 text-black px-4 py-2 rounded hover:shadow-md transition duration-300"><i class="fa fa-edit"></i> Add a Recipe</a>
      </nav>
    </div>
  </header>

  <!-- Showcase -->
  <section
    class="showcase relative bg-cover bg-center bg-no-repeat h-72 flex items-center">
    <div class="overlay"></div>
  </section>

  <!-- Top Banner -->
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

  <!-- Favorite Recipes -->
  <section>
    <div class="container mx-auto p-4 mt-4">
      <div class="text-center text-3xl mb-4 font-bold border border-gray-300 p-3 shadow-md">Favorite Recipes</div>
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
  <section class="container mx-auto my-6">
    <div
      class="bg-gray-900 text-white rounded p-4 flex items-center justify-between">
      <div>
        <h2 class="text-xl font-semibold">Want more recipes?</h2>
        <p class="text-gray-200 text-lg mt-2">
          Adding new recipes is nice and easy.
        </p>
      </div>
      <a
        href="add-recipe.html"
        class="bg-yellow-500 hover:bg-yellow-600 text-black px-4 py-2 rounded hover:shadow-md transition duration-300">
        <i class="fa fa-edit"></i> Add a Recipe
      </a>
    </div>
  </section>

</body>

</html>
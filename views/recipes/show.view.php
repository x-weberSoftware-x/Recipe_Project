<!-- Head -->
<?= loadPartial('head'); ?>

<!-- Nav -->
<?= loadPartial('navbar'); ?>

<section class="container mx-auto p-4 mt-4">
  <div class="rounded-lg shadow-md bg-white p-3">
    <div class="flex justify-between items-center">
      <a class="block p-4 text-blue-700" href="/listings">
        <i class="fa fa-arrow-alt-circle-left"></i>
        Back To Recipes
      </a>
      <div class="flex space-x-4 ml-4">
        <a href="/edit" class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded">Edit</a>
        <!-- Delete Form -->
        <form method="POST">
          <button type="submit" class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded">Delete</button>
        </form>
        <!-- End Delete Form -->
      </div>
    </div>
    <div style="display: grid; grid-template-columns: 30% 70%">
      <div>
        <img src="images/chicken_dinner.jpg" alt="chicken dinner">
      </div>
      <div style="padding-left: 1.5rem;">
        <div class="p-4">
          <h2 class="text-xl font-bold"><?= $recipe->name ?></h2>
        </div>
        <h2 class="text-l font-semibold mb-4">Ingredients</h2>
        <ul class="my-4 bg-gray-100 p-4 rounded-lg">
          <?php foreach ($ingredients as $ingredient): ?>
            <li class="mb-2"><?= $ingredient ?></li>
          <?php endforeach ?>
        </ul>

        <h2 class="text-l font-semibold mb-4">Instructions</h2>
        <div class="rounded-lg bg-gray-100 p-4">
          <p>
            <?= $recipe->instructions ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- Bottom Banner -->
<?= loadPartial('bottom-banner'); ?>

<!-- Footer -->
<?= loadPartial('footer'); ?>
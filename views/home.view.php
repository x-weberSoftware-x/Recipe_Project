<!-- Head -->
<?= loadPartial('head'); ?>

<!-- Nav -->
<?= loadPartial('navbar'); ?>

<!-- Showcase/Search -->
<?= loadPartial('showcase-search'); ?>

<!-- Favorite Recipes -->
<section>
  <div class="container mx-auto p-4 mt-4">
    <div class="text-center text-3xl mb-4 font-bold border border-gray-300 p-3 shadow-md">Favorite Recipes</div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">

      <!-- Loop through Favorited recipes -->
      <!-- we can grab recipes like this because we extracted it in the loadview function in helpers.php -->
      <?php foreach ($recipes as $recipe): ?>
        <div class="rounded-lg shadow-md bg-white">
          <div class="p-4">
            <div class='img-container mx-auto'>
              <img class="img-size" src="../images/chicken_dinner.jpg" alt="">
            </div>
            <!-- we are fetching as an object so we grab the value by using the ->field name in db -->
            <h2 class="text-xl font-semibold mb-2 mt-2 text-center"><?= $recipe->name ?></h2>
            <a href="/recipe?id=<?= $recipe->id ?>"
              class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-white bg-gray-300 hover:bg-gray-300">
              Details
            </a>
          </div>
        </div>
      <?php endforeach ?>
      
    </div>
</section>

<!-- Bottom Banner -->
<?= loadPartial('bottom-banner'); ?>

<!-- Footer -->
<?= loadPartial('footer'); ?>
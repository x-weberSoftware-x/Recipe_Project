<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){

  $dir = "/uploads/{$_POST['name']}";
  mkdir($dir, 0777, true);

  //image upload code
  inspect($_FILES);
  $target_file = $dir . basename($_FILES["image"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
  
  // Check if image file is a actual image or fake image
  if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }
  }
  
  // Check if file already exists
  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }
  
  // Check file size
  if ($_FILES["image"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }
  
  // Allow certain file formats
  if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"
  ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }
  
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
      echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }
}

?>

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
    <form method="POST" enctype="multipart/form-data">
      <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">
        Recipe Info
      </h2>
      <div class="mb-4">
        <input
          type="text"
          name="name"
          placeholder="Name"
          class="w-full px-4 py-2 border rounded focus:outline-none" />
      </div>
      <div class="mb-4">
        <textarea
          name="ingredients"
          placeholder="Ingredients and Measurements ( seperate with a , )"
          class="w-full px-4 py-2 border rounded focus:outline-none"></textarea>
      </div>
      <div class="mb-4">
        <textarea
          name="instructions"
          placeholder="Instructions"
          class="w-full px-4 py-2 border rounded focus:outline-none"></textarea>
      </div>
      <div class="mb-4">
        <input
          type="text"
          name="type"
          placeholder="Recipe Type"
          class="w-full px-4 py-2 border rounded focus:outline-none" />
      </div>

      <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">
        Upload an Image
      </h2>
      <div class="mb-4">
        <input
          type="file"
          name="image"
          id="image"
          class="w-full px-4 py-2 border rounded focus:outline-none" />
      </div>
      <button
        class="w-full bg-green-500 hover:bg-green-600 text-white px-4 py-2 my-3 rounded focus:outline-none">
        Save
      </button>
      <a
        href="/"
        class="block text-center w-full bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded focus:outline-none">
        Cancel
      </a>
    </form>
  </div>
</section>


<!-- Bottom Banner -->
<?= loadPartial('bottom-banner'); ?>
<!-- Footer -->
<?= loadPartial('footer'); ?>
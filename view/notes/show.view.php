<?php require(base_path('view/partial/header.php')) ?>
<?php require(base_path('view/partial/nav.php')) ?>
<?php require(base_path('view/partial/banner.php')) ?>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <div class="mb-6">
        <a href="/notes" class="text-blue-500 text-sm mb-6">Back</a>
        <h1 class="text-gray-600 text-xl mb-3"><?= htmlspecialchars( $note['title']) ?></h1>
        <p class="text-gray-800"><?= htmlspecialchars($note['description']) ?></p>
      </div>
    </div>
  </main>
  <?php require(base_path('view/partial/footer.php')) ?>

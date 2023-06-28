<?php require(base_path('view/partial/header.php')) ?>
<?php require(base_path('view/partial/nav.php')) ?>
<?php require(base_path('view/partial/banner.php')) ?>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

    <a href="/note/create" class="text-blue-600 text-xl mb-5 hover:text-blue-700">Create</a>

    <?php foreach($notes as $note): ?>
      <div class="mb-6">
        <a href="/note?id=<?= $note['id'] ?>" class="text-gray-600 text-xl mb-3 hover:text-blue-700"><?= htmlspecialchars($note['title'])  ?></a>
      </div>
        <?php endforeach; ?>
    </div>
  </main>
  <?php require(base_path('view/partial/footer.php')) ?>
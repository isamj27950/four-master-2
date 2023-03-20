<a href="product.php">
  <div class="w-[300px] bg-white rounded-[20px] shadow-md">
    <!-- box image -->
    <div class="h-[14rem]">
      <img src="<?= $product['image'] ?>" alt="gateau au yaourt" class="w-full h-full object-cover" />
    </div>
    <!-- card body -->
    <div class="px-[30px] py-[20px]">
      <h3 class="pb-[15px]"><?= $product['title'] ?></h3>
      <div class="pb-[12px]">
        <p>
          <?= $product['description'] ?>
        </p>
      </div>
      <div class="flex justify-between items-center text-gray-light">
        <p><span><?= $product['avis'] ?></span> avis</p>
        <p class="text-right text-sm">
          Note : <span class="text-bold-700"><?= $product['note'] ?>/5</span>
        </p>
      </div>
    </div>
  </div>
</a>
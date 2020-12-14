


   <p id="catalog_head">Каталог</p>
<?php foreach ($goods as $good): ?>
    
    <div id="catalog">
        <div id="catalog_item">

          <img src="<?php echo $good['img']; ?>"/>
          <p id="item_title">  <?php echo $good['name']; ?></p>
         <p id="item_price">   <?php echo $good['price']; ?></p>
           
            <button onclick="window.location.href = 'index.php?page=product&id=<?php echo $good['id']; ?>'">Купить</button>
        </div>
        </div>

       
    <?php endforeach; ?>
 
   
    
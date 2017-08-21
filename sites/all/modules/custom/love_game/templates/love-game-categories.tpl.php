<?php  
	/**
	 * @file
	 * Love Game Categories template
	 *
	 * Variables:
	 * - $categories : An array with categories.
	 */
?>

<div class="twosec_mini_categories">
  <div class="container">
    <div class="row">
      
    <?php for ($i = 1; $i < 5; $i++): ?>
      <div class="col s12 m6 l3">
       
        <?php foreach ($categories as $category): ?>
        	<?php if ($category['position'] == $i): ?>
        
		        <ul data-collapsible="accordion" class="collapsible popout">
		          <li>
		            <div class="collapsible-header">
		              <div class="textatimg">
		                <p class="center"><?php print $category['name']; ?></p>
		              </div>
		              <img src="<?php print $category['image']; ?>">
		            </div>
		            <div class="collapsible-body">
		            	
		            	<?php foreach ($category['children'] as $tid => $name): ?>
			            	<a href="catalog?cat_default=<?php print $tid; ?>">
			            		<p><?php print $name; ?></p>
			            	</a>
        					<?php endforeach; ?>
                
                </div>
		          </li>
		        </ul>

        	<?php endif; ?>
        <?php endforeach; ?>
        
      </div>
  		<?php endfor; ?>

    </div>
  </div>
</div>
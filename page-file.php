<?php /*Template Name: File */

 get_header(); ?>

<main class="file">
<section class="top top__offer">
    <div class="top__inner">
      <div class="top__container container">
        <h1 class="top__title"><?php if (ICL_LANGUAGE_CODE == "pl") {
             echo "Pliki do pobrania";
             } elseif (ICL_LANGUAGE_CODE == "en") {
                echo "Files to download";
             } elseif (ICL_LANGUAGE_CODE == "de") {
                echo "Dateien zum Herunterladen";
             } ?></h1>
      </div>
    </div>
</section>
<div class="book__container">
<?php echo do_shortcode('[dflip id="3595"][/dflip]')?>
</div>
  <div class="file__inner">
    <div class="file__container container">

		<div class="file__menu" >
			<?php if( have_rows('file__menu') ): 
				$i = 0;
			?>
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<?php while( have_rows('file__menu') ): the_row(); ?>
						<li class="nav-item <?php if($i == 0): ?>active<?php endif; ?>">
              <a data-toggle="tab" href="<?php echo "#item-".$i; ?>" class="custom__item-link">
                <?php the_sub_field('file__menu-item')?>
							</a>
		  			</li>
					<?php
					$i++;
					endwhile; 	$i = 0;?>
				</ul>
			<?php else :  ?>
			<p>Empty section_resources</p>
			<?php endif; ?>
    </div>
    
    

		<div class="file__items" >
			<?php if( have_rows('file__items') ): 
				$i = 0;
			?>
				<div class="tab-content row" id="myTabContent">
					<?php while( have_rows('file__items') ): the_row(); ?>
            
          <div class="tab-pane fade<?php if($i == 0): ?> active in <?php endif; ?>" id="<?php echo "item-".$i; ?>" role="tabpanel">
            <div class="file__items-container">
			        <?php if( have_rows('file__item') ): ?>
                <?php while( have_rows('file__item') ): the_row(); ?>
                <div class="file__item-container">
                  <img src="<?php the_sub_field('file__image')?>" alt="" class="file__image">
                  <div class="file__buttons" >
                    <h2 class="file__item-title"><?php the_sub_field('file__item-title')?></h2>
			              <?php if( have_rows('file__buttons') ): ?>
					          <?php while( have_rows('file__buttons') ): the_row(); ?>
                      <a href="<?php the_sub_field('file__button-link')?>" class="file__btn"><?php the_sub_field('file__button-text')?></a>
					          <?php
					          endwhile;?>	
			              <?php endif; ?>
                  </div>
                </div>
					      <?php
                endwhile;?>	
                <?php endif; ?>
              </div>
		        </div>

					<?php
					$i++;
					endwhile; 	$i = 0;?>
				</div>		
			<?php endif; ?>
		</div>

    </div>
  </div>
</main>
<?php
get_footer();
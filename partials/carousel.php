<section id="sinlge-carousel">
        <?php $imgs = get_field('slider_gallery'); if( $imgs ): ?>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?php foreach( $imgs as $img ): ?>
                        <div class="item ">
                            <img src="<?php echo $img['sizes']['large']; ?>" alt="<?php echo $img['alt']; ?>">
                        </div>
                    <?php endforeach; ?>
                </div>
        <?php endif; ?>
    </div>
</section>



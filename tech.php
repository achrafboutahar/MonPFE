<!-- Start Client section -->
<section class="client gray-bg section-padding" id="technologies">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tamai-header text-center">
                    <h2>Techno<span>logies</span></h2>
                </div>
            </div>
        </div>
        <div class="row responsive owl-carousel">

            <?php
                $dirname = "assets/img/technologies/";
                $images = glob($dirname."*.jpg");
                
            ?>

            <?php foreach($images as $image): ?>
            <?php $name = basename($image, ".jpg"); ?>
            <a href="https://www.google.com/search?q=<?=$name?>" target="_blank">
                <div class="client-area text-center">
                    <div class="client-img">
                        <img style="width: 60px; height:auto;" src="<?=$image?>" alt="<?=strtoupper($name)?>">
                    </div>
                </div>
                <h6 class="text-center mt-3" style="color:#6c757d;"><?=strtoupper($name)?></h6>
            </a>
            <?php endforeach; ?>

        </div>

        <!-- <div class="text-center mt-5">
            <a href="#" class="tamai-btn">Plus...</a>
        </div> -->

    </div>
</section>
<!-- End Client section -->
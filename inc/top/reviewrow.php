<?php if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}?>
<?php 
	$rating_circle = $row['top_review_circle'];		    
?>
<?php if ('product' == get_post_type(get_the_ID())) :?>
    <?php $rating_score_clean  = get_post_meta($post->ID, 'rehub_review_overall_score', true);?>
<?php else:?>
    <?php $rating_score_clean = rehub_get_overall_score(); ?>
<?php endif ;?>

<?php if($rating_score_clean):?>
    <div class="rating_col">
    <?php if ($rating_circle =='1'):?>
        <div class="top-rating-item-circle-view">
        <div class="radial-progress" data-rating="<?php echo ''.$rating_score_clean?>">
            <div class="circle">
                <div class="mask full">
                    <div class="fill"></div>
                </div>
                <div class="mask half">
                    <div class="fill"></div>
                    <div class="fill fix"></div>
                </div>
                
            </div>
            <div class="inset">
                <div class="percentage"><?php echo ''.$rating_score_clean?></div>
            </div>
        </div>
        </div>
    <?php elseif ($rating_circle =='2') :?> 
        <div class="rehub_rating_row">
            <div class="star-big"><span class="stars-rate"><span style="width: <?php echo ''.$rating_score_clean * 10 ;?>%;"></span></span></div>
        </div>  
    <?php elseif ($rating_circle =='0') :?> 
        <div class="score"> <span class="it_score"><?php echo ''.$rating_score_clean ?></span></div>          
    <?php else :?>
        <div class="rehub_rating_row">
            <div class="star-big"><span class="stars-rate"><span style="width: <?php echo ''.$rating_score_clean * 10 ;?>%;"></span></span></div>
        </div>  
    <?php endif ;?>
    <a href="<?php the_permalink();?>" class="read_full" target="_blank"><?php if(rehub_option('rehub_review_text') !='') :?><?php echo rehub_option('rehub_review_text') ; ?><?php else :?><?php esc_html_e('Read review', 'rehub-theme'); ?><?php endif ;?></a>
    </div>
<?php endif ;?>
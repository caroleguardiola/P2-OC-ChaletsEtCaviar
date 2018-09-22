<?php
/*
 * Single Property Template: Expanded
 *
 * @package     EPL
 * @subpackage  Templates/Content
 * @copyright   Copyright (c) 2015, Merv Barrett
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class( 'epl-listing-single epl-property-single view-expanded' ); ?>>
	<div class="entry-header epl-header epl-clearfix">

		<div class="title-meta-wrapper">
		
			<div class="title-meta-wrapper-1"><!--création d'un div-->
			<div class="entry-col epl-property-details property-details">
			
				<?php do_action('epl_property_before_title'); ?>
				<h3 class="entry-title">
					<?php do_action('epl_property_heading'); ?> <!--titre modifié à la place de epl-property-title-->
				</h3>
				<?php do_action('epl_property_after_title'); ?>

			</div>

			<div class="entry-col property-pricing-details">

				<?php do_action('epl_property_price_before'); ?>
				<div class="epl-property-meta property-meta pricing">
					<?php do_action('epl_property_price'); ?>
				</div>
				<?php do_action('epl_property_price_after'); ?>
				<div class="epl-property-featured-icons property-feature-icons epl-clearfix">
					<?php do_action('epl_property_icons'); ?>
				</div>
			</div>

			</div>



		</div>
	</div>

	

	<div class="entry-content epl-content epl-clearfix">
	<div class="epl_property_featured_image">
		<?php do_action( 'epl_property_featured_image' ); ?>
	</div>

	


	<div class="epl_property_gallery">
		<?php do_action( 'epl_property_gallery' ); ?>
	</div>

	<!--texte rajouter en dur :-->
	<div class="accroche_annonce">
	<span style="font-size: 20pt;" >Ce chalet vous intéresse ou vous avez des questions ? N'hésitez pas ... </span>

	<span style="font-size: 20pt;"><strong><a href="http://chaletsetcaviar.caroleguardiola.com/nous-contacter/" class="roll-button more-button">contactez-nous</a></strong></span>
	</div>


	<div class="epl-tab-section epl-section-description">
				<h5 class="epl-tab-title tab-title"><?php echo apply_filters('epl_property_tab_title_description',__('Description', 'easy-property-listings' )); ?></h5>
				<div class="epl-tab-content tab-content">
					<!-- heading -->
					<h3 class="entry-title"><?php do_action('epl_property_heading'); ?></h3> <!--titre modifié en h3 au lieu de h2-->

					<h5 class="secondary-heading"><?php do_action('epl_property_secondary_heading'); ?></h5> <!--titre modifié en h5 au lieu de h3-->
					<?php
						do_action('epl_property_content_before');

						do_action('epl_property_the_content');

						do_action('epl_property_content_after');
					?>
				</div>
			</div>

			
		<?php do_action('epl_property_tab_section'); ?>
		
		<?php do_action( 'epl_buttons_single_property' ); ?>

		
			
		<!-- caractérisiques supprimés-->
			
			

			<?php do_action('epl_property_tab_section_before'); ?>
			
			<?php do_action('epl_property_tab_section_after'); ?>

			

			<?php do_action( 'epl_property_map' ); ?>

			<?php do_action( 'epl_single_extensions' ); ?>

			<?php do_action( 'epl_single_before_author_box' ); ?>
			<?php do_action( 'epl_single_author' ); ?>
			<?php do_action( 'epl_single_after_author_box' ); ?>
		</div>
	</div>
	<!-- categories, tags and comments -->
	<div class="entry-footer epl-clearfix">
		<div class="entry-meta">
			<?php wp_link_pages( array( 'before' => '<div class="entry-utility entry-pages">' . __( 'Pages:', 'easy-property-listings'  ) . '', 'after' => '</div>', 'next_or_number' => 'number' ) ); ?>
		</div>
	</div>
</div>
<!-- end property -->

<div id="buddypress">

	<div id="item-header" role="complementary">

		<?php
		/**
		 * If the cover image feature is enabled, use a specific header
		 */
		if ( bp_displayed_user_use_cover_image_header() ) :
			bp_get_template_part( 'members/single/cover-image-header' );
		else :
			bp_get_template_part( 'members/single/member-header' );
		endif;
		?>

		<?php // bp_get_displayed_user_nav(); ?>


	</div><!-- #item-header -->

	<div class="row">

		<div id="profile-sidebar" class="col-xs-12 col-sm-3 col-lg-3">

			<div id="item-nav">
				<div class="item-list-tabs menu-type-tabs" id="object-nav" role="navigation">
					<ul class="user-nav" role="tablist">

						<?php bp_get_displayed_user_nav(); ?>

					</ul>
				</div>
			</div><!-- #item-nav -->

		</div>

		<div id="item-body" role="main" class="col-xs-12 col-sm-9 col-lg-9">

			<?php

			if ( bp_is_user_activity() || !bp_current_component() ) :
				bp_get_template_part( 'members/single/activity' );

			elseif ( bp_is_user_blogs() ) :
				bp_get_template_part( 'members/single/blogs'    );

			elseif ( bp_is_user_friends() ) :
				bp_get_template_part( 'members/single/friends'  );

			elseif ( bp_is_user_groups() ) :
				bp_get_template_part( 'members/single/groups'   );

			elseif ( bp_is_user_messages() ) :
				bp_get_template_part( 'members/single/messages' );

			elseif ( bp_is_user_profile() ) :
				bp_get_template_part( 'members/single/profile'  );

			elseif ( bp_is_user_forums() ) :
				bp_get_template_part( 'members/single/forums'   );

			elseif ( bp_is_user_notifications() ) :
				bp_get_template_part( 'members/single/notifications' );

			elseif ( bp_is_user_settings() ) :
				bp_get_template_part( 'members/single/settings' );

			// If nothing sticks, load a generic template
			else :
				bp_get_template_part( 'members/single/plugins'  );

			endif;

			 ?>

		</div><!-- #item-body -->

	</div>

</div><!-- #buddypress -->

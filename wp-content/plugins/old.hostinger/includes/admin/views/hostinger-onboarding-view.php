<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/** @var Hostinger_Onboarding $onboarding_steps */
$onboarding_steps  = $onboarding;
$content           = $onboarding_steps->get_content();
$remaining_tasks   = 0;

/** @var Hostinger_Onboarding_Step $step */
foreach ( $onboarding_steps->get_steps() as $step ) {
	$remaining_tasks = ! $step->completed() ? ++ $remaining_tasks : $remaining_tasks;
}
$videoArray = [
	[
		'id'       => 'WkbQr5dSGLs',
		'title'    => __( 'How to Add Your WordPress Website to Google Search Console', 'hostinger' ),
		'duration' => '4:24'
	],
	[
		'id'       => 'PDGdAjmgN3Y',
		'title'    => __( 'How to Create a WordPress Contact Us Page', 'hostinger' ),
		'duration' => '2:48'
	],
	[
		'id'       => '4NxiM_VXFuE',
		'title'    => __( 'How to Clear Cache in WordPress Website', 'hostinger' ),
		'duration' => '3:21'
	],
	[
		'id'       => 'WHXtmEppbn8',
		'title'    => __( 'How to Edit the Footer in WordPress', 'hostinger' ),
		'duration' => '6:27'
	],
	[
		'id'       => 'drC7cgDP3vU',
		'title'    => __( 'LiteSpeed Cache: How to Get 100% WordPress Optimization', 'hostinger' ),
		'duration' => '13:29'
	],
	[
		'id'       => 'WdmfWV11VHU',
		'title'    => __( 'How to Back Up a WordPress Site', 'hostinger' ),
		'duration' => '8:26'
	],
	[
		'id'       => 'YK-XO7iLyGQ',
		'title'    => __( 'How to Import Images Into WordPress Website', 'hostinger' ),
		'duration' => '1:44'
	],
	[
		'id'       => 'suvkDYwTCfg',
		'title'    => __( 'How to Set Up WordPress SMTP', 'hostinger' ),
		'duration' => '2:30'
	],
];
?>
<div class="hsr-onboarding-navbar">
	<div class="hsr-onboarding-navbar__wrapper">
		<ul class="hsr-wrapper__list">
			<li class="hsr-list__item hsr-active hts-home-tab" data-name="home"><?php _e( 'Get started', 'hostinger' ); ?></li>
			<li class="hsr-list__item hts-learn-tab" data-name="learn"><?php _e( 'Learn', 'hostinger' ); ?></li>
			<?php if( has_action('hostinger_ai_assistant_tab_view') && current_user_can('edit_posts') ) : ?>
				<li class="hsr-list__item hts-ai-assistant-tab" data-name="ai-assistant">
					<svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M18.3 8.1251L17.225 5.6251L14.625 4.4751L17.225 3.3501L18.3 0.975098L19.375 3.3501L21.975 4.4751L19.375 5.6251L18.3 8.1251ZM18.3 23.0001L17.225 20.6001L14.625 19.4751L17.225 18.3501L18.3 15.8251L19.375 18.3501L21.975 19.4751L19.375 20.6001L18.3 23.0001ZM7.325 19.1501L5.025 14.2251L0 11.9751L5.025 9.7251L7.325 4.8251L9.65 9.7251L14.65 11.9751L9.65 14.2251L7.325 19.1501Z" fill="#673DE6"/>
					</svg>
					<?php _e( 'AI assistant', 'hostinger' ); ?>
				</li>
			<?php endif; ?>
		</ul>
	</div>
</div>

<div class="hostinger hsr-onboarding">
	<h2 class="hsr-onboarding__title"><?php echo $content['title']; ?></h2>
	<p class="hsr-onboarding__description"><?php echo $content['description']; ?></p>
	<div data-remaining-tasks="<?php echo $remaining_tasks ?>" class="hsr-onboarding-steps">
		<?php
		$can_open_accordion = true;
		/** @var Hostinger_Onboarding_Step $step */
		foreach ( $onboarding_steps->get_steps() as $step ) : ?>
			<div class="hsr-onboarding-step <?php echo $step->step_identifier() ?>">
				<div class="hsr-onboarding-step--title">
					<?php $completed_class = $step->completed() ? 'completed' : ''; ?>
					<span class="hsr-onboarding-step--status <?php echo $completed_class ?>"></span>
					<h4><?php echo $step->get_title() ?></h4>
					<?php
					$class_name = '';
					if ( $can_open_accordion && ! $step->completed() ) {
						$class_name         = 'open';
						$can_open_accordion = false;
					}
					?>
					<div class="hsr-onboarding-step--expand <?php echo $class_name ?>"></div>
				</div>
				<div class="hsr-onboarding-step--content <?php echo $class_name ?>">
					<?php foreach ( $step->get_body() as $key => $item ) : ?>
						<?php $counter = $key + 1; ?>
						<div class="hsr-onboarding-step--body">
							<span class='hsr-onboarding-step--body__counter'><?php echo $counter ?></span>
							<div class="hsr-onboarding-step--body__content">
								<div class="hsr-onboarding-step--body__title">
									<h4><?php echo $item['title'] ?></h4>
								</div>
								<p><?php echo $item['description'] ?></p>
							</div>
						</div>
					<?php endforeach; ?>
					<div class="hsr-onboarding-step--footer">
						<a data-step="<?php echo $step->step_identifier() ?>"
						   class="hsr-btn hsr-secondary-btn hsr-got-it-btn"
						   href="#"><?php _e( 'Got it!', 'hostinger' ); ?></a>
						<a class="hsr-btn hsr-primary-btn"
						   id="hst-<?php echo $step->step_identifier() ?>"
						   rel="noopener noreferrer"
						   href="<?php echo $step->get_redirect_link() ?>">
							<?php echo $step->button_text() ?>
						</a>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
		<?php
		$preview_btn = ! $onboarding_steps->maintenance_mode_enabled() ? 'hsr-preview' : '';
		$completed   = $remaining_tasks === 0 ? 'completed' : '';
		?>
		<a class="hsr-btn hsr-primary-btn hsr-no-bg-btn hsr-publish-btn <?php echo $completed; ?> <?php echo $preview_btn ?>"
		   href="<?php echo $content['btn']['url']; ?>"><?php echo $content['btn']['text']; ?></a>
		<a target="_blank" class="hsr-btn hsr-primary-btn hsr-no-bg-btn hsr-preview-btn <?php echo $preview_btn; ?>"
		   href="<?php echo home_url() ?>"><?php echo $content['btn']['text']; ?></a>
	</div>
	<div class="hsr-modal hsr-publish-modal">
		<div class="hsr-publish-overlay"></div>
		<div class="hsr-publish-modal--body">
			<div class="hsr-circular">
				<svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd"
					      d="M48 24C48 37.2548 37.2548 48 24 48C10.7452 48 0 37.2548 0 24C0 10.7452 10.7452 0 24 0C37.2548 0 48 10.7452 48 24ZM45.3333 24C45.3333 35.7821 35.7821 45.3333 24 45.3333C12.2179 45.3333 2.66667 35.7821 2.66667 24C2.66667 12.2179 12.2179 2.66667 24 2.66667C35.7821 2.66667 45.3333 12.2179 45.3333 24Z"
					      fill="#EBE4FF"/>
					<mask id="mask0_7023_11690" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
					      width="48" height="48">
						<path fill-rule="evenodd" clip-rule="evenodd"
						      d="M48 24C48 37.2548 37.2548 48 24 48C10.7452 48 0 37.2548 0 24C0 10.7452 10.7452 0 24 0C37.2548 0 48 10.7452 48 24ZM45.3333 24C45.3333 35.7821 35.7821 45.3333 24 45.3333C12.2179 45.3333 2.66667 35.7821 2.66667 24C2.66667 12.2179 12.2179 2.66667 24 2.66667C35.7821 2.66667 45.3333 12.2179 45.3333 24Z"
						      fill="white"/>
					</mask>
					<g mask="url(#mask0_7023_11690)">
						<path d="M24 0H48V48H0.333333L0 24H24V0Z" fill="#673DE6"/>
					</g>
				</svg>
			</div>

			<div class="hsr-success-circular">
				<svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd"
					      clip-rule="evenodd"
					      d="M48 24C48 37.2548 37.2548 48 24 48C10.7452 48 0 37.2548 0 24C0 10.7452 10.7452 0 24 0C37.2548 0 48 10.7452 48 24ZM45.3333 24C45.3333 35.7821 35.7821 45.3333 24 45.3333C12.2179 45.3333 2.66667 35.7821 2.66667 24C2.66667 12.2179 12.2179 2.66667 24 2.66667C35.7821 2.66667 45.3333 12.2179 45.3333 24Z"
					      fill="#EBE4FF"/>
					<mask id="mask0_7023_11585" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
					      width="48" height="48">
						<path fill-rule="evenodd" clip-rule="evenodd"
						      d="M48 24C48 37.2548 37.2548 48 24 48C10.7452 48 0 37.2548 0 24C0 10.7452 10.7452 0 24 0C37.2548 0 48 10.7452 48 24ZM45.3333 24C45.3333 35.7821 35.7821 45.3333 24 45.3333C12.2179 45.3333 2.66667 35.7821 2.66667 24C2.66667 12.2179 12.2179 2.66667 24 2.66667C35.7821 2.66667 45.3333 12.2179 45.3333 24Z"
						      fill="white"/>
					</mask>
					<g mask="url(#mask0_7023_11585)">
						<circle cx="24" cy="24" r="24" fill="#00B090"/>
					</g>
					<mask id="mask1_7023_11585" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="15" y="17"
					      width="19" height="15">
						<path fill-rule="evenodd" clip-rule="evenodd"
						      d="M33.4438 19.0002L20.9992 31.4448L15.0547 25.5002L16.9992 23.5557L20.9992 27.5557L31.4992 17.0557L33.4438 19.0002Z"
						      fill="#00B090"/>
					</mask>
					<g mask="url(#mask1_7023_11585)">
						<path d="M17 22.5L14 25.5L21 32.5L34.5 19L31.5 16L21 26.5L17 22.5Z" fill="#00B090"/>
					</g>
				</svg>
			</div>

			<h3><?php _e( 'Publishing website', 'hostinger' ); ?></h3>
			<p class="hsr-publish-modal--body__description"><?php _e( 'This can take some time', 'hostinger' ); ?></p>
			<div class="hsr-publish-modal--footer">
				<a class="hsr-btn hsr-outline-btn hsr-close-btn" href="#"><?php _e( 'Close', 'hostinger' ); ?></a>
			</div>
		</div>
	</div>
</div>

<div class="hsr-learn-more">
	<div class="hsr-learn-page-container">
		<div class="hsr-tutorial-wrapper">
			<div class="hsr-wrapper-header">
				<div class="hsr-header-title"><?php _e( 'WordPress tutorials', 'hostinger' ) ?></div>
				<div class="hsr-header-youtube">
					<a href="https://www.youtube.com/@HostingerAcademy?sub_confirmation=1"
					   class="hsr-hostinger-youtube-link" target="_blank" rel="noopener noreferrer">
						<img class="hsr-youtube-logo"
						     src="<?php echo esc_url( HOSTINGER_ASSETS_URL . '/images/youtube-icon.svg' ); ?>"
						     alt="youtube logo">
						<div class="hsr-youtube-title"><?php _e( 'Hostinger Academy', 'hostinger' ); ?></div>
					</a>
				</div>
			</div>
			<div class="hsr-video-wrapper">
				<div class="hsr-video-content">
					<div class="hsr-main-video">
						<video
								id="hts-video-player"
								class="video-js vjs-big-play-centered vjs-default-skin"
								controls
								preload="auto"
								fluid="true"
								poster="//img.youtube.com/vi/WkbQr5dSGLs/maxresdefault.jpg"
								data-setup='{"techOrder": ["youtube"], "sources": [{
      "type": "video/youtube", "src":
      "https://www.youtube.com/watch?v=WkbQr5dSGLs"}] }'
						>
					</div>
					<div class="hsr-main-video-info">
						<div class="hsr-main-video-title">
							<?php _e( 'How to Add Your WordPress Website to Google Search Console', 'hostinger' ); ?>
						</div>
					</div>
				</div>
				<div class="hsr-hsr-playlist-wrapper">
					<div class="hsr-playlist">
						<?php
						foreach ( $videoArray as $item ) {
							?>
							<div class="hsr-playlist-item" id="hsr-playlist-item"
							     data-title="<?php echo $item['title']; ?>" data-id="<?php echo $item['id']; ?>" data-video-src="https://www.youtube.com/watch?v=<?php echo $item['id']; ?>">
								<div class="hsr-playlist-item-arrow">
									<img class="hsr-arrow-icon"
									     src="<?php echo esc_url( HOSTINGER_ASSETS_URL . '/images/play-icon.svg' ); ?>"
									     alt="play arrow">
								</div>
								<div class="hsr-playlist-item-thumbnail">
									<img class="hsr-thumbnail-image"
									     src="https://img.youtube.com/vi/<?php echo $item['id']; ?>/default.jpg"
									     alt="video thumbnail">
								</div>
								<div class="hsr-playlist-item-info">
									<div class="hsr-playlist-item-title"><?php echo $item['title']; ?></div>
									<div class="hsr-playlist-item-time"><?php echo $item['duration']; ?></div>
								</div>
							</div>
							<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="hsr-help-wrapper">
			<div class="hsr-help-card" id="card-knowledge">
				<div class="hsr-card-logo">
					<img class="hsr-logo-image"
					     src="<?php echo esc_url( HOSTINGER_ASSETS_URL . '/images/knowledge-icon.svg' ); ?>"
					     alt="knowledge image">
				</div>
				<div class="hsr-card-info">
					<div class="hsr-card-title"><?php _e( 'Knowledge Base', 'hostinger' ); ?></div>
					<div class="hsr-card-description"><?php _e( 'Find the answers you need in our Knowledge Base', 'hostinger' ); ?></div>
				</div>
			</div>
			<div class="hsr-help-card" id="card-help">
				<div class="hsr-card-logo">
					<img class="hsr-logo-image"
					     src="<?php echo esc_url( HOSTINGER_ASSETS_URL . '/images/help-icon.svg' ); ?>"
					     alt="help image">
				</div>
				<div class="hsr-card-info">
					<div class="hsr-card-title"><?php _e( 'Help Center', 'hostinger' ); ?></div>
					<div class="hsr-card-description"><?php _e( 'Get in touch with our live specialists', 'hostinger' ); ?></div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php if ( has_action( 'hostinger_ai_assistant_tab_view' ) && current_user_can( 'edit_posts' ) ) : ?>
<!--AI ASSISTANT-->
<div class="hostinger hsr-ai-assistant-tab">
	<?php do_action( 'hostinger_ai_assistant_tab_view' ); ?>
</div>
<?php endif; ?>



<?php
function icon($icon){
	$atts=shortcode_atts(
		array(
		'astrum_icon'			=>'',
		'astrum_icon_heading' 	=>'',
		'astrum_icon_desc'		=>'',
		),$icon
	);
	ob_start();
	
	
	// extract(shortcode_atts(
		// array(
		// 'astrum_icon'			=>'',
		// 'astrum_icon_heading' 	=>'',
		// 'astrum_icon_desc'		=>'',
		// ),$icon
	// ));
	// ob_start();

?>
	
	<!--<div class="featured-box">
		<div class="circle"><i class="<?php //echo esc_attr($astrum_icon);?>"></i><span></span></div>
		<div class="featured-desc">
			<h3><?php //echo esc_attr($astrum_icon_heading);?></h3>
			<p><?php //echo esc_attr($astrum_icon_desc);?></p>
		</div>
	</div>
	-->
	<div class="featured-box">
		<div class="circle"><i class="<?php echo esc_attr($atts['astrum_icon']);?>"></i><span></span></div>
		<div class="featured-desc">
			<h3><?php echo esc_attr($atts['astrum_icon_heading']);?></h3>
			<p><?php echo esc_attr($atts['astrum_icon_desc']);?></p>
		</div>
	</div>
	

<?php 
return ob_get_clean();
	
	
}

add_shortcode('icons','icon');


//recent work 

function recent($recent){
	$attsr=shortcode_atts(
		array(
		'recent_works_p'			=>'',
		
		),$recent
	);
	ob_start();
	
	// extract(shortcode_atts(
		// array(
		// 'astrum_icon'			=>'',
		// 'astrum_icon_heading' 	=>'',
		// 'astrum_icon_desc'		=>'',
		// ),$icon
	// ));
	// ob_start();

?>
	<?php 
		$args = array(
			'post_type'	=> 'recent_work',
			'posts_per_page'	=> $attsr['recent_works_p'],
		);
		$sec_query = new WP_Query( $args );

	?>
	
	<!-- Headline -->
	<div class="sixteen columns">
		<h3 class="headline">Recent Work</h3>
		<span class="line" style="margin-bottom:0;"></span>
	</div>

	<!-- ShowBiz Carousel -->
	<div id="recent-work" class="showbiz-container sixteen columns">

	<!-- Navigation -->
	<div class="showbiz-navigation">
		<div id="showbiz_left_1" class="sb-navigation-left"><i class="icon-angle-left"></i></div>
		<div id="showbiz_right_1" class="sb-navigation-right"><i class="icon-angle-right"></i></div>
	</div>
	<div class="clearfix"></div>

	<!-- Portfolio Entries -->
	<div class="showbiz" data-left="#showbiz_left_1" data-right="#showbiz_right_1">
		<div class="overflowholder">

			<ul>

				<!-- Item -->
				<?php while($sec_query->have_posts()):
					$sec_query->the_post();
				?>
				<li>
					<div class="portfolio-item media">
						<figure>
							<div class="mediaholder">
								<a href="<?php the_permalink();?>" class="mfp-gallery" title="Green Leaves">
									<?php the_post_thumbnail();?>
									<div class="hovercover">
										<div class="hovericon"><i class="hoverzoom"></i></div>
									</div>
								</a>
							</div>

							<a href="single-project-half.html">
								<figcaption class="item-description">
									<h5><?php the_title();?></h5>
									<span><?php the_content();?></span>
								</figcaption>
							</a>

						</figure>
					</div>
				</li>
				<?php endwhile;?>
				<?php wp_reset_postdata(); ?>

			</ul>
			<div class="clearfix"></div>

		</div>
		<div class="clearfix"></div>

	</div>
	</div>	
	

<?php 
return ob_get_clean();
	
	
}

add_shortcode('recent_works','recent');


// about us page heading
function heading_text_fun($heading_text_fun){
	$atts=shortcode_atts(
		array(
		'heading_text_h'	=>'',
		'heading_text_s' 	=>'',
		'heading_text_p'	=>'',
		),$heading_text_fun
	);
	ob_start();
	
?>
	
	
	<h3 class="headline"><?php echo esc_attr($atts['heading_text_h']);?></h3><span class="line" style="margin-bottom:30px;"></span><div class="clearfix"></div>
		<p><span class="<?php echo esc_attr($atts['heading_text_s']);?>">D</span><?php echo esc_attr($atts['heading_text_p']);?></p>
		
	

<?php 
return ob_get_clean();
	
	
}

add_shortcode('heading_text','heading_text_fun');


// skill
function about_skill($about_skill){
	$atts=shortcode_atts(
		array(
			'skill_col_head'=>'',
			'skill_group'	=> '',
		'skill_icon'	=>'',
		'skill_heading' 	=>'',
		'skill_bar_percent'	=>'',
		),$about_skill
	);
	ob_start();
	
?>
	
	
			<h3 class="headline"><?php echo esc_attr($atts['skill_col_head']);?></h3><span class="line" style="margin-bottom:35px;"></span><div class="clearfix"></div>

		<div id="skillzz">
		<?php //$group_skill_keys =array();?>
			<?php $group_skill_keys = vc_param_group_parse_atts( $atts['skill_group'] );
			//echo '<pre>';
			//print_r($group_skill_keys);
			//echo '</pre>';
			if(is_array($group_skill_keys)):
				foreach($group_skill_keys as $group_skill_key){ ?>
			
				<div class="skill-bar">
					<span class="skill-title"><i class="<?php echo esc_attr($group_skill_key['skill_icon']) ?>"></i> <?php echo esc_attr($group_skill_key['skill_heading']) ?></span>
					<div class="skill-bar-value" style="width: <?php echo esc_attr($group_skill_key['skill_bar_percent']) ?>%;"></div>
				</div>
				<?php }
				endif;?>
		</div>
		
	

<?php 
return ob_get_clean();
	
	
}
add_shortcode('skill','about_skill');

// service page heading
function service_head_text($service_head_text){
	$atts= shortcode_atts(array(
			'head'=>'',
			'heading_text_span'	=>'',
			'heading_text_para'	=>'',
		),$service_head_text
	);
	ob_start();
	?>
	<h3 class="headline"><?php echo esc_attr($atts['head']);?></h3><span class="line" style="margin-bottom:30px;"></span><div class="clearfix"></div>
		<p><span class="<?php echo esc_attr($atts['heading_text_span']);?>">P</span><?php echo esc_attr($atts['heading_text_para']);?></p>
		
		
	
	<?php
	return ob_get_clean();
	
}
add_shortcode('service_head','service_head_text');

// team

function our_team($our_team){
	$atts=shortcode_atts(
		array(
		'team_p'			=>'',
		
		),$our_team
	);
	ob_start();
	
?>
	<?php 
		$args = array(
			'post_type'	=> 'team',
			'posts_per_page'	=> $atts['team_p'],
		);
		$team_query = new WP_Query( $args );

	?>
	
	<div id="team" class="showbiz-container sixteen columns">
	
	<!-- Headline -->
	<h3 class="headline">Our Team</h3>
	<span class="line" style="margin-bottom:0;"></span>
		
	<!-- Navigation -->
	<div class="showbiz-navigation">
		<div id="showbiz_left_4" class="sb-navigation-left"><i class="icon-angle-left"></i></div>
		<div id="showbiz_right_4" class="sb-navigation-right"><i class="icon-angle-right"></i></div>
	</div>
	<div class="clearfix"></div>

	<!-- Entries -->
	<div class="showbiz" data-left="#showbiz_left_4" data-right="#showbiz_right_4">
		<div class="overflowholder">

			<ul>
				<?php while( $team_query->have_posts()):
					$team_query->the_post();
				?>
				<li>
					<?php the_post_thumbnail('thumbnail',array('class'=>'mediaholder team-img'));?>
					
					<div class="team-name"><h5><?the_title();?></h5> <span>Chief Executive Officer / CEO</span></div>
					<div class="team-about"><p><?php the_content();?></p></div>
					<ol class="social-icons">
						<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
						<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
						<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
					</ol>
					<div class="clearfix"></div>
				</li>
				<?php endwhile;?>
			</ul>
			<div class="clearfix"></div>

		</div>
		<div class="clearfix"></div>

	</div>
	</div>
	

<?php 
return ob_get_clean();
	
	
}

add_shortcode('team','our_team');

// choose

function choose_us($choose_us){
	$atts=shortcode_atts(
		array(
			'choose_col_head'=>'',
			'choose_group'	=> '',
		'choose_heading' 	=>'',
		),$choose_us
	);
	ob_start();
	
?>
	
		
		<h3 class="headline"><?php echo esc_attr($atts['choose_col_head']);?></h3><span class="line" style="margin-bottom:33px;"></span><div class="clearfix"></div>
		<ul class="list-1">
			<?php 
			$choose_group_keys = vc_param_group_parse_atts( $atts['choose_group'] ); 
			if(is_array($choose_group_keys)){
				foreach($choose_group_keys as $choose_group_key){ ?>
				
					<li><?php echo esc_attr($choose_group_key['choose_heading']);?></li>
					
				<?php }
			} ?>
			
			
			
		</ul>	
		
	

<?php 
return ob_get_clean();
	
	
}
add_shortcode('choose','choose_us');

// client

function our_client($our_client){
	$atts=shortcode_atts(
		array(
			'client_head'=>'',
			),$our_client
	);
	ob_start();
	
?>
	<?php 
		$args = array(
			'post_type'	=>'client',
		);
		$client_query = new WP_Query($args);
	
	?>
		<!-- Headline -->
	<div class="sixteen columns">
		<h3 class="headline"><?php echo esc_attr($atts['client_head']);?></h3>
		<span class="line" style="margin-bottom: 20px;"></span>
	</div>

	<!-- Navigation / Left -->
	<div id="showbiz_left_3" class="sb-navigation-left-2 alt"><i class="icon-angle-left"></i></div>

	<!-- ShowBiz Carousel -->
	<div id="happy-clients" class="showbiz-container sixteen carousel columns" >

	<!-- Portfolio Entries -->
	<div class="showbiz our-clients" data-left="#showbiz_left_3" data-right="#showbiz_right_3">
		<div class="overflowholder">

			<ul>
				<?php while($client_query->have_posts()):
					$client_query->the_post();
				?>
				<li>
					<div class="happy-clients-photo">
						<?php the_post_thumbnail();?>
					</div>
					<div class="happy-clients-cite"><?php the_content();?></div>
					<div class="happy-clients-author"><?php the_title();?></div>
				</li>
				<?php endwhile;?>
				
			</ul>
			<div class="clearfix"></div>

		</div>
		<div class="clearfix"></div>

	</div>
	</div>

	<!-- Navigation / Right -->
	<div id="showbiz_right_3" class="sb-navigation-right-2 alt"><i class="icon-angle-right"></i></div>	
		

<?php 
return ob_get_clean();
	
}
add_shortcode('client','our_client');


// Our services

function our_service($our_service){
	$atts=shortcode_atts(
		array(
			'services_title_head'=>'',
			'service_group'	=> '',
		'service_icon'	=>'',
		'service_name' 	=>'',
		'service_desc'	=>'',
		),$our_service
	);
	ob_start();
	
?>
	
	<div class="sixteen columns">
		<h3 class="headline"><?php echo esc_attr($atts['services_title_head']);?></h3><span class="line" style="margin-bottom:35px;"></span><div class="clearfix"></div>
	</div>
			
		
			<?php $group_service_keys = vc_param_group_parse_atts( $atts['service_group'] );
			
			if(is_array($group_service_keys)):
				foreach($group_service_keys as $group_service_key){ ?>
			
				<div class="four columns">
					<a href="#">
					<div class="notice-box">
						<h3><?php echo esc_attr($group_service_key['service_name']);?></h3>
						<i class="<?php echo esc_attr($group_service_key['service_icon']);?>"></i>
						<p><?php echo esc_attr($group_service_key['service_desc']);?></p>
					</div>
					</a>
				</div>
				<?php }
				endif;?>
		</div>
		
	

<?php 
return ob_get_clean();
	
	
}
add_shortcode('our_services','our_service');

?>
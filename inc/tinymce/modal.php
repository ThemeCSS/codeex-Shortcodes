<?php
	if ( !defined('ABSPATH') ) :
		require_once('../../../../../wp-load.php');
	endif;

	if($_GET['popup'] == 'alerts') : ?>
	
		<form action="#" method="get">
			<ul class="popup-div">
				<li>
					<label for="typo_style"><?php esc_html_e( 'Style', 'typo_codeex_plugin' ); ?></label>
					<select name="typo_style" id="typo_style">
						<option value="typo_failed"><?php esc_html_e( 'Failed', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_success"><?php esc_html_e( 'Success', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_warning"><?php esc_html_e( 'Warning', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_info"><?php esc_html_e( 'Info', 'typo_codeex_plugin' ); ?></option>
					</select>
				</li>
				<li>
					<label for="typo_type"><?php esc_html_e( 'Type', 'typo_codeex_plugin' ); ?></label>
					<select name="typo_type" id="typo_type">
						<option value=""><?php esc_html_e( 'Default', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_rounded"><?php esc_html_e( 'Rounded', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_border"><?php esc_html_e( 'Border', 'typo_codeex_plugin' ); ?></option>
					</select>
				</li>
				<li>
					<label for="typo_text"><?php esc_html_e( 'Text', 'typo_codeex_plugin' ); ?></label>
					<textarea name="typo_text" id="typo_text" cols="20" rows="10"></textarea>
				</li>
			</ul>
			<a href="#" class="button button-primary" id="btninsert"><?php esc_html_e( 'Insert', 'typo_codeex_plugin' ); ?></a>
		</form>

		<script type="text/javascript">
			jQuery('#btninsert').click(function(){
				var style = jQuery('#typo_style').val();
				var description = jQuery('#typo_text').val();
				var type = jQuery('#typo_type').val();

        parent.tinymce.activeEditor.execCommand('mceInsertContent',false,'[typo_alert style="' + style + '" type="' + type + '"]' + description + '[/typo_alert]');
        parent.tb_remove();
      });
		</script><?php

	elseif($_GET['popup'] == 'blockquotes' ) : ?>
		<form action="#" method="get">
			<ul class="popup-div">
				<li>
					<label for="typo_style"><?php esc_html_e( 'Style', 'typo_codeex_plugin' ); ?></label>
					<select name="typo_style" id="typo_style">
						<option value="typo_style1"><?php esc_html_e( 'Style 1', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_style2"><?php esc_html_e( 'Style 2', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_qleft"><?php esc_html_e( 'Left', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_qright"><?php esc_html_e( 'Right', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_qleft_border"><?php esc_html_e( 'Left with Border', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_qright_border"><?php esc_html_e( 'Right with Border', 'typo_codeex_plugin' ); ?></option>
					</select>
				</li>
				<li>
					<label for="typo_type"><?php esc_html_e( 'Type', 'typo_codeex_plugin' ); ?></label>
					<select name="typo_type" id="typo_type">
						<option value=""><?php esc_html_e( 'Default', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_rounded"><?php esc_html_e( 'Rounded', 'typo_codeex_plugin' ); ?></option>
					</select>
				</li>
				<li>
					<label for="typo_text"><?php esc_html_e( 'Text', 'typo_codeex_plugin' ); ?></label>
					<textarea name="typo_text" id="typo_text" cols="20" rows="10"></textarea>
				</li>
			</ul>
			<a href="#" class="button button-primary" id="btninsert"><?php esc_html_e( 'Insert', 'typo_codeex_plugin' ); ?></a>
		</form>

		<script type="text/javascript">
			jQuery('#btninsert').click(function(){
				var style = jQuery('#typo_style').val();
				var description = jQuery('#typo_text').val();
				var type = jQuery('#typo_type').val();

        parent.tinymce.activeEditor.execCommand('mceInsertContent',false,'[typo_blockquote style="' + style + '" type="' + type + '"]' + description + '[/typo_blockquote]');
        parent.tb_remove();
      });
		</script><?php

	elseif($_GET['popup'] == 'buttons' ) : ?>
		<form action="#" method="get">
			<ul class="popup-div">
				<li>
					<label for="typo_style"><?php esc_html_e( 'Style', 'typo_codeex_plugin' ); ?></label>
					<select name="typo_style" id="typo_style">
						<option value="typo_small"><?php esc_html_e( 'Small', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_medium"><?php esc_html_e( 'Medium', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_large"><?php esc_html_e( 'Large', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_xlarge"><?php esc_html_e( 'Extra Large', 'typo_codeex_plugin' ); ?></option>
					</select>
				</li>
				<li>
					<label for="typo_color"><?php esc_html_e( 'Color', 'typo_codeex_plugin' ); ?></label>
					<select name="typo_color" id="typo_color">
						<option value="typo_yellow"><?php esc_html_e( 'Yellow', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_blue"><?php esc_html_e( 'Blue', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_green"><?php esc_html_e( 'Green', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_purple"><?php esc_html_e( 'Purple', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_gray"><?php esc_html_e( 'Gray', 'typo_codeex_plugin' ); ?></option>
					</select>
				</li>
				<li>
					<label for="typo_type"><?php esc_html_e( 'Type', 'typo_codeex_plugin' ); ?></label>
					<select name="typo_type" id="typo_type">
						<option value=""><?php esc_html_e( 'Default', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_rounded"><?php esc_html_e( 'Rounded', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_border"><?php esc_html_e( 'Border', 'typo_codeex_plugin' ); ?></option>
					</select>
				</li>
				<li>
					<label for="typo_target"><?php esc_html_e( 'Target', 'typo_codeex_plugin' ); ?></label>
					<select name="typo_target" id="typo_target">
						<option value="_blank"><?php esc_html_e( 'Blank', 'typo_codeex_plugin' ); ?></option>
						<option value="_self"><?php esc_html_e( 'Self', 'typo_codeex_plugin' ); ?></option>
						<option value="_parent"><?php esc_html_e( 'Parent', 'typo_codeex_plugin' ); ?></option>
						<option value="_top"><?php esc_html_e( 'Top', 'typo_codeex_plugin' ); ?></option>
					</select>
				</li>
				<li>
					<label for="typo_link_label"><?php esc_html_e( 'Label', 'typo_codeex_plugin' ); ?></label>
					<input name="typo_link_label" type="text" value="" id="typo_link_label"></input>
				</li>
				<li>
					<label for="typo_link"><?php esc_html_e( 'Link', 'typo_codeex_plugin' ); ?></label>
					<input name="typo_link" type="text" value="" id="typo_link"></input>
				</li>
			</ul>
			<a href="#" class="button button-primary" id="btninsert"><?php esc_html_e( 'Insert', 'typo_codeex_plugin' ); ?></a>
		</form>

		<script type="text/javascript">
			jQuery('#btninsert').click(function(){
				var style = jQuery('#typo_style').val();
				var link_label = jQuery('#typo_link_label').val();
				var link = jQuery('#typo_link').val();
				var color = jQuery('#typo_color').val();
				var type = jQuery('#typo_type').val();
				var target = jQuery('#typo_target').val();

        parent.tinymce.activeEditor.execCommand('mceInsertContent',false,'[typo_buttons href="' + link + '" style="' + style + '" type="' + type + '" color="' + color + '" target="' + target + '"]' + link_label + '[/typo_buttons]');
        parent.tb_remove();
     	});
		</script><?php

	elseif($_GET['popup'] == 'columns' ) : ?>
		<form action="#" method="get">
			<ul class="popup-div">
				<li>
					<label for="typo_style"><?php esc_html_e( 'Style', 'typo_codeex_plugin' ); ?></label>
					<select name="typo_style" id="typo_style">
						<option value="typo_one-half">1/2</option>
						<option value="typo_one-third">1/3</option>
						<option value="typo_two-third">2/3</option>
						<option value="typo_one-fourth">1/4</option>
						<option value="typo_three-fourth">3/4</option>
					</select>
				</li>
				<li>
					<label for="typo_type"><?php esc_html_e( 'Type', 'typo_codeex_plugin' ); ?></label>
					<select name="typo_type" id="typo_type">
						<option value=""><?php esc_html_e( 'Default', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_last"><?php esc_html_e( 'Last', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_boxed"><?php esc_html_e( 'Box', 'typo_codeex_plugin' ); ?></option>
					</select>
				</li>
				<li>
					<label for="typo_text"><?php esc_html_e( 'Text', 'typo_codeex_plugin' ); ?></label>
					<textarea name="typo_text" id="typo_text" cols="20" rows="10"></textarea>
				</li>
			</ul>
			<a href="#" class="button button-primary" id="btninsert"><?php esc_html_e( 'Insert', 'typo_codeex_plugin' ); ?></a>
		</form>

		<script type="text/javascript">
			jQuery('#btninsert').click(function(){
				var style = jQuery('#typo_style').val();
				var description = jQuery('#typo_text').val();
				var type = jQuery('#typo_type').val();

        parent.tinymce.activeEditor.execCommand('mceInsertContent',false,'[typo_clear][typo_columns style="' + style + '" type="' + type + '"]' + description + '[/typo_columns][/typo_clear]');
        parent.tb_remove();
     	});
		</script><?php

	elseif($_GET['popup'] == 'dropcaps' ) : ?>
		<form action="#" method="get">
			<ul class="popup-div">
				<li>
					<label for="typo_style"><?php esc_html_e( 'Style', 'typo_codeex_plugin' ); ?></label>
					<select name="typo_style" id="typo_style">
						<option value="typo_dropcap"><?php esc_html_e( 'Style 1', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_dropcap2"><?php esc_html_e( 'Style 2', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_dropcap3"><?php esc_html_e( 'Style 3', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_dropcap4"><?php esc_html_e( 'Style 4', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_dropcap5"><?php esc_html_e( 'Style 5', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_dropcap6"><?php esc_html_e( 'Style 6', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_drop-gradient"><?php esc_html_e( 'Gradient', 'typo_codeex_plugin' ); ?></option>
					</select>
				</li>
				<li>
					<label for="typo_drop"><?php esc_html_e( 'Dropcop', 'typo_codeex_plugin' ); ?></label>
					<input name="typo_drop" type="text" value="" id="typo_drop"></input>
				</li>
				<li>
					<label for="typo_text"><?php esc_html_e( 'Text', 'typo_codeex_plugin' ); ?></label>
					<textarea name="typo_text" id="typo_text" cols="20" rows="10"></textarea>
				</li>
			</ul>
			<a href="#" class="button button-primary" id="btninsert"><?php esc_html_e( 'Insert', 'typo_codeex_plugin' ); ?></a>
		</form>

		<script type="text/javascript">
			jQuery('#btninsert').click(function(){
				var style = jQuery('#typo_style').val();
				var description = jQuery('#typo_text').val();
				var drop = jQuery('#typo_drop').val();

        parent.tinymce.activeEditor.execCommand('mceInsertContent',false,'[typo_dropcap style="' + style + '"]' + drop + '[/typo_dropcap]' + description );
        parent.tb_remove();
     	});
		</script><?php

	elseif($_GET['popup'] == 'gmap' ) : ?>
		<form action="#" method="get">
			<ul class="popup-div">
				<li>
					<label for="typo_width"><?php esc_html_e( 'Width', 'typo_codeex_plugin' ); ?></label>
					<input name="typo_width" type="text" value="" id="typo_width"></input>
				</li>
				<li>
					<label for="typo_height"><?php esc_html_e( 'Height', 'typo_codeex_plugin' ); ?></label>
					<input name="typo_height" type="text" value="" id="typo_height"></input>
				</li>
				<li>
					<label for="typo_link"><?php esc_html_e( 'Embedded Src', 'typo_codeex_plugin' ); ?></label>
					<input name="typo_link" type="text" value="" id="typo_link"></input> <br>
					<span class="example">https://maps.google.com/?ll=39.061849,-99.536133&spn=14.980005,33.815918&t=m&z=6</span>
					<span class="example"><?php esc_html_e( 'get google maps:', 'typo_codeex_plugin' ); ?> <a href="https://www.google.com/maps/" target="_blank">
						<?php esc_html_e( 'here', 'typo_codeex_plugin' ); ?></a>
					</span>
				</li>
			</ul>
			<a href="#" class="button button-primary" id="btninsert"><?php esc_html_e( 'Insert', 'typo_codeex_plugin' ); ?></a>
		</form>

		<script type="text/javascript">
			jQuery('#btninsert').click(function(){
				var width = jQuery('#typo_width').val();
				var height = jQuery('#typo_height').val();
				var link = jQuery('#typo_link').val();

        parent.tinymce.activeEditor.execCommand('mceInsertContent',false,'[typo_googlemap width="' + width + '" height="' + height + '" src="' + link + '"]' );
        parent.tb_remove();
     	});
		</script><?php

	elseif($_GET['popup'] == 'images' ) : ?>
		<form action="#" method="get">
			<ul class="popup-div">
				<li>
					<label for="typo_width"><?php esc_html_e( 'Width', 'typo_codeex_plugin' ); ?></label>
					<input name="typo_width" type="text" value="" id="typo_width"></input>
				</li>
				<li>
					<label for="typo_height"><?php esc_html_e( 'Height', 'typo_codeex_plugin' ); ?></label>
					<input name="typo_height" type="text" value="" id="typo_height"></input>
				</li>
				<li>
					<label for="typo_title"><?php esc_html_e( 'Title', 'typo_codeex_plugin' ); ?></label>
					<input name="typo_title" type="text" value="" id="typo_title"></input>
				</li>
				<li>
					<label for="typo_link"><?php esc_html_e( 'Image Path', 'typo_codeex_plugin' ); ?></label>
					<input name="typo_link" type="text" value="" id="typo_link"></input>
				</li>
			</ul>
			<a href="#" class="button button-primary" id="btninsert"><?php esc_html_e( 'Insert', 'typo_codeex_plugin' ); ?></a>
		</form>

		<script type="text/javascript">
			jQuery('#btninsert').click(function(){
				var width = jQuery('#typo_width').val();
				var height = jQuery('#typo_height').val();
				var link = jQuery('#typo_link').val();
				var title = jQuery('#typo_title').val();

        parent.tinymce.activeEditor.execCommand('mceInsertContent',false,'[typo_image width="' + width + '" height="' + height + '" src="' + link + '" title="' + title + '"]' );
        parent.tb_remove();
     	});
		</script><?php

	elseif($_GET['popup'] == 'list-icons' ) : ?>
		<form action="#" method="get">
			<ul class="popup-div">
				<li>
					<label for="typo_style"><?php esc_html_e( 'Style', 'typo_codeex_plugin' ); ?></label>
					<select name="typo_style" id="typo_style">
						<option value="typo_balloon"><?php esc_html_e( 'Balloon', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_book"><?php esc_html_e( 'Book', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_bookmark"><?php esc_html_e( 'Bookmark', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_box"><?php esc_html_e( 'Box', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_briefcase"><?php esc_html_e( 'Briefcase', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_calendar"><?php esc_html_e( 'Calendar', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_clip"><?php esc_html_e( 'Clip', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_clock"><?php esc_html_e( 'Clock', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_cross"><?php esc_html_e( 'Cross', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_document"><?php esc_html_e( 'Document', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_exclamation"><?php esc_html_e( 'Exclamation', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_folder"><?php esc_html_e( 'Folder', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_heart"><?php esc_html_e( 'Heart', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_house"><?php esc_html_e( 'House', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_tint"><?php esc_html_e( 'Tint', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_marker"><?php esc_html_e( 'Marker', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_minus"><?php esc_html_e( 'Minus', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_arrow"><?php esc_html_e( 'Arrow', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_pin"><?php esc_html_e( 'Pin', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_tick"><?php esc_html_e( 'Tick', 'typo_codeex_plugin' ); ?></option>
					</select>
				</li>
				<li>
					<label for="typo_text"><?php esc_html_e( 'Text 1', 'typo_codeex_plugin' ); ?></label>
					<textarea name="typo_text" id="typo_text" cols="20" rows="10"></textarea>
				</li>
				<li>
					<label for="typo_text2"><?php esc_html_e( 'Text 2', 'typo_codeex_plugin' ); ?></label>
					<textarea name="typo_text2" id="typo_text2" cols="20" rows="10"></textarea>
				</li>
				<li>
					<label for="typo_text3"><?php esc_html_e( 'Text 3', 'typo_codeex_plugin' ); ?></label>
					<textarea name="typo_text3" id="typo_text3" cols="20" rows="10"></textarea>
				</li>
			</ul>
			<a href="#" class="button button-primary" id="btninsert"><?php esc_html_e( 'Insert', 'typo_codeex_plugin' ); ?></a>
		</form>

		<script type="text/javascript">
			jQuery('#btninsert').click(function(){
				var style = jQuery('#typo_style').val();
				var text = jQuery('#typo_text').val();
				var text2 = jQuery('#typo_text2').val();
				var text3 = jQuery('#typo_text3').val();

        parent.tinymce.activeEditor.execCommand('mceInsertContent',false,'[typo_ul style="' + style + '"][typo_li]' + text + '[/typo_li][typo_li]' + text2 + '[/typo_li][typo_li]' + text3 + '[/typo_li][/typo_ul]' );
        parent.tb_remove();
     	});
		</script><?php

	elseif($_GET['popup'] == 'social-icons' ) : ?>
		<form action="#" method="get">
			<ul class="popup-div">
				<li>
					<label for="typo_style"><?php esc_html_e( 'Style', 'typo_codeex_plugin' ); ?></label>
					<select name="typo_style" id="typo_style">
						<option value="typo_facebook">Facebook</option>
						<option value="typo_twitter">Twitter</option>
						<option value="typo_linkdin">LinkdIn</option>
						<option value="typo_pinterest">Pinterest</option>
						<option value="typo_youtube">Youtube</option>
						<option value="typo_flickr">Flickr</option>
						<option value="typo_dribbble">Dribbble</option>
						<option value="typo_tumblr">Tumblr</option>
						<option value="typo_instagram">Instagram</option>
						<option value="typo_android">Android</option>
						<option value="typo_apple">Apple</option>
						<option value="typo_bitbucket">BitBucket</option>
						<option value="typo_css3">CSS3</option>
						<option value="typo_dropbox">Dropbox</option>
						<option value="typo_foursquare">FourSquare</option>
						<option value="typo_github">GitHub</option>
						<option value="typo_html5">HTML5</option>
						<option value="typo_linux">Linux</option>
						<option value="typo_skype">Skype</option>
						<option value="typo_stackexchange">StackExchange</option>
						<option value="typo_trello">Trello</option>
						<option value="typo_windows">Windows</option>
						<option value="typo_rss">RSS</option>
						<option value="typo_behance">Behance</option>
						<option value="typo_codepen">CodePen</option>
						<option value="typo_digg">Digg</option>
						<option value="typo_stumbleupon">StumbleUpon</option>
						<option value="typo_wordpress">WordPress</option>
						<option value="typo_drupal">Drupal</option>
						<option value="typo_google_plus">Google+</option>
						<option value="typo_jsfiddle">JSFiddle</option>
						<option value="typo_delicious">Delicious</option>
						<option value="typo_yelp">Yelp</option>
						<option value="typo_soundcloud">SoundCloud</option>
						<option value="typo_spotify">Spotify</option>
						<option value="typo_deviantart">DeviantArt</option>
						<option value="typo_lastfm">LastFM</option>
					</select>
				</li>
				<li>
					<label for="typo_type"><?php esc_html_e( 'Type', 'typo_codeex_plugin' ); ?></label>
					<select name="typo_type" id="typo_type">
						<option value=""><?php esc_html_e( 'Default', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_circle"><?php esc_html_e( 'Circle', 'typo_codeex_plugin' ); ?></option>
					</select>
				</li>
				<li>
					<label for="typo_target"><?php esc_html_e( 'Target', 'typo_codeex_plugin' ); ?></label>
					<select name="typo_target" id="typo_target">
						<option value="_blank"><?php esc_html_e( 'Blank', 'typo_codeex_plugin' ); ?></option>
						<option value="_self"><?php esc_html_e( 'Self', 'typo_codeex_plugin' ); ?></option>
						<option value="_parent"><?php esc_html_e( 'Parent', 'typo_codeex_plugin' ); ?></option>
						<option value="_top"><?php esc_html_e( 'Top', 'typo_codeex_plugin' ); ?></option>
					</select>
				</li>
				<li>
					<label for="typo_link"><?php esc_html_e( 'Link', 'typo_codeex_plugin' ); ?></label>
					<input name="typo_link" type="text" value="" id="typo_link"></input>
				</li>
			</ul>
			<a href="#" class="button button-primary" id="btninsert"><?php esc_html_e( 'Insert', 'typo_codeex_plugin' ); ?></a>
		</form>

		<script type="text/javascript">
			jQuery('#btninsert').click(function(){
				var style = jQuery('#typo_style').val();
				var type = jQuery('#typo_type').val();
				var link = jQuery('#typo_link').val();
				var target = jQuery('#typo_target').val();

        parent.tinymce.activeEditor.execCommand('mceInsertContent',false,'[typo_social href="' + link + '" style="' + style + '" type="' + type + '" target="' + target + '"][/typo_social]' );
        parent.tb_remove();
     	});
		</script><?php

	elseif($_GET['popup'] == 'tabs' ) : ?>
		<form action="#" method="get">
			<ul class="popup-div">
				<li>
					<label for="typo_title1"><?php esc_html_e( 'Tab 1', 'typo_codeex_plugin' ); ?></label>
					<input name="typo_title1" type="text" value="" id="typo_title1"></input>
				</li>
				<li>
					<label for="typo_text"><?php esc_html_e( 'Text 1', 'typo_codeex_plugin' ); ?></label>
					<textarea name="typo_text" id="typo_text" cols="20" rows="10"></textarea>
				</li>
				<li>
					<label for="typo_title2"><?php esc_html_e( 'Tab 2', 'typo_codeex_plugin' ); ?></label>
					<input name="typo_title2" type="text" value="" id="typo_title2"></input>
				</li>
				<li>
					<label for="typo_text2"><?php esc_html_e( 'Text 2', 'typo_codeex_plugin' ); ?></label>
					<textarea name="typo_text2" id="typo_text2" cols="20" rows="10"></textarea>
				</li>
			</ul>
			<a href="#" class="button button-primary" id="btninsert"><?php esc_html_e( 'Insert', 'typo_codeex_plugin' ); ?></a>
		</form>

		<script type="text/javascript">
			jQuery('#btninsert').click(function(){
				var title = jQuery('#typo_title1').val();
				var title2 = jQuery('#typo_title2').val();
				var text = jQuery('#typo_text').val();
				var text2 = jQuery('#typo_text2').val();

        parent.tinymce.activeEditor.execCommand('mceInsertContent',false,'[typo_tabgroup][typo_tab title="' + title + '"]' + text + '[/typo_tab][typo_tab title="' + title2 + '"]' + text2 + '[/typo_tab][/typo_tabgroup]' );
        parent.tb_remove();
     	});
		</script><?php

	elseif($_GET['popup'] == 'toggles' ) : ?>
		<form action="#" method="get">
			<ul class="popup-div">
				<li>
					<label for="typo_title1"><?php esc_html_e( 'Toggle 1', 'typo_codeex_plugin' ); ?></label>
					<input name="typo_title1" type="text" value="" id="typo_title1"></input>
				</li>
				<li>
					<label for="typo_text"><?php esc_html_e( 'Text 1', 'typo_codeex_plugin' ); ?></label>
					<textarea name="typo_text" id="typo_text" cols="20" rows="10"></textarea>
				</li>
				<li>
					<label for="typo_title2"><?php esc_html_e( 'Toggle 2', 'typo_codeex_plugin' ); ?></label>
					<input name="typo_title2" type="text" value="" id="typo_title2"></input>
				</li>
				<li>
					<label for="typo_text2"><?php esc_html_e( 'Text 2', 'typo_codeex_plugin' ); ?></label>
					<textarea name="typo_text2" id="typo_text2" cols="20" rows="10"></textarea>
				</li>
			</ul>
			<a href="#" class="button button-primary" id="btninsert"><?php esc_html_e( 'Insert', 'typo_codeex_plugin' ); ?></a>
		</form>

		<script type="text/javascript">
			jQuery('#btninsert').click(function(){
				var title = jQuery('#typo_title1').val();
				var title2 = jQuery('#typo_title2').val();
				var text = jQuery('#typo_text').val();
				var text2 = jQuery('#typo_text2').val();

        parent.tinymce.activeEditor.execCommand('mceInsertContent',false,'[typo_toggle title="' + title + '"]' + text + '[/typo_toggle][typo_toggle title="' + title2 + '"]' + text2 + '[/typo_toggle]' );
        parent.tb_remove();
     	});
		</script><?php

	elseif($_GET['popup'] == 'videos' ) : ?>
		<form action="#" method="get">
			<ul class="popup-div">
				<li>
					<label for="typo_site"><?php esc_html_e( 'Site', 'typo_codeex_plugin' ); ?></label>
					<select name="typo_site" id="typo_site">
						<option value="youtube">Youtube</option>
						<option value="vimeo">Vimeo</option>
						<option value="dailymotion">Daily Motion</option>
					</select>
				</li>
				<li>
					<label for="typo_video_id"><?php esc_html_e( 'Video ID', 'typo_codeex_plugin' ); ?></label>
					<input name="typo_video_id" type="text" value="" id="typo_video_id"></input> 
					<span class="example">
						youtube: 7BOhDaJH0m4 <br> vimeo: 21942776 <br> dailymotion: xq2cmn_lucky-day-vancouver-film-school-vfs_creation
					</span>
				</li>
				<li>
					<label for="typo_width"><?php esc_html_e( 'Width', 'typo_codeex_plugin' ); ?></label>
					<input name="typo_width" type="text" value="" id="typo_width"></input>
				</li>
				<li>
					<label for="typo_height"><?php esc_html_e( 'Height', 'typo_codeex_plugin' ); ?></label>
					<input name="typo_height" type="text" value="" id="typo_height"></input>
				</li>
			</ul>
			<a href="#" class="button button-primary" id="btninsert"><?php esc_html_e( 'Insert', 'typo_codeex_plugin' ); ?></a>
		</form>

		<script type="text/javascript">
			jQuery('#btninsert').click(function(){
				var site = jQuery('#typo_site').val();
				var video_id = jQuery('#typo_video_id').val();
				var width = jQuery('#typo_width').val();
				var height = jQuery('#typo_height').val();

        parent.tinymce.activeEditor.execCommand('mceInsertContent',false,'[typo_video site="' + site + '" id="' + video_id + '" w="' + width + '" h="' + height + '"]' );
        parent.tb_remove();
     	});
		</script><?php	

	elseif($_GET['popup'] == 'callouts') : ?>
	
		<form action="#" method="get">
			<ul class="popup-div">
				<li>
					<label for="typo_style"><?php esc_html_e( 'Style', 'typo_codeex_plugin' ); ?></label>
					<select name="typo_style" id="typo_style">
						<option value="typo_default"><?php esc_html_e( 'Default', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_callout2"><?php esc_html_e( 'Style 2', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_callout3"><?php esc_html_e( 'Style 3', 'typo_codeex_plugin' ); ?></option>
					</select>
				</li>
				<li>
					<label for="typo_type"><?php esc_html_e( 'Type', 'typo_codeex_plugin' ); ?></label>
					<select name="typo_type" id="typo_type">
						<option value="typo_default"><?php esc_html_e( 'Default', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_rounded"><?php esc_html_e( 'Rounded', 'typo_codeex_plugin' ); ?></option>
					</select>
				</li>
				<li>
					<label for="typo_button_link"><?php esc_html_e( 'Button Link', 'typo_codeex_plugin' ); ?></label>
					<input name="typo_button_link" type="text" value="" id="typo_button_link"></input>
				</li>
				<li>
					<label for="typo_button_label"><?php esc_html_e( 'Button Label', 'typo_codeex_plugin' ); ?></label>
					<input name="typo_button_label" type="text" value="" id="typo_button_label"></input>
				</li>
				<li>
					<label for="typo_text"><?php esc_html_e( 'Text', 'typo_codeex_plugin' ); ?></label>
					<textarea name="typo_text" id="typo_text" cols="20" rows="10"></textarea>
				</li>
			</ul>
			<a href="#" class="button button-primary" id="btninsert"><?php esc_html_e( 'Insert', 'typo_codeex_plugin' ); ?></a>
		</form>

		<script type="text/javascript">
			jQuery('#btninsert').click(function(){
				var style = jQuery('#typo_style').val();
				var type = jQuery('#typo_type').val();
				var description = jQuery('#typo_text').val();
				var button_link = jQuery('#typo_button_link').val();
				var button_label = jQuery('#typo_button_label').val();

        parent.tinymce.activeEditor.execCommand('mceInsertContent',false,'[typo_callouts style="' + style + '" type="' + type + '"][typo_label]' + description + '[/typo_label][typo_buttons href="' + button_link + '" style="typo_xlarge" type="" color="" target="_blank"]' + button_label + '[/typo_buttons][/typo_callouts]');
        parent.tb_remove();
     	});
		</script><?php

	elseif($_GET['popup'] == 'skills-bar') : ?>
	
		<form action="#" method="get">
			<ul class="popup-div">
				<li>
					<label for="typo_color"><?php esc_html_e( 'Color', 'typo_codeex_plugin' ); ?></label>
					<select name="typo_color" id="typo_color">
						<option value="typo_default"><?php esc_html_e( 'Default', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_blue"><?php esc_html_e( 'Blue', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_purple"><?php esc_html_e( 'Purple', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_orange"><?php esc_html_e( 'Orange', 'typo_codeex_plugin' ); ?></option>
						<option value="typo_yellow"><?php esc_html_e( 'Yellow', 'typo_codeex_plugin' ); ?></option>
					</select>
				</li>
				<li>
					<label for="typo_percent"><?php esc_html_e( 'Percent', 'typo_codeex_plugin' ); ?></label>
					<input name="typo_percent" type="text" value="50" id="typo_percent"></input>
				</li>
				<li>
					<label for="typo_title"><?php esc_html_e( 'Title', 'typo_codeex_plugin' ); ?></label>
					<input name="typo_title" type="text" value="" id="typo_title"></input>
				</li>
			</ul>
			<a href="#" class="button button-primary" id="btninsert"><?php esc_html_e( 'Insert', 'typo_codeex_plugin' ); ?></a>
		</form>

		<script type="text/javascript">
			jQuery('#btninsert').click(function(){
				var color = jQuery('#typo_color').val();
				var percent = jQuery('#typo_percent').val();
				var title = jQuery('#typo_title').val();

        parent.tinymce.activeEditor.execCommand('mceInsertContent',false,'[typo_skills_bar color="' + color + '" percent="' + percent + '"]' + title + '[/typo_skills_bar]');
        parent.tb_remove();
     	});
		</script><?php
	endif;
<<<<<<< HEAD
?>
=======
?>
>>>>>>> 9c6da89e823cd5d1b74f952e9b0f48594318c6d1

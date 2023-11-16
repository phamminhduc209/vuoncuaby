<?php

/**
 * vuoncuaby functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package vuoncuaby
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function vuoncuaby_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on vuoncuaby, use a find and replace
		* to change 'vuoncuaby' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('vuoncuaby', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'vuoncuaby'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'vuoncuaby_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'vuoncuaby_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function vuoncuaby_content_width()
{
	$GLOBALS['content_width'] = apply_filters('vuoncuaby_content_width', 640);
}
add_action('after_setup_theme', 'vuoncuaby_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function vuoncuaby_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'vuoncuaby'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'vuoncuaby'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'vuoncuaby_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function vuoncuaby_scripts()
{
	global $page_about, $page_detail, $page_support, $page_contact;

	wp_enqueue_style('swiper', get_theme_file_uri('/assets/css/swiper-bundle.min.css'), array(), time(), null);
	wp_enqueue_style('common-style', get_theme_file_uri('/assets/css/style.css'), array(), time(), null);

	if ($page_about) {
		wp_enqueue_style('page-about', get_theme_file_uri('/assets/css/about.css'), array(), time(), null);
	}

	if ($page_detail) {
		wp_enqueue_style('page-details', get_theme_file_uri('/assets/css/detail.css'), array(), time(), null);
	}

	if ($page_support) {
		wp_enqueue_style('page-support', get_theme_file_uri('/assets/css/support.css'), array(), time(), null);
	}

	if ($page_contact) {
		wp_enqueue_style('page-contact', get_theme_file_uri('/assets/css/contact.css'), array(), time(), null);
	}


	wp_enqueue_script('vuoncuaby-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'vuoncuaby_scripts');


function wpdocs_enqueue_custom_admin_style()
{
	wp_enqueue_style('daterangepicker-style', get_theme_file_uri('/assets/css/daterangepicker.css'), array(), time(), null);
	wp_enqueue_script('moment', get_template_directory_uri() . '/assets/js/moment.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('daterangepicker', get_template_directory_uri() . '/assets/js/daterangepicker.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('admin-script', get_template_directory_uri() . '/assets/js/admin-script.js', array(), _S_VERSION, true);

	global $pagenow;
	if (($pagenow == 'post.php') || (get_post_type() == 'booking_car')) {

		global $wpdb, $post;
		$carId = get_field('car', $post->ID);
		$start_date = get_field('time_start', $post->ID);
		$end_date = get_field('time_end', $post->ID);
		$date_ranges_array = $wpdb->get_results("SELECT date_ranges FROM wp_booking_time_histories WHERE car_id = $carId");


		if ($date_ranges_array) {
			$disabled_date_ranges = [];
			foreach ($date_ranges_array as $date_range) {
				$disabled_date_ranges[] = str_replace('\'', '',  $date_range->date_ranges);
			}

			$disabled_date_ranges = implode(',', $disabled_date_ranges);
		}
		wp_localize_script('admin-script', 'booking_data', array(
			'disabledDates' => explode(',',  $disabled_date_ranges),
			'start_date' => $start_date,
			'end_date' => $end_date,
		));
	}


	wp_enqueue_style('admin-common-style', get_theme_file_uri('/assets/css/admin-style.css'), array(), time(), null);
}
add_action('admin_enqueue_scripts', 'wpdocs_enqueue_custom_admin_style');
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title'     => 'Thành Công car Settings',
		'menu_title'    => 'Thành Công car Settings',
		'menu_slug'     => 'thanh-cong-car-settings',
		'position' => 5,
		'capability'    => 'edit_posts',
		'redirect'        => false
	));
}


function yes_no_field($fieldName, $echo = true)
{
	$value = 'Không';
	if (get_field($fieldName)) {
		$value = 'Có';
	}

	if ($echo) {
		echo $value;
	} else {
		return $value;
	}
}

function sc_car_detail_func($attrs, $content)
{
	$carId = get_the_ID();
	if ($carId) {
		ob_start();
		global $wpdb;
		$scripts = '';
		$date_ranges_array = $wpdb->get_results("SELECT date_ranges FROM wp_booking_time_histories WHERE car_id = $carId");

		if ($date_ranges_array) {
			$disabled_date_ranges = [];
			foreach ($date_ranges_array as $date_range) {
				$disabled_date_ranges[] =  $date_range->date_ranges;
			}

			$disabled_date_ranges = implode(',', $disabled_date_ranges);
			$scripts = <<<SCRIPTS
			<script>
				var disabledDates = [$disabled_date_ranges];
			</script>
			SCRIPTS;
		}
		echo <<<HTML
		<input type="hidden" name="car_id" value="$carId"/>
		$scripts
		HTML;
		return ob_get_clean();
	}
	return '';
}

add_shortcode('sc_car_detail', 'sc_car_detail_func');


add_filter('wpcf7_form_elements', 'wpcf7_form_elements_func');

function wpcf7_form_elements_func($form)
{
	$form = do_shortcode($form);

	return $form;
}


// Add columns for post_type booking_car

add_filter('manage_booking_car_posts_columns', 'manage_booking_car_posts_columns_func');
function manage_booking_car_posts_columns_func($columns)
{

	$columns = array(
		'cb' => $columns['cb'],
		'car' => __('Xe'),
		'booking_info' => __('Thông tin người đặt'),
		'date' => __('Thời gian'),
	);

	return $columns;
}

add_action('manage_booking_car_posts_custom_column', 'manage_booking_car_posts_custom_column_func', 10, 2);
function manage_booking_car_posts_custom_column_func($column, $post_id)
{
	// Image column
	if ('car' === $column) {
		$carId = get_field('car', $post_id);
		$carData = get_post($carId);
		$carName = $carData->post_title;
		$carImage = get_the_post_thumbnail_url($carId);
		$carLink = get_the_permalink($carId);
		echo <<<CAR_INFO
		<div>
			<h4>$carName</h4>
			<img src="$carImage" width='100'/><br/>
			<a href="$carLink" target="blank">Xem thêm</a>
		</div>
		CAR_INFO;
	} else if ('booking_info' === $column) {
		$fullName = get_field('fullname', $post_id);
		$email = get_field('email', $post_id);
		$phone = get_field('phone', $post_id);
		$address = get_field('address', $post_id);
		$time_start = get_field('time_start', $post_id);
		$time_end = get_field('time_end', $post_id);

		echo <<<BOOKING_INFO
			<div>
			Người đặt: $fullName<br/>
			Email: $email<br/>
			SĐT: $phone<br/>
			Địa chỉ nhận xe: $address<br/>
			Ngày nhận xe: <span style="color:green">$time_start</span><br/>
			Ngày trả xe: <span style="color:red">$time_end</span><br/>
			</div>
		BOOKING_INFO;
	}
}



add_filter('manage_booking_car_columns', 'register_favorite_cms_column');
function register_favorite_cms_column($columns)
{
	$columns['favorite_cms'] = 'Favorite CMS';
	return $columns;
}



add_action('manage_posts_extra_tablenav', 'add_extra_button');
function add_extra_button($where)
{
	global $post_type_object;

	if ($post_type_object->name === 'booking_car') {
?>
		<div class="custom-filters-container">
			<form method="GET">
				<select name="car">
					<option value="0">Tất cả xe</option>
					<?php
					$allCars = new WP_Query(['post_type' => 'car', 'post_status' => 'publish', 'posts_per_page' => -1]);
					if ($allCars->have_posts()) {
						while ($allCars->have_posts()) {
							$allCars->the_post();
							$carName = get_the_title();
							$carId = get_the_ID();
					?>
							<option <?php echo $_GET['car'] == $carId ? 'selected' : ''; ?> value="<?php echo $carId; ?>"><?php echo $carName; ?></option>
					<?php
						}
						wp_reset_postdata();
					}
					?>
				</select>
				<input type="submit" class="button action" value="Lọc">
			</form>
		</div>
<?php
	}
}

add_action('pre_get_posts', 'filter_woocommerce_orders_in_the_table', 99, 1);
function filter_woocommerce_orders_in_the_table($query)
{
	// This condition allows us to make sure that we won't modify any query that came from the frontend
	if (!is_admin()) {
		return;
	}

	global $pagenow;

	// This condition allows us to make sure that we're modifying a query that fires on the wp-admin/edit.php?post_type=shop_order page
	if ('edit.php' === $pagenow && 'booking_car' === $query->query['post_type']) {
		if ($_GET['car']) {
			$meta_query = array(
				array(
					'key' => 'car',
					'value' => $_GET['car'],
					'compare' => '='
				)
			);
			$query->set('name', null);
			$query->set('meta_query', $meta_query);
		}
		if ($_GET['s']) {
			$query->set('name', null);
		}
	}

	return;
}

function save_booking_car_func($post_id)
{
	global $post;
	if ($post->post_type === 'booking_car') {
		$fullName = get_field('fullname', $post_id);

		$carId = get_field('car', $post_id);
		$carObject = get_post($carId);

		$address = get_field('address', $post_id);
		$phone = get_field('phone', $post_id);
		$address = get_field('address', $post_id);
		$email = get_field('email', $post_id);
		$metaData = "$fullName $address $phone {$carObject->post_title} {$carObject->post_name} $email";

		$the_post = [
			'ID'           => $post_id, //the ID of the Post
			'post_excerpt' => $metaData
		];
		try {
			remove_action('save_post', 'save_booking_car_func');
			wp_update_post($the_post);
			add_action('save_post', 'save_booking_car_func');
		} catch (\Exception $ex) {
		}
	}
}
add_action('save_post', 'save_booking_car_func');


// Grab contact form 7 data

function createDateRangeArray($strDateFrom, $strDateTo)
{
	// takes two dates formatted as YYYY-MM-DD and creates an
	// inclusive array of the dates between the from and to dates.

	// could test validity of dates here but I'm already doing
	// that in the main script

	$aryRange = [];

	$iDateFrom = mktime(1, 0, 0, substr($strDateFrom, 5, 2), substr($strDateFrom, 8, 2), substr($strDateFrom, 0, 4));
	$iDateTo = mktime(1, 0, 0, substr($strDateTo, 5, 2), substr($strDateTo, 8, 2), substr($strDateTo, 0, 4));

	if ($iDateTo >= $iDateFrom) {
		array_push($aryRange, date('m/d/Y', $iDateFrom)); // first entry
		while ($iDateFrom < $iDateTo) {
			$iDateFrom += 86400; // add 24 hours
			array_push($aryRange, date('m/d/Y', $iDateFrom));
		}
	}
	return $aryRange;
}

function addQuote($val)
{
	return "'$val'";
}

add_action('wpcf7_mail_sent', 'wpcf7_mail_sent_func');
function wpcf7_mail_sent_func($contact_form)
{
	$title = $contact_form->title;
	$submission = WPCF7_Submission::get_instance();
	if ($submission) {
		$posted_data = $submission->get_posted_data();
		if ('Booking Form' == $title) {
			$bookingId = wp_insert_post(['post_type' => 'booking_car', 'post_status' => 'publish', 'post_title' => 'Đặt xe:' . $posted_data['your-name'] . ' - sdt: ' . $posted_data['tel-810']]);
			$time_start = '';
			$time_end = '';
			$date_ranges = '';
			if (!is_wp_error($bookingId)) {
				$dateRange = $posted_data['datetimes'];
				if ($dateRange) {
					preg_match('/((?<d1>\d{2})\/(?<m1>\d{2})\/(?<y1>\d{4})\s+(?<hour1>\d{2})\:(?<minute1>\d{2})\s+(?<k1>[A-Z]{2}))\s+\-\s+((?<d2>\d{2})\/(?<m2>\d{2})\/(?<y2>\d{4})\s+(?<hour2>\d{2})\:(?<minute2>\d{2})\s+(?<k2>[A-Z]{2}))/', $dateRange, $matches);
					$time_start = $matches['y1'] . '/' . $matches['m1'] . '/' . $matches['d1'];
					$time_start_save = $matches['d1'] . '/' . $matches['m1'] . '/' . $matches['y1'] . ' ' . $matches['hour1'] . ':' . $matches['minute1'] . ' ' . $matches['k1'];
					$time_end = $matches['y2'] . '/' . $matches['m2'] . '/' . $matches['d2'];
					$time_end_save = $matches['d2'] . '/' . $matches['m2'] . '/' . $matches['y2'] . ' ' . $matches['hour2'] . ':' . $matches['minute2'] . ' ' . $matches['k2'];
					$date_ranges = createDateRangeArray($time_start, $time_end);
					$date_ranges = array_map('addQuote', $date_ranges);
					$date_ranges = implode(',', $date_ranges);
				}


				update_field('fullname', $posted_data['your-name'], $bookingId);
				update_field('address', $posted_data['your-subject'], $bookingId);
				update_field('email', $posted_data['your-email'], $bookingId);
				update_field('phone', $posted_data['tel-810'], $bookingId);
				update_field('car', $posted_data['car_id'], $bookingId);
				update_field('time_start', $time_start_save, $bookingId);
				update_field('time_end', $time_end_save, $bookingId);
				update_field('booking_time', $dateRange, $bookingId);
				$carObject = get_post($posted_data['car_id']);
				$metaData = $posted_data['your-name'] . ' ' . $posted_data['your-subject'] . ' ' .  $posted_data['tel-810'] . ' ' . $carObject->post_title . ' ' . $carObject->post_name . ' ' . $posted_data['your-email'];
				$updated_post = [
					'ID' => $bookingId,
					'post_excerpt' => $metaData
				];
				wp_update_post($updated_post);
				global $wpdb;
				$wpdb->query(
					$wpdb->prepare(
						"INSERT INTO wp_booking_time_histories
	 ( booking_id, car_id, date_ranges )
	 VALUES ( %d, %d, %s )",
						array(
							$bookingId,
							$posted_data['car_id'],
							$date_ranges
						)
					)
				);
			}
		}
	}
}

function booking_car_skip_trash_func($post_id)
{
	if (get_post_type($post_id) == 'booking_car') {
		// Force delete
		try {
			global $wpdb;
			$carId = get_field('car', $post_id);
			$wpdb->delete(
				'wp_booking_time_histories',
				['booking_id' => $post_id],
				['%d'],
			);


			wp_delete_post($post_id, true);
		} catch (\Exception $ex) {
			print_r($ex);
			die();
		}
	}
}
add_action('trashed_post', 'booking_car_skip_trash_func');

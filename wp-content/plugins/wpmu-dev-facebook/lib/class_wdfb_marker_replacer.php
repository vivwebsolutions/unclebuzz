<?php
/**
 * Handles shortcodes.
 */
class Wdfb_MarkerReplacer {

	var $data;
	var $model;
	var $buttons = array (
		'like_button' => 'wdfb_like_button',
		'events' => 'wdfb_events',
	);

	function __construct () {
		$this->model = new Wdfb_Model;
		$this->data =& Wdfb_OptionsRegistry::get_instance();
	}

	function Wdfb_MarkerReplacer () {
		$this->__construct();
	}

	function get_button_tag ($b) {
		if (!isset($this->buttons[$b])) return '';
		return '[' . $this->buttons[$b] . ']';
	}

	function process_like_button_code ($atts, $content='') {
		$allow = $this->data->get_option('wdfb_button', 'allow_facebook_button');
		if (!$allow) return '';

		$atts = shortcode_atts(array(
			'forced' => false,
		), $atts);
		$forced = ($atts['forced'] && 'no' != $atts['forced']) ? true : false;

		$in_types = $this->data->get_option('wdfb_button', 'not_in_post_types');
		if (@in_array(get_post_type(), $in_types) && !$forced) return '';

		$send = $this->data->get_option('wdfb_button', 'show_send_button');
		$layout = $this->data->get_option('wdfb_button', 'button_appearance');
		$url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

		return '<div class="wdfb_like_button"><fb:like href="http://' . $url . '" send="' . ($send ? 'true' : 'false') . '" layout="' . $layout . '" width="450" show_faces="true" font=""></fb:like></div>';
	}

	function process_events_code ($atts, $content='') {
		$post_id = get_the_ID();
		if (!$post_id) return '';

		$atts = shortcode_atts(array(
			'for' => false,
			'starting_from' => false,
			'only_future' => false,
			'show_image' => "true",
			'show_location' => "true",
			'show_start_date' => "true",
			'show_end_date' => "true",
		), $atts);

		if (!$atts['for']) return ''; // We don't know whose events to show

		// Attempt to fetch the freshest events
		// Update cache if we can
		$new_events = $this->model->get_events_for($atts['for']);
		if(!empty($new_events['data'])) {
			$events = $new_events['data'];
			update_post_meta($post_id, 'wdfb_events', $events);
		} else {
			$events = get_post_meta($post_id, 'wdfb_events');
			$events = $events[0];
		}

		if (!is_array($events)) return $content;

		$show_image = ("true" == $atts['show_image']) ? true : false;
		$show_location = ("true" == $atts['show_location']) ? true : false;
		$show_start_date = ("true" == $atts['show_start_date']) ? true : false;
		$show_end_date = ("true" == $atts['show_end_date']) ? true : false;
		$timestamp_format = get_option('date_format') . ' ' . get_option('time_format');

		$date_threshold = $atts['starting_from'] ? strtotime($atts['starting_from']) : false;
		if ($atts['only_future'] && 'false' != $atts['only_future']) {
			$now = time();
			$date_threshold = ($date_threshold && $date_threshold > $now) ? $date_threshold : $now;
		}

		ob_start();
		foreach ($events as $event) {
			if ($date_threshold > strtotime($event['start_time'])) continue;
			include (WDFB_PLUGIN_BASE_DIR . '/lib/forms/event_item.php');
		}
		$ret = ob_get_contents();
		ob_end_clean();

		return "<div><ul>{$ret}</ul></div>";
	}

	/**
	 * Registers shortcode handlers.
	 */
	function register () {
		foreach ($this->buttons as $key=>$shortcode) {
			//var_export("process_{$key}_code");
			add_shortcode($shortcode, array($this, "process_{$key}_code"));
		}
	}
}
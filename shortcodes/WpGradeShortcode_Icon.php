<?php

if (!defined('ABSPATH')) die('-1');

class WpGradeShortcode_Icon extends  WpGradeShortcode {

    public function __construct($settings = array()) {
        $this->self_closed = true;
        $this->name = 'Icon';
        $this->code = 'icon';
        $this->icon = 'icon-magic';
        $this->direct = false;

        $this->backend_assets['js'] = array(
			'icons' => array(
                'name' => 'icons',
                'path' => 'js/shortcodes/backend_icons.js',
                'deps'=> array( 'jquery' )
            )
        );

        // load backend assets only when an editor is present
        add_action( 'mce_buttons_2', array( $this, 'load_backend_assets' ) );

        $this->params = array(
            'type' => array(
                'type' => 'select',
                'name' => 'Background Shape',
                'options' => array('' => '-- Select Type --', 'circle' => 'Circle', 'rectangle' => 'Rectangle'),
                'admin_class' => 'span6'
            ),
            'size' => array(
                'type' => 'select',
                'name' => 'Icon Size',
                'options' => array('' => '-- Select Size --', 'small' => 'Small', 'medium' => 'Medium', 'big' => 'Big'),
                'admin_class' => 'span5 push1'
            ),
	        'class' => array(
		        'type' => 'tags',
		        'name' => 'Custom CSS Class',
		        'admin_class' => 'span12',
		        'options' => array('icon-border', 'pull-right', 'pull-left', 'icon-spin', 'icon-rotate-90', 'icon-rotate-180', 'icon-rotate-270', 'icon-flip-horizontal', 'icon-flip-vertical', 'icon-2x', 'icon-3x', 'icon-4x' ),
		        'value' => array( '' )
	        ),
            'name'=> array(
              'type'=> 'icon_list',
              'name' => 'Select icon:',
              'icons' => array(
                  //Entypo
				  'e-plus',
				  'e-minus',
				  'e-tripadvisor',
				  'e-fivehundredpx',
				  'e-digg',
				  'e-cc-1',
				  'e-dribbble-1',
				  'e-youtube',
				  'e-googleplay',
				  'e-soundcloud-1',
				  'e-appnet',
				  'e-info',
				  'e-left-thin',
				  'e-up-thin',
				  'e-right-thin',
				  'e-down-thin',
				  'e-level-up',
				  'e-level-down',
				  'e-switch',
				  'e-infinity',
				  'e-plus-squared',
				  'e-minus-squared',
				  'e-home',
				  'e-keyboard',
				  'e-erase',
				  'e-pause',
				  'e-fast-forward',
				  'e-fast-backward',
				  'e-to-end',
				  'e-to-start',
				  'e-hourglass',
				  'e-stop-1',
				  'e-up-dir',
				  'e-play',
				  'e-right-dir',
				  'e-down-dir',
				  'e-left-dir',
				  'e-adjust',
				  'e-cloud',
				  'e-star',
				  'e-star-empty',
				  'e-cup',
				  'e-menu',
				  'e-moon',
				  'e-heart-empty',
				  'e-heart',
				  'e-note',
				  'e-note-beamed',
				  'e-layout',
				  'e-flag',
				  'e-tools',
				  'e-cog',
				  'e-attention',
				  'e-flash',
				  'e-record',
				  'e-cloud-thunder',
				  'e-tape',
				  'e-flight',
				  'e-mail',
				  'e-pencil',
				  'e-feather',
				  'e-check',
				  'e-cancel',
				  'e-cancel-circled',
				  'e-cancel-squared',
				  'e-help',
				  'e-quote',
				  'e-plus-circled',
				  'e-minus-circled',
				  'e-right',
				  'e-direction',
				  'e-forward',
				  'e-ccw',
				  'e-cw',
				  'e-left',
				  'e-up',
				  'e-down',
				  'e-list-add',
				  'e-list',
				  'e-deviantart',
				  'e-left-bold',
				  'e-right-bold',
				  'e-up-bold',
				  'e-down-bold',
				  'e-user-add',
				  'e-help-circled',
				  'e-info-circled',
				  'e-eye',
				  'e-tag',
				  'e-upload-cloud',
				  'e-reply',
				  'e-reply-all',
				  'e-code',
				  'e-export',
				  'e-print',
				  'e-retweet',
				  'e-comment',
				  'e-chat',
				  'e-vcard',
				  'e-address',
				  'e-location',
				  'e-map',
				  'e-compass',
				  'e-trash',
				  'e-doc',
				  'e-doc-text-inv',
				  'e-docs',
				  'e-doc-landscape',
				  'e-archive',
				  'e-rss',
				  'e-share',
				  'e-basket',
				  'e-shareable',
				  'e-login',
				  'e-logout',
				  'e-volume',
				  'e-resize-full',
				  'e-resize-small',
				  'e-popup',
				  'e-publish',
				  'e-window',
				  'e-arrow-combo',
				  'e-chart-pie',
				  'e-language',
				  'e-air',
				  'e-database',
				  'e-drive',
				  'e-bucket',
				  'e-thermometer',
				  'e-down-circled',
				  'e-left-circled',
				  'e-right-circled',
				  'e-up-circled',
				  'e-down-open',
				  'e-left-open',
				  'e-right-open',
				  'e-up-open',
				  'e-down-open-mini',
				  'e-left-open-mini',
				  'e-right-open-mini',
				  'e-up-open-mini',
				  'e-down-open-big',
				  'e-left-open-big',
				  'e-right-open-big',
				  'e-up-open-big',
				  'e-progress-0',
				  'e-progress-1',
				  'e-progress-2',
				  'e-progress-3',
				  'e-back-in-time',
				  'e-network',
				  'e-inbox',
				  'e-install',
				  'e-lifebuoy',
				  'e-mouse',
				  'e-dot',
				  'e-dot-2',
				  'e-dot-3',
				  'e-suitcase',
				  'e-flow-cascade',
				  'e-flow-branch',
				  'e-flow-tree',
				  'e-flow-line',
				  'e-flow-parallel',
				  'e-brush',
				  'e-paper-plane',
				  'e-magnet',
				  'e-gauge',
				  'e-traffic-cone',
				  'e-cc',
				  'e-cc-by',
				  'e-cc-nc',
				  'e-cc-nc-eu',
				  'e-cc-nc-jp',
				  'e-cc-sa',
				  'e-cc-nd',
				  'e-cc-pd',
				  'e-cc-zero',
				  'e-cc-share',
				  'e-cc-remix',
				  'e-github',
				  'e-github-circled',
				  'e-flickr',
				  'e-flickr-circled',
				  'e-vimeo',
				  'e-vimeo-circled',
				  'e-twitter',
				  'e-twitter-circled',
				  'e-facebook',
				  'e-facebook-circled',
				  'e-facebook-squared',
				  'e-gplus',
				  'e-gplus-circled',
				  'e-pinterest',
				  'e-pinterest-circled',
				  'e-tumblr',
				  'e-tumblr-circled',
				  'e-linkedin',
				  'e-linkedin-circled',
				  'e-dribbble',
				  'e-dribbble-circled',
				  'e-stumbleupon',
				  'e-stumbleupon-circled',
				  'e-lastfm',
				  'e-lastfm-circled',
				  'e-rdio',
				  'e-rdio-circled',
				  'e-spotify',
				  'e-spotify-circled',
				  'e-qq',
				  'e-instagram',
				  'e-dropbox',
				  'e-evernote',
				  'e-flattr',
				  'e-skype',
				  'e-skype-circled',
				  'e-renren',
				  'e-sina-weibo',
				  'e-paypal',
				  'e-picasa',
				  'e-soundcloud',
				  'e-mixi',
				  'e-behance',
				  'e-google-circles',
				  'e-vkontakte',
				  'e-smashing',
				  'e-db-shape',
				  'e-sweden',
				  'e-logo-db',
				  'e-picture',
				  'e-globe',
				  'e-leaf',
				  'e-graduation-cap',
				  'e-mic',
				  'e-palette',
				  'e-ticket',
				  'e-video',
				  'e-target',
				  'e-music',
				  'e-trophy',
				  'e-thumbs-up',
				  'e-thumbs-down',
				  'e-bag',
				  'e-user',
				  'e-users',
				  'e-lamp',
				  'e-alert',
				  'e-water',
				  'e-droplet',
				  'e-credit-card',
				  'e-monitor',
				  'e-briefcase',
				  'e-floppy',
				  'e-cd',
				  'e-folder',
				  'e-doc-text',
				  'e-calendar',
				  'e-chart-line',
				  'e-chart-bar',
				  'e-clipboard',
				  'e-attach',
				  'e-bookmarks',
				  'e-book',
				  'e-book-open',
				  'e-phone',
				  'e-megaphone',
				  'e-upload',
				  'e-download',
				  'e-box',
				  'e-newspaper',
				  'e-mobile',
				  'e-signal',
				  'e-camera',
				  'e-shuffle',
				  'e-loop',
				  'e-arrows-ccw',
				  'e-light-down',
				  'e-light-up',
				  'e-mute',
				  'e-sound',
				  'e-battery',
				  'e-search',
				  'e-key',
				  'e-lock',
				  'e-lock-open',
				  'e-bell',
				  'e-bookmark',
				  'e-link',
				  'e-back',
				  'e-flashlight',
				  'e-chart-area',
				  'e-clock',
				  'e-rocket',
				  'e-block',
                  //Font Awesome
				  'glass',
				  'music',
				  'search',
				  'envelope-o',
				  'heart',
				  'star',
				  'star-o',
				  'user',
				  'film',
				  'th-large',
				  'th',
				  'th-list',
				  'check',
				  'times',
				  'search-plus',
				  'search-minus',
				  'power-off',
				  'signal',
				  'gear',
				  'cog',
				  'trash-o',
				  'home',
				  'file-o',
				  'clock-o',
				  'road',
				  'download',
				  'arrow-circle-o-down',
				  'arrow-circle-o-up',
				  'inbox',
				  'play-circle-o',
				  'rotate-right',
				  'repeat',
				  'refresh',
				  'list-alt',
				  'lock',
				  'flag',
				  'headphones',
				  'volume-off',
				  'volume-down',
				  'volume-up',
				  'qrcode',
				  'barcode',
				  'tag',
				  'tags',
				  'book',
				  'bookmark',
				  'print',
				  'camera',
				  'font',
				  'bold',
				  'italic',
				  'text-height',
				  'text-width',
				  'align-left',
				  'align-center',
				  'align-right',
				  'align-justify',
				  'list',
				  'dedent',
				  'outdent',
				  'indent',
				  'video-camera',
				  'picture-o',
				  'pencil',
				  'map-marker',
				  'adjust',
				  'tint',
				  'edit',
				  'pencil-square-o',
				  'share-square-o',
				  'check-square-o',
				  'arrows',
				  'step-backward',
				  'fast-backward',
				  'backward',
				  'play',
				  'pause',
				  'stop',
				  'forward',
				  'fast-forward',
				  'step-forward',
				  'eject',
				  'chevron-left',
				  'chevron-right',
				  'plus-circle',
				  'minus-circle',
				  'times-circle',
				  'check-circle',
				  'question-circle',
				  'info-circle',
				  'crosshairs',
				  'times-circle-o',
				  'check-circle-o',
				  'ban',
				  'arrow-left',
				  'arrow-right',
				  'arrow-up',
				  'arrow-down',
				  'mail-forward',
				  'share',
				  'expand',
				  'compress',
				  'plus',
				  'minus',
				  'asterisk',
				  'exclamation-circle',
				  'gift',
				  'leaf',
				  'fire',
				  'eye',
				  'eye-slash',
				  'warning',
				  'exclamation-triangle',
				  'plane',
				  'calendar',
				  'random',
				  'comment',
				  'magnet',
				  'chevron-up',
				  'chevron-down',
				  'retweet',
				  'shopping-cart',
				  'folder',
				  'folder-open',
				  'arrows-v',
				  'arrows-h',
				  'bar-chart-o',
				  'twitter-square',
				  'facebook-square',
				  'camera-retro',
				  'key',
				  'gears',
				  'cogs',
				  'comments',
				  'thumbs-o-up',
				  'thumbs-o-down',
				  'star-half',
				  'heart-o',
				  'sign-out',
				  'linkedin-square',
				  'thumb-tack',
				  'external-link',
				  'sign-in',
				  'trophy',
				  'github-square',
				  'upload',
				  'lemon-o',
				  'phone',
				  'square-o',
				  'bookmark-o',
				  'phone-square',
				  'twitter',
				  'facebook',
				  'github',
				  'unlock',
				  'credit-card',
				  'rss',
				  'hdd-o',
				  'bullhorn',
				  'bell',
				  'certificate',
				  'hand-o-right',
				  'hand-o-left',
				  'hand-o-up',
				  'hand-o-down',
				  'arrow-circle-left',
				  'arrow-circle-right',
				  'arrow-circle-up',
				  'arrow-circle-down',
				  'globe',
				  'wrench',
				  'tasks',
				  'filter',
				  'briefcase',
				  'arrows-alt',
				  'group',
				  'users',
				  'chain',
				  'link',
				  'cloud',
				  'flask',
				  'cut',
				  'scissors',
				  'copy',
				  'files-o',
				  'paperclip',
				  'save',
				  'floppy-o',
				  'square',
				  'bars',
				  'list-ul',
				  'list-ol',
				  'strikethrough',
				  'underline',
				  'table',
				  'magic',
				  'truck',
				  'pinterest',
				  'pinterest-square',
				  'google-plus-square',
				  'google-plus',
				  'money',
				  'caret-down',
				  'caret-up',
				  'caret-left',
				  'caret-right',
				  'columns',
				  'unsorted',
				  'sort',
				  'sort-down',
				  'sort-asc',
				  'sort-up',
				  'sort-desc',
				  'envelope',
				  'linkedin',
				  'rotate-left',
				  'undo',
				  'legal',
				  'gavel',
				  'dashboard',
				  'tachometer',
				  'comment-o',
				  'comments-o',
				  'flash',
				  'bolt',
				  'sitemap',
				  'umbrella',
				  'paste',
				  'clipboard',
				  'lightbulb-o',
				  'exchange',
				  'cloud-download',
				  'cloud-upload',
				  'user-md',
				  'stethoscope',
				  'suitcase',
				  'bell-o',
				  'coffee',
				  'cutlery',
				  'file-text-o',
				  'building-o',
				  'hospital-o',
				  'ambulance',
				  'medkit',
				  'fighter-jet',
				  'beer',
				  'h-square',
				  'plus-square',
				  'angle-double-left',
				  'angle-double-right',
				  'angle-double-up',
				  'angle-double-down',
				  'angle-left',
				  'angle-right',
				  'angle-up',
				  'angle-down',
				  'desktop',
				  'laptop',
				  'tablet',
				  'mobile-phone',
				  'mobile',
				  'circle-o',
				  'quote-left',
				  'quote-right',
				  'spinner',
				  'circle',
				  'mail-reply',
				  'reply',
				  'github-alt',
				  'folder-o',
				  'folder-open-o',
				  'smile-o',
				  'frown-o',
				  'meh-o',
				  'gamepad',
				  'keyboard-o',
				  'flag-o',
				  'flag-checkered',
				  'terminal',
				  'code',
				  'reply-all',
				  'mail-reply-all',
				  'star-half-empty',
				  'star-half-full',
				  'star-half-o',
				  'location-arrow',
				  'crop',
				  'code-fork',
				  'unlink',
				  'chain-broken',
				  'question',
				  'info',
				  'exclamation',
				  'superscript',
				  'subscript',
				  'eraser',
				  'puzzle-piece',
				  'microphone',
				  'microphone-slash',
				  'shield',
				  'calendar-o',
				  'fire-extinguisher',
				  'rocket',
				  'maxcdn',
				  'chevron-circle-left',
				  'chevron-circle-right',
				  'chevron-circle-up',
				  'chevron-circle-down',
				  'html5',
				  'css3',
				  'anchor',
				  'unlock-alt',
				  'bullseye',
				  'ellipsis-h',
				  'ellipsis-v',
				  'rss-square',
				  'play-circle',
				  'ticket',
				  'minus-square',
				  'minus-square-o',
				  'level-up',
				  'level-down',
				  'check-square',
				  'pencil-square',
				  'external-link-square',
				  'share-square',
				  'compass',
				  'toggle-down',
				  'caret-square-o-down',
				  'toggle-up',
				  'caret-square-o-up',
				  'toggle-right',
				  'caret-square-o-right',
				  'euro',
				  'eur',
				  'gbp',
				  'dollar',
				  'usd',
				  'rupee',
				  'inr',
				  'cny',
				  'rmb',
				  'yen',
				  'jpy',
				  'ruble',
				  'rouble',
				  'rub',
				  'won',
				  'krw',
				  'bitcoin',
				  'btc',
				  'file',
				  'file-text',
				  'sort-alpha-asc',
				  'sort-alpha-desc',
				  'sort-amount-asc',
				  'sort-amount-desc',
				  'sort-numeric-asc',
				  'sort-numeric-desc',
				  'thumbs-up',
				  'thumbs-down',
				  'youtube-square',
				  'youtube',
				  'xing',
				  'xing-square',
				  'youtube-play',
				  'dropbox',
				  'stack-overflow',
				  'instagram',
				  'flickr',
				  'adn',
				  'bitbucket',
				  'bitbucket-square',
				  'tumblr',
				  'tumblr-square',
				  'long-arrow-down',
				  'long-arrow-up',
				  'long-arrow-left',
				  'long-arrow-right',
				  'apple',
				  'windows',
				  'android',
				  'linux',
				  'dribbble',
				  'skype',
				  'foursquare',
				  'trello',
				  'female',
				  'male',
				  'gittip',
				  'sun-o',
				  'moon-o',
				  'archive',
				  'bug',
				  'vk',
				  'weibo',
				  'renren',
				  'pagelines',
				  'stack-exchange',
				  'arrow-circle-o-right',
				  'arrow-circle-o-left',
				  'toggle-left',
				  'caret-square-o-left',
				  'dot-circle-o',
				  'wheelchair',
				  'vimeo-square',
				  'turkish-lira',
				  'try',
				  'plus-square-o',

	              //new icons added in FA 4.1.0

				  'space-shuttle',
				  'slack',
				  'envelope-square',
				  'wordpress',
				  'openid',
				  'institution',
				  'bank',
				  'university',
				  'mortar-board',
				  'graduation-cap',
				  'yahoo',
				  'google',
				  'reddit',
				  'reddit-square',
				  'stumbleupon-circle',
				  'stumbleupon',
				  'delicious',
				  'digg',
				  'pied-piper-square',
				  'pied-piper',
				  'pied-piper-alt',
				  'drupal',
				  'joomla',
				  'language',
				  'fax',
				  'building',
				  'child',
				  'paw',
				  'spoon',
				  'cube',
				  'cubes',
				  'behance',
				  'behance-square',
				  'steam',
				  'steam-square',
				  'recycle',
				  'automobile',
				  'car',
				  'cab',
				  'taxi',
				  'tree',
				  'spotify',
				  'deviantart',
				  'soundcloud',
				  'database',
				  'file-pdf-o',
				  'file-word-o',
				  'file-excel-o',
				  'file-powerpoint-o',
				  'file-photo-o',
				  'file-picture-o',
				  'file-image-o',
				  'file-zip-o',
				  'file-archive-o',
				  'file-sound-o',
				  'file-audio-o',
				  'file-movie-o',
				  'file-video-o',
				  'file-code-o',
				  'vine',
				  'codepen',
				  'jsfiddle',
				  'life-bouy',
				  'life-saver',
				  'support',
				  'life-ring',
				  'circle-o-notch',
				  'ra',
				  'rebel',
				  'ge',
				  'empire',
				  'git-square',
				  'git',
				  'hacker-news',
				  'tencent-weibo',
				  'qq',
				  'wechat',
				  'weixin',
				  'send',
				  'paper-plane',
				  'send-o',
				  'paper-plane-o',
				  'history',
				  'circle-thin',
				  'header',
				  'paragraph',
				  'sliders',
				  'share-alt',
				  'share-alt-square',
				  'bomb',
                )
            )
        );

	    // allow the theme or other plugins to "hook" into this shortcode's params
	    $this->params = apply_filters('pixcodes_filter_params_for_' . strtolower($this->name), $this->params);

        add_shortcode('icon', array( $this, 'add_shortcode') );
    }

    public function add_shortcode($atts, $content){
		//create an array with only the registered params - dynamic since we filter them and have no way of knowing for sure
	    $extract_params = array();
	    if (isset($this->params)) {
		    foreach ($this->params as $key => $value) {
			    $extract_params[$key] = '';
		    }
	    }
	    extract( shortcode_atts( $extract_params, $atts ) );

		// replace the , with a space
	    $classes = explode(',',$class);
	    $class = implode(' ', $classes);

		// make sure that there is no icon- in front
		$prefix = 'icon-';
		if (substr($name, 0, strlen($prefix)) == $prefix) {
			$name = substr($name, strlen($prefix));
		}

	    /**
	     * Template localization between plugin and theme
	     */
	    $located = locate_template("templates/shortcodes/{$this->code}.php", false, false);
	    if(!$located) {
		    $located = dirname(__FILE__).'/templates/'.$this->code.'.php';
	    }
	    // load it
	    ob_start();
	    require $located;
	    return ob_get_clean();
    }
}

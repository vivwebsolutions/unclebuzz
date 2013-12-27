* {
	outline: none;
}

body {
	margin: 0;
	font-family: Arial;
	font-size: 9pt;
	font-weight: normal;
	color: #808080;
	text-align: center;
	line-height: 18px;
	background-image: url('images/bg.jpg');
	background-attachment: fixed;
}

a:hover {
	text-decoration: none;
}

/*************************** General Styling ***************************/
h1, h1 a, h2, h2 a {
	text-transform: uppercase;
	font-family: "Arial Bold", Arial;
	letter-spacing: -1px;
	line-height: 28px;
	text-shadow: #000000 2px 2px 1px;
	margin: 0 0 10px 0;
}

h1 {
	font-size: 25pt;
}

h2 {
	font-size: 20pt;
}

h3 {
	text-transform: uppercase;
	font-size: 18pt;
	color: #808080;
	font-family: "Arial Bold", Arial;
	letter-spacing: -1px;
	margin: 0 0 10px 0;
	line-height: 30px;
	text-shadow: #000000 0.1em 0.1em 0.2em;
}

h4, h5, h6 {
	text-transform: uppercase;
	font-size: 12pt;
	color: #808080;
	font-family: "Arial Bold", Arial;
	letter-spacing: -1px;
	margin: 0 0 10px 0;
	text-shadow: #000000 0.1em 0.1em 0.2em;
}

h5 {
	font-size: 10pt;
}

h6 {
	font-size: 9pt;
}

ul {
	margin: 2px 2px 0 15px;
	padding: 0;
	list-style: square;
}

li {
	padding: 0 0 2px 0;
}

input, textarea, select {
	background: #000000;
	-moz-border-radius: 5px;
	-khtml-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	font-family: Arial;
	color: #808080;
	font-size: 9pt;
	border: 1px solid #202020;
	padding: 5px;
}

blockquote {
	font-style: italic;
	margin: 0 0 0 15px;
	padding: 0 0 0 5px;
	border-left: 4px solid #404040;
}

hr {
	margin: 20px 0;
	padding: 0;
	background-color: #202020;
	color: #202020;
	width: 100%;
	border: 0;
}

table {
	padding-bottom: 20px;
}

th {
	padding: 10px 20px;
	text-transform: uppercase;
	font-weight: bold;
	background: #202020;
	font-size: 12px;
}

td {
	border-top: 1px solid #202020;
	padding: 10px 20px;
}

fieldset {
	border: 1px solid #202020;
	padding: 10px;
	-moz-border-radius: 5px;
	-khtml-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
}

legend {
	text-transform: uppercase;
	font-weight: bold;
}

/*************************** Content Areas ***************************/
/* Page Wrap */
#page-wrap {
	background: #111111 url('images/page-bg.jpg') repeat-y top center;
	width: 980px;
	margin: 0 auto;
	text-align: left;
	overflow: hidden;
	border-right: 1px solid #000;
	border-left: 1px solid #333;
	box-shadow: 0 0 15px #000;
/*	-moz-box-shadow: inset 1px 1px 1px rgba(0,0,0,0.1);
	-webkit-box-shadow: inset 1px 1px 1px rgba(0,0,0,0.1);*/

}

/* Overall Container */
#overall-container {
	float: left;
	width: 980px;
	position: relative;
	padding: 20px 0 20px 0;
}

/* Main Content Column */
#main-content {
	float: left;
	position: relative;
	width: 610px;
	overflow: hidden;
}

/* Sidebar */
#sidebar {
	float: right;
	position: relative;
	width: 320px;
}

/*************************** Header ***************************/
#header {
	float: left;
	position: relative;
	width: 980px;
	height: 190px;
	background: url('images/header.jpg');
	z-index: 500;
}

/* Logo */
#logo {
	float: left;
	position: relative;
	top: 50px;
	left: 40px;
	width: 680px;
	height: 100px;
}

#logo img {
	border: 0;
}

#text-logo {
	float: left;
	position: relative;
	top: 50px;
	left: 40px;
	width: 680px;
	height: 100px;
	line-height: 60pt;
	text-transform: uppercase;
	font-family: "Arial Bold", Arial;
	letter-spacing: -4px;
	text-shadow: #000000 0.1em 0.1em 0.2em;
	font-size: 60pt;
}

/* Communication */
#communication {
	position: relative;
	top: 60px;
	right: 55px;
	float: right;
	width: 190px;
	height: 66px;
}

#communication img {
	border: 0;
	margin: 5px;
	filter: progid:DXImageTransform.Microsoft.alpha(opacity=100);
	-moz-opacity: 1;
	-khtml-opacity: 1;
	opacity: 1;
}

#communication img:hover {
	filter: progid:DXImageTransform.Microsoft.alpha(opacity=70);
	-moz-opacity: 0.7;
	-khtml-opacity: 0.7;
	opacity: 0.7;
}

/*************************** Navigation ***************************/
/* Navigation Container */
#nav {
	position: relative;
	top: 69px;
	left: 40px;
	float: left;
	width: 720px;
}

#nav, #nav ul {
	margin: 0;
	padding: 0;
	list-style-type: none;
	list-style-position: outside;
	position: relative;
	line-height: 18pt;
}

#nav ul li {
	float: left;
	position: relative;
	margin-right: 25px;
}

#nav ul li a {
	color: #808080;
	letter-spacing: -1px;
	font-size: 16pt;
	font-weight: bold;
	font-family: "Arial Black", "Arial Bold", Arial;
	text-transform: uppercase;
	text-shadow: #000000 3px 3px 2px;
}

/* Drop Down Menus */
#nav ul ul {
	position: absolute;
	display: none;
	width: 14em;
	top: 2.5em;
	left: 0;
	padding: 5px 0;
	background: url(images/nav-bg.jpg) repeat-y;
}

#nav ul li ul li {
	background-image: none;
}

#nav ul li ul a{
	font-family: "Arial Bold", Arial;
	width: 12em;
	display: block;
	height: auto;
	float: left;
	line-height: 1em;
	padding: 5px 20px;
	font-size: 10pt;
}

#nav ul ul ul{
	top: auto;
}
	
#nav ul li ul ul {
	z-index: 1;
	left: 14em;
	margin: 0;
}

#nav ul li:hover ul, #nav ul li li:hover ul, #nav ul li li li:hover ul, #nav ul li li li li:hover ul{
	display: block;
}

/* Navigation Links */
#nav ul .current_page_item a:hover,
#nav ul .current-cat a:hover,
#nav ul .current-menu-item a:hover {
	color: #c0c0c0;
	text-decoration: none;
}

/*************************** Slider ***************************/
/* Slider Container */
#slider-container-outer {
	overflow: hidden;
	float: left;
	position: relative;
	width: 980px;
	height: 356px;
	background: url('images/slider.jpg') no-repeat;
}

#slider-container-inner {
	overflow: hidden;
	float: left;
	position: relative;
	width: 980px;
	height: 336px;
}

/* Slider */
#slider {
	float: left;
	position: relative;
	overflow: hidden;
	width: 900px;
	height: 262px;
	top: 50px;
	left: 40px;
}

#slider .contentdiv {
	width: 100%;
	height: 100%;
	display: none;
}

.slider-image {
	position: relative;
	float: left;
	width: 462px;
	height: 262px;
	overflow: hidden;
	margin: 0 20px 0 0;
}

.slider-image img {
	width: 462px;
	border: 0;
}

.overlay {
	background: url(images/overlay.png) no-repeat;
	position: absolute;
	width: 464px;
	height: 262px;
	z-index: 100;
	top: 0;
	left: 0;
}

.overlay a {
	display: block;
	width: 464px;
	height: 262px;
}

.slider-excerpt {
	position: relative;
}

.slider-excerpt h1 {
	font-size: 25pt;
	margin: 0 0 10px 0;
}

/* Next & Prev Links */
#paginate-slider {
	float: right;
	z-index: 200;
	position: relative;
	top: 282px;
	right: 40px;
}

#next, #prev {
	letter-spacing: -1px;
	display: block;
	float: left;
	font-size: 14pt;
	font-weight: normal;
	font-family: "Arial Black", "Arial Bold", Arial;
	text-transform: uppercase;
	cursor: pointer;
	border: 1px solid #202020;
	padding: 5px 10px 8px 10px;
	background: #111111;
}

/* Collapsible Box */
#collapsible-link {
	float: right;
	position: relative;
	top: 69px;
	right: 40px;
	text-align: right;
	width: 200px;
}

#collapsible-link ul {
	list-style: none;
	margin: 0;
	padding: 0;
	line-height: 18pt;
}

#collapsible-link .slide-button {
	position: relative;
	top: -15px;
	right: 0;
	float: right;
	background: url(images/up-down.gif) no-repeat right top;
	width: auto;
	height: 21px;
	padding: 15px 25px 0 0;
	margin: 0;
}

#collapsible-link .slide-button a {
	letter-spacing: -1px;
	font-size: 16pt;
	font-weight: normal;
	font-family: "Arial Black", "Arial Bold", Arial;
	color: #d1d1d1;
	text-transform: uppercase;
	text-shadow: #000000 0.1em 0.1em 0.2em;
}

#slide-box {
	display: none;
	width: 910px;
	position: relative;
	top: 40px;
	left: 35px;
	overflow: hidden;
}

/* Shoutbox Plugin */
#sb_messages {
	height: 150px;
	background: transparent;
	padding: 0;
	margin: 0 0 5px 0;
}

#input_area {
	float: left;
	width: 100%;
}

#input_area tr, #input_area td {
	border: 0 none;
	padding: 0 5px 0 0;
	margin: 0;
}

#input_area .info {
	float: left;
	padding: 6px 10px 0 0;
}

.sb_input {
	float: left;
	width: 200px;
}

#sb_name {
	width: 100px;
}

#sb_website {
	width: 125px;
}

#sb_message {
	width: 320px;
}

#sb_addmessage {
	float: left;
	width: 50px;
	margin: 2px 0;
	cursor: pointer;
}

/*************************** Page/Post Styling ***************************/
/* Posts */
.post {
	float: left;
	width: 550px;
	padding: 20px 20px 20px 40px;
	margin: 0 0 30px 0;
}

.post .image-preview {
	float: left;
	width: 115px;
	height: 115px;
	overflow: hidden;
	border: 4px solid #000000;
	margin: 10px 10px 0 0;
}

.post .image-preview img {
	width: 115px;
	border: 0;
}

.post-extended {
	float: left;
	background: url(images/post-bg-extended.jpg) repeat-y;
	width: 900px;
	padding: 20px 40px;
}

/* Two Columns */
.col-left {
	float: left;
	width: 440px;
	padding: 0 10px 0 0;
}

.col-right {
	float: right;
	width: 440px;
	padding: 0 0 0 10px;
}

/* Post Details */
#details {
	float: left;
	padding: 30px 0 0 0;
	width: 100%;
}

#details .avatar {
	float: left;
	margin-right: 10px;
	width: auto;
}

#details .info {
	float: left;
	width: 350px;
}

#social-links {
	float: right;
	width: 100px;
	text-align: right;
}

#social-links img {
	border: 0;
	filter: progid:DXImageTransform.Microsoft.alpha(opacity=70);
	-moz-opacity: 0.7;
	-khtml-opacity: 0.7;
	opacity: 0.7;
}

#social-links img:hover {
	filter: progid:DXImageTransform.Microsoft.alpha(opacity=100);
	-moz-opacity: 1;
	-khtml-opacity: 1;
	opacity: 1;
}

/* Lightbox */
.pp_pic_holder {
	border: 1px solid #202020 !important;
}

/*************************** Widgets ***************************/
/* General Widgets */
.widget {
	position: relative;
	float: left;
	padding: 20px 40px 20px 20px;
	width: 260px;
	margin: 0 0 10px 0;
	overflow: hidden;
}

.widget ul {
	list-style: none;
	margin: 0;
	padding: 10px 0 0 0;
}

.widget li {
	margin: 0;
	padding: 0 0 10px 0;
}

.widget li a {
	text-shadow: #000000 0.1em 0.1em 0.2em;
}

.widget img:hover {
	border: 1px solid #808080;
}

/* Search Widget */
#searchbar {
	float: left;
	width: 160px;
	height: 17px;
	margin: 0;
	font-size: 11pt;
}

#searchsubmit {
	margin: -5px 0 0 0;
	float: left;
	background: transparent;
	border: 0;
	width: auto;
}

/* Recent Comments */
#recent-comments .avatar {
	float: left;
	border: 0 none;
	width: auto;
	margin-right: 6px;
	padding-top: 3px;
}

#recent-comments li {
	margin: 0;
	padding: 0 0 15px 0;
}

/*************************** Comments Page ***************************/
/* User Comments */
.comments {
	float: left;
	position: relative;
	width: 550px;
	padding: 20px 20px 20px 40px;
}

#commentlist li ul {
	list-style-type: none;
}

.comment-body {
	float: left;
	width: 557px;
	padding: 15px 0 5px 0;
	border-bottom: 1px solid #202020;
}

.depth-2 .comment-body {
	margin-left: 5px;
	width: 537px;
}

.depth-3 .comment-body {
	margin-left: 10px;
	width: 517px;
}

.depth-4 .comment-body {
	margin-left: 15px;
	width: 497px !important;
}

.depth-5 .comment-body {
	margin-left: 20px;
	width: 477px !important;
}

.comment-body .avatar {
	float: left;
	margin: 0 10px 0 0;
	width: 45px;
	height: 45px;
}

.comment-meta {
	float: left;
	padding: 3px 0 0 0;
	width: auto;
}

.comment-meta a {
	color: #404040;
}

.comment-text {
	overflow: hidden;
}

.moderation {
	color: #cc0000;
	font-weight: bold;
}

/* Comment Form */
#commentform textarea {
	width: 550px;
	max-width: 550px;
}

#commentform #submit {
	float: right;
	background: transparent url('images/submit.gif') no-repeat;
	width: 76px;
	height: 28px;
	border: 0;
	cursor: pointer;
}

/* Comment Subscription */
#solo-subscribe-email {
	border: 1px solid #000000;
	background: #202020;
	color: #808080;
	padding: 5px;
	width: 150px;
	font-family: Arial;
	font-size: 9pt;
	height: auto;
}

.solo-subscribe-to-comments input {
	width: auto;
}

.solo-subscribe-errors {
	margin: 10px 0 10px 0;
	background: #111111;
	border: 1px solid #a80000;
	padding: 5px;
	width: 300px;
}

#single fieldset {
	margin: 10px 0 10px 0;
	border: 1px solid #000000;
	background: #202020;
}

#single legend {
	margin: 0;
	font-size: 13pt;
	font-weight: bold;
}

#single .updated {
	text-align: center;
	background: #111111;
	border: 1px solid #202020;
	-moz-border-radius: 5px;
	-khtml-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	margin: 10px 0 10px 0;
}

#single input {
	width: auto;
	height: auto;
}

/*************************** Footer ***************************/
/* Footer */
#footer {
	padding: 25px 40px;
	margin: 20px 0 0 0;
	width: 900px;
	text-align: center;
	background: url('images/footer.jpg') repeat-y;
	font-weight: bold;
	text-transform: uppercase;
}

/* Footer Widgets */
#footer .footer-widget {
	text-align: left;
	position: relative;
	float: left;
	width: 270px;
	font-size: 9pt;
	text-transform: none;
	text-shadow: none;
	font-weight: normal;
	margin-right: 30px;
	padding-bottom: 30px;
}

#footer .footer-widget .last {
	margin-right: 0;
}

#footer .footer-widget a {
	font-size: 9pt;
	font-weight: normal;
	text-transform: none;
	color: #808080;
	text-shadow: #000000 0.1em 0.1em 0.2em;
}

#footer .footer-widget h3, #footer .footer-widget h3 a {
	color: #d1d1d1;
	font-size: 12pt;
	font-weight: normal;
	margin: 0;
}

#footer .footer-widget li {
	margin: 0;
}

/*************************** Captions & Alignments ***************************/
.aligncenter {
	display: block;
	margin: 0 auto;
	border: 4px solid #000000;
}

.alignleft {
	float: left;
	margin: 0 10px 5px 0;
	border: 4px solid #000000;
}

.alignright {
	float: right;
	margin: 0 0 5px 10px;
	border: 4px solid #000000;
}

.wp-caption {
	background: #000000;
	border: 1px solid #202020;
	text-align: center;
	padding-top: 4px;
}

.wp-caption img {
	margin: 0;
	padding: 0;
	border: 0 none;
}

.wp-caption p.wp-caption-text {
	font-size: 11px;
	line-height: 17px;
	padding: 3px 0 3px 0;
	margin: 0;
	text-transform: uppercase;
}

.left {
	width: auto;
	float: left;
}

.right {
	width: auto;
	float: right;
}

.clear {
	clear: both;
}

/*************************** Page Navigation ***************************/
.wp-pagenavi {
	padding: 0 0 20px 0 !important;
	border: 0 !important;
	float: right !important;
	width: auto;
}

.page-comments {
	padding: 20px 0 0 0 !important;
	border: 0 !important;
	float: right !important;
	width: auto;
}

.wp-pagenavi a, .wp-pagenavi a:link, .wp-pagenavi a:visited, .wp-pagenavi a:active, .wp-pagenavi span.pages, .wp-pagenavi span.extend, .page-numbers {
	display: block;
	border: 1px solid #202020 !important;
	float: left !important;
	background: #111111 !important;
	padding: 2px 6px !important;
	margin: 0 0 0 5px !important;
	color: #808080 !important;
	text-transform: uppercase !important;
	font-size: 10pt !important;
	font-family: "Arial Bold", Arial !important;
	letter-spacing: -1px !important;
	text-shadow: #000000 0.1em 0.1em 0.2em !important;
	width: auto;
	text-align: center !important;
}

.wp-pagenavi a:hover, .page-numbers:hover {
	color: #d1d1d1 !important;
	border: 1px solid #202020 !important;
	text-decoration: none !important;
	text-align: center !important;
}

.wp-pagenavi span.current, .page-comments span.current {
	color: #d1d1d1 !important;
	display: block;
	border: 1px solid #202020 !important;
	float: left !important;
	background: #000000 !important;
	padding: 2px 6px !important;
	margin: 0 0 0 5px !important;
	text-transform: uppercase !important;
	font-size: 10pt !important;
	font-family: "Arial Bold", Arial !important;
	letter-spacing: -1px !important;
	text-shadow: #000000 0.1em 0.1em 0.2em !important;
	width: auto;
	text-align: center !important;
	font-weight: normal !important;
}

.post-navi {
	float: right;
	padding: 20px 0 20px 0 !important;
	border: 0 !important;
	float: right !important;
	width: auto;
	margin: 0 0 0 5px !important;
	color: #808080 !important;
	text-transform: uppercase !important;
	font-size: 10pt !important;
	font-family: "Arial Bold", Arial !important;
	letter-spacing: -1px !important;
	text-shadow: #000000 0.1em 0.1em 0.2em !important;
}

.post-navi span {
	border: 1px solid #202020 !important;
	background: #000000 !important;
	padding: 2px 6px !important;
	margin: 0 0 0 5px !important;
	color: #ffffff !important;
	text-transform: uppercase !important;
	font-size: 10pt !important;
	font-family: "Arial Bold", Arial !important;
	letter-spacing: -1px !important;
	text-shadow: #000000 0.1em 0.1em 0.2em !important;
	width: auto;
	text-align: center !important;
}

.post-navi a span {
	color: #808080 !important;
	text-decoration: none !important;
	background: #111111 !important;
}

.post-navi a:hover span {
	color: #ffffff !important;
	text-decoration: none;
}

.post-navi a:hover {
	text-decoration: none !important;
}

/*************************** Contact Page ***************************/
#contact {
	float: left;
	width: 465px;
	padding: 0 30px 0 0;
}

.required {
	font-size: 13px;
	color: #ff0000;
}

#message {
	margin: 0 0 20px 0;
	padding: 0;
}

.moderation, #contact .error_message {
	display: block;
	height: 22px;
	line-height: 22px;
	background: url(images/error.gif) #fbe3e4 no-repeat 10px center;
	padding: 3px 10px 3px 35px;
	color: #8a1f11;
	border: 1px solid #fbc2c4;
}

#contact .loader {
	background: url(images/loader.gif) no-repeat right center;
	float: left;
	padding: 10px 10px;
	width: 16px;
	height: 16px;
}

#contact #success_page h2 {
	padding: 2px 0 0 22px;
	background: url(images/success.png) left no-repeat;
}

a, .meta a:hover {
	color: #d1d1d1;
	text-decoration: none;
}

#input_area tr, #contact .submit {
	float: left;
}

#sb_showsmiles, #nav ul li:hover ul ul, #nav ul li:hover ul ul ul, #nav ul li:hover ul ul ul ul, #shoutbox h3 {
	display: none;
}

.post h2, .post-excerpt {
	margin: 0 0 10px 0;
}

.post .meta, .meta a {
	color: #4c4c4c;
}

.widget img, input:focus, textarea:focus, input[type="submit"]:hover, input[type="reset"]:hover {
	border: 1px solid #404040;
}

#commentlist, #footer .footer-widget ul {
	list-style: none;
	margin: 0;
	padding: 0;
}

.subscribe-to-comments, html, form {
	margin: 0;
	padding: 0;
}

h1 a:hover, h2 a:hover, #text-logo a, #text-logo a:hover, #nav ul .current_page_item .page_item a,
#nav ul .current-cat .cat-item a,
#nav ul .current-menu-item .menu-item a,
#nav .current_page_ancestor .page_item a,
#nav .current-cat-ancestor .cat-item a,
#nav .current-menu-ancestor .menu-item a, .comment-meta a:hover {
	color: #808080;
}

#nav ul li a:hover, #nav ul .current_page_item .page_item a:hover,
#nav ul .current-cat .cat-item a:hover,
#nav ul .current-menu-item .menu-item a:hover,
#nav .current_page_ancestor .page_item a:hover,
#nav .current-cat-ancestor .cat-item a:hover,
#nav .current-menu-ancestor .menu-item a:hover, .author, .author a, #footer .footer-widget a:hover {
	color: #c0c0c0;
}
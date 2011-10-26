/* MOBILE SIZING & FLOAT CLEARS
------------------------------------------------------------------- */

body { -webkit-text-size-adjust:100%; min-width: 100%; }
.container_4 {margin-left: auto; margin-right: auto; width: 100%; }
.grid_1,.grid_2,.grid_3,.grid_4 { display: inline; float: left; margin-left: 6%; margin-right: 6%; margin-bottom: 0; }
.push_1, .pull_1, .push_2, .pull_2, .push_3, .pull_3, .push_4, .pull_4 { position: relative; }
.alpha { margin-left: 0; }
.omega { margin-right: 0; }

.container_4 .grid_1 { width: 88%; }
.container_4 .grid_2 { width: 88%; }
.container_4 .grid_3 { width: 88%; }
.container_4 .grid_4 { width: 88%; }

.container_4.no-space { padding:0; width: 100%; }
.container_4.no-space .grid_1 { width:100%; margin:0; }
.container_4.no-space .grid_2 { width:100%; margin:0; }
.container_4.no-space .grid_3 { width:100%; margin:0; }
.container_4.no-space .grid_4 { width:100%; margin:0; }

.container_4.push-down .grid_1,
.container_4.push-down .grid_2,
.container_4.push-down .grid_3,
.container_4.push-down .grid_4 { margin-bottom:6%; }

.clear { clear: both; display: block; overflow: hidden; visibility: hidden; width: 0; height: 0; }
.clearfix:before,
.clearfix:after,
.container_4:before,
.container_4:after { content: '.'; display: block; overflow: hidden; visibility: hidden; font-size: 0; line-height: 0; width: 0; height: 0; }
.clearfix:after, .container_4:after { clear: both; }
.clearfix, .container_4 { zoom: 1; }



/* GENERAL ADMINPRO STYLING
------------------------------------------------------------------- */
body { background-position:0 30px; }
#logo { margin:0 0 0 2%; }
#logo h1 { width:100%; margin:0; background-size: 155px 62px; background: url(../img/logo_x2.png) no-repeat 20px center; }
.mobile-nav-wrap { display:block; padding:13px 13px 0 13px; }
.mobile-navigation { height:37px; width:100%; display:block; }
.hide-on-mobile { display:none !important; }
.show-on-tablet { display:none !important; }
#main-navigation { margin:0 6%; }
#header { padding-top:30px; background-position:0 30px; }
#eyebrow-navigation { text-align:right; background:#; color:#fff; position:absolute; top:0; left:0; width:88%; padding:5px 6%; height:20px; }
.panel { margin-bottom:6%; }
.panel .content,
.panel .tabs,
.panel .accordion-wrapper { display:none; }
.page-wrap { margin:0 6%; }


.title-crumbs { display:block; padding-bottom:20px }
#page-heading .page-wrap { text-align:left; }



/* BUTTONS & ALERTS
------------------------------------------------------------------- */


.alert-wrapper .alert-text { font-size:11px; line-height:15px; margin:0 6%; }



/* GALLERIES
------------------------------------------------------------------- */

.gallery-item .item-options { opacity:1 !important; }

.gallery .pager {
	position:relative;
	text-align:left;
	margin:0;
}
.gallery .pager:after { content:" "; clear:both; }
.gallery .gallery-options { position:relative !important; top:0; left:0; }
.gallery-options .button { float:none !important; display:block !important; margin:0 0 5px !important; }
.gallery-options:after { content:" "; clear:both; }
.gallery form { height:52px; }
.gallery form .button { text-align:center !important; float:left; width:35px !important; }
.gallery form .button img { margin:0 auto; }
.gallery form .pagedisplay { position:relative; top:10px; float:left; width:50px;  }



/* FORM STYLING
------------------------------------------------------------------- */

form.styled lable, form.styled .non-lable-section { margin:0 0 15px; padding:0; border-left:none; }
form.styled lable span, form.styled .non-lable-section span { position:relative; top:0; left:0; display:block; margin:0 0 5px; }
form.styled select { width:100%; }

form.styled .button { text-align:center; clear:both; float:none !important; display:block; margin:0 0 5px !important; }
form.styled .button:after { content:" "; clear:both; }

/* Show normal select boxes on the mobile version */
.chzn-container { display:none !important; }
.chzn-done { display:block !important; }



/* FOOTER
------------------------------------------------------------------- */

#footer { font-size:11px; }
#footer .align_right { text-align:left; }

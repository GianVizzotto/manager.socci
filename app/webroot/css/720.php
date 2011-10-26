/*
  960 Grid System ~ Core CSS.
  Learn more ~ http://960.gs/

  Licensed under GPL and MIT.
*/

/*
  Forces backgrounds to span full width,
  even if there is horizontal scrolling.
  Increase this if your layout is wider.

  Note: IE6 works fine without this fix.
*/

body {
  min-width: 100%;
}

/* `Containers
----------------------------------------------------------------------------------------------------*/

.container_4 {
  margin-left: auto;
  margin-right: auto;
  width: 100%;
}

/* `Grid >> Global
----------------------------------------------------------------------------------------------------*/

.grid_1,
.grid_2,
.grid_3,
.grid_4 {
  display: inline;
  float: left;
  margin-left: 4%;
  margin-right: 4%;
  margin-bottom: 0;
}

/* `Grid >> Children (Alpha ~ First, Omega ~ Last)
----------------------------------------------------------------------------------------------------*/

.alpha {
  margin-left: 0;
}

.omega {
  margin-right: 0;
}

/* `Grid >> 12 Columns
----------------------------------------------------------------------------------------------------*/

.container_4 .grid_1 {
  width: 92%;
}

.container_4 .grid_2 {
  width: 92%;
}

.container_4 .grid_3 {
  width: 92%;
}

.container_4 .grid_4 {
  width: 92%;
}

/* No Spacing
----------------------------------------------------------------------------------------------------*/

.container_4.no-space { padding:0; width: 100%; }
.container_4.no-space .grid_1 { width:100%; margin:0; }
.container_4.no-space .grid_2 { width:100%; margin:0; }
.container_4.no-space .grid_3 { width:100%; margin:0; }
.container_4.no-space .grid_4 { width:100%; margin:0; }

/* Misc Classes
----------------------------------------------------------------------------------------------------*/

.container_4.push-down .grid_1,
.container_4.push-down .grid_2,
.container_4.push-down .grid_3,
.container_4.push-down .grid_4 { margin-bottom:3%; }

/* `Clear Floated Elements
----------------------------------------------------------------------------------------------------*/

/* http://sonspring.com/journal/clearing-floats */

.clear {
  clear: both;
  display: block;
  overflow: hidden;
  visibility: hidden;
  width: 0;
  height: 0;
}

/* http://www.yuiblog.com/blog/2010/09/27/clearfix-reloaded-overflowhidden-demystified */

.clearfix:before,
.clearfix:after,
.container_4:before,
.container_4:after {
  content: '.';
  display: block;
  overflow: hidden;
  visibility: hidden;
  font-size: 0;
  line-height: 0;
  width: 0;
  height: 0;
}

.clearfix:after,
.container_4:after {
  clear: both;
}

/*
  The following zoom:1 rule is specifically for IE6 + IE7.
  Move to separate stylesheet if invalid CSS is a problem.
*/

.clearfix,
.container_4 {
  zoom: 1;
}


/* Admin Pro Styling
----------------------------------------------------------------------------------------------------*/
#main-navigation { margin:0 4%; }
#logo { margin:0 0 0 4%; width:71%; }
#header { padding-top:30px; background-position:0 30px; }
.hide-on-tablet { display:none !important; }
.show-on-mobile { display:none !important; }
#eyebrow-navigation { text-align:right; background:#; color:#fff; position:absolute; top:0; left:0; width:92%; padding:5px 4%; height:20px; }
#search { position:absolute; width:160px; top:45px; right:4%; }
#search input.go { top:2px; right:2px; }
#subpages .subpage-wrap { margin:0 4%; }
#page-heading { position:relative; }
#page-heading .align_right { position:absolute; width:50%; top:22px; right:1%; }
.page-wrap { margin:0 4%; }
.panel { margin-bottom:3%; }
.alert-wrapper .alert-text { line-height:20px; min-height:26px; margin:0 4%; }
.gallery-item .item-options { opacity:1 !important; }

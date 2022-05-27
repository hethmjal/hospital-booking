<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="Tooplate">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <!-- MAIN CSS -->
  <title>CodePen - Filter Users Fullcalendar</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.42/css/bootstrap-datetimepicker.min.css'><link rel="stylesheet" href="./style.css">
<style media="screen">
body{
font-family: Roboto;
padding: 30px;
}
.dropNewEvent{
font-family: Roboto;
font-size: 13px;
}
.popoverTitleCalendar{
width: 100%;
height: 100%;
padding: 15px 15px;
font-family: Roboto;
font-size: 13px;
border-radius: 5px 5px 0 0;
}
.popoverInfoCalendar i{
font-size: 14px;
  margin-right: 10px;
  line-height: inherit;
  color: #d3d4da;
}
.popoverInfoCalendar p{
margin-bottom: 1px;
}
.popoverDescCalendar{
margin-top: 12px;
padding-top: 12px;
border-top: 1px solid #E3E3E3;
overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
}
.popover-title {
  background: transparent;
  font-weight: 600;
  padding: 0 !important;
  border: none;
}
.popover-content {
  padding: 15px 15px;
  font-family: Roboto;
  font-size: 13px;
}
.inputModal{
width: 65%;
margin-bottom: 10px;
}
#contextMenu {
position: absolute;
display:none;
z-index: 2;
}
#contextMenu .dropdown-menu{
border: none;
}
.opacityWeekend{
background-color: #f4f4fb !important;
}
.fc-avatar-image{
  top: 4px;
  left: 20px;
  height: 28px;
  width: 28px;
  border-radius: 50%;
  position: absolute;
  z-index: 2;
}
.fc-avatar-image img{
height: 28px;
width: 28px;
border-radius: 50%;
}
.fc-avatar-image:before{
  content: none !important;
}
.fc-day-header{
text-transform: uppercase;
font-size: 13px;
font-family: Roboto;
font-weight: 500;
color: #505363;
background-color: #FAFAFA;
padding: 11px 0px !important;
text-decoration: none;
}
.fc-day-header a{
text-decoration: none !important;
color: #505363;
}
.fc-center h2{
 text-transform: uppercase;
font-size: 18px;
font-family: Roboto;
font-weight: 500;
color: #505363;
line-height: 32px;
}
.fc-toolbar.fc-header-toolbar {
  margin-bottom: 22px;
  padding-top: 22px;
}
.fc-agenda-view .fc-day-grid .fc-row .fc-content-skeleton {
  padding-bottom: 1em;
  padding-top: 1em;
}
.fc-day{
transition: all 0.2s linear;
}
.fc-day:hover{
background:#EEF7FF;
cursor: pointer;
transition: all 0.2s linear;
}
.fc-highlight {
  background: #EEF7FF;
  opacity: 0.7;
}
.fc-time-grid-event.fc-short .fc-time:before {
  content: attr(data-start);
  display: none;
}
.fc-time-grid-event.fc-short .fc-time span {
  display: inline-block;
}
.fc-time-grid-event.fc-short .fc-avatar-image {
  display: none;
  transition: all 0.3s linear;
}
.fc-time-grid .fc-bgevent, .fc-time-grid .fc-event {
  border: 1px solid #fff !important;
}
.fc-time-grid-event.fc-short .fc-content {
  padding: 4px 20px 10px 22px !important;
}
.fc-time-grid-event .fc-avatar-image{
  top: 9px;
}
.fc-event-vert {
min-height: 22px;
}
.fc .fc-axis {
  vertical-align: middle;
  padding: 0 4px;
  white-space: nowrap;
  font-size: 10px;
  color: #505362;
  text-transform: uppercase;
  text-align: center !important;
  background-color: #fafafa;
}
.fc-unthemed .fc-event .fc-content, .fc-unthemed .fc-event-dot .fc-content {
  padding: 10px 20px 10px 22px;
  font-family: 'Roboto', sans-serif;
  margin-left: -1px;
  height: 100%;
}
.fc-event{
  border: none !important;
}
.fc-day-grid-event .fc-time {
  font-weight: 700;
    text-transform: uppercase;
}
.fc-unthemed .fc-day-grid td:not(.fc-axis).fc-event-container {
  padding: 0.2rem 0.5rem;
}
.fc-unthemed .fc-content, .fc-unthemed .fc-divider, .fc-unthemed .fc-list-heading td, .fc-unthemed .fc-list-view, .fc-unthemed .fc-popover, .fc-unthemed .fc-row, .fc-unthemed tbody, .fc-unthemed td, .fc-unthemed th, .fc-unthemed thead {
  border-color: #DADFEA;
}
.fc-ltr .fc-h-event .fc-end-resizer, .fc-ltr .fc-h-event .fc-end-resizer:before, .fc-ltr .fc-h-event .fc-end-resizer:after, .fc-rtl .fc-h-event .fc-start-resizer, .fc-rtl .fc-h-event .fc-start-resizer:before, .fc-rtl .fc-h-event .fc-start-resizer:after {
  left: auto;
  cursor: e-resize;
  background: none;
}
.colorAppointment :before {
  background-color: #9F4AFF;
  border-right: 1px solid rgba(255, 255, 255, 0.6);
  display: block;
  content: " ";
  position: absolute;
  height: 100%;
  width: 8px;
  border-radius: 3px 0 0 3px;
  top: 0;
  left: -1px;
}
.colorCheck-in :before {
  background-color: #ff4747;
  border-right: 1px solid rgba(255, 255, 255, 0.6);
  display: block;
  content: " ";
  position: absolute;
  height: 100%;
  width: 8px;
  border-radius: 3px 0 0 3px;
  top: 0;
  left: -1px;
}
.colorCheckout :before {
  background-color: #FFC400;
  border-right: 1px solid rgba(255, 255, 255, 0.6);
  display: block;
  content: " ";
  position: absolute;
  height: 100%;
  width: 8px;
  border-radius: 3px 0 0 3px;
  top: 0;
  left: -1px;
}
.colorInventory :before {
  background-color: #FE56F2;
  border-right: 1px solid rgba(255, 255, 255, 0.6);
  display: block;
  content: " ";
  position: absolute;
  height: 100%;
  width: 8px;
  border-radius: 3px 0 0 3px;
  top: 0;
  left: -1px;
}
.colorValuation :before {
  background-color: #0DE882;
  border-right: 1px solid rgba(255, 255, 255, 0.6);
  display: block;
  content: " ";
  position: absolute;
  height: 100%;
  width: 8px;
  border-radius: 3px 0 0 3px;
  top: 0;
  left: -1px;
}
.colorViewing :before {
  background-color: #26CBFF;
  border-right: 1px solid rgba(255, 255, 255, 0.6);
  display: block;
  content: " ";
  position: absolute;
  height: 100%;
  width: 8px;
  border-radius: 3px 0 0 3px;
  top: 0;
  left: -1px;
}
select.filter{
width: 500px !important;
}

.popover  {
background: #fff !important;
color: #2E2F34;
border: none;
margin-bottom: 10px;
}

/*popover header*/
.popover-title{
  background: #F7F7FC;
  font-weight: 600;
  padding: 15px 15px 11px ;
  border: none;
}

/*popover arrows*/
.popover.top .arrow:after {
border-top-color: #fff;
}

.popover.right .arrow:after {
border-right-color: #fff;
}

.popover.bottom .arrow:after {
border-bottom-color: #fff;
}

.popover.left .arrow:after {
border-left-color: #fff;
}

.popover.bottom .arrow:after {
border-bottom-color: #fff;
}
.material-icons {
font-family: 'Material Icons';
font-weight: normal;
font-style: normal;
font-size: 24px;  /* Preferred icon size */
display: inline-block;
line-height: 1;
text-transform: none;
letter-spacing: normal;
word-wrap: normal;
white-space: nowrap;
direction: ltr;

/* Support for all WebKit browsers. */
-webkit-font-smoothing: antialiased;
/* Support for Safari and Chrome. */
text-rendering: optimizeLegibility;

/* Support for Firefox. */
-moz-osx-font-smoothing: grayscale;

/* Support for IE. */
font-feature-settings: 'liga';
}
.fc-icon-print::before{
font-family: 'Material Icons';
content: "\e8ad";
font-size: 24px;
}
.fc-printButton-button{
padding: 0 3px !important;
}

@media print {
.print-visible  { display: inherit !important; }
.hidden-print   { display: none !important; }
}
.navbar-nav li.appointment-btn a{
  background: #a5c422;
  border-radius: 3px;
  color: #ffffff;
  font-weight: 600;
  padding-top: 12px;
  padding-bottom: 12px;
}
element.style{
  width: 1272px;
}
.navbar-default{
  background: #ffffff;
  box-shadow: 0 2px 8px rgb(0 0 0 /8%);
  border: none;
  margin-bottom: 0;
  padding: 10px;
}
</style>
</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
<!-- partial:index.partial.html -->


<section class="preloader">
     <div class="spinner">

          <span class="spinner-rotate"></span>

     </div>
</section>

<section class="navbar navbar-default navbar-static-top" role="navigation">
     <div class="container">

          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>



               <img style="margin-left: 2em;" src="images/logo.png" alt="" width="60" height="54">
               <img style="margin-left: 1em;  " src="images/20301.png" alt="" width="60" height="54">
          </div>


          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html" class="smoothScroll">Home</a></li>
                    <li><a href="createcalender.html" class="smoothScroll">Dr. Sara Hamed</a></li>
                    <li class="appointment-btn"><a href="createcalender.html">Log Out</a></li>
               </ul>
          </div>

     </div>
</section>
<br>
<br>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>

<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">

<link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.print.css' rel='stylesheet' media='print' />

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<div id="contextMenu" class="dropdown clearfix">

</div>



<div class="col-lg-2">

<div class="form-group">
  <label for="ShowWeekends">Calendar Weekends</label>
  <div class="input-group">
  <input class='showHideWeekend' type="checkbox" checked>
    </div>
</div>
</div>

  </div>
</div>


<div class="panel panel-default hidden-print">
  <div class="panel-heading">
  </div>
  <div class="panel-body">

    <div class="col-lg-4">

  <div class="input-group">


    </div>
</div>



    <div class="col-lg-4">

  <label for="calendar_view">Filter Users</label>
  <div class="input-group">
      <label class="checkbox-inline"><input class='filter' type="checkbox" value="visitor" checked>visitor</label>
      <label class="checkbox-inline"><input class='filter' type="checkbox" value="amenities" checked>Amenities</label>
  </div>
</div>

  </div>
</div>

        <div id="wrapper">
            <div id="loading"></div>
            <div class="print-visible" id="calendar"></div>
        </div>


      <!-- ADD EVENT MODAL -->

      <div class="modal fade" tabindex="-1" role="dialog" id="newEventModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Create new <span class="eventType"></span></h4>
            </div>
            <div class="modal-body">

              <div class="row">
                    <div class="col-xs-12">
                        <label class="col-xs-4" for="title">All Day Event ?</label>
                        <input class='allDayNewEvent' type="checkbox"></label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <label class="col-xs-4" for="idnum">Id Number</label>
                        <input class="inputModal" type="text" name="idnum" id="idnum" />
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <label class="col-xs-4" for="title">Name</label>
                            <input class="inputModal" type="text" name="title" id="title" />
                        </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <label class="col-xs-4" for="calendar-type">Type of visit</label>
                        <select class="inputModal" type="text" name="calendar-type" id="calendar-type">
                          <option value="visitor">Visitor</option>
                          <option value="amenities">Amenities</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <label class="col-xs-4" for="title1">Patient of name</label>
                        <input class="inputModal" type="text" name="title1" id="title1" />
                    </div>
            </div>
                <div class="row">
                    <div class="col-xs-12">
                        <label class="col-xs-4" for="starts-at">Starts at</label>
                        <input class="inputModal" type="text" name="starts_at" id="starts-at" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <label class="col-xs-4" for="ends-at">Ends at</label>
                        <input class="inputModal" type="text" name="ends_at" id="ends-at" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <label class="col-xs-4" for="department">Department</label>
                        <input class="inputModal" type="text" name="department" id="department" />
                    </div>
                </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="save-event">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


      <!-- EDIT EVENT MODAL -->

      <div class="modal fade" tabindex="-1" role="dialog" id="editEventModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Edit <span class="eventName"></span></h4>
            </div>
            <div class="modal-body">



          <div class="row">
                    <div class="col-xs-12">
                        <label class="col-xs-4" for="title">All Day Event ?</label>
                        <input class='allDayEdit' type="checkbox"></label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <label class="col-xs-4" for="title">Event title</label>
                        <input class="inputModal" type="text" name="editTitle" id="editTitle" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <label class="col-xs-4" for="starts-at">Starts at</label>
                        <input class="inputModal" type="text" name="editStartDate" id="editStartDate" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <label class="col-xs-4" for="ends-at">Ends at</label>
                        <input class="inputModal" type="text" name="editEndDate" id="editEndDate" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <label class="col-xs-4" for="edit-calendar-type">Calendar</label>
                        <select class="inputModal" type="text" name="edit-calendar-type" id="edit-calendar-type">
                          <option value="visitor">Visitor</option>
                          <option value="amenities">Amenities</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <label class="col-xs-4" for="edit-event-desc">Description</label>
                        <textarea rows="4" cols="50" class="inputModal" name="edit-event-desc" id="edit-event-desc"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger" id="deleteEvent">Delete Event</button>
                <button type="button" class="btn btn-primary" id="updateEvent">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/custom.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCit4RJVPT9UiLQCJJPYEBkNTJCslqO4ps&libraries=places"></script>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/locale-all.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js'></script><script  src="./script.js"></script>



</body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <title>Amaretti</title>
    <link rel="stylesheet" type="text/css" href="assets/lib/stroke-7/style.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/jquery.nanoscroller/css/nanoscroller.css"/><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css"/>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css"/>
  </head>
  <body>
    <div class="am-wrapper">
      <nav class="navbar navbar-default navbar-fixed-top am-top-header">
        <div class="container-fluid">
          <div class="navbar-header">
            <div class="page-title"><span>Dashboard</span></div><a href="#" class="am-toggle-left-sidebar navbar-toggle collapsed"><span class="icon-bar"><span></span><span></span><span></span></span></a><a href="index.html" class="navbar-brand"></a>
          </div><a href="#" class="am-toggle-right-sidebar"><span class="icon s7-menu2"></span></a><a href="#" data-toggle="collapse" data-target="#am-navbar-collapse" class="am-toggle-top-header-menu collapsed"><span class="icon s7-angle-down"></span></a>
          <div id="am-navbar-collapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right am-user-nav">
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><img src="assets/img/avatar.jpg"><span class="user-name">Samantha Amaretti</span><span class="angle-down s7-angle-down"></span></a>
                <ul role="menu" class="dropdown-menu">
                  <li><a href="#"> <span class="icon s7-user"></span>My profile</a></li>
                  <li><a href="#"> <span class="icon s7-config"></span>Settings</a></li>
                  <li><a href="#"> <span class="icon s7-help1"></span>Help</a></li>
                  <li><a href="#"> <span class="icon s7-power"></span>Sign Out</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav am-nav-right">
              <li><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle">Services <span class="angle-down s7-angle-down"></span></a>
                <ul role="menu" class="dropdown-menu">
                  <li><a href="#">UI Consulting</a></li>
                  <li><a href="#">Web Development</a></li>
                  <li><a href="#">Database Management</a></li>
                  <li><a href="#">Seo Improvement</a></li>
                </ul>
              </li>
              <li><a href="#">Support</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right am-icons-nav">
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><span class="icon s7-comment"></span></a>
                <ul class="dropdown-menu am-messages">
                  <li>
                    <div class="title">Messages<span class="badge">3</span></div>
                    <div class="list">
                      <div class="am-scroller nano">
                        <div class="content nano-content">
                          <ul>
                            <li class="active"><a href="#">
                                <div class="logo"><img src="assets/img/avatar2.jpg"></div>
                                <div class="user-content"><span class="date">April 25</span><span class="name">Jessica Caruso</span><span class="text-content">Request you to be a part of the same so that we can work...</span></div></a></li>
                            <li><a href="#">
                                <div class="logo"><img src="assets/img/avatar3.jpg"></div>
                                <div class="user-content"><span class="date">March 18</span><span class="name">Joel King</span><span class="text-content"> We wish to extend the building.</span></div></a></li>
                            <li><a href="#">
                                <div class="logo"><img src="assets/img/avatar4.jpg"></div>
                                <div class="user-content"><span class="date">January 3</span><span class="name">Claire Sassu</span><span class="text-content"> We the ladies of a block are wiling to join together to set up a catering...</span></div></a></li>
                            <li><a href="#">
                                <div class="logo"><img src="assets/img/avatar5.jpg"></div>
                                <div class="user-content"><span class="date">January 2</span><span class="name">Emily Carter</span><span class="text-content"> Request you to be a part of the same so that we can work...</span></div></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="footer"> <a href="#">View all messages</a></div>
                  </li>
                </ul>
              </li>
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><span class="icon s7-bell"></span><span class="indicator"></span></a>
                <ul class="dropdown-menu am-notifications">
                  <li>
                    <div class="title">Notifications<span class="badge">3</span></div>
                    <div class="list">
                      <div class="am-scroller nano">
                        <div class="content nano-content">
                          <ul>
                            <li class="active"><a href="#">
                                <div class="logo"><span class="icon s7-pin"></span></div>
                                <div class="user-content"><span class="circle"></span><span class="name">Jessica Caruso</span><span class="text-content"> accepted your invitation to join the team.</span><span class="date">2 min ago</span></div></a></li>
                            <li><a href="#">
                                <div class="logo"><span class="icon s7-add-user"></span></div>
                                <div class="user-content"><span class="name">Joel King</span><span class="text-content"> is now following you</span><span class="date">2 days ago</span></div></a></li>
                            <li><a href="#">
                                <div class="logo"><span class="icon s7-gleam"></span></div>
                                <div class="user-content"><span class="name">Claire Sassu</span><span class="text-content"> is watching your main repository</span><span class="date">2 days ago</span></div></a></li>
                            <li><a href="#">
                                <div class="logo"><span class="icon s7-add-user"></span></div>
                                <div class="user-content"><span class="name">Emily Carter</span><span class="text-content"> is now following you</span><span class="date">5 days ago</span></div></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="footer"> <a href="#">View all notifications</a></div>
                  </li>
                </ul>
              </li>
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><span class="icon s7-share"></span></a>
                <ul class="dropdown-menu am-connections">
                  <li>
                    <div class="title">Connections</div>
                    <div class="list">
                      <div class="content">
                        <ul>
                          <li>
                            <div class="logo"><img src="assets/img/github.png"></div>
                            <div class="field"><span>GitHub</span>
                              <div class="pull-right">
                                <div class="switch-button switch-button-sm">
                                  <input type="checkbox" checked="" name="check1" id="switch1"><span>
                                    <label for="switch1"></label></span>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="logo"><img src="assets/img/bitbucket.png"></div>
                            <div class="field"><span>Bitbucket</span>
                              <div class="pull-right">
                                <div class="switch-button switch-button-sm">
                                  <input type="checkbox" name="check2" id="switch2"><span>
                                    <label for="switch2"></label></span>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="logo"><img src="assets/img/slack.png"></div>
                            <div class="field"><span>Slack</span>
                              <div class="pull-right">
                                <div class="switch-button switch-button-sm">
                                  <input type="checkbox" checked="" name="check3" id="switch3"><span>
                                    <label for="switch3"></label></span>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="logo"><img src="assets/img/dribbble.png"></div>
                            <div class="field"><span>Dribbble</span>
                              <div class="pull-right">
                                <div class="switch-button switch-button-sm">
                                  <input type="checkbox" name="check4" id="switch4"><span>
                                    <label for="switch4"> </label></span>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="footer"> <a href="#">View all connections</a></div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="am-left-sidebar">
        <div class="content">
          <div class="am-logo"></div>
          <ul class="sidebar-elements">
            <li class="parent"><a href="#"><i class="icon s7-monitor"></i><span>Dashboard</span></a>
              <ul class="sub-menu">
                <li class="active"><a href="index.html">Version 1</a>
                </li>
                <li><a href="dashboard2.html">Version 2</a>
                </li>
                <li><a href="dashboard3.html"><span class="label label-primary pull-right">New</span>Version 3</a>
                </li>
                <li><a href="dashboard4.html"><span class="label label-primary pull-right">New</span>Version 4</a>
                </li>
              </ul>
            </li>
            <li class="parent"><a href="#"><i class="icon s7-diamond"></i><span>UI Elements</span></a>
              <ul class="sub-menu">
                <li><a href="ui-general.html">General</a>
                </li>
                <li><a href="ui-alerts.html">Alerts</a>
                </li>
                <li><a href="ui-panels.html">Panels</a>
                </li>
                <li><a href="ui-buttons.html">Buttons</a>
                </li>
                <li><a href="ui-modals.html">Modals</a>
                </li>
                <li><a href="ui-notifications.html">Notifications</a>
                </li>
                <li><a href="ui-icons.html">Icons</a>
                </li>
                <li><a href="ui-grid.html">Grid</a>
                </li>
                <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a>
                </li>
                <li><a href="ui-chat.html"><span class="label label-primary pull-right">New</span>Chat Component</a>
                </li>
                <li><a href="ui-nestable-lists.html">Nestable Lists</a>
                </li>
              </ul>
            </li>
            <li class="parent"><a href="#"><i class="icon s7-graph"></i><span>Charts</span></a>
              <ul class="sub-menu">
                <li><a href="charts-flot.html">Flot</a>
                </li>
                <li><a href="charts-morris.html">Morris.js</a>
                </li>
                <li><a href="charts-sparkline.html">Sparklines</a>
                </li>
              </ul>
            </li>
            <li class="parent"><a href="#"><i class="icon s7-ribbon"></i><span>Forms</span></a>
              <ul class="sub-menu">
                <li><a href="form-elements.html">Elements</a>
                </li>
                <li><a href="form-validation.html">Validation</a>
                </li>
                <li><a href="form-wizard.html">Wizard</a>
                </li>
                <li><a href="form-masks.html">Input Masks</a>
                </li>
                <li><a href="form-wysiwyg.html">WYSIWYG Editor</a>
                </li>
                <li><a href="form-upload.html">Multi Upload</a>
                </li>
              </ul>
            </li>
            <li class="parent"><a href="#"><i class="icon s7-box2"></i><span>Tables</span></a>
              <ul class="sub-menu">
                <li><a href="tables-general.html">General</a>
                </li>
                <li><a href="tables-datatables.html">Data Tables</a>
                </li>
              </ul>
            </li>
            <li class="parent"><a href="#"><i class="icon s7-note2"></i><span>Pages</span></a>
              <ul class="sub-menu">
                <li><a href="pages-blank.html">Blank Page</a>
                </li>
                <li><a href="pages-blank-header.html">Blank Page Header</a>
                </li>
                <li><a href="pages-login.html">Login</a>
                </li>
                <li><a href="pages-404.html">404 Page</a>
                </li>
                <li><a href="pages-sign-up.html">Sign Up</a>
                </li>
                <li><a href="pages-forgot-password.html">Forgot Password</a>
                </li>
                <li><a href="pages-profile.html">Profile</a>
                </li>
                <li><a href="pages-calendar.html">Calendar</a>
                </li>
                <li><a href="pages-gallery.html">Gallery</a>
                </li>
              </ul>
            </li>
            <li class="parent"><a href="#"><i class="icon s7-mail"></i><span>Email</span></a>
              <ul class="sub-menu">
                <li><a href="email-inbox.html">Inbox</a>
                </li>
                <li><a href="email-read.html">Email Detail</a>
                </li>
                <li><a href="email-compose.html">Email Compose</a>
                </li>
              </ul>
            </li>
            <li class="parent"><a href="#"><i class="icon s7-browser"></i><span>Layouts</span></a>
              <ul class="sub-menu">
                <li><a href="layouts-nosidebar-left.html">Without Left Sidebar</a>
                </li>
                <li><a href="layouts-nosidebar-right.html">Without Right Sidebar</a>
                </li>
                <li><a href="layouts-nosidebars.html">Without Both Sidebars</a>
                </li>
                <li><a href="layouts-white-header.html">White Header</a>
                </li>
                <li><a href="layouts-fixed-sidebar.html">Fixed Left Sidebar</a>
                </li>
                <li><a href="layouts-left-sidebar-click.html"><span class="label label-primary pull-right">New</span>Open left sidebar on click</a>
                </li>
                <li><a href="pages-blank-aside.html">Page Aside</a>
                </li>
              </ul>
            </li>
            <li class="parent"><a href="#"><i class="icon s7-map-marker"></i><span>Maps</span></a>
              <ul class="sub-menu">
                <li><a href="maps-google.html">Google Maps</a>
                </li>
                <li><a href="maps-vector.html">Vector Maps</a>
                </li>
              </ul>
            </li>
          </ul>
          <!--Sidebar bottom content-->
        </div>
      </div>
      <div class="am-content">
        <div class="main-content">
          <!--+general-chart("classes", "title", "height", "id", "counter value", "counter desc", tools enabled (use true or false))-->
          <div class="row">
            <div class="col-md-4">
              <div class="widget widget-pie">
                <div class="widget-head"><span class="title">Top Sales</span></div>
                <div class="row chart-container">
                  <div class="col-md-6">
                    <div id="widget-top-1" class="chart"></div>
                  </div>
                  <div class="col-md-6">
                    <div class="legend"></div>
                  </div>
                </div>
                <div class="row chart-info">
                  <div class="col-xs-4"><span class="title">New Clients</span><span data-toggle="counter" data-end="180" class="number">0</span></div>
                  <div class="col-xs-4"><span class="title">Total Sales</span><span data-toggle="counter" data-end="500" data-prefix="$" class="number">$0</span></div>
                  <div class="col-xs-4"><span class="title">Refunds</span><span data-toggle="counter" data-end="90" class="number">0</span></div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="widget widget-pie">
                <div class="widget-head"><span class="title">Monthly Visits</span></div>
                <div class="row chart-container">
                  <div class="col-md-6">
                    <div id="widget-top-2" class="chart"></div>
                  </div>
                  <div class="col-md-6">
                    <div class="legend"></div>
                  </div>
                </div>
                <div class="row chart-info">
                  <div class="col-xs-4"><span class="title">New Visitors</span><span data-toggle="counter" data-end="25" data-suffix="%" class="number">0%</span></div>
                  <div class="col-xs-4"><span class="title">Conversions</span><span data-toggle="counter" data-end="350" class="number">0</span></div>
                  <div class="col-xs-4"><span class="title">Bounce Rate</span><span data-toggle="counter" data-end="40" data-suffix="%" class="number">0%</span></div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="widget widget-pie widget-pie-stats">
                <div class="widget-head"><span class="title">Advertisement</span></div>
                <div class="row chart-container">
                  <div class="col-md-6">
                    <div id="widget-top-3" class="chart"></div>
                  </div>
                  <div class="col-md-6">
                    <div class="legend">
                      <table>
                        <tbody>
                          <tr>
                            <td class="legendColorBox">
                              <div>
                                <div style="width:10px;height:10px;overflow:hidden" class="clr-alt3"></div>
                              </div>
                            </td>
                            <td class="legendLabel">Google Ads</td>
                            <td class="legendData">$752</td>
                          </tr>
                          <tr>
                            <td class="legendColorBox">
                              <div>
                                <div style="width:10px;height:10px;overflow:hidden" class="clr-alt4"></div>
                              </div>
                            </td>
                            <td class="legendLabel">Facebook</td>
                            <td class="legendData">$300</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="row chart-info">
                  <div class="col-xs-6">
                    <div id="spk1" class="sparkline"></div><span class="title">Profit</span><span data-toggle="counter" data-end="70" data-suffix="%" class="number">0%</span>
                  </div>
                  <div class="col-xs-6">
                    <div id="spk2" class="sparkline"></div><span class="title">Return</span><span data-toggle="counter" data-end="30" data-suffix="%" class="number">0%</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-6">
                                    <div class="widget widget-fullwidth widget-small">
                                      <div class="widget-head">
                                        <div class="tools"><span class="value">25.3K</span></div><span class="title">Current Earnings</span>
                                      </div>
                                      <div class="chart-container">
                                        <div id="linechart-mini1" style="height: 92px;"></div>
                                      </div>
                                    </div>
                                    <div class="widget widget-fullwidth widget-small">
                                      <div class="widget-head">
                                        <div class="tools"><span class="value">18%</span></div><span class="title">Support Tickets</span>
                                      </div>
                                      <div class="chart-container">
                                        <div id="barchart-mini1" style="height: 92px;"></div>
                                      </div>
                                    </div>
                </div>
                <div class="col-md-6">
                  <div class="widget widget-radar">
                    <div class="widget-head">
                      <div class="tools"><span class="icon s7-upload"></span><span class="icon s7-edit"></span></div><span class="title">Page Views</span>
                    </div>
                    <div class="chart-container">
                      <canvas id="radar-chart1" height="180px"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
                        <div class="widget widget-fullwidth line-chart">
                          <div class="widget-head">
                            <div class="tools"><span class="icon s7-upload"></span><span class="icon s7-edit"></span><span class="icon s7-close"></span></div><span class="title">Filled Points</span>
                          </div>
                          <div class="chart-container">
                            <div class="counter">
                              <div class="value">80%</div>
                              <div class="desc">More Visits</div>
                            </div>
                            <div id="line-chart1" style="height: 260px;"></div>
                          </div>
                        </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="widget widget-calendar">
                <div class="cal-container">
                  <div class="cal-notes"><span class="day">Thursday</span><span class="date">September 24</span><span class="title">Notes<span class="icon s7-plus"></span></span>
                    <ul>
                      <li><span class="hour">14h</span><span class="event-name">Meeting with investors</span></li>
                      <li><span class="hour">8h</span><span class="event-name">Dentist date</span></li>
                    </ul>
                  </div>
                  <div class="cal-calendar">
                    <div class="ui-datepicker"></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="widget widget-map">
                <div class="widget-head"><span class="title">Global Stats</span></div>
                <div class="map-container">
                  <div id="world-map" style="height: 227px;"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <nav class="am-right-sidebar">
        <div class="sb-content">
          <div class="user-info"><img src="assets/img/avatar.jpg"><span class="name">Samantha Amaretti<span class="status"></span></span><span class="position">Art Director</span></div>
          <div class="tab-navigation">
            <ul role="tablist" class="nav nav-tabs nav-justified">
              <li role="presentation" class="active"><a href="#tab1" aria-controls="home" role="tab" data-toggle="tab"> <span class="icon s7-smile"></span></a></li>
              <li role="presentation"><a href="#tab2" aria-controls="profile" role="tab" data-toggle="tab"> <span class="icon s7-chat"></span></a></li>
              <li role="presentation"><a href="#tab3" aria-controls="messages" role="tab" data-toggle="tab"> <span class="icon s7-help2"></span></a></li>
              <li role="presentation"><a href="#tab4" aria-controls="settings" role="tab" data-toggle="tab"> <span class="icon s7-ticket"></span></a></li>
            </ul>
          </div>
          <div class="tab-panel">
            <div class="tab-content">
              <div id="tab1" role="tabpanel" class="tab-pane announcement active am-scroller nano">
                <div class="nano-content">
                  <div class="content">
                    <h2>Announcement</h2>
                    <ul>
                      <li>
                        <div class="icon"><span class="icon s7-sun"></span></div>
                        <div class="content"><a href="#">Happy Day</a><span>Suspendisse nec leo tortor rhoncus tincidunt. Duis sit amet rutrum elit.</span></div>
                      </li>
                      <li>
                        <div class="icon"><span class="icon s7-gift"></span></div>
                        <div class="content"><a href="#">Congratulations Developers</a><span>Suspendisse nec leo tortor rhoncus tincidunt. Duis sit amet rutrum elit.</span></div>
                      </li>
                      <li>
                        <div class="icon"><span class="icon s7-star"></span></div>
                        <div class="content"><a href="#">High Score</a><span>Suspendisse nec leo tortor rhoncus tincidunt. Duis sit amet rutrum elit.</span></div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="search">
                  <input type="text" placeholder="Search..." name="q"><span class="s7-search"></span>
                </div>
              </div>
              <div id="tab2" role="tabpanel" class="tab-pane chat">
                <div class="chat-contacts">
                  <div class="chat-sections">
                    <div class="am-scroller nano">
                      <div class="content nano-content">
                        <h2>Recent</h2>
                        <div class="recent">
                          <div class="user"><a href="#"><img src="assets/img/avatar4.jpg">
                              <div class="user-data"><span class="status away"></span><span class="name">Claire Sassu</span><span class="message">Can you share the...</span></div></a></div>
                          <div class="user"><a href="#"><img src="assets/img/avatar7.jpg">
                              <div class="user-data"><span class="status"></span><span class="name">Maggie jackson</span><span class="message">I confirmed the info.</span></div></a></div>
                          <div class="user"><a href="#"><img src="assets/img/avatar3.jpg">
                              <div class="user-data"><span class="status offline"></span><span class="name">Joel King   </span><span class="message">Ready for the meeti...</span></div></a></div>
                        </div>
                        <h2>Contacts</h2>
                        <div class="contact">
                          <div class="user"><a href="#"><img src="assets/img/avatar6.jpg">
                              <div class="user-data2"><span class="status"></span><span class="name">Mike Bolthort</span></div></a></div>
                          <div class="user"><a href="#"><img src="assets/img/avatar7.jpg">
                              <div class="user-data2"><span class="status"></span><span class="name">Maggie jackson</span></div></a></div>
                          <div class="user"><a href="#"><img src="assets/img/avatar8.jpg">
                              <div class="user-data2"><span class="status offline"></span><span class="name">Jhon Voltemar</span></div></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="search">
                    <input type="text" placeholder="Search..." name="q"><span class="s7-search"></span>
                  </div>
                </div>
                <div class="chat-window">
                  <div class="title">
                    <div class="user"><img src="assets/img/avatar7.jpg">
                      <h2>Maggie jackson</h2><span>Active 1h ago</span>
                    </div><span class="icon return s7-angle-left"></span>
                  </div>
                  <div class="chat-messages">
                    <div class="am-scroller nano">
                      <div class="content nano-content">
                        <ul>
                          <li class="friend">
                            <div class="msg">Hello</div>
                          </li>
                          <li class="self">
                            <div class="msg">Hi, how are you?</div>
                          </li>
                          <li class="friend">
                            <div class="msg">Good, I'll need support with my pc</div>
                          </li>
                          <li class="self">
                            <div class="msg">Sure, just tell me what is going on with your computer?</div>
                          </li>
                          <li class="friend">
                            <div class="msg">I don't know it just turns off suddenly</div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="chat-input">
                    <div class="input-wrapper"><span class="photo s7-camera"></span>
                      <input type="text" placeholder="Message..." name="q" autocomplete="off"><span class="send-msg s7-paper-plane"></span>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tab3" role="tabpanel" class="tab-pane faqs am-scroller nano">
                <div class="nano-content">
                  <div class="content">
                    <h2>FAQs</h2>
                    <div id="accordion" role="tablist" aria-multiselectable="true" class="panel-group accordion">
                      <div class="panel">
                        <div role="tab" class="panel-heading">
                          <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#faq1" aria-expanded="true" aria-controls="collapseOne">
                              <div class="icon"><span class="s7-angle-down"></span></div><span class="title">Under Error 352</span></a></h4>
                        </div>
                        <div id="faq1" role="tabpanel" aria-labelledby="headingOne" class="panel-collapse collapse in">
                          <div class="panel-body">Suspendisse nec leo tortor rhoncus tincidunt. Duis sit amet rutrum elit.</div>
                        </div>
                      </div>
                      <div class="panel">
                        <div role="tab" class="panel-heading">
                          <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#faq2" aria-expanded="false" aria-controls="collapseTwo" class="collapsed">
                              <div class="icon"><span class="s7-angle-down"></span></div><span class="title">Failure platform</span></a></h4>
                        </div>
                        <div id="faq2" role="tabpanel" aria-labelledby="headingTwo" class="panel-collapse collapse">
                          <div class="panel-body">Suspendisse nec leo tortor rhoncus tincidunt. Duis sit amet rutrum elit.</div>
                        </div>
                      </div>
                      <div class="panel">
                        <div role="tab" class="panel-heading">
                          <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#faq3" aria-expanded="false" aria-controls="collapseThree" class="collapsed">
                              <div class="icon"><span class="s7-angle-down"></span></div><span class="title">Error 404</span></a></h4>
                        </div>
                        <div id="faq3" role="tabpanel" aria-labelledby="headingThree" class="panel-collapse collapse">
                          <div class="panel-body">Suspendisse nec leo tortor rhoncus tincidunt. Duis sit amet rutrum elit.</div>
                        </div>
                      </div>
                      <div class="panel">
                        <div role="tab" class="panel-heading">
                          <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#faq4" aria-expanded="false" aria-controls="collapseThree" class="collapsed">
                              <div class="icon"><span class="s7-angle-down"></span></div><span class="title">New workstation</span></a></h4>
                        </div>
                        <div id="faq4" role="tabpanel" aria-labelledby="headingThree" class="panel-collapse collapse">
                          <div class="panel-body">Suspendisse nec leo tortor rhoncus tincidunt. Duis sit amet rutrum elit.</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="search">
                  <input type="text" placeholder="Search..." name="q"><span class="s7-search"></span>
                </div>
              </div>
              <div id="tab4" role="tabpanel" class="tab-pane ticket am-scroller nano">
                <div class="nano-content">
                  <div class="content">
                    <h2>New Ticket</h2>
                    <form>
                      <div class="form-group send-ticket">
                        <input type="text" placeholder="Title" class="form-control">
                      </div>
                      <div class="form-group send-ticket">
                        <textarea rows="3" placeholder="Write Here..." class="form-control"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary btn-lg">Create Ticket</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.nanoscroller/javascripts/jquery.nanoscroller.min.js" type="text/javascript"></script>
    <script src="assets/js/main.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.pie.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/plugins/curvedLines.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.vectormap/maps/jquery-jvectormap-uk-mill-en.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.vectormap/maps/jquery-jvectormap-fr-merc-en.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.vectormap/maps/jquery-jvectormap-us-il-chicago-mill-en.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.vectormap/maps/jquery-jvectormap-au-mill-en.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.vectormap/maps/jquery-jvectormap-in-mill-en.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.vectormap/maps/jquery-jvectormap-map.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.vectormap/maps/jquery-jvectormap-ca-lcc-en.js" type="text/javascript"></script>
    <script src="assets/lib/countup/countUp.min.js" type="text/javascript"></script>
    <script src="assets/lib/chartjs/Chart.min.js" type="text/javascript"></script>
    <script src="assets/js/app-dashboard.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        //initialize the javascript
        App.init();
        App.dashboard();
      
      });
    </script>
  </body>
</html>
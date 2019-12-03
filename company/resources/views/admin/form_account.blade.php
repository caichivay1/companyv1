<!-- light-blue - v3.1.0 - 2014-12-06 -->

<!DOCTYPE html>
<html>

<!-- Tieu Long Lanh Kute -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Light Blue - Responsive Admin Dashboard Template</title>

    <link href="{{asset('admin/css/application.min.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('admin/img/favicon.png')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
    <script>
        /* yeah we need this empty stylesheet here. It's cool chrome & chromium fix
           chrome fix https://code.google.com/p/chromium/issues/detail?id=167083
                      https://code.google.com/p/chromium/issues/detail?id=332189
        */
    </script>
</head>
<body class="background-dark">
<div class="logo">
    <h4><a href="index.html">Light <strong>Blue</strong></a></h4>
</div>
<nav id="sidebar" class="sidebar nav-collapse collapse">
    <ul id="side-nav" class="side-nav">
        <li class="">
            <a href="index.html"><i class="fa fa-home"></i> <span class="name">Dashboard</span></a>
        </li>
        <li class="panel active">
            <a class="accordion-toggle " data-toggle="collapse"
               data-parent="#side-nav" href="#forms-collapse"><i class="fa fa-pencil"></i> <span class="name">Forms</span></a>
            <ul id="forms-collapse" class="panel-collapse collapse in">
                <li class="active"><a href="form_account.html">Account</a></li>
                <li class=""><a href="form_article.html">Article</a></li>
                <li class=""><a href="form_elements.html">Elements</a></li>
                <li class=""><a href="form_validation.html">Validation</a></li>
                <li class=""><a href="form_wizard.html">Wizard</a></li>
            </ul>
        </li>
        <li class="panel ">
            <a class="accordion-toggle collapsed" data-toggle="collapse"
               data-parent="#side-nav" href="#stats-collapse"><i class="fa fa-area-chart"></i> <span class="name">Statistics</span></a>
            <ul id="stats-collapse" class="panel-collapse collapse ">
                <li class=""><a href="stat_statistics.html">Stats</a></li>
                <li class=""><a href="stat_charts.html">Charts</a></li>
                <li class=""><a href="stat_realtime.html">Realtime</a></li>
            </ul>
        </li>
        <li class="panel ">
            <a class="accordion-toggle collapsed" data-toggle="collapse"
               data-parent="#side-nav" href="#ui-collapse"><i class="fa fa-magic"></i> <span class="name">User Interface</span></a>
            <ul id="ui-collapse" class="panel-collapse collapse ">
                <li class=""><a href="ui_buttons.html">Buttons</a></li>
                <li class=""><a href="ui_dialogs.html">Dialogs</a></li>
                <li class=""><a href="ui_notifications.html">Notifications</a></li>
                <li class=""><a href="ui_icons.html">Icons</a></li>
                <li class=""><a href="ui_tabs.html">Tabs</a></li>
                <li class=""><a href="ui_accordion.html">Accordion</a></li>
            </ul>
        </li>
        <li class="panel ">
            <a class="accordion-toggle collapsed" data-toggle="collapse"
               data-parent="#side-nav" href="#components-collapse"><i class="fa fa-tree"></i> <span class="name">Components</span></a>
            <ul id="components-collapse" class="panel-collapse collapse ">
                <li class=""><a href="component_calendar.html">Calendar</a></li>
                <li class=""><a href="component_maps.html" data-no-pjax>Maps</a></li>
                <li class=""><a href="component_gallery.html">Gallery</a></li>
                <li class=""><a href="component_fileupload.html" data-no-pjax>Fileupload</a></li>
                <li class=""><a href="component_bootstrap.html">Bootstrap</a></li>
                <li class=""><a href="component_list_groups.html">List Groups</a></li>
            </ul>
        </li>
        <li class="panel ">
            <a class="accordion-toggle collapsed" data-toggle="collapse"
               data-parent="#side-nav" href="#tables-collapse"><i class="fa fa-cog"></i> <span class="name">Tables</span></a>
            <ul id="tables-collapse" class="panel-collapse collapse ">
                <li class=""><a href="tables_static.html">Static <sup class="text-danger fw-bold">upd</sup></a></li>
                <li class=""><a href="tables_dynamic.html">Dynamic</a></li>
            </ul>
        </li>
        <li class="panel ">
            <a class="accordion-toggle collapsed" data-toggle="collapse"
               data-parent="#side-nav" href="#grid-collapse"><i class="fa fa-th"></i> <span class="name">Widgets</span></a>
            <ul id="grid-collapse" class="panel-collapse collapse ">
                <li class=""><a href="grid_basic.html">Basic</a></li>
                <li class=""><a href="grid_live.html">Live</a></li>
            </ul>
        </li>
        <li class="panel ">
            <a class="accordion-toggle collapsed" data-toggle="collapse"
               data-parent="#side-nav" href="#special-collapse"><i class="fa fa-leaf"></i> <span class="name">Special</span></a>
            <ul id="special-collapse" class="panel-collapse collapse ">
                <li class=""><a href="special_search.html">Search <sup class="text-warning fw-bold">new</sup></a></li>
                <li class=""><a href="special_invoice.html">Invoice</a></li>
                <li class=""><a href="special_inbox.html">Inbox &nbsp; <span class="label label-important">3</span></a></li>
                <li><a target="_blank" href="login.html">Login</a></li>
                <li><a target="_blank" href="error.html">Error Page</a></li>
                <li><a href="landing.html" data-no-pjax>Landing</a></li>
                <li><a href="http://demo.flatlogic.com/3.1/white/index.html" data-no-pjax>White <sup class="text-warning fw-bold">new</sup></a></li>
            </ul>
        </li>
        <li class="panel">
            <a class="accordion-toggle collapsed" data-toggle="collapse"
               data-parent="#side-nav" href="#menu-levels-collapse"><i class="fa fa-folder-open"></i> <span class="name">Menu Levels</span></a>
            <ul id="menu-levels-collapse" class="panel-collapse collapse">
                <li><a href="#">Item 1.1</a></li>
                <li><a href="#">Item 1.2</a></li>
                <li class="panel">
                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                       data-parent="#menu-levels-collapse" href="#sub-menu-1-collapse">Item 1.3</a>
                    <ul id="sub-menu-1-collapse" class="panel-collapse collapse">
                        <li class="panel">
                            <a class="accordion-toggle collapsed" data-toggle="collapse"
                               data-parent="#sub-menu-1-collapse" href="#sub-menu-3-collapse">Item 2.1</a>
                            <ul id="sub-menu-3-collapse" class="panel-collapse collapse">
                                <li><a href="#">Item 3.1</a></li>
                                <li><a href="#">Item 3.2</a></li>
                                <li><a href="#">Item 3.3</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Item 2.2</a></li>
                        <li class="panel">
                            <a class="accordion-toggle collapsed" data-toggle="collapse"
                               data-parent="#sub-menu-1-collapse" href="#sub-menu-2-collapse">Item 2.3</a>
                            <ul id="sub-menu-2-collapse" class="panel-collapse collapse">
                                <li><a href="#">Item 3.4</a></li>
                                <li><a href="#">Item 3.5</a></li>
                                <li><a href="#">Item 3.6</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="visible-xs">
            <a href="login.html"><i class="fa fa-sign-out"></i> <span class="name">Sign Out</span></a>
        </li>
    </ul>

    <h5 class="sidebar-nav-title">Labels <a class="action-link" href="#"><i class="glyphicon glyphicon-plus"></i></a></h5>
    <!-- some styled links in sidebar. ready to use as links to email folders, projects, groups, etc -->
    <ul class="sidebar-labels">
        <li>
            <a href="#">
                <!-- yep, .circle again -->
                <i class="fa fa-circle text-warning"></i>
                <span class="label-name">My Recent</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-circle text-gray"></i>
                <span class="label-name">Starred</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-circle text-danger"></i>
                <span class="label-name">Background</span>
            </a>
        </li>
    </ul>

    <h5 class="sidebar-nav-title">Projects</h5>
    <!-- A place for sidebar notifications & alerts -->
    <div class="sidebar-alerts">
        <div class="alert fade in">
            <a href="#" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
            <span class="text-white fw-semi-bold">Sales Report</span> <br>
            <div class="progress progress-xs mt-xs mb-0">
                <div class="progress-bar progress-bar-gray-light" style="width: 16%"></div>
            </div>
            <small>Calculating x-axis bias... 65%</small>
        </div>
        <div class="alert fade in">
            <a href="#" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
            <span class="text-white fw-semi-bold">Personal Responsibility</span> <br>
            <div class="progress progress-xs mt-xs mb-0">
                <div class="progress-bar progress-bar-danger" style="width: 23%"></div>
            </div>
            <small>Provide required notes</small>
        </div>
    </div>
</nav>    <div class="wrap">
    <header class="page-header">
        <div class="navbar">
            <ul class="nav navbar-nav navbar-right pull-right">
                <li class="visible-phone-landscape">
                    <a href="#" id="search-toggle">
                        <i class="fa fa-search"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" title="Messages" id="messages"
                       class="dropdown-toggle"
                       data-toggle="dropdown">
                        <i class="fa fa-comments"></i>
                    </a>
                    <ul id="messages-menu" class="dropdown-menu messages" role="menu">
                        <li role="presentation">
                            <a href="#" class="message">
                                <img src="{{asset('admin/img/1.jpg')}}" alt="">
                                <div class="details">
                                    <div class="sender">Jane Hew</div>
                                    <div class="text">
                                        Hey, John! How is it going? ...
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" class="message">
                                <img src="{{asset('admin/img/2.jpg')}}" alt="">
                                <div class="details">
                                    <div class="sender">Alies Rumiancaŭ</div>
                                    <div class="text">
                                        I'll definitely buy this template
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" class="message">
                                <img src="{{asset('admin/img/3.jpg')}}" alt="">
                                <div class="details">
                                    <div class="sender">Michał Rumiancaŭ</div>
                                    <div class="text">
                                        Is it really Lore ipsum? Lore ...
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" class="text-align-center see-all">
                                See all messages <i class="fa fa-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" title="8 support tickets"
                       class="dropdown-toggle"
                       data-toggle="dropdown">
                        <i class="fa fa-group"></i>
                        <span class="count">8</span>
                    </a>
                    <ul id="support-menu" class="dropdown-menu support" role="menu">
                        <li role="presentation">
                            <a href="#" class="support-ticket">
                                <div class="picture">
                                    <span class="label label-important"><i class="fa fa-bell-o"></i></span>
                                </div>
                                <div class="details">
                                    Check out this awesome ticket
                                </div>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" class="support-ticket">
                                <div class="picture">
                                    <span class="label label-warning"><i class="fa fa-question-circle"></i></span>
                                </div>
                                <div class="details">
                                    "What is the best way to get ...
                                </div>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" class="support-ticket">
                                <div class="picture">
                                    <span class="label label-success"><i class="fa fa-tag"></i></span>
                                </div>
                                <div class="details">
                                    This is just a simple notification
                                </div>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" class="support-ticket">
                                <div class="picture">
                                    <span class="label label-info"><i class="fa fa-info-circle"></i></span>
                                </div>
                                <div class="details">
                                    12 new orders has arrived today
                                </div>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" class="support-ticket">
                                <div class="picture">
                                    <span class="label label-important"><i class="fa fa-plus"></i></span>
                                </div>
                                <div class="details">
                                    One more thing that just happened
                                </div>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" class="text-align-center see-all">
                                See all tickets <i class="fa fa-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="divider"></li>
                <li class="hidden-xs">
                    <a href="#" id="settings"
                       title="Settings"
                       data-toggle="popover"
                       data-placement="bottom">
                        <i class="fa fa-cog"></i>
                    </a>
                </li>
                <li class="hidden-xs dropdown">
                    <a href="#" title="Account" id="account"
                       class="dropdown-toggle"
                       data-toggle="dropdown">
                        <i class="fa fa-user"></i>
                    </a>
                    <ul id="account-menu" class="dropdown-menu account" role="menu">
                        <li role="presentation" class="account-picture">
                            <img src="{{asset('admin/img/2.jpg')}}" alt="">
                            Philip Daineka
                        </li>
                        <li role="presentation">
                            <a href="form_account.html" class="link">
                                <i class="fa fa-user"></i>
                                Profile
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="component_calendar.html" class="link">
                                <i class="fa fa-calendar"></i>
                                Calendar
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" class="link">
                                <i class="fa fa-inbox"></i>
                                Inbox
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="visible-xs">
                    <a href="#"
                       class="btn-navbar"
                       data-toggle="collapse"
                       data-target=".sidebar"
                       title="">
                        <i class="fa fa-bars"></i>
                    </a>
                </li>
                <li class="hidden-xs"><a href="login.html"><i class="fa fa-sign-out"></i></a></li>
            </ul>
            <form id="search-form" class="navbar-form pull-right" role="search">
                <input type="search" class="form-control search-query" placeholder="Search...">
            </form>
            <div class="notifications pull-right">
                <div class="alert pull-right">
                    <a href="#" class="close ml-xs" data-dismiss="alert">&times;</a>
                    <i class="fa fa-info-circle mr-xs"></i> Check out Light Blue <a id="notification-link" href="#">settings</a> on the right!
                </div>
            </div>
        </div>
    </header>        <div class="content container">
        <h2 class="page-title">Account Demo <small>Out of the box form</small></h2>
        <div class="row">
            <div class="col-md-7">
                <section class="widget">
                    <header>
                        <h4><i class="fa fa-user"></i> Account Profile <small>Create new or edit existing user</small></h4>
                    </header>
                    <div class="body">
                        <form id="user-form" class="form-horizontal form-label-left"
                              novalidate="novalidate"
                              method="post"
                              data-parsley-priority-enabled="false"
                              data-parsley-excluded="input[name=gender]">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="text-align-center">
                                        <img class="img-circle" src="{{asset('admin/img/15.jpg')}}" alt="64x64" style="height: 112px;">
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <h3 class="mt-sm mb-xs">Maryna Gils</h3>
                                    <address>
                                        <strong>Development manager</strong> at <strong><a href="#">Allexample Inc.</a></strong><br>
                                        <abbr title="Work email">e-mail:</abbr> <a href="mailto:#">maryna.gils@example.com</a><br>
                                        <abbr title="Work Phone">phone:</abbr> (123) 456-7890
                                    </address>
                                </div>
                            </div>
                            <fieldset class="mt-sm">
                                <legend>Account Edit Form <small>Some explanation text</small></legend>
                            </fieldset>
                            <fieldset>
                                <legend class="section">Personal Info</legend>
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="prefix">Prefix</label>
                                    <div class="col-sm-4"><input type="text" id="prefix" name="prefix" class="form-control input-transparent"></div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="first-name">First Name <span class="required">*</span></label>
                                    <div class="col-sm-8"><input type="text" id="first-name" name="first-name" required="required" class="form-control input-transparent" ></div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="last-name">Last Name <span class="required">*</span></label>
                                    <div class="col-sm-8"><input type="text" id="last-name" name="last-name" required="required" class="form-control input-transparent" ></div>
                                </div>
                                <div class="form-group">
                                    <label for="middle-name" class="control-label col-sm-4">Middle Name / Initial</label>
                                    <div class="col-sm-8"><input id="middle-name" class="form-control input-transparent" type="text" name="middle-name" value=""></div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Gender</label>
                                    <div class="col-sm-8">
                                        <div id="gender" class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                                            </label>
                                            <label class="btn btn-primary active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                <input type="radio" name="gender" value="female" checked> Female
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="date-of-birth" class="control-label col-sm-4">Date Of Birth <span class="required">*</span></label>
                                    <div class="col-sm-6"><input id="date-of-birth" class="date-picker form-control input-transparent" required="required" type="text" name="date-of-birth" value=""></div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend class="section">Contact Info</legend>
                                <div class="form-group">
                                    <label id="email-label" for="email" class="control-label col-sm-4">Email <span class="required">*</span></label>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="input-group">
                                            <input id="email" type="email"
                                                   data-trigger="change" required="required"
                                                   class="form-control input-transparent"
                                                   name="email">
                                            <span class="input-group-btn">
                                                    <button class="btn btn-success" type="button">Write an email</button>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="control-label col-sm-4">Phone <span class="required">*</span></label>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="input-group">
                                            <input id="phone" class="form-control input-transparent  mask"
                                                   required="required" type="text"
                                                   name="phone" maxlength="28">
                                            <span class="input-group-btn">
                                                <select id="phone-type" class="selectpicker" data-style="btn-default" data-width="auto">
                                                    <option>Mobile</option>
                                                    <option>Home</option>
                                                    <option>Work</option>
                                                </select>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="fax" class="control-label col-sm-4">Fax</label>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="input-group">
                                            <input id="fax" class="form-control input-transparent" type="text"
                                                   name="phone" maxlength="28">
                                            <span class="input-group-btn">
                                                 <select id="fax-type" class="selectpicker" data-style="btn-default" data-width="auto">
                                                     <option>Mobile</option>
                                                     <option>Home</option>
                                                     <option>Work</option>
                                                 </select>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend class="section">
                                    Address
                                    <button type="button" class="btn btn-transparent btn-xs pull-right">
                                        <i class="fa fa-plus"></i>
                                        Add Address
                                    </button>
                                </legend>
                                <div class="form-group">
                                    <label for="address" class="control-label col-sm-4">Address <span class="required">*</span></label>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="input-group">
                                            <input id="address" class="form-control input-transparent" type="text"
                                                   name="address">
                                            <span class="input-group-btn">
                                                 <select id="address-type" class="selectpicker" data-style="btn-default" data-width="auto">
                                                     <option>Mobile</option>
                                                     <option>Home</option>
                                                     <option>Work</option>
                                                 </select>
                                            </span>
                                        </div>
                                        <input id="address-2" class="form-control input-transparent mt-sm" type="text" value="" name="address-2">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="city" class="control-label col-sm-4">City <span class="required">*</span></label>
                                    <div class="col-xs-12 col-sm-6"><input id="city" class="form-control input-transparent" required="required" type="text" value="" name="city"></div>
                                </div>
                                <div class="form-group">
                                    <label for="state" class="control-label col-sm-4">State <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <select id="state" data-placeholder="Select state"
                                                required="required" class="select2 form-control" name="state">
                                            <option value=""></option>
                                            <option value="AL">Alabama</option>
                                            <option value="AK">Alaska</option>
                                            <option value="AZ">Arizona</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="CA">California</option>
                                            <option value="CO">Colorado</option>
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="DC">District Of Columbia</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="ID">Idaho</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IN">Indiana</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NV">Nevada</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="OH">Ohio</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="OR">Oregon</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="TX">Texas</option>
                                            <option value="UT">Utah</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WA">Washington</option>
                                            <option value="WV">West Virginia</option>
                                            <option value="WI">Wisconsin</option>
                                            <option value="WY">Wyoming</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="country" class="control-label col-sm-4">Country <span class="required">*</span></label>
                                    <div class="col-sm-4">
                                        <select id="country" required="required"
                                                data-placeholder="Select country" class="select2 form-control" name="country">
                                            <option value=""></option>
                                            <option value="United States">United States</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antarctica">Antarctica</option>
                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Bouvet Island">Bouvet Island</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote D'ivoire">Cote D'ivoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Territories">French Southern Territories</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea-bissau">Guinea-bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                            <option value="Korea, Republic of">Korea, Republic of</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macao">Macao</option>
                                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Namibia">Namibia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Pitcairn">Pitcairn</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russian Federation">Russian Federation</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Saint Helena">Saint Helena</option>
                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                            <option value="Saint Lucia">Saint Lucia</option>
                                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                            <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Timor-leste">Timor-leste</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Viet Nam">Viet Nam</option>
                                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                                            <option value="Western Sahara">Western Sahara</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-4">
                                        <button type="submit" class="btn btn-primary">Validate &amp; Submit</button>
                                        <button type="button" class="btn btn-default">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
            <div class="col-md-5">
                <section class="widget">
                    <header>
                        <h4><i class="fa fa-cogs"></i> Account settings</h4>
                        <div class="actions">
                            <button class="btn btn-xs btn-inverse"><i class="fa fa-arrow-down"></i> View more</button>
                        </div>
                    </header>
                    <div class="body">
                        <form method="post">
                            <fieldset>
                                <div class="form-group">
                                    <label for="exp">Account expiration date</label>
                                    <input id="exp" class="form-control date-picker" type="text" name="exp" value="">
                                    <p class="help-block">Bootstrap datepicker</p>
                                </div>
                                <div class="form-group">
                                    <label for="website">Associate to Website</label>
                                    <select id="website" class="select2 select-block-level"
                                            data-width="off"
                                            data-minimum-results-for-search="10"
                                            name="website">
                                        <option selected="selected" value="0">Admin</option>
                                        <option value="1">Main Website</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="created_by">Created By</label>

                                    <input id="created_by" class="form-control" type="text" name="created_by"
                                           value="Admin" disabled="disabled">

                                </div>
                                <div class="form-group">
                                    <label for="groups">Account Group</label>
                                    <select id="groups" name="groups" class="select2 select-block-level" multiple
                                            data-placeholder="Choose one or more groups for account"
                                            data-width="off">
                                        <option value="0">Subscriber</option>
                                        <option value="1">Retailer</option>
                                        <option value="2">Supplier</option>
                                        <option value="3">Manager</option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <input type="checkbox" id="change-password" name="change-password">
                                        <label class="checkbox" for="change-password">
                                            Request password change
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="loader-wrap hiding hide">
        <i class="fa fa-circle-o-notch fa-spin"></i>
    </div>
</div>
<!-- common libraries. required for every page-->
<script src="{{asset('admin/lib/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('admin/lib/jquery-pjax/jquery.pjax.js')}}"></script>
<script src="{{asset('admin/lib/bootstrap-sass-official/assets/javascripts/bootstrap.js')}}"></script>
<script src="{{asset('admin/lib/widgster/widgster.js')}}"></script>
<script src="{{asset('admin/lib/underscore/underscore.js')}}"></script>

<!-- common application js -->
<script src="{{asset('admin/js/app.js')}}"></script>
<script src="{{asset('admin/js/settings.js')}}"></script>

<!-- common templates -->
<script type="text/template" id="settings-template">
    <div class="setting clearfix">
        <div>Background</div>
        <div id="background-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% dark = background == 'dark'; light = background == 'light';%>
            <button type="button" data-value="dark" class="btn btn-sm btn-default <%= dark? 'active' : '' %>">Dark</button>
            <button type="button" data-value="light" class="btn btn-sm btn-default <%= light? 'active' : '' %>">Light</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Sidebar on the</div>
        <div id="sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% onRight = sidebar == 'right'%>
            <button type="button" data-value="left" class="btn btn-sm btn-default <%= onRight? '' : 'active' %>">Left</button>
            <button type="button" data-value="right" class="btn btn-sm btn-default <%= onRight? 'active' : '' %>">Right</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Sidebar</div>
        <div id="display-sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% display = displaySidebar%>
            <button type="button" data-value="true" class="btn btn-sm btn-default <%= display? 'active' : '' %>">Show</button>
            <button type="button" data-value="false" class="btn btn-sm btn-default <%= display? '' : 'active' %>">Hide</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>White Version</div>
        <div>
            <a href="../white/index.html" class="btn btn-sm btn-default">&nbsp; Switch &nbsp;   <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
</script>

<script type="text/template" id="sidebar-settings-template">
    <% auto = sidebarState == 'auto'%>
    <% if (auto) {%>
    <button type="button"
            data-value="icons"
            class="btn-icons btn btn-transparent btn-sm">Icons</button>
    <button type="button"
            data-value="auto"
            class="btn-auto btn btn-transparent btn-sm">Auto</button>
    <%} else {%>
    <button type="button"
            data-value="auto"
            class="btn btn-transparent btn-sm">Auto</button>
    <% } %>
</script>

<!-- page specific scripts -->
<!-- page libs -->
<script src="{{asset('admin/lib/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('admin/lib/select2/select2.min.js')}}"></script>
<script src="{{asset('admin/lib/moment/moment.js')}}"></script>
<script src="{{asset('admin/lib/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>
<script src="{{asset('admin/lib/parsleyjs/dist/parsley.min.js')}}"></script>

<!-- page application js -->
<script src="{{asset('admin/js/forms-account.js')}}"></script>

</body>

<!-- Tieu Long Lanh Kute -->
</html>

<!-- light-blue - v3.1.0 - 2014-12-06 -->

<!DOCTYPE html>
<html>

<!-- Tieu Long Lanh Kute -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Light Blue - Responsive Admin Dashboard Template</title>

    <link href="{{asset('admin/css/application.min.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="{{('admin/img/favicon.png')}}">
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
        <li class="active">
            <a href="index.html"><i class="fa fa-home"></i> <span class="name">Dashboard</span></a>
        </li>
        <li class="panel ">
            <a class="accordion-toggle collapsed" data-toggle="collapse"
               data-parent="#side-nav" href="#forms-collapse"><i class="fa fa-pencil"></i> <span class="name">Forms</span></a>
            <ul id="forms-collapse" class="panel-collapse collapse ">
                <li class=""><a href="form_account.html">Account</a></li>
                <li class=""><a href="form_article.html">Article</a></li>
                <li class=""><a href="form_elements.html">Elements</a></li>
                <li class=""><a href="form_validation.html">Validation</a></li>
                <li class=""><a href="form_wizard.html">Wizard</a></li>
            </ul>
        </li>
        <li class="panel ">
            <a class="accordion-toggle collapsed" data-toggle="collapse"
               data-parent="#side-nav" href="#stats-collapse"><i class="fa fa-area-chart"></i> <span class="name">Statistics</span></a>
        </li>
        <li class="panel ">
            <a class="accordion-toggle collapsed" data-toggle="collapse"
               data-parent="#side-nav" href="#ui-collapse"><i class="fa fa-magic"></i> <span class="name">User Interface</span></a>
        </li>
        <li class="panel ">
            <a class="accordion-toggle collapsed" data-toggle="collapse"
               data-parent="#side-nav" href="#components-collapse"><i class="fa fa-tree"></i> <span class="name">Components</span></a>

        </li>
        <li class="panel ">
            <a class="accordion-toggle collapsed" data-toggle="collapse"
               data-parent="#side-nav" href="#tables-collapse"><i class="fa fa-cog"></i> <span class="name">Tables</span></a>

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

        </li>
        <li class="panel">
            <a class="accordion-toggle collapsed" data-toggle="collapse"
               data-parent="#side-nav" href="#menu-levels-collapse"><i class="fa fa-folder-open"></i> <span class="name">Menu Levels</span></a>
        </li>
        <li class="visible-xs">
            <a href="login.html"><i class="fa fa-sign-out"></i> <span class="name">Sign Out</span></a>
        </li>
    </ul>


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
                </li>
                <li class="dropdown">
                    <a href="#" title="8 support tickets"
                       class="dropdown-toggle"
                       data-toggle="dropdown">
                        <i class="fa fa-group"></i>
                    </a>
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
                            <img src="{{('admin/img/2.jpg')}}" alt="">
                            Philip Daineka
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
        </div>
    </header>        <div class="content container">
        <h2 class="page-title">Dashboard <small>Statistics and more</small></h2>
        <div class="row">
            <div class="col-lg-8">
                <section class="widget">
                    <header>
                        <h4>
                            Visits
                            <small>
                                Based on a three months data
                            </small>
                        </h4>
                        <div class="widget-controls">
                            <a title="Options" href="#"><i class="glyphicon glyphicon-cog"></i></a>
                            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                            <a data-widgster="close" title="Close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="body no-margin">
                        <div id="visits-chart" class="chart visits-chart">
                            <svg></svg>
                        </div>
                        <div class="visits-info well well-sm">
                            <div class="row">
                                <div class="col-sm-3 col-xs-6">
                                    <div class="key"><i class="fa fa-users"></i> Total Traffic</div>
                                    <div class="value">24 541 <i class="fa fa-caret-up color-green"></i></div>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <div class="key"><i class="fa fa-bolt"></i> Unique Visits</div>
                                    <div class="value">14 778 <i class="fa fa-caret-down color-red"></i></div>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <div class="key"><i class="fa fa-plus-square"></i> Revenue</div>
                                    <div class="value">$3 583.18 <i class="fa fa-caret-up color-green"></i></div>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <div class="key"><i class="fa fa-user"></i> Total Sales</div>
                                    <div class="value">$59 871.12 <i class="fa fa-caret-down color-red"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="widget">
                    <header>
                        <h4>
                            Traffic Sources
                            <small>
                                One month tracking
                            </small>
                        </h4>
                        <div class="widget-controls">
                            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-plus"></i></a>
                            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-minus"></i></a>
                            <a data-widgster="close" title="Close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                    </header>
                    <div class="body">
                        <table class="table table-striped no-margin sources-table">
                            <thead>
                            <tr>
                                <th class="source-col-header">Source</th>
                                <th>Amount</th>
                                <th>Change</th>
                                <th class="hidden-xs">Percent.,%</th>
                                <th>Target</th>
                                <th class="chart-col-header hidden-xs">Trend</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><span class="label label-important">Direct</span></td>
                                <td>713</td>
                                <td><strong class="color-green">+53</strong></td>
                                <td class="hidden-xs">+12</td>
                                <td>900</td>
                                <td class="chart-cell hidden-xs">
                                    <div id="direct-trend"></div>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="label label-warning">Refer</span></td>
                                <td>562</td>
                                <td><strong>+84</strong></td>
                                <td class="hidden-xs">+64</td>
                                <td>500</td>
                                <td class="chart-cell hidden-xs">
                                    <div id="refer-trend"></div>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="label label-success">Social</span></td>
                                <td>148</td>
                                <td><strong class="color-red">-12</strong></td>
                                <td class="hidden-xs">+3</td>
                                <td>180</td>
                                <td class="chart-cell hidden-xs">
                                    <div id="social-trend"></div>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="label label-info">Search</span></td>
                                <td>653</td>
                                <td><strong class="color-green">+23</strong></td>
                                <td class="hidden-xs">+43</td>
                                <td>876</td>
                                <td class="chart-cell hidden-xs">
                                    <div id="search-trend"></div>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="label label-inverse">Internal</span></td>
                                <td>976</td>
                                <td><strong>+101</strong></td>
                                <td class="hidden-xs">-7</td>
                                <td>844</td>
                                <td class="chart-cell hidden-xs">
                                    <div id="internal-trend"></div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
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
<script src="{{('admin/js/app.js')}}"></script>
<script src="{{('admin/js/settings.js')}}"></script>

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
<script src="{{asset('admin/lib/slimScroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('admin/lib/jquery.sparkline/index.js')}}"></script>

<script src="{{asset('admin/lib/backbone/backbone.js')}}"></script>
<script src="{{asset('admin/lib/backbone.localStorage/backbone.localStorage-min.js')}}"></script>

<script src="{{asset('admin/lib/d3/d3.min.js')}}"></script>
<script src="{{asset('admin/lib/nvd3/nv.d3.min.js')}}"></script>

<!-- page application js -->
<script src="{{('admin/js/index.js')}}"></script>
<script src="{{('admin/js/chat.js')}}"></script>

<!-- page template -->
<script type="text/template" id="message-template">
    <div class="sender pull-left">
        <div class="icon">
            <img src="{{('admin/img/2.jpg')}}" class="img-circle" alt="">
        </div>
        <div class="time">
            just now
        </div>
    </div>
    <div class="chat-message-body">
        <span class="arrow"></span>
        <div class="sender"><a href="#">Tikhon Laninga</a></div>
        <div class="text">
            <%- text %>
        </div>
    </div>
</script>

</body>

<!-- Tieu Long Lanh Kute -->
</html>

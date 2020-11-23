<?php

use yii\helpers\Url;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="images/favicon.png">

    <title>Inbox</title>

</head>

<body>
    <!--main content start-->
    <section id="#">
        <!-- page start-->
        <div class="row">
            <div class="col-sm-3">
                <section class="panel">
                    <div class="panel-body">
                        <a href="<?= Url::to(['messaging/compose'])?>"  class="btn btn-compose">
                            Compose message
                        </a>
                        <ul class="nav nav-pills nav-stacked mail-nav">
                            <li class="active"><a href="<?= Url::to(['messaging/inbox'])?>"> <i class="fa fa-inbox"></i> Inbox  <span class="label label-danger pull-right inbox-notification">9</span></a></li>
                            <li><a href="#"> <i class="fa fa-envelope-o"></i> Send message</a></li>
                            <li><a href="#"> <i class="fa fa-certificate"></i> Important</a></li>
                            <li><a href="#"> <i class="fa fa-file-text-o"></i> Drafts <span class="label label-info pull-right inbox-notification">123</span></a></a></li>
                            <li><a href="#"> <i class="fa fa-trash-o"></i> Trash</a></li>
                        </ul>
                    </div>
                </section>

            </div>
            <div class="col-sm-9">
                <section class="panel">
                    <header class="panel-heading wht-bg">
                       <h4 class="gen-case">Inbox (34)
                        <form action="#" class="pull-right mail-src-position">
                            <div class="input-append">
                                <input type="text" class="form-control " placeholder="Search message">
                            </div>
                        </form>
                       </h4>
                    </header>
                    <div class="panel-body minimal">
                        <div class="mail-option">
                            <div class="chk-all">
                                <div class="pull-left mail-checkbox ">
                                    <input type="checkbox" class="">
                                </div>

                                <div class="btn-group">
                                    <a data-toggle="dropdown" href="#" class="btn mini all">
                                        All
                                        <i class="fa fa-angle-down "></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"> None</a></li>
                                        <li><a href="#"> Read</a></li>
                                        <li><a href="#"> Unread</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="btn-group">
                                <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                                    <i class=" fa fa-refresh"></i>
                                </a>
                            </div>
                            <div class="btn-group hidden-phone">
                                <a data-toggle="dropdown" href="#" class="btn mini blue">
                                    More
                                    <i class="fa fa-angle-down "></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                                    <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <a data-toggle="dropdown" href="#" class="btn mini blue">
                                    Move to
                                    <i class="fa fa-angle-down "></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                                    <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                                </ul>
                            </div>

                            <ul class="unstyled inbox-pagination">
                                <li><span>1-50 of 124</span></li>
                                <li>
                                    <a class="np-btn" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
                                </li>
                                <li>
                                    <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="table-inbox-wrap ">
                            <table class="table table-inbox table-hover">
                        <tbody>
                        <tr class="unread">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                            <td class="view-message  dont-show"><a href="mail_view.html">ABC Company</a></td>
                            <td class="view-message "><a href="mail_view.html">Lorem ipsum dolor imit set.</a></td>
                            <td class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                            <td class="view-message  text-right">12.10 AM</td>
                        </tr>
                        <tr class="unread">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                            <td class="view-message dont-show"><a href="mail_view.html">Mr Bean</a></td>
                            <td class="view-message"><a href="mail_view.html">Hi Bro, Lorem ipsum dolor imit</a></td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">Jan 11</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                            <td class="view-message dont-show"><a href="mail_view.html">Jonathan Smith</a></td>
                            <td class="view-message"><a href="mail_view.html">Lorem ipsum dolor sit amet</a></td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">March 15</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                            <td class="view-message dont-show"><a href="mail_view.html">Facebook</a></td>
                            <td class="view-message"><a href="mail_view.html">Dolor sit amet, consectetuer adipiscing</a></td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">June 01</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                            <td class="view-message dont-show"><a href="mail_view.html">Tasi man <span class="label label-danger pull-right">urgent</span></a></td>
                            <td class="view-message"><a href="mail_view.html">Lorem ipsum dolor sit amet</a></td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">May 2</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                            <td class="view-message dont-show"><a href="mail_view.html">Facebook</a></td>
                            <td class="view-message"><a href="mail_view.html">Dolor sit amet, consectetuer adipiscing</a></td>
                            <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                            <td class="view-message text-right">March 14</td>
                        </tr>
                        
                        </tbody>
                        </table>

                        </div>
                    </div>
                </section>
            </div>
        </div>

        <!-- page end-->
        </section>
    </section>
    <!--main content end-->
<!--right sidebar start-->
<div class="right-sidebar">
<div class="search-row">
    <input type="text" placeholder="Search" class="form-control">
</div>
<div class="right-stat-bar">
<ul class="right-side-accordion">
<li class="widget-collapsible">
    <a href="#" class="head widget-head red-bg active clearfix">
        <span class="pull-left">work progress (5)</span>
        <span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
    </a>
    <ul class="widget-container">
        <li>
            <div class="prog-row side-mini-stat clearfix">
                <div class="side-graph-info">
                    <h4>Target sell</h4>
                    <p>
                        25%, Deadline 12 june 13
                    </p>
                </div>
                <div class="side-mini-graph">
                    <div class="target-sell">
                    </div>
                </div>
            </div>
            <div class="prog-row side-mini-stat">
                <div class="side-graph-info">
                    <h4>product delivery</h4>
                    <p>
                        55%, Deadline 12 june 13
                    </p>
                </div>
                <div class="side-mini-graph">
                    <div class="p-delivery">
                        <div class="sparkline" data-type="bar" data-resize="true" data-height="30" data-width="90%" data-bar-color="#39b7ab" data-bar-width="5" data-data="[200,135,667,333,526,996,564,123,890,564,455]">
                        </div>
                    </div>
                </div>
            </div>
            <div class="prog-row side-mini-stat">
                <div class="side-graph-info payment-info">
                    <h4>payment collection</h4>
                    <p>
                        25%, Deadline 12 june 13
                    </p>
                </div>
                <div class="side-mini-graph">
                    <div class="p-collection">
						<span class="pc-epie-chart" data-percent="45">
						<span class="percent"></span>
						</span>
                    </div>
                </div>
            </div>
            <div class="prog-row side-mini-stat">
                <div class="side-graph-info">
                    <h4>delivery pending</h4>
                    <p>
                        44%, Deadline 12 june 13
                    </p>
                </div>
                <div class="side-mini-graph">
                    <div class="d-pending">
                    </div>
                </div>
            </div>
            <div class="prog-row side-mini-stat">
                <div class="col-md-12">
                    <h4>total progress</h4>
                    <p>
                        50%, Deadline 12 june 13
                    </p>
                    <div class="progress progress-xs mtop10">
                        <div style="width: 50%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-info">
                            <span class="sr-only">50% Complete</span>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</li>
<li class="widget-collapsible">
    <a href="#" class="head widget-head terques-bg active clearfix">
        <span class="pull-left">contact online (5)</span>
        <span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
    </a>
    <ul class="widget-container">
        <li>
            <div class="prog-row">
                <div class="user-thumb">
                    <a href="#"><img src="images/avatar1_small.jpg" alt=""></a>
                </div>
                <div class="user-details">
                    <h4><a href="#">Jonathan Smith</a></h4>
                    <p>
                        Work for fun
                    </p>
                </div>
                <div class="user-status text-danger">
                    <i class="fa fa-comments-o"></i>
                </div>
            </div>
            <div class="prog-row">
                <div class="user-thumb">
                    <a href="#"><img src="images/avatar1.jpg" alt=""></a>
                </div>
                <div class="user-details">
                    <h4><a href="#">Anjelina Joe</a></h4>
                    <p>
                        Available
                    </p>
                </div>
                <div class="user-status text-success">
                    <i class="fa fa-comments-o"></i>
                </div>
            </div>
            <div class="prog-row">
                <div class="user-thumb">
                    <a href="#"><img src="images/chat-avatar2.jpg" alt=""></a>
                </div>
                <div class="user-details">
                    <h4><a href="#">John Doe</a></h4>
                    <p>
                        Away from Desk
                    </p>
                </div>
                <div class="user-status text-warning">
                    <i class="fa fa-comments-o"></i>
                </div>
            </div>
            <div class="prog-row">
                <div class="user-thumb">
                    <a href="#"><img src="images/avatar1_small.jpg" alt=""></a>
                </div>
                <div class="user-details">
                    <h4><a href="#">Mark Henry</a></h4>
                    <p>
                        working
                    </p>
                </div>
                <div class="user-status text-info">
                    <i class="fa fa-comments-o"></i>
                </div>
            </div>
            <div class="prog-row">
                <div class="user-thumb">
                    <a href="#"><img src="images/avatar1.jpg" alt=""></a>
                </div>
                <div class="user-details">
                    <h4><a href="#">Shila Jones</a></h4>
                    <p>
                        Work for fun
                    </p>
                </div>
                <div class="user-status text-danger">
                    <i class="fa fa-comments-o"></i>
                </div>
            </div>
            <p class="text-center">
                <a href="#" class="view-btn">View all Contacts</a>
            </p>
        </li>
    </ul>
</li>
<li class="widget-collapsible">
    <a href="#" class="head widget-head purple-bg active">
        <span class="pull-left"> recent activity (3)</span>
        <span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
    </a>
    <ul class="widget-container">
        <li>
            <div class="prog-row">
                <div class="user-thumb rsn-activity">
                    <i class="fa fa-clock-o"></i>
                </div>
                <div class="rsn-details ">
                    <p class="text-muted">
                        just now
                    </p>
                    <p>
                        <a href="#">Jim Doe </a>Purchased new equipments for zonal office setup
                    </p>
                </div>
            </div>
            <div class="prog-row">
                <div class="user-thumb rsn-activity">
                    <i class="fa fa-clock-o"></i>
                </div>
                <div class="rsn-details ">
                    <p class="text-muted">
                        2 min ago
                    </p>
                    <p>
                        <a href="#">Jane Doe </a>Purchased new equipments for zonal office setup
                    </p>
                </div>
            </div>
            <div class="prog-row">
                <div class="user-thumb rsn-activity">
                    <i class="fa fa-clock-o"></i>
                </div>
                <div class="rsn-details ">
                    <p class="text-muted">
                        1 day ago
                    </p>
                    <p>
                        <a href="#">Jim Doe </a>Purchased new equipments for zonal office setup
                    </p>
                </div>
            </div>
        </li>
    </ul>
</li>
<li class="widget-collapsible">
    <a href="#" class="head widget-head yellow-bg active">
        <span class="pull-left"> shipment status</span>
        <span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
    </a>
    <ul class="widget-container">
        <li>
            <div class="col-md-12">
                <div class="prog-row">
                    <p>
                        Full sleeve baby wear (SL: 17665)
                    </p>
                    <div class="progress progress-xs mtop10">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                            <span class="sr-only">40% Complete</span>
                        </div>
                    </div>
                </div>
                <div class="prog-row">
                    <p>
                        Full sleeve baby wear (SL: 17665)
                    </p>
                    <div class="progress progress-xs mtop10">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                            <span class="sr-only">70% Completed</span>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</li>
</ul>
</div>
</div>
<!--right sidebar end-->

</section>

</body>
</html>

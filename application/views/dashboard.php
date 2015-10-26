<?php include 'basics/headercontent.php';?>
<?php include 'basics/dashboardnavbar.php';?>
<style>
    #navtab{background-color: #213345}

</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
            <!--left column-->
            <a href="#"><strong><i class="glyphicon glyphicon-wrench"></i>Tools</strong></a>

            <hr>

            <ul class="nav nav-stacked">
                <li class="nav-header"><a href="#" data-toggle="collapse" data-target="#userMenu">Settings<i class="glyphicon glyphicon-chevron-right"></i></a>
                    <ul class="nav nav-stacked collapse in" id="userMenu">
                        <li class="active"><a href="#"><i class="glyphicon glypicon-home"></i>Home</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-envelope"></i>Messages<span class="badge badge-info">2</span></a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-cog"></i>Options</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-comment"></i>
                                Shoutbox</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-user"></i>
                                Online Members</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-flag"></i>
                                Groups</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-exclamation-sign"></i>References</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-off"></i>Logout</a></li>
                    </ul>
                </li>
                <li class="nav-header"><a href="#" data-toggle="collapse" data-target="#menu2">Reports<i class="glyphicon glyphicon-chevron-right"></i></a>
                    <ul class="nav nav-stacked collapse" id="menu2">
                        <li><a href="#">Information &amp; Stats</a></li>
                        <li><a href="#">Paper Views</a></li>
                        <li><a href="#">Group Requests</a></li>
                        <li><a href="#">Timetable</a></li>
                        <li><a href="#">Comments</a></li>
                    </ul>
                </li>
                <li class="nav-header">
                    <a href="#" data-toggle="collapse" data-target="#menu3"> Social Media <i class="glyphicon glyphicon-chevron-right"></i></a>
                    <ul class="nav nav-stacked collapse" id="menu3">
                        <li><a href=""><i class="glyphicon glyphicon-circle"></i> Facebook</a></li>
                        <li><a href=""><i class="glyphicon glyphicon-circle"></i> Twitter</a></li>
                    </ul>
                </li>
            </ul>

            <hr>
            <a href="#"><strong><i class="glyphicon glyphicon-link"></i> Resources</strong></a>

            <ul class="nav nav-pills nav-stacked">
                <li class="nav-header"></li>
                <li><a href="#"><i class="glyphicon glyphicon-list"></i> Layouts &amp;</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-briefcase"></i> Toolbox</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-link"></i> Widgets</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-list-alt"></i> Reports</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-book"></i> Pages</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-star"></i> Social Media</a></li>
            </ul>

            <hr>

            <ul class="nav nav-stacked">
                <li class="active"><a href="http://bootply.com" title="The Bootstrap Playground" target="ext">Playground</a></li>
                <li><a href="/tagged/bootstrap-3">Chats</a></li>
                <li><a href="/61518" title="Bootstrap 3 Panel">Research Panels</a></li>
                <li><a href="/62603">Site Layout</a></li>
            </ul>

        </div><!--/col-sm-3-->
        <!--column 2-->
        <div class="col-sm-9">
            <!-- column 2 -->
            <ul class="list-inline pull-right">
                <li><a href="#"><i class="glyphicon glyphicon-cog"></i></a></li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-comment"></i><span class="count">3</span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">1. Is there a way..</a></li>
                        <li><a href="#">2. Hello, admin. I would..</a></li>
                        <li><a href="#"><strong>All messages</strong></a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="glyphicon glyphicon-user"></i></a></li>
                <li><a title="Add Widget" data-toggle="modal" href="#addWidgetModal"><span class="glyphicon glyphicon-plus-sign"></span> Create Group</a></li>
            </ul>
            <a href="#"><strong><i class="glyphicon glyphicon-dashboard"></i> Main Dashboard</strong></a>

            <hr>

            <div class="row">
                <!--Center left-->
                <div class="col-md-6">
                    <div class="well">New Articles <span class="badge pull-right">3</span></div>

                    <hr>
                    <div class="btn-group btn-group-justified">
                        <a href="#" class="btn btn-primary col-sm-3">
                            <i class="glyphicon glyphicon-plus"></i>
                            <br> New Article
                        </a>
                        <a href="#" class="btn btn-primary col-sm-3">
                            <i class="glyphicon glyphicon-cloud"></i>
                            <br> PaperCloud
                        </a>
                        <a href="#" class="btn btn-primary col-sm-3">
                            <i class="glyphicon glyphicon-cog"></i>
                            <br> Reviews
                        </a>
                        <a href="#" class="btn btn-primary col-sm-3">
                            <i class="glyphicon glyphicon-question-sign"></i>
                            <br> New Papers
                        </a>
                    </div>

                    <hr>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>New Articles</h4>
                        </div>
                        <div class="panel-body">
                            <p>Holds All New Paper Summaries</p>
                            <code>Write the php code ASAP(MEMO)</code>
                        </div><!--/End of panel body-->
                    </div><!--End of Panel-->

                    <hr>

                    <!--tabs content-->
                    <div class="panel">
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="#status" data-toggle="tab">Status</a></li>
                            <li><a href="#messages" data-toggle="tab">Messages</a></li>
                            <li><a href="#groupchat" data-toggle="tab">Group Chat</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active well" id="status">
                                <h4><i class="glyphicon glyphicon-user"></i></h4>
                                <p>Holds Online/Offline Status</p>
                                <code>Write the php code ASAP(MEMO)</code>
                            </div>

                            <div class="tab-pane active well" id="messages">
                                <h4><i class="glyphicon glyphicon-user"></i></h4>
                                <p>Holds current chat session</p>
                                <code>Write the php code ASAP(MEMO)</code>
                            </div>

                            <div class="tab-pane active well" id="groupchat">
                                <h4><i class="glyphicon glyphicon-user"></i></h4>
                                <p>Holds current group chat session</p>
                                <code>Write the php code ASAP(MEMO)</code>
                            </div>
                        </div>

                    </div><!--/End of tabs-->

                    <hr>
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h4>New Papers</h4></div>
                        <div class="panel-body">
                            <div class="list-group">
                                <a href="#" class="list-group-item active">php code here</a>
                                <a href="#" class="list-group-item"> php code here</a>
                                <a href="#" class="list-group-item">php code needed here </a>
                            </div>
                        </div>
                    </div>

                </div><!--/End of col-md-6-->
                <!--/End of center left-->

                <div class="col-md-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h4>Notifications</h4></div>
                        <div class="panel-body">
                            <p>Holds current chat session</p>
                            <code>Write the php code ASAP(MEMO)</code
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-stripped">
                        <thead>
                        <th>ArticleName</th>
                        <th>Title</th>
                        <th>Date</th>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <i class="glyphicon glyphicon-wrench pull-right"></i>
                            <h4>Send Email</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form class="form form-vertical">
                            <div class="control-group">
                                <label>Name</label>
                                <div class="controls">
                                    <input type="text" class="form-control" placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="control-group">
                                <label>Message</label>
                                <div class="controls">
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label>Category</label>
                                <div class="controls">
                                    <select class="form-control">
                                        <option>options</option>
                                        <option>PaperReview</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label></label>
                                <div class="controls">
                                    <button type="submit" class="btn btn-primary">
                                        Post
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--/panel content-->
                </div><!--?end of panel-->

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Engagement</h4></div>
                    </div>
                    <div class="panel-body">
                        <div class="col-xs-4 text-center"><img src="http://placehold.it/80/BBBBBB/FFF" class="img-circle img-responsive"></div>
                        <div class="col-xs-4 text-center"><img src="http://placehold.it/80/EFEFEF/555" class="img-circle img-responsive"></div>
                        <div class="col-xs-4 text-center"><img src="http://placehold.it/80/EEEEEE/222" class="img-circle img-responsive"></div>
                    </div>
                </div>
                <!--/panel-->
            </div><!--End of col-md-6-->
        </div><!--/ROW-->
        <hr>
        <div class="row">
            <div class="col-md-12">
                <ul class="list-group">
                    <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-flash"></i> <small>(3 mins ago)</small> The Maize Dilemma Unleashed</a></li>
                    <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-flash"></i> <small>(1 hour ago)</small> Hi all, I've just post a report that show the relationship betwe..</a></li>
                    <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-heart"></i> <small>(2 hrs ago)</small> Paul. That document you posted yesterday doesn't seem to contain the over..</a></li>
                    <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-heart-empty"></i> <small>(4 hrs ago)</small> The map service on c243 is down today. I will be fixing the..</a></li>
                    <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-heart"></i> <small>(yesterday)</small> I posted a new document that shows how to manage sequence layers..</a></li>
                    <li class="list-group-item"><a href="#"><i class="glyphicon glyphicon-flash"></i> <small>(yesterday)</small> ..</a></li>
                </ul>
            </div>
        </div>

    </div><!--/End of col-sm-9-->
    <!--/End of Column 2-->
</div><!--/row-->
</div>

<?php include 'basics/scripttags.php';?>

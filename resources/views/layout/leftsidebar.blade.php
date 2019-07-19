        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Session::get('name')}}</div>
                    <div class="email">{{Session::get('email')}}</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <!-- <li>
                                <a href="#" class="btn btn-xs btn-link waves-effect" data-target="#modalInfo" data-toggle="modal">
                                <i class="material-icons">person</i>Profile</a>
                            </li> -->
                            <!-- Modal -->
                            <!-- <div class="modal fade" id="modalInfo" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">My Profile</h4>
                                        </div>
                                        <div class="modal-body">
                                            Test
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- #END# Modal -->
                            <!-- <li role="separator" class="divider"></li> -->
                            <li><a href="logout" class="btn btn-xs btn-link waves-effect"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                @include('layout.submenu')
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; <?php echo date('Y');?> <a href="/">SIBORA - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
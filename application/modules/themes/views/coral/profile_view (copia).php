<style>


  @import '<?php echo theme_url();?>/assets/icons/fontawesome/assets/css/font-awesome.min.css';
  @import '<?php echo theme_url();?>/assets/icons/glyphicons/assets/css/glyphicons_regular.css';
  @import '<?php echo theme_url();?>/assets/icons/glyphicons/assets/css/glyphicons_social.css';
  @import '<?php echo theme_url();?>/assets/icons/glyphicons/assets/css/glyphicons_filetypes.css';
  @import url(http://fonts.googleapis.com/css?family=Roboto:400,300,700);
  @import url(http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700);
  @import '<?php echo theme_url();?>/assets/plugins/forms_elements_bootstrap-datepicker/css/bootstrap-datepicker.css';

  @import '<?php echo theme_url();?>/assets/plugins/forms_elements_uniform/css/uniform.default.css';
  @import '<?php echo theme_url();?>/assets/css/custom_co.css';
  /* --- LOADING [css.bootstrap.min] from assets/library/bootstrap/css/bootstrap.min.css */
  /* --- LOADING [css.font-awesome.min] from assets/library/icons/fontawesome/assets/css/font-awesome.min.css */
  /* --- LOADING [css.glyphicons_regular] from assets/library/icons/glyphicons/assets/css/glyphicons_regular.css */
  /* --- LOADING [css.glyphicons_social] from assets/library/icons/glyphicons/assets/css/glyphicons_social.css */
  /* --- LOADING [css.glyphicons_filetypes] from assets/library/icons/glyphicons/assets/css/glyphicons_filetypes.css */
  /* --- LOADING [less.variables] from assets/components/core/variables.less */
  /* --- LOADING [less.mixins] from assets/components/core/mixins.less */
  /* --- LOADING [less.scaffolding] from assets/components/core/scaffolding.less */

  
</style>

<div class="row">
  <!-- Gallery , DETAILES DESCRIPTION-->
  <div class="col-md-3 ">
    <?php render_widgets('profile_menu');?>
  </div>
  <div class="col-md-9">
    <div class="detail-title"><i class="fa fa-home fa-4"></i>&nbsp;<?php echo lang_key('DBC_ALL_AGENTS');?></div>

    <div class="agent-container" id="panel">




     <!-- Widget -->
     <div class="widget widget-tabs widget-tabs-double-2 border-bottom-none">

      <!-- Widget heading -->
      <div class="widget-head">
        <ul>
          <li class="active"><a class="glyphicons display" href="#overview" data-toggle="tab"><i></i>Overview</a></li>
          <li><a class="glyphicons edit" href="#edit-account" data-toggle="tab"><i></i>Edit account</a></li>
          <li><a class="glyphicons luggage" href="#projects" data-toggle="tab"><i></i>Projects</a></li>
        </ul>
      </div>
      <!-- // Widget heading END -->

      <div class="widget-body">

        <form class="form-horizontal">
          <div class="tab-content">

            <div class="tab-pane active widget-body-regular padding-none" id="overview">

              <div class="innerL row row-merge">
                <div class="col-md-3 center innerL innerTB">

                  <div class="innerR innerT">
                    <!-- Profile Photo -->
                    <a href="" class="thumb"><img src="<?php echo get_profile_photo_by_id($profile->id,'thumb');?>" alt="Profile" class="img-responsive" /></a>
                    <div class="separator bottom"></div>
                    <!-- // Profile Photo END -->

                    <!-- Social Icons -->
                    <a href="" class="glyphicons glyphicons-social standard primary facebook"><i></i></a>
                    <a href="" class="glyphicons glyphicons-social standard twitter"><i></i></a>
                    <a href="" class="glyphicons glyphicons-social standard linked_in"><i></i></a>
                    <div class="clearfix separator bottom"></div>
                    <!-- // Social Icons END -->

                    <!-- Twitter Section -->
                    <h5 class="glyphicons single twitter"><i></i> Latest from Twitter</h5>
                    <section class="twitter-feed">
                      <div class="tweet">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nunc lorem, rutrum non porta. <span class="label label-inverse">01/11/2012</span></div>
                    </section>
                    <!-- Twitter Section END -->

                  </div>

                </div>
                <div class="col-md-9 containerBg innerTB">

                  <div class="innerLR">
                    <div class="row innerTB">
                      <div class="col-md-7">

                        <!-- About -->
                        <div class="widget widget-heading-simple widget-body-white margin-none">
                          <div class="widget-head"><h4 class="heading glyphicons user"><i></i><?php echo $profile->user_name;?></h4></div>
                          <div class="widget-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas convallis porta purus, pulvinar mattis nulla tempus ut. Curabitur quis dui orci. Ut nisi dolor, dignissim a aliquet quis, vulputate id dui. Proin ultrices ultrices ligula, dictum varius turpis faucibus non. Curabitur faucibus ultrices nunc, nec aliquet leo tempor cursus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                          </div>
                        </div>
                        <!-- // About END -->

                      </div>
                      <div class="col-md-5">

                        <!-- Bio -->
                        <div class="widget widget-heading-simple widget-body-white margin-none">
                          <div class="widget-head"><h4 class="heading glyphicons calendar"><i></i>Bio <span>Personal information</span></h4></div>
                          <div class="widget-body">
                            <ul class="unstyled icons margin-none">
                              <li class="glyphicons birthday_cake"><i></i> <span class="label label-default">10</span> <span class="label label-default">July</span> <span class="label label-default">1986</span></li>
                              <li class="glyphicons tie"><i></i> Working at <a href="http://www.mosaicpro.biz">MosaicPro</a></li>
                              <li class="glyphicons certificate"><i></i> Adobe Photoshop Certification</li>
                              <li class="glyphicons microphone"><i></i> English :: French :: Italian :: Romanian :: Polish</li>
                            </ul>
                          </div>
                        </div>
                        <!-- // Bio END -->

                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-7">

                        <!-- Latest Orders/List Widget -->
                        <div class="widget widget-heading-simple widget-body-gray" data-toggle="collapse-widget">

                          <!-- Widget Heading -->
                          <div class="widget-head">
                            <h4 class="heading glyphicons shopping_cart"><i></i>Last orders</h4>
                            <a href="" class="details pull-right">view all</a>
                          </div>
                          <!-- // Widget Heading -->

                          <div class="widget-body list products">
                            <ul>
                             <?php 

                             $querys = get_notific($profile->id); 

                             $notifiche= count($querys);
if ($notifiche> 0){
                             foreach($querys as $notific) {
                              echo'
                              <li>
                                <img src="'.get_profile_photo_by_id($notific['user_id_created_by'], "thumb").'" width="50px">
                                <span class="title">10 items<br/><strong>'.$notific['user_notification_type'].'  &euro;5,900.00</strong></span>
                                <span class="count"></span>
                              </li>';

                            } }else{?>
                            <!-- List item -->
                            <li>
                              <span class="img">photo</span>
                              <span class="title">Product name<br/><strong>&euro;2,900</strong></span>
                              <span class="count"></span>
                            </li>
                            <!-- // List item END -->
                            <!-- List item -->
                            <li>
                              <span class="img">photo</span>
                              <span class="title">Product name<br/><strong>&euro;2,900</strong></span>
                              <span class="count"></span>
                            </li>
                            <!-- // List item END -->
<?} ?>
                          </ul>
                        </div>
                      </div>
                      <!-- // Latest Orders/List Widget END -->

                      <div class="alert alert-primary">
                        <a class="close" data-dismiss="alert">&times;</a>
                        <p>Integer quis tempor mi. Donec venenatis dui in neque fringilla at iaculis libero ullamcorper. In velit sem, sodales id hendrerit ac, fringilla et est. Pellentesque at justo urna, eu pharetra tortor. Aenean aliquam, tellus vel suscipit luctus.</p>
                      </div>

                    </div>
                    <div class="col-md-5">

                      <div class="widget widget-heading-simple widget-body-gray" data-toggle="collapse-widget">

                        <!-- Widget Heading -->
                        <div class="widget-head">
                          <h4 class="heading glyphicons history"><i></i>Activity</h4>
                          <a href="" class="details pull-right">view all</a>
                        </div>
                        <!-- // Widget Heading END -->

                        <div class="widget-body list">
                          <ul>

                            <!-- List item -->
                            <li>
                              <span>Sales today</span>
                              <span class="count">&euro;5,900</span>
                            </li>
                            <!-- // List item END -->

                            <!-- List item -->
                            <li>
                              <span>Some other stats</span>
                              <span class="count">30,095</span>
                            </li>
                            <!-- // List item END -->
                            <!-- List item -->
                            <li>
                              <span>Some other stats</span>
                              <span class="count">22,320</span>
                            </li>
                            <!-- // List item END -->

                          </ul>
                        </div>
                      </div>

                      <div class="widget widget-heading-simple widget-body-gray" data-toggle="collapse-widget">

                        <!-- Widget Heading -->
                        <div class="widget-head">
                          <h4 class="heading glyphicons history"><i></i>Widget</h4>
                        </div>
                        <!-- // Widget Heading END -->

                        <div class="widget-body">
                          Curabitur quis dui orci. Ut nisi dolor, dignissim a aliquet quis, vulputate id dui. Proin ultrices ultrices ligula, dictum varius turpis faucibus non. Curabitur faucibus ultrices nunc, nec aliquet leo tempor cursus.
                        </div>
                      </div>

                    </div>
                  </div>
                </div>

              </div>
            </div>

          </div>

          <!-- Tab content -->
          <div class="tab-pane widget-body-regular containerBg" id="edit-account">

            <div class="widget widget-tabs widget-tabs-vertical row row-merge margin-none widget-body-white">

              <!-- Widget heading -->
              <div class="widget-head col-md-3">
                <ul>
                  <li class="active"><a class="glyphicons pencil" href="#account-details" data-toggle="tab"><i></i>Account details</a></li>
                  <li><a class="glyphicons settings" href="#account-settings" data-toggle="tab"><i></i>Account settings</a></li>
                  <li><a class="glyphicons eye_open" href="#privacy-settings" data-toggle="tab"><i></i>Privacy settings</a></li>
                </ul>
              </div>
              <!-- // Widget heading END -->

              <div class="widget-body col-md-9">

                <div class="tab-content">
                  <div class="tab-pane active" id="account-details">

                    <!-- Row -->
                    <div class="row">

                      <!-- Column -->
                      <div class="col-md-6">

                        <!-- Group -->
                        <div class="form-group">
                          <label class="col-md-4 control-label">First name</label>
                          <div class="col-md-8">
                            <input type="text" value="John" class="form-control" />
                          </div>
                        </div>
                        <!-- // Group END -->

                        <!-- Group -->
                        <div class="form-group">
                          <label class="col-md-4 control-label">Last name</label>
                          <div class="col-md-8">
                            <input type="text" value="Doe" class="form-control" />
                          </div>
                        </div>
                        <!-- // Group END -->

                        <!-- Group -->
                        <div class="form-group">
                          <label class="col-md-4 control-label">Date of birth</label>
                          <div class="col-md-8">
                            <div class="input-group">
                              <input type="text" id="datepicker1" class="form-control" value="13/06/1988" />
                              <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                          </div>
                        </div>
                        <!-- // Group END -->

                      </div>
                      <!-- // Column END -->

                      <!-- Column -->
                      <div class="col-md-6">

                        <!-- Group -->
                        <div class="form-group">
                          <label class="col-md-2 control-label">Gender</label>
                          <div class="col-md-10">
                            <select class="form-control">
                              <option>Male</option>
                              <option>Female</option>
                            </select>
                          </div>
                        </div>
                        <!-- // Group END -->

                        <!-- Group -->
                        <div class="form-group">
                          <label class="col-md-2 control-label">Age</label>
                          <div class="col-md-10">
                            <input type="text" value="25" class="form-control" />
                          </div>
                        </div>
                        <!-- // Group END -->

                      </div>
                      <!-- // Column END -->

                    </div>
                    <!-- // Row END -->

                    <div class="separator line bottom"></div>

                    <!-- Group -->
                    <div class="control-group">
                      <label class="control-label">About me</label>
                      <div class="controls-uno">
                        <textarea id="mustHaveId" class="wysihtml5 form-control" rows="5">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</textarea>
                      </div>
                    </div>
                    <!-- // Group END -->

                    <!-- Form actions -->
                    <div class="separator top">
                      <button type="submit" class="btn btn-icon btn-primary glyphicons circle_ok"><i></i>Save changes</button>
                      <button type="button" class="btn btn-icon btn-default glyphicons circle_remove"><i></i>Cancel</button>
                    </div>
                    <!-- // Form actions END -->

                  </div>
                  <div class="tab-pane" id="account-settings">

                    <!-- Row -->
                    <div class="row">

                      <!-- Column -->
                      <div class="col-md-3">
                        <strong>Change password</strong>
                        <p class="muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                      <!-- // Column END -->

                      <!-- Column -->
                      <div class="col-md-9">
                        <label for="inputUsername">Username</label>
                        <div class="input-group">
                          <input type="text" id="inputUsername" class="form-control" value="john.doe2012" disabled="disabled" />
                          <span class="input-group-addon" data-toggle="tooltip" data-placement="top" data-container="body" data-original-title="Username can't be changed"><i class="fa fa-question-sign"></i></span>
                        </div>
                        <div class="separator"></div>

                        <label for="inputPasswordOld">Old password</label>
                        <div class="input-group">
                          <input type="password" id="inputPasswordOld" class="form-control" value="" placeholder="Leave empty for no change" />
                          <span class="input-group-addon" data-toggle="tooltip" data-placement="top" data-container="body" data-original-title="Leave empty if you don't wish to change the password"><i class="fa fa-question-sign"></i></span>
                        </div>
                        <div class="separator"></div>

                        <label for="inputPasswordNew">New password</label>
                        <input type="password" id="inputPasswordNew" class="form-control" value="" placeholder="Leave empty for no change" />
                        <div class="separator"></div>

                        <label for="inputPasswordNew2">Repeat new password</label>
                        <input type="password" id="inputPasswordNew2" class="form-control" value="" placeholder="Leave empty for no change" />
                        <div class="separator"></div>
                      </div>
                      <!-- // Column END -->

                    </div>
                    <!-- // Row END -->

                    <div class="separator line bottom"></div>

                    <!-- Row -->
                    <div class="row">

                      <!-- Column -->
                      <div class="col-md-3">
                        <strong>Contact details</strong>
                        <p class="muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                      <!-- // Column END -->

                      <!-- Column -->
                      <div class="col-md-9">
                        <div class="row">
                          <div class="col-md-6">
                            <label for="inputPhone">Phone</label>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                              <input type="text" id="inputPhone" class="form-control" placeholder="01234567897" />
                            </div>
                            <div class="separator"></div>

                            <label for="inputEmail">E-mail</label>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                              <input type="text" id="inputEmail" class="form-control" placeholder="contact@mosaicpro.biz" />
                            </div>
                            <div class="separator"></div>

                            <label for="inputWebsite">Website</label>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-link"></i></span>
                              <input type="text" id="inputWebsite" class="form-control" placeholder="http://www.mosaicpro.biz" />
                            </div>
                            <div class="separator"></div>
                          </div>
                          <div class="col-md-6">
                            <label for="inputFacebook">Facebook</label>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                              <input type="text" id="inputFacebook" class="form-control" placeholder="mosaicpro" />
                            </div>
                            <div class="separator"></div>

                            <label for="inputTwitter">Twitter</label>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                              <input type="text" id="inputTwitter" class="form-control" placeholder="mosaicpro" />
                            </div>
                            <div class="separator"></div>

                            <label for="inputSkype">Skype ID</label>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-skype"></i></span>
                              <input type="text" id="inputSkype" class="form-control" placeholder="mosaicpro" />
                            </div>
                            <div class="separator"></div>

                            <label for="inputgplus">Google</label>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-google-plus-sign"></i></span>
                              <input type="text" id="inputgplus" class="form-control" placeholder="google ID" />
                            </div>
                            <div class="separator"></div>
                          </div>
                        </div>
                      </div>
                      <!-- // Column END -->

                    </div>
                    <!-- // Row END -->

                    <!-- Form actions -->
                    <div class="form-actions" style="margin: 0;">
                      <button type="submit" class="btn btn-icon btn-primary glyphicons circle_ok"><i></i>Save changes</button>
                    </div>
                    <!-- // Form actions END -->

                  </div>
                  <div class="tab-pane" id="privacy-settings">
                    <div class="uniformjs">
                      <label class="checkbox"><input type="checkbox" checked="checked" /> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</label>
                      <label class="checkbox"><input type="checkbox" /> Vivamus et risus vel metus feugiat semper at sed odio.</label>
                      <label class="checkbox"><input type="checkbox" /> Aenean bibendum faucibus tellus, et facilisis justo imperdiet vel.</label>
                      <div class="separator top"></div>

                      <div class="alert alert-primary">
                        <a class="close" data-dismiss="alert">&times;</a>
                        <p>Integer quis tempor mi. Donec venenatis dui in neque fringilla at iaculis libero ullamcorper. In velit sem, sodales id hendrerit ac, fringilla et est. Pellentesque at justo urna, eu pharetra tortor. Aenean aliquam, tellus vel suscipit luctus, risus enim ornare tellus, ac ultrices nisi enim sed magna.</p>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>

          </div>
          <!-- // Tab content END -->

          <!-- Tab content -->
          <div class="tab-pane widget-body-regular" id="projects">

            <div class="well">
              <button type="button" class="btn btn-primary btn-icon glyphicons circle_plus pull-right"><i></i>Add project</button>
              <p class="lead margin-none"><strong>1024</strong> sales this week</p>
              <div class="clearfix"></div>
            </div>

            <table class="table table-striped table-vertical-center table-projects table-bordered">
              <thead>
                <tr>
                  <th colspan="2">Project</th>
                  <th width="120" class="center"></th>
                  <th width="120" class="center"></th>
                  <th width="160" class="center"></th>
                  <th width="120" class="center"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td width="80" class="center"><span class="thumb"><img src="http://2.s3.envato.com/files/50444644/80-avatar.jpg" alt="" /></span></td>
                  <td class="important">Smashing - Premium Admin Template</td>
                  <td class="center stats"><span>Sales today</span><span class="count">153</span></td>
                  <td class="center stats"><span>Sales total</span><span class="count">1,365</span></td>
                  <td class="center stats"><span>Earnings</span><span class="count">&dollar;25,356.00</span></td>
                  <td class="center"><button type="button" class="btn btn-default">Manage</button></td>
                </tr>
                <tr>
                  <td width="80" class="center"><span class="thumb"><img src="http://0.s3.envato.com/files/52347478/admin-avatar-12.jpg" alt="" /></span></td>
                  <td class="important">AdminPlus - Premium Bootstrap Admin Template</td>
                  <td class="center stats"><span>Sales today</span><span class="count">153</span></td>
                  <td class="center stats"><span>Sales total</span><span class="count">1,365</span></td>
                  <td class="center stats"><span>Earnings</span><span class="count">&dollar;25,356.00</span></td>
                  <td class="center"><button type="button" class="btn btn-default">Manage</button></td>
                </tr>
                <tr>
                  <td width="80" class="center"><span class="thumb"><img src="http://2.s3.envato.com/files/50868169/avatar80.jpg" alt="" /></span></td>
                  <td class="important">AIR - Responsive Bootstrap Admin Template</td>
                  <td class="center stats"><span>Sales today</span><span class="count">153</span></td>
                  <td class="center stats"><span>Sales total</span><span class="count">1,365</span></td>
                  <td class="center stats"><span>Earnings</span><span class="count">&dollar;25,356.00</span></td>
                  <td class="center"><button type="button" class="btn btn-default">Manage</button></td>
                </tr>
                <tr>
                  <td width="80" class="center"><span class="thumb"><img src="http://3.s3.envato.com/files/47008628/boot-admin-80_v13.jpg" alt="" /></span></td>
                  <td class="important">BootAdmin - All-In-One Admin Responsive Template</td>
                  <td class="center stats"><span>Sales today</span><span class="count">153</span></td>
                  <td class="center stats"><span>Sales total</span><span class="count">1,365</span></td>
                  <td class="center stats"><span>Earnings</span><span class="count">&dollar;25,356.00</span></td>
                  <td class="center"><button type="button" class="btn btn-default">Manage</button></td>
                </tr>
              </tbody>
            </table>

          </div>
          <!-- // Tab content END -->
        </div>
      </form>
    </div>
  </div>
  <!-- // Widget END -->






</div>
</div> <!-- col-md-9 -->


<!--DETAILS SUMMARY-->

</div>

<script src="<?php echo theme_url();?>/assets/plugins/forms_editors_wysihtml5/js/wysihtml5-0.3.0_rc2.min.js"></script>
<script src="<?php echo theme_url();?>/assets/plugins/forms_elements_bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="<?php echo theme_url();?>/assets/plugins/forms_elements_bootstrap-datepicker/bootstrap-datepicker.init.js"></script>
<script src="<?php echo theme_url();?>/assets/plugins/forms_elements_uniform/js/jquery.uniform.min.js"></script>
<script src="<?php echo theme_url();?>/assets/plugins/forms_elements_uniform/uniform.init.js"></script>
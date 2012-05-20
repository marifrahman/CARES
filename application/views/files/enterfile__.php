<?php $this->load->view('includes/document_head'); ?>

<body><div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->

        <?php $this->load->view('includes/sidebar'); ?>

        <div id="main-content"> <!-- Main Content Section with everything -->

            <noscript> <!-- Show a notification if the user has disabled javascript -->
            <div class="notification error png_bg">
                <div>
                    Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
                    Download From <a href="http://www.exet.tk">exet.tk</a></div>
            </div>
            </noscript>

            <?php //$this->load->view("includes/topbar"); ?>

            <div class="clear"></div> <!-- End .clear -->

            <div class="content-box"><!-- Start Content Box -->

                <div class="content-box-header">

                    <h3>Enter New information</h3>

                    <ul class="content-box-tabs">
                        <li><a href="#tab1" class="default-tab">Information Entry</a></li> <!-- href must be unique and match the id of target div -->
                        <li><a href="#tab2">Activity Entry</a></li>
                    </ul>

                    <div class="clear"></div>

                </div> <!-- End .content-box-header -->

                <div class="content-box-content">

                    <div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->

                        <form action="#" method="post">

                            <fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->

                                <p>
                                    <label>TMR#</label>
                                    <input class="text-input small-input" type="text" id="small-input" name="small-input"  /><!-- <span class="input-notification success png_bg">Successful message</span> <!-- Classes for input-notification: success, error, information, attention -->
                                    <br /><small></small>
                                </p>
                                <p>
                                    <label>GDMS#</label>
                                    <input class="text-input small-input" type="text" id="small-input" name="small-input"  /><!-- <span class="input-notification success png_bg">Successful message</span> <!-- Classes for input-notification: success, error, information, attention -->
                                    <br /><small></small>
                                </p>
                                <p>
                                    <label>RSD</label>
                                    <input class="text-input small-input" type="text" id="small-input" name="small-input"  /><!-- <span class="input-notification success png_bg">Successful message</span> <!-- Classes for input-notification: success, error, information, attention -->
                                    <br /><small></small>
                                </p>
                                <p>
                                    <label>Client</label>
                                    <input class="text-input small-input" type="text" id="small-input" name="small-input"  /><!-- <span class="input-notification success png_bg">Successful message</span> <!-- Classes for input-notification: success, error, information, attention -->
                                    <br /><small></small>
                                </p>
                                <p>
                                    <label>Origin</label>
                                    <input class="text-input small-input" type="text" id="small-input" name="small-input"  /><!-- <span class="input-notification success png_bg">Successful message</span> <!-- Classes for input-notification: success, error, information, attention -->
                                    <br /><small></small>
                                </p>
                                <p>
                                    <label>Destination</label>
                                    <input class="text-input small-input" type="text" id="small-input" name="small-input"  /><!-- <span class="input-notification success png_bg">Successful message</span> <!-- Classes for input-notification: success, error, information, attention -->
                                    <br /><small></small>
                                </p>
                                <p>
                                    <label>Ping status</label>
                                    <input class="text-input small-input" type="text" id="small-input" name="small-input"  /><!-- <span class="input-notification success png_bg">Successful message</span> <!-- Classes for input-notification: success, error, information, attention -->
                                    <br /><small></small>
                                </p>
                                <p>
                                    <label>Distance from origin</label>
                                    <input class="text-input small-input" type="text" id="small-input" name="small-input"  /><!-- <span class="input-notification success png_bg">Successful message</span> <!-- Classes for input-notification: success, error, information, attention -->
                                    <br /><small></small>
                                </p>
                                <p>
                                    <label>RSD Status</label>
                                    <input class="text-input small-input" type="text" id="small-input" name="small-input"  /><!-- <span class="input-notification success png_bg">Successful message</span> <!-- Classes for input-notification: success, error, information, attention -->
                                    <br /><small></small>
                                </p>
                                <p>
                                    <label>Latest snapshot</label>
                                    <input class="text-input small-input" type="text" id="small-input" name="small-input"  /><!-- <span class="input-notification success png_bg">Successful message</span> <!-- Classes for input-notification: success, error, information, attention -->
                                    <br /><small></small>
                                </p>
                                <p>
                                    <label>Lates Followup email</label>
                                    <input class="text-input small-input" type="text" id="small-input" name="small-input"  /><!-- <span class="input-notification success png_bg">Successful message</span> <!-- Classes for input-notification: success, error, information, attention -->
                                    <br /><small></small>
                                </p>
                                <p>
                                    <label>AAAO</label>
                                    <input class="text-input small-input" type="text" id="small-input" name="small-input"  /><!-- <span class="input-notification success png_bg">Successful message</span> <!-- Classes for input-notification: success, error, information, attention -->
                                    <br /><small></small>
                                </p>
                                <p>
                                    <label>ALD</label>
                                    <input class="text-input small-input" type="text" id="small-input" name="small-input"  /><!-- <span class="input-notification success png_bg">Successful message</span> <!-- Classes for input-notification: success, error, information, attention -->
                                    <br /><small></small>
                                </p>
                                <p>
                                    <label>ADD</label>
                                    <input class="text-input small-input" type="text" id="small-input" name="small-input"  /><!-- <span class="input-notification success png_bg">Successful message</span> <!-- Classes for input-notification: success, error, information, attention -->
                                    <br /><small></small>
                                </p>
                                <p>
                                    <label>ESCORT</label>
                                    <input class="text-input small-input" type="text" id="small-input" name="small-input"  /><!-- <span class="input-notification success png_bg">Successful message</span> <!-- Classes for input-notification: success, error, information, attention -->
                                    <br /><small></small>
                                </p>
                                <p>
                                    <label>Mission Units</label>
                                    <input class="text-input small-input" type="text" id="small-input" name="small-input"  /><!-- <span class="input-notification success png_bg">Successful message</span> <!-- Classes for input-notification: success, error, information, attention -->
                                    <br /><small></small>
                                </p>
                                <p>
                                    <label>Previous TMR</label>
                                    <input class="text-input small-input" type="text" id="small-input" name="small-input"  /><!-- <span class="input-notification success png_bg">Successful message</span> <!-- Classes for input-notification: success, error, information, attention -->
                                    <br /><small></small>
                                </p>
                                <p>
                                    <label>Type of truck</label>
                                    <input class="text-input small-input" type="text" id="small-input" name="small-input"  /><!-- <span class="input-notification success png_bg">Successful message</span> <!-- Classes for input-notification: success, error, information, attention -->
                                    <br /><small></small>
                                </p>
                                <p>
                                    <label>Type of cargo</label>
                                    <input class="text-input small-input" type="text" id="small-input" name="small-input"  /><!-- <span class="input-notification success png_bg">Successful message</span> <!-- Classes for input-notification: success, error, information, attention -->
                                    <br /><small></small>
                                </p>
                                <p>
                                    <label>Container #</label>
                                    <input class="text-input small-input" type="text" id="small-input" name="small-input"  /><!-- <span class="input-notification success png_bg">Successful message</span> <!-- Classes for input-notification: success, error, information, attention -->
                                    <br /><small></small>
                                </p>
                                <p>
                                    <label>Mission Status USC</label>
                                    <input class="text-input small-input" type="text" id="small-input" name="small-input"  /><!-- <span class="input-notification success png_bg">Successful message</span> <!-- Classes for input-notification: success, error, information, attention -->
                                    <br /><small></small>
                                </p>
                                <p>
                                    <label>Mission Status USG</label>
                                    <input class="text-input small-input" type="text" id="small-input" name="small-input"  /><!-- <span class="input-notification success png_bg">Successful message</span> <!-- Classes for input-notification: success, error, information, attention -->
                                    <br /><small></small>
                                </p>
                                <p>
                                    <label>Reason of Mission Status</label>
                                    <input class="text-input small-input" type="text" id="small-input" name="small-input"  /><!-- <span class="input-notification success png_bg">Successful message</span> <!-- Classes for input-notification: success, error, information, attention -->
                                    <br /><small></small>
                                </p>
                                <p>
                                    <label>Vendor</label>
                                    <input class="text-input small-input" type="text" id="small-input" name="small-input"  /><!-- <span class="input-notification success png_bg">Successful message</span> <!-- Classes for input-notification: success, error, information, attention -->
                                    <br /><small></small>
                                </p>
                                
                                


                                <p>
                                    <input class="button" type="submit" value="Submit" />
                                </p>

                            </fieldset>

                            <div class="clear"></div><!-- End .clear -->

                        </form>  

                    </div> <!-- End #tab1 -->

                    <div class="tab-content" id="tab2">

                        <p>
                            <label>Previous followup Email </label>
                            <textarea class="text-input textarea wysiwyg " id="textarea" name="textfield" cols="20" rows="15"></textarea>

                        </p>
                         <p>
                            <label>New Email </label>
                            <textarea class="text-input textarea wysiwyg " id="textarea" name="textfield" cols="20" rows="15"></textarea><br/>
                            <button class="button" >Save this post  </button>
                        </p>
                        <p>
                            <label>GDSM Snapshot RSD Attachments </label><br/>
                            <input type="file" />
                                 
                        </p>
                        <p>
                            <label>GDSM on the way Attachments </label><br/>
                            <input type="file" />
                                 
                        </p>
                        <p>
                            <label>GDSM After RLD Attachments </label><br/>
                            <input type="file" />
                                 
                        </p>
                        <p>
                            <label>GDSM Demurrage  Attachments </label><br/>
                            <input type="file" />
                                 
                        </p>


                    </div> <!-- End #tab2 -->        

                </div> <!-- End .content-box-content -->

            </div> <!-- End .content-box -->



            <!-- footer -->
            <?php $this->load->view('includes/footer'); ?>


        </div> <!-- End #main-content -->

    </div>
    <?php $this->load->view('includes/document_close'); ?>
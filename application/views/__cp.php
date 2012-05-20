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

            <?php $this->load->view("includes/topbar"); ?>

            <div class="clear"></div> <!-- End .clear -->

            <div class="content-box"><!-- Start Content Box -->

                <div class="content-box-header">
                    <h3>DataTables test</h3>
                </div>
                <div class="content-box-content">

                    <table id="dataTableTest">

                        <thead>

                            <tr>
                                <th>Local authority</th>
                                <th>2005-06</th>
                                <th>2006-07</th>
                                <th>2007-08</th>
                                <th>2008-09</th>
                                <th>2009-10</th>
                                <th>% change<br>over last year</th>
                                <th>% change<br>since 2005-06</th>
                            </tr>
                        </thead>
                        <tfoot>

                        </tfoot>
                        <tbody>
                            <tr>
                                <th scope="row">Aberdeen City</th>
                                <td>9,750</td>
                                <td>9,850</td>
                                <td>9,945</td>
                                <td>9,945</td>
                                <td>10,080</td>
                                <td>1.4</td>
                                <td>3.4</td>
                            </tr>
                            <tr>
                                <th scope="row">Aberdeenshire</th>
                                <td>10,295</td>
                                <td>10,255</td>
                                <td>10,610</td>
                                <td>10,700</td>
                                <td>10,680</td>
                                <td>-0.2</td>
                                <td>3.7</td>
                            </tr>
                            <tr>
                                <th scope="row">Angus</th>
                                <td>4,945</td>
                                <td>4,625</td>
                                <td>4,365</td>
                                <td>4,445</td>
                                <td>4,675</td>
                                <td>5.2</td>
                                <td>-5.5</td>
                            </tr>
                            <tr>
                                <th scope="row">Argyll &amp; Bute</th>
                                <td>3,350</td>
                                <td>3,470</td>
                                <td>3,360</td>
                                <td>3,335</td>
                                <td>3,440</td>
                                <td>3.1</td>
                                <td>2.7</td>
                            </tr>
                            <tr>
                                <th scope="row">City of Edinburgh</th>
                                <td>19,570</td>
                                <td>19,120</td>
                                <td>18,675</td>
                                <td>18,780</td>
                                <td>19,910</td>
                                <td>6.0</td>
                                <td>1.7</td>
                            </tr>
                            <tr>
                                <th scope="row">Clackmannanshire</th>
                                <td>1,725</td>
                                <td>1,780</td>
                                <td>1,695</td>
                                <td>1,585</td>
                                <td>1,820</td>
                                <td>14.8</td>
                                <td>5.5</td>
                            </tr>
                            <tr>
                                <th scope="row">Dumfries &amp; Galloway</th>
                                <td>4,740</td>
                                <td>4,750</td>
                                <td>4,620</td>
                                <td>4,580</td>
                                <td>4,880</td>
                                <td>6.6</td>
                                <td>3.0</td>
                            </tr>
                            <tr>
                                <th scope="row">Dundee City</th>
                                <td>7,255</td>
                                <td>7,040</td>
                                <td>6,250</td>
                                <td>6,150</td>
                                <td>6,525</td>
                                <td>6.1</td>
                                <td>-10.1</td>
                            </tr>
                            <tr>
                                <th scope="row">East Ayrshire</th>
                                <td>4,510</td>
                                <td>4,675</td>
                                <td>4,380</td>
                                <td>4,500</td>
                                <td>4,570</td>
                                <td>1.6</td>
                                <td>1.3</td>
                            </tr>
                            <tr>
                                <th scope="row">East Dunbartonshire</th>
                                <td>6,560</td>
                                <td>6,555</td>
                                <td>6,065</td>
                                <td>6,030</td>
                                <td>6,145</td>
                                <td>1.9</td>
                                <td>-6.3</td>
                            </tr>
                            <tr>
                                <th scope="row">East Lothian</th>
                                <td>2,985</td>
                                <td>3,080</td>
                                <td>3,075</td>
                                <td>3,145</td>
                                <td>3,295</td>
                                <td>4.8</td>
                                <td>10.4</td>
                            </tr>
                            <tr>
                                <th scope="row">East Renfrewshire</th>
                                <td>5,460</td>
                                <td>5,595</td>
                                <td>5,255</td>
                                <td>5,295</td>
                                <td>5,330</td>
                                <td>0.7</td>
                                <td>-2.4</td>
                            </tr>
                            <tr>
                                <th scope="row">Eilean Siar</th>
                                <td>1,295</td>
                                <td>1,315</td>
                                <td>1,340</td>
                                <td>1,290</td>
                                <td>1,190</td>
                                <td>-7.8</td>
                                <td>-8.1</td>
                            </tr>
                            <tr>
                                <th scope="row">Falkirk</th>
                                <td>4,740</td>
                                <td>5,025</td>
                                <td>4,825</td>
                                <td>4,650</td>
                                <td>4,900</td>
                                <td>5.4</td>
                                <td>3.4</td>
                            </tr>
                            <tr>
                                <th scope="row">Fife</th>
                                <td>14,650</td>
                                <td>14,220</td>
                                <td>13,840</td>
                                <td>13,455</td>
                                <td>13,855</td>
                                <td>3.0</td>
                                <td>-5.4</td>
                            </tr>
                            <tr>
                                <th scope="row">Glasgow City</th>
                                <td>25,155</td>
                                <td>26,160</td>
                                <td>24,900</td>
                                <td>26,340</td>
                                <td>26,840</td>
                                <td>1.9</td>
                                <td>6.7</td>
                            </tr>
                            <tr>
                                <th scope="row">Highland</th>
                                <td>8,110</td>
                                <td>8,520</td>
                                <td>8,465</td>
                                <td>8,410</td>
                                <td>8,605</td>
                                <td>2.3</td>
                                <td>6.1</td>
                            </tr>
                            <tr>
                                <th scope="row">Inverclyde</th>
                                <td>3,645</td>
                                <td>3,800</td>
                                <td>3,525</td>
                                <td>3,535</td>
                                <td>3,635</td>
                                <td>2.8</td>
                                <td>-0.3</td>
                            </tr>
                            <tr>
                                <th scope="row">Midlothian</th>
                                <td>2,620</td>
                                <td>2,500</td>
                                <td>2,380</td>
                                <td>2,350</td>
                                <td>2,580</td>
                                <td>9.8</td>
                                <td>-1.5</td>
                            </tr>
                            <tr>
                                <th scope="row">Moray</th>
                                <td>3,610</td>
                                <td>3,595</td>
                                <td>3,540</td>
                                <td>3,545</td>
                                <td>3,490</td>
                                <td>-1.6</td>
                                <td>-3.3</td>
                            </tr>
                            <tr>
                                <th scope="row">North Ayrshire</th>
                                <td>5,590</td>
                                <td>5,450</td>
                                <td>5,005</td>
                                <td>5,155</td>
                                <td>5,205</td>
                                <td>1.0</td>
                                <td>-6.9</td>
                            </tr>
                            <tr>
                                <th scope="row">North Lanarkshire</th>
                                <td>12,155</td>
                                <td>12,610</td>
                                <td>11,810</td>
                                <td>11,925</td>
                                <td>12,015</td>
                                <td>0.8</td>
                                <td>-1.2</td>
                            </tr>
                            <tr>
                                <th scope="row">Orkney Islands</th>
                                <td>915</td>
                                <td>1,000</td>
                                <td>940</td>
                                <td>930</td>
                                <td>945</td>
                                <td>1.6</td>
                                <td>3.3</td>
                            </tr>
                            <tr>
                                <th scope="row">Perth &amp; Kinross</th>
                                <td>5,655</td>
                                <td>5,375</td>
                                <td>5,255</td>
                                <td>5,305</td>
                                <td>5,415</td>
                                <td>2.1</td>
                                <td>-4.2</td>
                            </tr>
                            <tr>
                                <th scope="row">Renfrewshire</th>
                                <td>8,330</td>
                                <td>8,465</td>
                                <td>7,950</td>
                                <td>7,935</td>
                                <td>8,015</td>
                                <td>1.0</td>
                                <td>-3.8</td>
                            </tr>
                            <tr>
                                <th scope="row">Scottish Borders</th>
                                <td>3,505</td>
                                <td>3,670</td>
                                <td>3,405</td>
                                <td>3,350</td>
                                <td>3,500</td>
                                <td>4.5</td>
                                <td>-0.1</td>
                            </tr>
                            <tr>
                                <th scope="row">Shetland Islands</th>
                                <td>1,085</td>
                                <td>1,020</td>
                                <td>1,115</td>
                                <td>1,080</td>
                                <td>1,010</td>
                                <td>-6.5</td>
                                <td>-6.9</td>
                            </tr>
                            <tr>
                                <th scope="row">South Ayrshire</th>
                                <td>5,090</td>
                                <td>5,025</td>
                                <td>4,630</td>
                                <td>4,600</td>
                                <td>4,710</td>
                                <td>2.4</td>
                                <td>-7.5</td>
                            </tr>
                            <tr>
                                <th scope="row">South Lanarkshire</th>
                                <td>12,725</td>
                                <td>13,310</td>
                                <td>12,570</td>
                                <td>13,005</td>
                                <td>13,310</td>
                                <td>2.3</td>
                                <td>4.6</td>
                            </tr>
                            <tr>
                                <th scope="row">Stirling</th>
                                <td>3,710</td>
                                <td>3,690</td>
                                <td>3,600</td>
                                <td>3,360</td>
                                <td>3,575</td>
                                <td>6.4</td>
                                <td>-3.6</td>
                            </tr>
                            <tr>
                                <th scope="row">West Dunbartonshire</th>
                                <td>3,700</td>
                                <td>3,700</td>
                                <td>3,480</td>
                                <td>3,450</td>
                                <td>3,455</td>
                                <td>0.1</td>
                                <td>-6.6</td>
                            </tr>
                            <tr>
                                <th scope="row">West Lothian</th>
                                <td>5,490</td>
                                <td>5,625</td>
                                <td>5,510</td>
                                <td>5,375</td>
                                <td>5,610</td>
                                <td>4.4</td>
                                <td>2.2</td>
                            </tr>
                        </tbody>

                    </table>
                </div> 

            </div>





            <div class="content-box"><!-- Start Content Box -->

                <div class="content-box-header">

                    <h3>Content box</h3>

                    <ul class="content-box-tabs">
                        <li><a href="#tab1" class="default-tab">Table</a></li> <!-- href must be unique and match the id of target div -->
                        <li><a href="#tab2">Forms</a></li>
                    </ul>

                    <div class="clear"></div>

                </div> <!-- End .content-box-header -->

                <div class="content-box-content">

                    <div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->

                        <div class="notification attention png_bg">
                            <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
                            <div>
                                This is a Content Box. You can put whatever you want in it. By the way, you can close this notification with the top-right cross.
                            </div>
                        </div>

                        <table>

                            <thead>
                                <tr>
                                    <th><input class="check-all" type="checkbox" /></th>
                                    <th>Column 1</th>
                                    <th>Column 2</th>
                                    <th>Column 3</th>
                                    <th>Column 4</th>
                                    <th>Column 5</th>
                                </tr>

                            </thead>

                            <tfoot>
                                <tr>
                                    <td colspan="6">
                                        <div class="bulk-actions align-left">
                                            <select name="dropdown">
                                                <option value="option1">Choose an action...</option>
                                                <option value="option2">Edit</option>
                                                <option value="option3">Delete</option>
                                            </select>
                                            <a class="button" href="#">Apply to selected</a>
                                        </div>

                                        <div class="pagination">
                                            <a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a>
                                            <a href="#" class="number" title="1">1</a>
                                            <a href="#" class="number" title="2">2</a>
                                            <a href="#" class="number current" title="3">3</a>
                                            <a href="#" class="number" title="4">4</a>
                                            <a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a>
                                        </div> <!-- End .pagination -->
                                        <div class="clear"></div>
                                    </td>
                                </tr>
                            </tfoot>

                            <tbody>
                                <tr>
                                    <td><input type="checkbox" /></td>
                                    <td>Lorem ipsum dolor</td>
                                    <td><a href="#" title="title">Sit amet</a></td>
                                    <td>Consectetur adipiscing</td>
                                    <td>Donec tortor diam</td>
                                    <td>
                                        <!-- Icons -->
                                        <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
                                        <a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
                                        <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td><input type="checkbox" /></td>
                                    <td>Lorem ipsum dolor</td>
                                    <td><a href="#" title="title">Sit amet</a></td>
                                    <td>Consectetur adipiscing</td>
                                    <td>Donec tortor diam</td>
                                    <td>
                                        <!-- Icons -->
                                        <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
                                        <a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
                                        <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td><input type="checkbox" /></td>
                                    <td>Lorem ipsum dolor</td>
                                    <td><a href="#" title="title">Sit amet</a></td>
                                    <td>Consectetur adipiscing</td>
                                    <td>Donec tortor diam</td>
                                    <td>
                                        <!-- Icons -->
                                        <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
                                        <a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
                                        <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td><input type="checkbox" /></td>
                                    <td>Lorem ipsum dolor</td>
                                    <td><a href="#" title="title">Sit amet</a></td>
                                    <td>Consectetur adipiscing</td>
                                    <td>Donec tortor diam</td>
                                    <td>
                                        <!-- Icons -->
                                        <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
                                        <a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
                                        <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td><input type="checkbox" /></td>
                                    <td>Lorem ipsum dolor</td>
                                    <td><a href="#" title="title">Sit amet</a></td>
                                    <td>Consectetur adipiscing</td>
                                    <td>Donec tortor diam</td>
                                    <td>
                                        <!-- Icons -->
                                        <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
                                        <a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
                                        <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td><input type="checkbox" /></td>
                                    <td>Lorem ipsum dolor</td>
                                    <td><a href="#" title="title">Sit amet</a></td>
                                    <td>Consectetur adipiscing</td>
                                    <td>Donec tortor diam</td>
                                    <td>
                                        <!-- Icons -->
                                        <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
                                        <a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
                                        <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td><input type="checkbox" /></td>
                                    <td>Lorem ipsum dolor</td>
                                    <td><a href="#" title="title">Sit amet</a></td>
                                    <td>Consectetur adipiscing</td>
                                    <td>Donec tortor diam</td>
                                    <td>
                                        <!-- Icons -->
                                        <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
                                        <a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
                                        <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td><input type="checkbox" /></td>
                                    <td>Lorem ipsum dolor</td>
                                    <td><a href="#" title="title">Sit amet</a></td>
                                    <td>Consectetur adipiscing</td>
                                    <td>Donec tortor diam</td>
                                    <td>
                                        <!-- Icons -->
                                        <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
                                        <a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
                                        <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
                                    </td>
                                </tr>
                            </tbody>

                        </table>

                    </div> <!-- End #tab1 -->

                    <div class="tab-content" id="tab2">

                        <form action="#" method="post">

                            <fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->

                                <p>
                                    <label>Small form input</label>
                                    <input class="text-input small-input" type="text" id="small-input" name="small-input"  /> <span class="input-notification success png_bg">Successful message</span> <!-- Classes for input-notification: success, error, information, attention -->
                                    <br /><small>A small description of the field</small>
                                </p>

                                <p>
                                    <label>Medium form input</label>
                                    <input class="text-input medium-input datepicker" type="text" id="medium-input" name="medium-input" /> <span class="input-notification error png_bg">Error message</span>
                                </p>

                                <p>
                                    <label>Large form input</label>
                                    <input class="text-input large-input" type="text" id="large-input" name="large-input" />
                                </p>

                                <p>
                                    <label>Checkboxes</label>
                                    <input type="checkbox" name="checkbox1" /> This is a checkbox <input type="checkbox" name="checkbox2" /> And this is another checkbox
                                </p>

                                <p>
                                    <label>Radio buttons</label>
                                    <input type="radio" name="radio1" /> This is a radio button<br />
                                    <input type="radio" name="radio2" /> This is another radio button
                                </p>

                                <p>
                                    <label>This is a drop down list</label>              
                                    <select name="dropdown" class="small-input">
                                        <option value="option1">Option 1</option>
                                        <option value="option2">Option 2</option>
                                        <option value="option3">Option 3</option>
                                        <option value="option4">Option 4</option>
                                    </select> 
                                </p>

                                <p>
                                    <label>Textarea with WYSIWYG</label>
                                    <textarea class="text-input textarea wysiwyg" id="textarea" name="textfield" cols="79" rows="15"></textarea>
                                </p>

                                <p>
                                    <input class="button" type="submit" value="Submit" />
                                </p>

                            </fieldset>

                            <div class="clear"></div><!-- End .clear -->

                        </form>

                    </div> <!-- End #tab2 -->        

                </div> <!-- End .content-box-content -->

            </div> <!-- End .content-box -->

            <div class="content-box column-left">

                <div class="content-box-header">

                    <h3>Content box left</h3>

                </div> <!-- End .content-box-header -->

                <div class="content-box-content">

                    <div class="tab-content default-tab">

                        <h4>Maecenas dignissim</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in porta lectus. Maecenas dignissim enim quis ipsum mattis aliquet. Maecenas id velit et elit gravida bibendum. Duis nec rutrum lorem. Donec egestas metus a risus euismod ultricies. Maecenas lacinia orci at neque commodo commodo.
                        </p>

                    </div> <!-- End #tab3 -->        

                </div> <!-- End .content-box-content -->

            </div> <!-- End .content-box -->

            <div class="content-box column-right closed-box">

                <div class="content-box-header"> <!-- Add the class "closed" to the Content box header to have it closed by default -->

                    <h3>Content box right</h3>

                </div> <!-- End .content-box-header -->

                <div class="content-box-content">

                    <div class="tab-content default-tab">

                        <h4>This box is closed by default</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in porta lectus. Maecenas dignissim enim quis ipsum mattis aliquet. Maecenas id velit et elit gravida bibendum. Duis nec rutrum lorem. Donec egestas metus a risus euismod ultricies. Maecenas lacinia orci at neque commodo commodo.
                        </p>

                    </div> <!-- End #tab3 -->        

                </div> <!-- End .content-box-content -->

            </div> <!-- End .content-box -->
            <div class="clear"></div>


            <!-- Start Notifications -->

            <div class="notification attention png_bg">
                <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
                <div>
                    Attention notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero. 
                </div>
            </div>

            <div class="notification information png_bg">
                <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
                <div>
                    Information notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
                </div>
            </div>

            <div class="notification success png_bg">
                <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
                <div>
                    Success notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
                </div>
            </div>

            <div class="notification error png_bg">
                <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
                <div>
                    Error notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
                </div>
            </div>

            <!-- End Notifications -->

            <!-- footer -->
            <?php $this->load->view('includes/footer'); ?>


        </div> <!-- End #main-content -->

    </div>

    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
            $('#dataTableTest').dataTable( {
                "sPaginationType": "full_numbers"
            } );
        } );
    </script>

    <?php $this->load->view('includes/document_close'); ?>
<?php
    $body_class = 'elements';
    $page_title = 'Elements';
    $location = 'elements';
    include('_start.php');
?>

        <div id="content_wrapper">
        
            <div id="content_pri">
            
                <h1>Header One</h1>
                
                <p>Lorem ipsum <em>emphasised text</em> dolor <sup>sit</sup> amet, <strong>strong text</strong> consectetur adipisicing elit, <abbr title="">abbreviated text</abbr> sed do eiusmod tempor  incididunt ut labore <sub>et</sub> dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation <a href="/">link text</a> ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute <del>deleted text</del> irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat <code>code text</code> cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                
                <blockquote>
                    <p>Blockquote. Velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                    <cite><a href="/">Cite author with link text</a>, 2008</cite>
                </blockquote>
                
                <h2>Header 2</h2>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                
                <ol>
                    <li>Ordered list</li>
                    <li>Item 2 Consectetur adipisicing elit</li>
                    <li>Item 3 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</li>
                    <li>Item 4</li>
                    <li>Item 5</li>
                </ol>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                
                <form action="">
                
                    <h4>Form heading</h4>
                    
                    <div class="message success">
                        <p>Sweet success!</p>
                    </div>
                    
                    <fieldset>
                    
                        <div>
                            <label for="contact_name">Name <em>*</em></label>
                            <input type="text" id="contact_name" size="30" />
                        </div>
                        
                        <div class="error">
                            <label for="contact_email">Email <em>*</em></label>
                            <input type="text" id="contact_email" size="30" />
                            <label class="error_message">This field is required. Fill it in now.</label>
                        </div>
                        
                        <div>
                            <label for="contact_url">URL</label>
                            <input type="text" id="contact_url" size="30" value="http://" />
                        </div>
                        
                        <div class="error">
                            <label for="contact_reasons">Reasons for contact <em>*</em></label>
                            <ul>
                                <li>
                                    <label for="contact_reason_1">I want your babies</label>
                                    <input type="checkbox" id="contact_reason_1" />
                                </li>
                                <li>
                                    <label for="contact_reason_2">Can I use your CSS as a Wordpress theme?</label>
                                    <input type="checkbox" id="contact_reason_2" />
                                </li>
                                <li>
                                    <label for="contact_reason_3">Where do you shop?</label>
                                    <input type="checkbox" id="contact_reason_3" />
                                </li>
                            </ul>
                            <label class="error_message">This field is required. Fill it in now.</label>
                        </div>
                        
                        <div>
                            <label for="contact_message">Message <em>*</em></label>
                            <textarea id="contact_message" cols="30" rows="7"></textarea>
                        </div>
                        
                        <div class="multiselect">
                            <label for="submit_checkbox">Remember password, remember details, agree to terms and conditions <em>*</em></label>
                            <input type="checkbox" id="submit_checkbox" />
                        </div>
                    
                    </fieldset>
                    
                    <div class="submit">
                        <input type="submit" value="Send form" />
                    </div>
                
                </form>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                
                <ul>
                    <li>Unordered list</li>
                    <li>Consectetur adipisicing elit</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</li>
                    <li>Item</li>
                    <li>Item</li>
                    <li>Item</li>
                </ul>
                
                <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                <pre><code>pre and code pair {
            display:block;
            line-height:1.833em;
            border-top:0.083em solid #200;
        }</code></pre>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in.</p>
                
                <h4>Header 4</h4>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                
                <dl>
                    <dt>Definition list</dt>
                    <dd>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna 
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
                        commodo consequat.</dd>
                    <dt>Lorem ipsum dolor sit amet</dt>
                    <dd>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna 
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
                        commodo consequat.</dd>
                    <dt>Lorem ipsum dolor sit amet</dt>
                    <dd>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna 
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
                        commodo consequat.</dd>
                    <dt>Lorem ipsum dolor sit amet</dt>
                    <dd>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna 
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
                        commodo consequat.</dd>
                </dl>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                
                <table summary="The summary of the table" cellspacing="0">
                    <caption>Table caption – lorem ipsum dolor sit amet, consectetur adipisicing elit.</caption>
                    <thead>
                        <tr>
                            <th>Column 1</th>
                            <th>Another column</th>
                            <th>The final column</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Quantity</th>
                            <td>1</td>
                            <td>Bicycle</td>
                        </tr>
                        <tr>
                            <th>Quantity</th>
                            <td>2</td>
                            <td>Car</td>
                        </tr>
                        <tr>
                            <th>Quantity</th>
                            <td>3</td>
                            <td>Bus</td>
                        </tr>
                        <tr>
                            <th>Quantity</th>
                            <td>4</td>
                            <td>By foot</td>
                        </tr>
                        <tr>
                            <th>Quantity</th>
                            <td>5</td>
                            <td>Train</td>
                        </tr>
                        <tr>
                            <th>Quantity</th>
                            <td>6</td>
                            <td>Hovercract</td>
                        </tr>
                    </tbody>
                </table>
            
            </div> <!-- // #content_pri -->
            
            <div id="content_sec">
            
                
            
            </div> <!-- // #content_sec -->
        
        </div> <!-- // #content_wrapper -->

<?php include('_end.php') ?>
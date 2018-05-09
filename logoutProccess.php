<?php
/**
 * Created by PhpStorm.
 * User: w16024005
 * Date: 09/05/2018
 * Time: 00:22
 */
include("functions.php");

    unset($_SESSION['username']);
                echo "
                        <div class=\"modal-content\" id='chk'>
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title text-center\" id=\"exampleModalLongTitle\">Login in Your Account</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\" >
                                <!-- Text input-->
                                <form>
                                    <div class=\"form-group\">
                                        <p>You have been logged out</p>
                                        <div class=\"col\">
                                            <input id=\"userinput\" name=\"textinput\" type=\"text\" placeholder=\"Username\"
                                                   class=\"form-control input-md\" value=''>
                        
                                        </div>
                                    </div>
                        
                                    <!-- Password input-->
                                    <div class=\"form-group\">
                                        <div class=\"col\">
                                            <input id=\"passwordinput\" name=\"passwordinput\" type=\"password\" placeholder=\"Password\"
                                                   class=\"form-control input-md\" value=''>
                                        </div>
                                    </div>
                                </form>
                            
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                                <button type=\"button\" name='loginBtn' class=\"btn btn-primary\" onclick=\"login()\">Login</button>
                            </div>
                        </div>
                    </div>";


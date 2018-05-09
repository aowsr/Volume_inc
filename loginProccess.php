<?php
include("functions.php");


    $username = filter_has_var(INPUT_POST, 'username') ? $_POST['username'] : null;
    $username = trim($username);
    $password = filter_has_var(INPUT_POST, 'password') ? $_POST['password'] : null;
    $password = trim($password);


    if (empty($username || empty($password))) {
        header('Location: http://unn-w16024005.newnumyspace.co.uk/VOL/index.php');
    }
    else {
        unset($_SESSION['username']);
        unset($_SESSION['logged-in']);

    }

    $dbConn = getConnection();

    $sqlquery = "SELECT passwordHash FROM users
                      WHERE username = :username";
    $result   = $dbConn->prepare($sqlquery);
    $result->execute(array(':username' => $username));
    $recordObj = $result->fetchObject();

    if ($recordObj) {
        if (password_verify($password, $recordObj->passwordHash)) {
            echo " 
                    <div class=\"modal-content\" id='chk'>
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title text-center\" id=\"exampleModalLongTitle\"></h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\" >
                                <h1 class='text-center'>Welcome back!</h1>
                    
                    <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                    <button type=\"button\" name='logoutBtn' class=\"btn btn-warning\" onclick=\"logout()\">Logout</button>";

            header('http://unn-w16024005.newnumyspace.co.uk/VOL/adminPage.php');
            $_SESSION['logged-in'] = true;
            $_SESSION['username']  = $username;
        }
        else {
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
                                        <p>The username or password were incorrect</p>
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


        }
    }
    else {
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
                                        <p>The username or password were incorrect</p>
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

    }

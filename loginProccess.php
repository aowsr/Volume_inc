<?php
include("functions.php");
if (isset($_SESSION['']) && $_SESSION['']) {


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
                    <h1>Welcome back!</h1>
                    </div>
                    <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                    <button type=\"button\"  class=\"btn btn-primary\" onclick=\"logout()\">Logout</button>";

            header('http://unn-w16024005.newnumyspace.co.uk/VOL/adminPage.php');
            $_SESSION['logged-in'] = true;
            $_SESSION['username']  = $username;
        }
        else {
            echo "the username or password were incorrect";


        }
    }
    else {
        echo "the username or password were incorrect";

    }
}
else {
    echo "
<!-- Text input-->
        <div class=\"form-group\">
        
        <div class=\"col\">
        <input id=\"userinput\" name=\"textinput\" type=\"text\" placeholder=\"Username\" class=\"form-control input-md\" value=''>
        
        </div>
        </div>
        
        <!-- Password input-->
        <div class=\"form-group\">
        <div class=\"col\">
        <input id=\"passwordinput\" name=\"passwordinput\" type=\"password\" placeholder=\"Password\" class=\"form-control input-md\" value=''>
        
        </div>
        </div>
        </form>
        </div>
        <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
        <button type=\"button\" id='loginBtn' class=\"btn btn-primary\" onclick=\"login()\">Login</button>";
}
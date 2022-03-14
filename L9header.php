<header>
    <p class="title">First National Web Page</p>
    <nav>
        <button onclick="location.href=''">Home</button>
        <button onclick="location.reload()">Refresh</button>
        <button onclick="loginBox()">Login</button>
    </nav>
    <div id="loginBox">
        <button id="closeLogin" onclick="closeLogin()">x</button>
        <form action="" method="get">
            <div class="inputline"><label for="name">Username: </label><input type="text" name="name" id="name"></div>
            <div class="inputline"><label for="password">Password: </label><input type="text" name="password" id="password"></div>
            <div class="center"><input type="submit" value="login" id="loginSubmit"></div>
        </form>
    </div>
</header>
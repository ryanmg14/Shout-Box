<html>
  <head>
    <meta charset="utf-8" />
    <title> Shout It </title>
    <link rel='stylesheet' href='css/style.css' type='text/css' />
  </head>

  <body>
    <div id='container'>
      <header>
        <h1>SHOUT IT! Shout Box</h1>
      </header>
      <div id='shouts'>
        <ul>
          <li class='shout'><span>10:15pm - </span>Brad: Whats up</li>
          <li class='shout'><span>10:15pm - </span>Brad: Whats up</li>
          <li class='shout'><span>10:15pm - </span>Brad: Whats up</li>
          <li class='shout'><span>10:15pm - </span>Brad: Whats up</li>
          <li class='shout'><span>10:15pm - </span>Brad: Whats up</li>
        </ul>
      </div>
      <div id='input'>
        <form method='post' action='process.php'>
          <input type='text' name='user' placeholder='Enter your name' />
          <input type='text' name='measage'placeholder='Enter a message'/>
          <br />
          <input class='shout-btn' type='submit' name='submit' value='Shout it out' />
        </form>
      </div>
    </div>
  </body>

</html>

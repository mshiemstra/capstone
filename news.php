<!DOCTYPE html>
<html>
  <head>
    
    <?php include 'includes/head.php'; ?>

  </head>
  <body>
    <section class="topbar">
      <div class="search-container">
        <form action="/action_page.php">
          <input type="text" placeholder="Search.." name="search">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
     </section>
    <header class="header">
      <h1>
        <a href="index.php"><img id="logo" src="images/logo.png"></a>
      </h1>
      <?php include "includes/navbar.php" ?>
    </header>
    <main>
      <iframe width="900" height="1600" src="https://rss.app/embed/v1/wall/wz9J5br3iTaGPfNy" frameborder="0"></iframe>
    </main>
  </body>
</html>
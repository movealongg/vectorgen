<?php get_header(); ?>

<?php
/*
  echo bloginfo('name') . "<br />";;
  echo bloginfo('description') . "<br />";
  echo bloginfo('url') . "<br />";
  echo bloginfo('admin_email') . "<br />";
  echo bloginfo('version') . "<br />";
*/
?>

<!-- <a href="<?php //echo bloginfo('url'); ?>"><?php //echo bloginfo('name'); ?></a> -->
<div class="container">
  <!-- Headings -->
  <h1>Heading 1</h1>
  <h2>Heading 2</h2>
  <h3>Heading 3</h3>
  <h4>Heading 4</h4>
  <h5>Heading 5</h5>
  <h6>Heading 6</h6>

  <!-- Floats -->
  <h2 class="u-pull-left">Left</h2>
  <h2 class="u-pull-right">Right</h2>
  <div class="u-cf"></div>

  <!-- Buttons -->
  <button>Button</button>
  <input type="submit" value="Submit" >
  <input type="button" value="Submit" >
  <a href="" class="button">Link</a>

  <br />
  <button class="u-full-width button-primary">Full Width Button</button>

  <!-- Lists -->
  <ul>
    <li>Home</li>
    <li>About</li>
    <li>Services</li>
  </ul>

  <!-- Tables -->
  <table class="u-full-width">
    <thead>
      <tr>
        <th>Sports</th>
        <th>City</th>
        <th>Mascot</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>MLB</td>
        <td>Chicago</td>
        <td>Cubs</td>
      </tr>

      <tr>
        <td>NBA</td>
        <td>Chicago</td>
        <td>Bulls</td>
      </tr>

    </tbody>
  </table>

  <!-- Form -->
  <form>
    <div>
      <label>Name</label>
      <input class="u-full-width" type="text" placeholder="Enter name">
    </div>
    <div>
      <label>Membership</label>
      <select class="u-full-width">
      <option value="1">Membership 1</option>
      <option value="2">Membership 2</option>
      <option value="3">Membership 3</option>
    </select>
    </div>
    <div>
      <label>Message</label>
      <textarea class="u-full-width" placeholder="Enter message"></textarea>
    </div>
    <div>
      <label class="">
        <input type="checkbox">
        <span class="label-body">Subscribe to email</span>
    </label>
    </div>
    <input class="button-primary" type="submit" value="Submit">
  </form>

  <!-- Grid -->
  <div class="row">
    <div class="six columns">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <div class="six columns">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>

  <div class="row">
    <div class="four columns">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <div class="four columns">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <div class="four columns">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>

  <div class="row">
    <div class="one-third column">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <div class="two-thirds column">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>

  <div class="row">
    <div class="one-half column">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <div class="one-half column">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>






</div> <!-- Closes container -->








<?php get_footer(); ?>

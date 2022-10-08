<?php
declare(strict_types=1) ;
//creates an item in the menu. Used in nav_items.php
function navItem(string $pageLink, string $pageName) :string {

  $classe = 'nav-link';
  if ($_SERVER['SCRIPT_NAME'] === $pageLink) {
    $classe .= ' active" aria-current="page';
  }

  return '<li class="nav-item">
            <a class="'. $classe .'" href="'. $pageLink .'">'. $pageName .'</a>
          </li>';
}

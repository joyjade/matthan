<!DOCTYPE html>
<html lang="en">

<head>
	<title><?= $site->title()?> | <?= $page->title() ?></title>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🌏</text></svg>">

	
  <?= css(['assets/css/global.css', 'assets/css/lightbox.css', 'assets/type/fonts.css', 'assets/css/mobile.css', '@auto',]) ?>
</head>


<body class="<?= $page->template() ?>">
  <div class="header">
    <div class="title">
      <a href="<?= $site->url() ?>"><?= $site->title()->lower() ?></a>
    </div>
    <nav>
      <ul>
        <?php 
          snippet('nav_el', ['items' => $site->find("info")->children()->listed()]); 
          snippet('nav_el', ['items' => $site->children()->listed()->filterBy('folder', 'art')]);
  
          if ($site->find('notes')->isListed()):
            snippet('nav_el', ['items' => $site->children()->listed()->filterBy('template', 'blog')]);
          endif;
        
          snippet('nav_el', ['items' => $site->children()->listed()->filterBy('template', 'tattoos')]); ?>
      </ul>
    </nav>
</div>


<h2>Suche</h2>
<p>
  <form method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
    <input type="submit" id="search_submit" value="Suchen" />
  </form>
</p>

<h2>Über dieses FirstTemplateTutorial</h2>

<p class="mini-about">
  Hallo, das ist mein erstes Wordpress Template-Tutorial, dass ich mit Hilfe des folgenden Handbuchs versuche: <a href="http://wordpress.lernenhoch2.de/handbuch/">Wordpress Template Tutorial</a>
</p>

<h2>Kategorien</h2>
<ul>
  <?php wp_list_categories('orderby=name&order=ASC&title_li='); ?>
</ul>

<h2>Archiv</h2>
<ul>
  <?php wp_get_archives('type=monthly'); ?>
</ul>

<h2>Seiten</h2>
<ul>
   <?php wp_list_pages(); ?>
</ul>

<h2>Blogroll</h2>
<ul>
  <?php get_links(-1, '<li>', '</li>', '', FALSE, 'name', FALSE, FALSE, -1, FALSE); ?>
</ul>

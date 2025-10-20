<?php

return function($page) {

// fetch the basic set of pages
$entries = $page->children()->listed()->flip();

// fetch all tags
$tags = $entries->pluck('tags', ',', true);

// add the tag filter
if($tag = param('tag')) {
  $entries = $entries->filterBy('tags', $tag, ',');
}

// apply pagination
$entries   = $entries->paginate(10);
$pagination = $entries->pagination();

return compact('entries', 'tags', 'tag', 'pagination');

};
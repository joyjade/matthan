<?php

return function($page) {

// fetch the basic set of pages
$entries = $page->children()->listed();

// fetch all tags
$tags = $entries->pluck('tags', ',', true);

// add the tag filter
if($tag = param('tag')) {
  $entries = $entries->filterBy('tags', $tag, ',');
}

// apply pagination
$entries   = $entries->paginate(20);
$pagination = $entries->pagination();

return compact('entries', 'tags', 'tag', 'pagination');

};
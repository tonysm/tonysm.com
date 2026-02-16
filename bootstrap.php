<?php

use Tempest\Highlight\Highlighter;

/** @var $container \Illuminate\Container\Container */
/** @var $events \TightenCo\Jigsaw\Events\EventBus */

$highlighter = new Highlighter();

$container['markdownParser']->code_block_content_func = function ($code, $language) use ($highlighter) {
  $replacements = [
    "<{{'?php'}}" => '<?php',
    "{{'@'}}" => '@',
    '@{{' => '{{',
    '@{!!' => '{!!',
  ];

  // Undo Jigsaw's Blade escaping so Tempest highlights the real code.
  $code = strtr($code, $replacements);

  $highlighted = $highlighter->parse($code, $language);

  // Re-escape for Blade so it doesn't interpret the highlighted output.
  return strtr($highlighted, array_flip($replacements));
};

<?php

return [
    'auto_escape' => true,
    'extension'   => 'liquid',
    'filters'     => [
        'Liquid\Filters\Arr',
        'Liquid\Filters\Date',
        'Liquid\Filters\Def',
        'Liquid\Filters\Escape',
        'Liquid\Filters\Math',
        'Liquid\Filters\Multy',
        'Liquid\Filters\Str',
    ],
    'tags'        => [
        'assign'    => 'Liquid\Tag\TagAssign',
        'block'     => 'Liquid\Tag\TagBlock',
        'break'     => 'Liquid\Tag\TagBreak',
        'capture'   => 'Liquid\Tag\TagCapture',
        'case'      => 'Liquid\Tag\TagCase',
        'comment'   => 'Liquid\Tag\TagComment',
        'continue'  => 'Liquid\Tag\TagContinue',
        'cycle'     => 'Liquid\Tag\TagCycle',
        'decrement' => 'Liquid\Tag\TagDecrement',
        'extends'   => 'Liquid\Tag\TagExtends',
        'for'       => 'Liquid\Tag\TagFor',
        'if'        => 'Liquid\Tag\TagIf',
        'ifchanged' => 'Liquid\Tag\TagIfchanged',
        'include'   => 'Liquid\Tag\TagInclude',
        'increment' => 'Liquid\Tag\TagIncrement',
        'layout'    => 'Liquid\Tag\TagLayout',
        'paginate'  => 'Liquid\Tag\TagPaginate',
        'raw'       => 'Liquid\Tag\TagRaw',
        'tablerow'  => 'Liquid\Tag\TagTablerow',
        'unless'    => 'Liquid\Tag\TagUnless',
    ],

];

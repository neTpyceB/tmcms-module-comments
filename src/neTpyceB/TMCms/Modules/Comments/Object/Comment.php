<?php
namespace neTpyceB\TMCms\Modules\Comments\Object;

use neTpyceB\TMCms\Modules\CommonObject;

/**
 * @method getText() string
 */
class Comment extends CommonObject {
    protected $db_table = 'm_comments';

    protected $client_id = 0;
    protected $item_type = '';
    protected $item_id = 0;
    protected $text = '';
}
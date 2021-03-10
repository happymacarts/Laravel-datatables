<?php
namespace SingleQuote\DataTables\Fields;

use SingleQuote\DataTables\Controllers\Field;

/**
 * Description of Label
 *
 * @author Wim Pruiksma <wim.pruiksma@nugtr.nl>
 */
class Label extends Field
{
    /**
     * The date view
     *
     * @var string
     */
    protected $view = "label";

    /**
     * Init the fields class
     *
     * @param string $column
     * @return $this
     */
    public static function make(string $column)
    {
        $class = new Label;
        $class->column = $column;
        return $class;
    }
}

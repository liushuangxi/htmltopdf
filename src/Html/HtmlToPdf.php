<?php
namespace Liushuangxi\Html;

use Liushuangxi\Html\Tool;

/**
 * Class HtmlToPdf
 * @package Html
 */
class HtmlToPdf
{
    /**
     * @param $list
     * @param $destination
     * @param string $options
     * @return string
     */
    public static function generate($list, $destination, $options = '')
    {
        //脚本文件
        $scriptPath = dirname(__DIR__) . "/Html/Tools/wkhtmltopdf";

        //检查file/url
        foreach ($list as $index => $file) {
            if (!Tool::checkFile($file) && !Tool::checkUrl($file)) {
                unset($list[$index]);
            }
        }

        if (empty($list)) {
            return '';
        }

        //文件列表
        $list = @implode(' ', array_map(function ($url) {
            return "'$url'";
        }, $list));

        return Tool::generateFile($scriptPath, $list, $destination, $options);
    }
}
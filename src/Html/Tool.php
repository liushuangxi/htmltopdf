<?php
namespace Html;

/**
 * Class Tool
 * @package Html
 */
class Tool
{
    /**
     * 生成文件
     *
     * @param $scriptPath 脚本路径
     * @param $list file/url列表
     * @param $destination 　存放路径
     * @param string $options 配置选项,字符串类型
     *
     * @return string
     */
    public static function generateFile($scriptPath, $list, $destination, $options = '')
    {
        $cmd = $scriptPath . " $options $list " . $destination;

        $array = [
            ["pipe", "r"],
            ["pipe", "w"],
            ["pipe", "w"]
        ];

        try {
            $fp = @proc_open($cmd, $array, $pipes);
            @proc_close($fp);
        } catch (\Exception $e) {
            echo $e->getMessage() . "\n";

            return '';
        }

        if (file_exists($destination) && filesize($destination) > 1024) {
            return $destination;
        } else {
            return '';
        }
    }

    /**
     * 检查文件有效性
     *
     * @param $file 文件绝对路径
     *
     * @return bool
     */
    public static function checkFile($file)
    {
        if (!file_exists($file) || !is_readable($file)) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * 检查链接有效性
     *
     * @param $url URL链接
     *
     * @return bool
     */
    public static function checkUrl($url)
    {
        $data = @get_headers($url);

        if (empty($data) || !isset($data[0]) || !strpos($data[0], '200')) {
            return false;
        } else {
            return true;
        }
    }
}
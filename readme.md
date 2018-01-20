## 安装
<pre>
composer require liushuangxi/htmltopdf -vvv
</pre>

## 使用
<pre>
require_once "vendor/autoload.php";

use Html\HtmlToPdf;
use Html\HtmlToImage;

$list = [
    'http://www.baidu.com'
];

//html转pdf
$dest = "/desk/test.pdf";

HtmlToPdf::generate($list, $dest);

//html转image
$dest = "/desk/test.png";

HtmlToImage::generate($list, $dest);
</pre>

## 安装
<pre>
{
  "require":{
    "liushuangxi/htmltopdf": "dev-master"
  },
  "repositories": [
    {
      "type": "vcs",
      "url": "git@github.com:liushuangxi/htmltopdf.git"
    }
  ]
}
</pre>

## 使用
<pre>
require_once "vendor/autoload.php";

use Liushuangxi\Html\HtmlToPdf;
use Liushuangxi\Html\HtmlToImage;

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
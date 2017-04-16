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
require_once "path/vendor/autoload.php";

use Html\HtmlToPdf;
use Html\HtmlToImage;

$list = [
    'http://www.baidu.com'
];

$dest = "/desk/test.pdf";

HtmlToPdf::generate($list, $dest);

$dest = "/desk/test.png";

HtmlToImage::generate($list, $dest);
</pre>
<?php
$p = array(
"http://ww4.sinaimg.cn/large/677ca070gw1en08a10py8j21hc0u0q9i.jpg",
"http://ww1.sinaimg.cn/large/677ca070gw1en08b4gvv5j21ao0t6n43.jpg",
"http://ww1.sinaimg.cn/large/677ca070gw1en08be5dgtj21kw0zkwl1.jpg",
"http://ww4.sinaimg.cn/large/677ca070gw1en08bwguvuj21jk0yh7j4.jpg",
"http://ww1.sinaimg.cn/large/677ca070gw1en08cd0z5xj21kw13qala.jpg",
"http://ww4.sinaimg.cn/large/677ca070gw1en08cnls9vj214s0t01bi.jpg",
"http://ww1.sinaimg.cn/large/677ca070gw1en08cy3f6yj21kw130gtz.jpg",
"http://ww2.sinaimg.cn/large/677ca070gw1en08d89vgwj218g0o2n6n.jpg",
"http://ww2.sinaimg.cn/large/677ca070gw1en08dgzlzhj21hc0u00x0.jpg",
"http://ww1.sinaimg.cn/large/677ca070gw1en08dqzhnxj21kw0wix0q.jpg",
"http://ww1.sinaimg.cn/large/677ca070gw1en08e3sgsyj21jk15oww1.jpg",
"http://ww3.sinaimg.cn/large/677ca070gw1en08eeeurmj21b50xctit.jpg",
"http://ww3.sinaimg.cn/large/677ca070gw1en08epyot7j21hc0xcwxy.jpg",
"http://ww1.sinaimg.cn/large/677ca070gw1en08ezey4oj20xc0oy48j.jpg",
"http://ww2.sinaimg.cn/large/677ca070gw1en08faqmz5j21hc0xcauz.jpg",
"http://ww4.sinaimg.cn/large/677ca070gw1en08fp52syj21hc0u0qhp.jpg",
"http://ww4.sinaimg.cn/large/677ca070gw1en08g1uk7sj20vr0gaq7j.jpg"
);
$rnd = rand(0,16);
$url = $p[$rnd];
header("Location: ".$url);
?>

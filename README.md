TKPHP-Bootstrap
===============


![Bootstrap](http://images.cnblogs.com/cnblogs_com/tinkl/253133/o_42597811-B16A-4116-9564-7A88C8087CED.png)


[http://images.cnblogs.com/cnblogs_com/tinkl/253133/o_42597811-B16A-4116-9564-7A88C8087CED.png]()



深入了解 Bootstrap 底层结构的关键部分，包括我们让 web 开发变得更好、更快、更强壮的最佳实践。

HTML5 文档类型
Bootstrap 使用到的某些 HTML 元素和 CSS 属性需要将页面设置为 HTML5 文档类型。在你项目中的每个页面都要参照下面的格式进行设置。

```` 
<!DOCTYPE html>
<html lang="zh-CN">
  ...
</html>

````
移动设备优先
在 Bootstrap 2 中，我们对框架中的某些关键部分增加了对移动设备友好的样式。而在 **Bootstrap** 3 中，我们重写了整个框架，使其一开始就是对移动设备友好的。这次不是简单的增加一些可选的针对移动设备的样式，而是直接融合进了框架的内核中。也就是说，Bootstrap 是移动设备优先的。针对移动设备的样式融合进了框架的每个角落，而不是增加一个额外的文件。

为了确保适当的绘制和触屏缩放，需要在 <head> 之中添加 viewport 元数据标签。

```
<meta name="viewport" content="width=device-width, initial-scale=1">
```

在移动设备浏览器上，通过为视口（viewport）设置 meta 属性为 user-scalable=no 可以禁用其缩放（zooming）功能。这样禁用缩放功能后，用户只能滚动屏幕，就能让你的网站看上去更像原生应用的感觉。注意，这种方式我们并不推荐所有网站使用，还是要看你自己的情况而定！

 
```

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

```
[http://v3.bootcss.com/css/#forms](http://v3.bootcss.com/css/#forms)


........
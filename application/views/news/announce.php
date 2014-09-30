<?php
$header['page_title'] = CLang::page()->title('home');
CView::show('layout/header', $header);
?>
<style>
    body {
        background: url('<?=WEB_PATH?>/public/img/_newsbg.jpg') no-repeat center 0;
    }
</style>
<body>
<div class="newscont newscont_fix">
    <div class="left_title">
        <h2>新闻 / 公告</h2>

        <p>传播价值理念、传扬优秀文化、瞻注商海动态</p>
    </div>
    <div class="middle_silder">
        <div class="container" id="idTransformView2">
            <ul class="slider" id="idSlider2">
                <?php
                if ($slides) {
                    foreach ($slides as $row) {
                        $imgSrc = $row['thumb'];
                        $title = $row['title'];
                        $len = mb_strlen($title);
                        if ($len >= 19) {
                            $title = mb_substr($title, 0, 19) . '...';
                        }

                        $desc = $row['description'];
                        $len = mb_strlen($desc);
                        if ($len >= 45) {
                            $desc = mb_substr($desc, 0, 45) . '...';
                        }
                        $tag = 0;
                        ?>
                        <li><a href="<?= APP_URL ?>/news/show?r=announce&t=news&c=<?= $tag ?>&id=<?= $row['id'] ?>"><img
                                    src="<?= $imgSrc ?>"/>

                                <p><span><?= $title ?> </span><?= $desc ?> </p></a>

                        </li>
                    <?php
                    }
                } ?>

            </ul>
        </div>

        <ul class="num" id="idNum2">
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>

    <div class="right_newslist">
        <?php
        if ($news) {
            foreach ($news as $row) {
                echo '<a href="' . APP_URL . '/news/show?r=announce&t=news&id=' . $row['id'] . '">' . $row['title'] . ' <span>' . date('Y-m-d', $row['inputtime']) . '</span></a>';
            }
        }

        ?>
        <!--  <a href="#">海亮集团志愿者结对幸福院孤儿象山行活动顺利举行 <span>2014-08-28</span></a>
          <a href="#">浙江百强企业榜单发布 海亮集团位居第7位<span>2014-08-28</span></a>
          <a href="#">海亮集团董事长冯亚丽获授首届“光荣浙商”称号<span>2014-08-28</span></a>
          <a href="#">2014中国民营企业500强发布 海亮集团有限公司位列第16位<span>2014-08-28</span></a>
          <a href="#">绍兴市市长俞志宏一行到海亮集团调研指导工作<span>2014-08-28</span></a>
          <a href="#">海亮集团2014年新员工入职军训成功举行<span>2014-08-28</span></a>-->
    </div>
</div>

<?php
CView::show('layout/menu');
CView::show('layout/footer');
?>

<script type="text/javascript">
    //计算idslider2的宽度开始
    var kuan1 = 0;
    var kuand = document.getElementById('idSlider2')
    var kuan = document.getElementById('idSlider2').getElementsByTagName("li");
    var tpz = kuan.length;//图片总个数
    for (var i = 0; i < kuan.length; i++) {
        kuan1 += 300;
    }
    kuand.style.width = kuan1 + 'px';
    //计算结束

    var keVar = function (id) {
        return "string" == typeof id ? document.getElementById(id) : id;
    };

    var Class = {
        create: function () {
            return function () {
                this.initialize.apply(this, arguments);
            }
        }
    }

    Object.extend = function (destination, source) {
        for (var property in source) {
            destination[property] = source[property];
        }
        return destination;
    }

    var TransformView = Class.create();
    TransformView.prototype = {
        //容器对象,滑动对象,切换参数,切换数量
        initialize: function (container, slider, parameter, count, options) {
            if (parameter <= 0 || count <= 0) return;
            var oContainer = keVar(container), oSlider = keVar(slider), oThis = this;

            this.Index = 0;//当前索引

            this._timer = null;//定时器
            this._slider = oSlider;//滑动对象
            this._parameter = parameter;//切换参数
            this._count = count || 0;//切换数量
            this._target = 0;//目标参数

            this.SetOptions(options);

            this.Up = !!this.options.Up;
            this.Step = Math.abs(this.options.Step);
            this.Time = Math.abs(this.options.Time);
            this.Auto = !!this.options.Auto;
            this.Pause = Math.abs(this.options.Pause);
            this.onStart = this.options.onStart;
            this.onFinish = this.options.onFinish;

            oContainer.style.overflow = "hidden";
            oContainer.style.position = "relative";

            oSlider.style.position = "absolute";
            oSlider.style.top = oSlider.style.left = 0;
        },
        //设置默认属性
        SetOptions: function (options) {
            this.options = {//默认值
                Up: true,//是否向上(否则向左)
                Step: 5,//滑动变化率
                Time: 10,//滑动延时
                Auto: true,//是否自动转换
                Pause: 2000,//停顿时间(Auto为true时有效)
                onStart: function () {
                },//开始转换时执行
                onFinish: function () {
                }//完成转换时执行
            };
            Object.extend(this.options, options || {});
        },
        //开始切换设置
        Start: function () {
            if (this.Index < 0) {
                this.Index = this._count - 1;
            } else if (this.Index >= this._count) {
                this.Index = 0;
            }

            this._target = -1 * this._parameter * this.Index;
            this.onStart();
            this.Move();
        },
        //移动
        Move: function () {
            clearTimeout(this._timer);
            var oThis = this, style = this.Up ? "top" : "left", iNow = parseInt(this._slider.style[style]) || 0, iStep = this.GetStep(this._target, iNow);

            if (iStep != 0) {
                this._slider.style[style] = (iNow + iStep) + "px";
                this._timer = setTimeout(function () {
                    oThis.Move();
                }, this.Time);
            } else {
                this._slider.style[style] = this._target + "px";
                this.onFinish();
                if (this.Auto) {
                    this._timer = setTimeout(function () {
                        oThis.Index++;
                        oThis.Start();
                    }, this.Pause);
                }
            }
        },
        //获取步长
        GetStep: function (iTarget, iNow) {
            var iStep = (iTarget - iNow) / this.Step;
            if (iStep == 0) return 0;
            if (Math.abs(iStep) < 1) return (iStep > 0 ? 1 : -1);
            return iStep;
        },
        //停止
        Stop: function (iTarget, iNow) {
            clearTimeout(this._timer);
            this._slider.style[this.Up ? "top" : "left"] = this._target + "px";
        }
    };

    window.onload = function () {
        function Each(list, fun) {
            for (var i = 0, len = list.length; i < len; i++) {
                fun(list[i], i);
            }
        };

        var objs2 = keVar("idNum2").getElementsByTagName("li");
        var tv2 = new TransformView("idTransformView2", "idSlider2", 300, tpz, {
            onStart: function () {
                Each(objs2, function (o, i) {
                    o.className = tv2.Index == i ? "on" : "";
                })
            },//按钮样式
            Up: false
        });//6是轮播总数
        tv2.Start();
        Each(objs2, function (o, i) {
            o.onmouseover = function () {
                o.className = "on";
                tv2.Auto = false;
                tv2.Index = i;
                tv2.Start();
            }
            o.onmouseout = function () {
                o.className = "";
                tv2.Auto = true;
                tv2.Start();
            }
        })


    }
</script>

</body>
</html>

<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/template/common/header.twig */
class __TwigTemplate_8fd64055bf0ee1b0427c1c46591709ef277d077c4aeaf2d34d1ef7e69a68b215 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
";
        // line 13
        if (($context["robots"] ?? null)) {
            // line 14
            echo "<meta name=\"robots\" content=\"";
            echo ($context["robots"] ?? null);
            echo "\" />
";
        }
        // line 16
        echo "<base href=\"";
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 17
        if (($context["description"] ?? null)) {
            // line 18
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 20
        if (($context["keywords"] ?? null)) {
            // line 21
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 23
        echo "<meta property=\"og:title\" content=\"";
        echo ($context["title"] ?? null);
        echo "\" />
<meta property=\"og:type\" content=\"website\" />
<meta property=\"og:url\" content=\"";
        // line 25
        echo ($context["og_url"] ?? null);
        echo "\" />
";
        // line 26
        if (($context["og_image"] ?? null)) {
            // line 27
            echo "<meta property=\"og:image\" content=\"";
            echo ($context["og_image"] ?? null);
            echo "\" />
";
        } else {
            // line 29
            echo "<meta property=\"og:image\" content=\"";
            echo ($context["logo"] ?? null);
            echo "\" />
";
        }
        // line 31
        echo "<meta property=\"og:site_name\" content=\"";
        echo ($context["name"] ?? null);
        echo "\" />
<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/theme/default/stylesheet/stylesheet.css\" rel=\"stylesheet\">
";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 39
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 39);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 39);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 39);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 42
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 46
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 46);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 46);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 49
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</head>
<body>
<div class=\"bg-header\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"top\">
\t\t\t\t<div class=\"menu\">";
        // line 57
        echo ($context["menu"] ?? null);
        echo "</div>
\t\t\t\t<div class=\"callback\"><a href=\"#callform\" class=\"brn-callback\">Заказать звонок</a></div>
\t\t\t</div>\t
\t\t\t<div class=\"header\">
\t\t\t\t<div class=\"left-header\"><img src=\"image/logo.png\" alt=\"THANOS - Восстановит Вашу потенцию\" title=\"THANOS - Восстановит Вашу потенцию\" /></div>
\t\t\t\t<div class=\"right-header\">
\t\t\t\t\t<div class=\"title-header\">Восстановите потенцию в любом возрасте на длительное время</div>
\t\t\t\t\t<div class=\"subtitle-header\">Восстановите потенцию в любом возрасте на длительное время
\t\t\t\t\t\t\t\t\t\t\t\tTHANOS - природный активатор естественной потенции
\t\t\t\t\t\t\t\t\t\t\t\tбез вреда для здоровья и побочных эффектов, одно из лучших решений для Вашей потенции
\t\t\t\t\t\t\t\t\t\t\t\tХочу востановить потенцию
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"btn-heade\">
\t\t\t\t\t<a href=\"\" class=\"btn-he\">Хочу востановить потенцию</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"bottom\">
\t\t\t\t<div class=\"info-header\">
\t\t\t\t\t<div>Твердая и устойчивая эрекция</div>
\t\t\t\t\t<div>Сильное сексуальное желание</div>
\t\t\t\t\t<div>Выносливость и контроль эякуляции</div>
\t\t\t\t
\t\t\t\t</div>\t\t
\t\t\t\t
\t\t\t
\t\t\t</div>
\t\t
\t\t</div>
\t</div>


</div>




\t<div class=\"container\">
\t\t<div class=\"row\">
<div class=\"all-preferens\" id=\"prem\">
\t\t\t\t<div class=\"item-preferens\">
\t\t\t\t\t<div class=\"title-preferens\">Преимущества препарата <span>THANOS</span></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"item-preferens\">
\t\t\t\t\t<div class=\"title-preferens\">01</div>
\t\t\t\t\t<div class=\"subtitle-preferens\">Натуральные<br /> компоненты</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"item-preferens\">
\t\t\t\t\t<div class=\"title-preferens\">02</div>
\t\t\t\t\t<div class=\"subtitle-preferens\">Повышение мужской потенции</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"item-preferens\">
\t\t\t\t\t<div class=\"title-preferens\">03</div>
\t\t\t\t\t<div class=\"subtitle-preferens\">Можно принимать в любом возрасте</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"item-preferens\">
\t\t\t\t\t<div class=\"title-preferens\">04</div>
\t\t\t\t\t<div class=\"subtitle-preferens\">Повешение либидо<br /> (сексуальное влечение)</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"item-preferens\">
\t\t\t\t\t<div class=\"title-preferens\">05</div>
\t\t\t\t\t<div class=\"subtitle-preferens\">Нормализация уровня тестостерона</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"item-preferens\">
\t\t\t\t\t<div class=\"title-preferens\">06</div>
\t\t\t\t\t<div class=\"subtitle-preferens\">Нормализация спермогенеза</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"item-preferens\">
\t\t\t\t\t<div class=\"title-preferens\">07</div>
\t\t\t\t\t<div class=\"subtitle-preferens\">Повышение тонуса организма</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t</div>\t\t\t\t
\t\t\t\t
\t\t\t\t
<div class=\"about\" id=\"what\">
\t<div class=\"left-about\"><img src=\"image/about.jpg\" alt=\"THANOS - Восстановит Вашу потенцию\" title=\"THANOS - Восстановит Вашу потенцию\" /></div>
\t<div class=\"right-about\">
\t\t<div class=\"title-about\">THANOS - Восстановит Вашу потенцию</div>
\t\t<div class=\"text-about\">
\t\t<p>В состав Thanos'а входят только натуральные компоненты, что исключает риск возникновения аллергии, побочных эффектов и любых других негативных последствий. Thanos дает мужскому организму все необходимые элементы для превосходной сексуальной активности в любом возрасте. При курсовом приеме положительный результат не ограничен во времени.</p>
\t\t<p><span>Эврикома</span> - легендарный корень Тонгкат известен в качестве мощнейшего афродизиака.</p>
\t\t<p><span>Эпимедиум</span> - также известный как трава похотливого козла средство для усиления сексуального влечения и потенции.</p>
\t\t<p><span>Женьшень</span> - повышает либидо (половое влечение), значительно улучшает показатели эрекции</p>
\t\t<p><span>Силденафил</span> - является мощным и селективным ингибитором цГМФ-специфичной ФДЭ 5-го типа в кавернозных телах полового члена. Эффекты силденафила на эрекцию имеют периферический характер. Не оказывает прямого расслабляющего действия на изолированное кавернозное тело человека, но усиливает эффект оксида азота (NO) на данную ткань. В результате восстанавливает нарушенную эректильную функцию и обеспечивает естественный ответ на сексуальное возбуждение.</p>
\t\t
\t\t
\t\t</div>
\t</div>

</div>\t\t\t
\t\t\t\t
\t
\t</div>
</div>

<div class=\"bg-home\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"promo\">
\t\t\t\t<div class=\"left-promo\"><img src=\"image/preparat.png\" alt=\"\" title=\"\" /></div>
\t\t\t\t<div class=\"right-promo\">
\t\t\t\t\t<div class=\"title-promo\">
\t\t\t\t\tЗакажи курс прямо сейчас и получи гарантированную скидку! Цена пачки без акции составляет 690 грн.
Акционная цена - 69 грн
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"btn-promo\"><a href=\"\" class=\"btn-he\">Хочу востановить потенцию</a></div>
\t\t\t\t</div>
\t\t\t
\t\t\t</div>
\t\t
\t\t
\t\t</div>
</div>
</div>



\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"whyme\">
\t\t\t\t<div class=\"title-whyme\">Почему стоит покупать у нас</div>
\t\t\t\t
\t\t\t\t<div class=\"info-whyme\">
\t\t\t\t\t<div class=\"item-whyme\">
\t\t\t\t\t<div class=\"img-whyme\"><svg width=\"80\" height=\"80\" viewBox=\"0 0 80 80\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M40 0C62.0914 0 80 17.9086 80 40C80 62.0914 62.0914 80 40 80C17.9086 80 0 62.0914 0 40C0 17.9086 17.9086 0 40 0ZM13.6457 36.3271C15.7534 34.2177 19.2116 34.2177 21.321 36.3271L31.2329 46.2417C37.0493 41.5303 48.7657 32.3187 62.1457 21.8131C66.2423 18.5693 70.1021 22.8243 66.528 26.3176L35.0737 57.759C32.9387 59.8951 29.5541 59.8506 27.3974 57.759L13.6463 44.0061C11.533 41.8957 11.533 38.4403 13.6463 36.3281L13.6457 36.3271Z\" fill=\"#136632\"/>
</svg> </div>
\t\t\t\t\t<div class=\"name-whyme\">Опыт работы</div>
\t\t\t\t\t<div class=\"text-whyme\">Опыт работы на Украинском рынке более 5 лет. Вся продукция хранится должным образом и имеет сертификаты, подтверждающие качество.</div>
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"item-whyme\">
\t\t\t\t\t<div class=\"img-whyme\"><svg width=\"63\" height=\"80\" viewBox=\"0 0 63 80\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
<path d=\"M59.8392 65.9963C54.2526 56.7118 41.6136 59.5267 38.2691 51.8617C37.7421 48.2431 47.8854 44.0572 47.4675 25.2424C47.2542 15.6695 39.4825 8.37081 31.0213 8.68351C22.5613 8.37225 14.7878 15.6696 14.5767 25.2424C14.1569 44.0569 24.3003 48.2426 23.775 51.8617C20.4293 59.5261 7.79072 56.7112 2.20336 65.9957C-0.785244 69.3973 -0.172063 74.9467 0.792756 80.0001H61.2489C62.2143 74.9461 62.8276 69.3967 59.839 65.9957L59.8392 65.9963Z\" fill=\"#136632\"/>
<path d=\"M12.4993 34.7784L11.886 24.6691C11.886 24.6691 11.062 24.4353 9.92666 24.32C10.0457 21.5013 10.835 14.801 15.4556 9.93066C19.0779 6.11364 24.3725 4.17791 31.1931 4.17791C37.8716 4.17791 43.0632 6.09316 46.6261 9.87241C52.71 16.3234 52.2015 26.2361 52.1954 26.3313L52.1892 26.4479L52.1954 26.5644C52.2009 26.6959 52.7422 39.8297 44.1515 47.1551C43.2741 47.9035 43.1693 49.2229 43.9171 50.101C44.3313 50.5847 44.9178 50.8333 45.508 50.8333C45.9873 50.8333 46.4697 50.6696 46.8629 50.3348C56.646 41.9896 56.4277 27.9933 56.3712 26.4742C56.4332 25.1628 56.7017 14.4943 49.6927 7.03436C45.3078 2.36606 39.0844 0 31.1925 0C23.1809 0 16.867 2.37352 12.4257 7.05483C6.4372 13.367 5.77322 21.9031 5.73163 24.8407C4.12193 25.6009 2.94144 27.2558 3.38605 30.6406C3.38543 30.6413 3.38543 37.535 12.4995 34.7775L12.4993 34.7784Z\" fill=\"#136632\"/>
</svg> </div>
\t\t\t\t\t<div class=\"name-whyme\">Опытные менеджеры</div>
\t\t\t\t\t<div class=\"text-whyme\">Наши менеджеры - профессионалы своего дела. Мы оказываем бесплатную телефонную консультацию нашим клиентам в рабочее время, для этого просто закажите обратный звонок</div>
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"item-whyme\">
\t\t\t\t\t<div class=\"img-whyme\"><svg width=\"130\" height=\"80\" viewBox=\"0 0 130 80\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
<path d=\"M85.0142 27.9745L47.6244 15.6936C47.2151 15.5575 46.9419 15.8297 46.9419 16.239V67.1384C46.9419 67.4115 47.078 67.5477 47.3512 67.6838L84.7411 79.9646C85.0142 80.1007 85.4235 79.8285 85.4235 79.4192V28.5199C85.2874 28.2467 85.1513 28.1106 85.0142 27.9735V27.9745Z\" fill=\"#136632\"/>
<path d=\"M121.722 10.917L88.4256 0H88.1524L54.8563 10.917C54.3109 11.0531 54.3109 11.7356 54.8563 11.8727L88.1524 22.7897H88.4256L121.722 11.8727C122.131 11.8727 122.131 11.1902 121.722 10.917Z\" fill=\"#136632\"/>
<path d=\"M128.954 15.6931L91.5641 27.974C91.2909 28.1101 91.1548 28.2472 91.1548 28.5194V79.4187C91.1548 79.828 91.5641 79.9641 91.8373 79.9641L129.227 67.6833C129.5 67.5472 129.636 67.4101 129.636 67.1379V16.2385C129.636 15.8292 129.227 15.557 128.954 15.6931Z\" fill=\"#136632\"/>
<path d=\"M30.7033 15.5566H3.82086C1.77436 15.5566 0 17.1939 0 19.3775C0 21.424 1.63722 23.1984 3.82086 23.1984H30.7033C32.7498 23.1984 34.5242 21.5611 34.5242 19.3775C34.3881 17.3301 32.7499 15.5566 30.7033 15.5566Z\" fill=\"#136632\"/>
<path d=\"M30.7033 36.7078H3.82086C1.77436 36.7078 0 38.345 0 40.5286C0 42.5751 1.63722 44.3495 3.82086 44.3495L30.7033 44.3505C32.7498 44.3505 34.5242 42.7132 34.5242 40.5296C34.3881 38.4821 32.7499 36.7078 30.7033 36.7078V36.7078Z\" fill=\"#136632\"/>
<path d=\"M30.7033 57.9954H3.82086C1.77436 57.9954 0 59.6326 0 61.8162C0 63.9998 1.63722 65.6371 3.82086 65.6371H30.7033C32.7498 65.6371 34.5242 63.9999 34.5242 61.8162C34.5242 59.6327 32.7499 57.9954 30.7033 57.9954Z\" fill=\"#136632\"/>
</svg> </div>
\t\t\t\t\t<div class=\"name-whyme\">Доставка</div>
\t\t\t\t\t<div class=\"text-whyme\">По территории Украины доставка осуществляется перевозчиком \"Новая Почта\" БЕСПЛАТНО. В среднем время доставки занимает 1-2 дня, в отдельных случаях доставка может занимать 3-4 дня.</div>
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t</div>
\t\t
\t\t
\t\t
\t\t
\t\t</div>
\t</div>
\t\t\t<div class=\"bg-work\" id=\"work\">
\t\t\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"title-work\">Как работает THANOS</div>
\t\t<div class=\"text-work\">Тестостерон - главный мужской гормон. Он ускоряет прирост мышц, контролирует физическую силу и выносливость мужчины, участвует в распределении жира в организме, активирует либидо, выработку спермы и потенцию.

</div>
\t\t
\t\t</div></div>\t\t
\t\t\t\t
\t\t</div>\t\t



<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"man\">
\t\t\t\t<div class=\"left-man\">
\t\t\t\t\t<div class=\"title-man\">80% мужчин хотели бы улучшить качество своей сексуальной жизни</div>
\t\t\t\t\t<div class=\"text-man\">
\t\t\t\t\t\t<p>THANOS дает мужскому организму все необходимые элементы для превосходной сексуальной активности в любом возрасте.</p>
\t\t\t\t\t\t<p>При курсовом приеме положительный результат не ограничен во времени.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"subtitle-man\">Способ применения</div>
\t\t\t\t\t<div class=\"list-man\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>1 капсула за час до полового акта</li>
\t\t\t\t\t\t<li>как пройти курс и пролонгировать эффект расскажут наши эксперты</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"right-man\">
\t\t\t\t\t<img src=\"image/banner.jpg\" alt=\"80% мужчин хотели бы улучшить качество своей сексуальной жизни\" title=\"80% мужчин хотели бы улучшить качество своей сексуальной жизни\" />
\t\t\t\t
\t\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t</div>
\t\t
\t\t</div></div>\t\t\t\t
\t\t\t\t
\t\t\t
\t\t
\t";
    }

    public function getTemplateName()
    {
        return "default/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 57,  193 => 51,  185 => 49,  181 => 48,  170 => 46,  166 => 45,  163 => 44,  154 => 42,  150 => 41,  137 => 39,  133 => 38,  122 => 31,  116 => 29,  110 => 27,  108 => 26,  104 => 25,  98 => 23,  92 => 21,  90 => 20,  84 => 18,  82 => 17,  77 => 16,  71 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/header.twig", "");
    }
}

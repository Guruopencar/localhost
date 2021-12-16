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
class __TwigTemplate_4bbcc9c821e1a8ddda78d2a4b6c347aea3038e5d763a50f8c3b3b467ee302f6f extends \Twig\Template
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
\t\t\t\t
\t\t\t\t
\t\t\t\t
<div class=\"about\" id=\"what\">
\t<div class=\"left-about\"><img class=\"image/about.jpg\" alt=\"THANOS - Восстановит Вашу потенцию\" title=\"THANOS - Восстановит Вашу потенцию\" /></div>


</div>\t\t\t
\t\t\t\t
\t
\t</div>
</div>
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t
\t\t
<div class=\"\"\t\t\t";
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
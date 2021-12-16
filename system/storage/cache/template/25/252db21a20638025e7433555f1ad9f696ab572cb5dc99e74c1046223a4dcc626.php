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

/* default/template/common/footer.twig */
class __TwigTemplate_c1a305f8168d67cd202be8339342d772dfa96ff301aab7f090f8228cb4f2a0b0 extends \Twig\Template
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
        echo "<footer>
<div class=\"bg-footer\">
  <div class=\"container\">
    <div class=\"row\">
\t\t<div class=\"title-foote\">THANOS дает мужскому организму все необходимые элементы для превосходной сексуальной активности в любом возрасте</div>
\t\t<div class=\"subtitle-foote\">Возникли вопросы?</div>
\t\t<div class=\"text-foote\">Оставьте свои данные и мы свяжемся с вами</div>
\t\t<div class=\"form-foote\">
\t\t\t<form action=\"\" id=\"call\" class=\"call\" >
\t\t\t\t<input type=\"text\" name=\"name\" class=\"inpt\"  placeholder=\"Ваше имя\" required />
\t\t\t\t<input type=\"text\" name=\"email\" class=\"inpt\"  placeholder=\"Ваш номер\" required />
\t\t\t\t<input type=\"submit\"  class=\"bnt-send\" value=\"Заказать звонок\"  />
\t\t\t\t
\t\t\t
\t\t\t</form>
\t\t
\t\t</div>
      </div>
    </div>
</div>
\t<div class=\"bg-bottom-footer\">
   <div class=\"container\">
    <div class=\"row\">
\t<div class=\"bottom-footer\">
\t<div class=\"left-footer\">THANOS </div>
\t<div class=\"right-footer\">";
        // line 26
        echo ($context["powered"] ?? null);
        echo "</div>
\t</div>
    
 </div>
    </div>
    </div>
</footer>
";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 34
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 34);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 34);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 34);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 37
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</body></html>";
    }

    public function getTemplateName()
    {
        return "default/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 39,  95 => 37,  91 => 36,  78 => 34,  74 => 33,  64 => 26,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}

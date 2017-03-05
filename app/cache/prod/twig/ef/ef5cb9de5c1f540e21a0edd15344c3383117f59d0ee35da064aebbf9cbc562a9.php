<?php

/* PrestaShopBundle:Admin:Category/categories.html.twig */
class __TwigTemplate_cd4ea1fe0bc86fd468b39f05f57d6e919090b6c4173903c724ccf8f0a654f0bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        echo "<div id=\"ps_categoryTags\" class=\"pstaggerTagsWrapper\" style=\"display: block;\">

</div>

<div id=\"ps_categoryTree\" class=\"hide\">
  ";
        // line 30
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["categories"]) ? $context["categories"] : null)), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin:Category/categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 30,  19 => 25,);
    }

    public function getSource()
    {
        return "";
    }
}

<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_573bd7e7c3b60bcab81261bc72a70d1e35929f2495ec18266e28169c53c42cb2 extends Twig_Template
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
        $__internal_ed88b5c3a2afed70c5092199c76ca45c9b3b9bf6f4ea093ba7d9e25d7568f4ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed88b5c3a2afed70c5092199c76ca45c9b3b9bf6f4ea093ba7d9e25d7568f4ee->enter($__internal_ed88b5c3a2afed70c5092199c76ca45c9b3b9bf6f4ea093ba7d9e25d7568f4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_ed88b5c3a2afed70c5092199c76ca45c9b3b9bf6f4ea093ba7d9e25d7568f4ee->leave($__internal_ed88b5c3a2afed70c5092199c76ca45c9b3b9bf6f4ea093ba7d9e25d7568f4ee_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "/home/desenvolvimento/Projetos/testeSonata2/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu_base.html.twig");
    }
}

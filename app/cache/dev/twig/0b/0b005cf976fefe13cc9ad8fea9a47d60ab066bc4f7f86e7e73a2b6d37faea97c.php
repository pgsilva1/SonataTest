<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_b665a3358a23dacdba55c41da89b80066c730842585c89b1bedd566dab896133 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1086d1d8d003d0fdd6691e49f2fb0a7ac50126cc898d9afd700c6316b224fdf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1086d1d8d003d0fdd6691e49f2fb0a7ac50126cc898d9afd700c6316b224fdf8->enter($__internal_1086d1d8d003d0fdd6691e49f2fb0a7ac50126cc898d9afd700c6316b224fdf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1086d1d8d003d0fdd6691e49f2fb0a7ac50126cc898d9afd700c6316b224fdf8->leave($__internal_1086d1d8d003d0fdd6691e49f2fb0a7ac50126cc898d9afd700c6316b224fdf8_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_774fb2ce0f00e1dca22961ff6a5f6c3cb262509fd9968b4c2859395ef6d7518b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_774fb2ce0f00e1dca22961ff6a5f6c3cb262509fd9968b4c2859395ef6d7518b->enter($__internal_774fb2ce0f00e1dca22961ff6a5f6c3cb262509fd9968b4c2859395ef6d7518b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_774fb2ce0f00e1dca22961ff6a5f6c3cb262509fd9968b4c2859395ef6d7518b->leave($__internal_774fb2ce0f00e1dca22961ff6a5f6c3cb262509fd9968b4c2859395ef6d7518b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{% block field %}
    <span class=\"edit\">
        {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}
    </span>
{% endblock %}
", "SonataAdminBundle:CRUD:edit_array.html.twig", "/home/desenvolvimento/Projetos/testeSonata2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_array.html.twig");
    }
}

<?php

/* SonataAdminBundle:CRUD:list_time.html.twig */
class __TwigTemplate_1bf9790c00ab877d624e23e290f4890727b358064d2cfcda28bab6001c343973 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b215ead4606ff9214e589ce4ce8744b2cbb8c1a16a528dcb4138b9923f17a676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b215ead4606ff9214e589ce4ce8744b2cbb8c1a16a528dcb4138b9923f17a676->enter($__internal_b215ead4606ff9214e589ce4ce8744b2cbb8c1a16a528dcb4138b9923f17a676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b215ead4606ff9214e589ce4ce8744b2cbb8c1a16a528dcb4138b9923f17a676->leave($__internal_b215ead4606ff9214e589ce4ce8744b2cbb8c1a16a528dcb4138b9923f17a676_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_246edb7ff037bc49fe5b117b6a2a604da568104de50865fd13b45c904b972fd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_246edb7ff037bc49fe5b117b6a2a604da568104de50865fd13b45c904b972fd4->enter($__internal_246edb7ff037bc49fe5b117b6a2a604da568104de50865fd13b45c904b972fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_246edb7ff037bc49fe5b117b6a2a604da568104de50865fd13b45c904b972fd4->leave($__internal_246edb7ff037bc49fe5b117b6a2a604da568104de50865fd13b45c904b972fd4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:list_time.html.twig", "/home/desenvolvimento/Projetos/testeSonata2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_time.html.twig");
    }
}

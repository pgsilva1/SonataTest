<?php

/* SonataAdminBundle:CRUD:show_time.html.twig */
class __TwigTemplate_3ef7f52a136fe1d3cce17cd3b3afcac2cca404fdf825118f6bd15b6f36eb168b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_time.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a264e2e8564286101dff75215b2a6134ebad9581dcaa0fcadb87a0e0e792545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a264e2e8564286101dff75215b2a6134ebad9581dcaa0fcadb87a0e0e792545->enter($__internal_8a264e2e8564286101dff75215b2a6134ebad9581dcaa0fcadb87a0e0e792545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a264e2e8564286101dff75215b2a6134ebad9581dcaa0fcadb87a0e0e792545->leave($__internal_8a264e2e8564286101dff75215b2a6134ebad9581dcaa0fcadb87a0e0e792545_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f33f6a3c64776963e8cd0446674a93190ae09c616a271de7d22e28cbf62085e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f33f6a3c64776963e8cd0446674a93190ae09c616a271de7d22e28cbf62085e7->enter($__internal_f33f6a3c64776963e8cd0446674a93190ae09c616a271de7d22e28cbf62085e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_f33f6a3c64776963e8cd0446674a93190ae09c616a271de7d22e28cbf62085e7->leave($__internal_f33f6a3c64776963e8cd0446674a93190ae09c616a271de7d22e28cbf62085e7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:show_time.html.twig", "/home/desenvolvimento/Projetos/testeSonata2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_time.html.twig");
    }
}

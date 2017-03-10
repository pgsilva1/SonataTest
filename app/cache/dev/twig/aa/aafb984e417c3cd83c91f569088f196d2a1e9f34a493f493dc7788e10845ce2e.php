<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_2110ffa85005b20649c538abb5fecbb108ab77c4c944091f254c942681cfa380 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 32);
        // line 32
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7bb7482a5da44167de3b59db1350923f03fb2017a384f968be09e590e88c7bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7bb7482a5da44167de3b59db1350923f03fb2017a384f968be09e590e88c7bc->enter($__internal_f7bb7482a5da44167de3b59db1350923f03fb2017a384f968be09e590e88c7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7bb7482a5da44167de3b59db1350923f03fb2017a384f968be09e590e88c7bc->leave($__internal_f7bb7482a5da44167de3b59db1350923f03fb2017a384f968be09e590e88c7bc_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2e6a80063b26bb2bb73575be26c00e6f7785cde812f2c8ca1b41156a0f5edf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2e6a80063b26bb2bb73575be26c00e6f7785cde812f2c8ca1b41156a0f5edf5->enter($__internal_f2e6a80063b26bb2bb73575be26c00e6f7785cde812f2c8ca1b41156a0f5edf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "toString", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_f2e6a80063b26bb2bb73575be26c00e6f7785cde812f2c8ca1b41156a0f5edf5->leave($__internal_f2e6a80063b26bb2bb73575be26c00e6f7785cde812f2c8ca1b41156a0f5edf5_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_cc9c0239310a2d159ebc831abac6dd070bcc99bdc183eaec8bbe7108fa3164e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc9c0239310a2d159ebc831abac6dd070bcc99bdc183eaec8bbe7108fa3164e6->enter($__internal_cc9c0239310a2d159ebc831abac6dd070bcc99bdc183eaec8bbe7108fa3164e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_cc9c0239310a2d159ebc831abac6dd070bcc99bdc183eaec8bbe7108fa3164e6->leave($__internal_cc9c0239310a2d159ebc831abac6dd070bcc99bdc183eaec8bbe7108fa3164e6_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_1b99b2d596f56143a3981b044d80069dbb8083d066ebeab34edce17808638fdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b99b2d596f56143a3981b044d80069dbb8083d066ebeab34edce17808638fdd->enter($__internal_1b99b2d596f56143a3981b044d80069dbb8083d066ebeab34edce17808638fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_1b99b2d596f56143a3981b044d80069dbb8083d066ebeab34edce17808638fdd->leave($__internal_1b99b2d596f56143a3981b044d80069dbb8083d066ebeab34edce17808638fdd_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_bf79edebc229a6f21ee13c4ca7c0ffb5abedc0195a762d4be5c5ea24eb91d491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf79edebc229a6f21ee13c4ca7c0ffb5abedc0195a762d4be5c5ea24eb91d491->enter($__internal_bf79edebc229a6f21ee13c4ca7c0ffb5abedc0195a762d4be5c5ea24eb91d491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_bf79edebc229a6f21ee13c4ca7c0ffb5abedc0195a762d4be5c5ea24eb91d491->leave($__internal_bf79edebc229a6f21ee13c4ca7c0ffb5abedc0195a762d4be5c5ea24eb91d491_prof);

    }

    // line 34
    public function block_form($context, array $blocks = array())
    {
        $__internal_79f3f32da00605361b8df84d473194ea2964259f2160c42ad9c8da2f6c0def2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79f3f32da00605361b8df84d473194ea2964259f2160c42ad9c8da2f6c0def2e->enter($__internal_79f3f32da00605361b8df84d473194ea2964259f2160c42ad9c8da2f6c0def2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 35
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_79f3f32da00605361b8df84d473194ea2964259f2160c42ad9c8da2f6c0def2e->leave($__internal_79f3f32da00605361b8df84d473194ea2964259f2160c42ad9c8da2f6c0def2e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 35,  122 => 34,  110 => 30,  103 => 27,  97 => 26,  87 => 23,  81 => 22,  70 => 18,  64 => 16,  61 => 15,  55 => 14,  40 => 12,  12 => 32,);
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

{% block title %}
    {% if admin.id(object) is not null %}
        {{ \"title_edit\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
    {% else %}
        {{ \"title_create\"|trans({}, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}

{% block form %}
    {{ block('parentForm') }}
{% endblock %}
", "SonataAdminBundle:CRUD:base_edit.html.twig", "/home/desenvolvimento/Projetos/testeSonata2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_edit.html.twig");
    }
}

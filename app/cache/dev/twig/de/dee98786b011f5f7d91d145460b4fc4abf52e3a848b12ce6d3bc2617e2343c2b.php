<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_979c2a278f98583af717069ac10eeb35c6aa87c77d4905c129e7b6d9ed3e0a25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d7f9c083eb5206238b6fde0805eb3be00e06467c25c2c2d8eb9832901793531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d7f9c083eb5206238b6fde0805eb3be00e06467c25c2c2d8eb9832901793531->enter($__internal_2d7f9c083eb5206238b6fde0805eb3be00e06467c25c2c2d8eb9832901793531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d7f9c083eb5206238b6fde0805eb3be00e06467c25c2c2d8eb9832901793531->leave($__internal_2d7f9c083eb5206238b6fde0805eb3be00e06467c25c2c2d8eb9832901793531_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_987c52f912b117b9a1f041e5af3eaa91fb6ae7268e51b6a1066972e9d81eaee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_987c52f912b117b9a1f041e5af3eaa91fb6ae7268e51b6a1066972e9d81eaee3->enter($__internal_987c52f912b117b9a1f041e5af3eaa91fb6ae7268e51b6a1066972e9d81eaee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_987c52f912b117b9a1f041e5af3eaa91fb6ae7268e51b6a1066972e9d81eaee3->leave($__internal_987c52f912b117b9a1f041e5af3eaa91fb6ae7268e51b6a1066972e9d81eaee3_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_ff68c12d8fe233832e6dcd53c7db497850e6826af526faca3bb8af6365436a90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff68c12d8fe233832e6dcd53c7db497850e6826af526faca3bb8af6365436a90->enter($__internal_ff68c12d8fe233832e6dcd53c7db497850e6826af526faca3bb8af6365436a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_ff68c12d8fe233832e6dcd53c7db497850e6826af526faca3bb8af6365436a90->leave($__internal_ff68c12d8fe233832e6dcd53c7db497850e6826af526faca3bb8af6365436a90_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_28bdc5b518b32f88092e169831f3d96344d4598110850876c5ce4cf2a6ad7d4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28bdc5b518b32f88092e169831f3d96344d4598110850876c5ce4cf2a6ad7d4e->enter($__internal_28bdc5b518b32f88092e169831f3d96344d4598110850876c5ce4cf2a6ad7d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_28bdc5b518b32f88092e169831f3d96344d4598110850876c5ce4cf2a6ad7d4e->leave($__internal_28bdc5b518b32f88092e169831f3d96344d4598110850876c5ce4cf2a6ad7d4e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 25,  68 => 24,  57 => 20,  54 => 19,  48 => 18,  41 => 15,  35 => 14,  20 => 12,);
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

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}
    {% if action is defined %}
        {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}
    {% endif %}
{% endblock %}

{% block content %}

    Redefine the content block in your action template

{% endblock %}
", "SonataAdminBundle:CRUD:action.html.twig", "/home/desenvolvimento/Projetos/testeSonata2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/action.html.twig");
    }
}

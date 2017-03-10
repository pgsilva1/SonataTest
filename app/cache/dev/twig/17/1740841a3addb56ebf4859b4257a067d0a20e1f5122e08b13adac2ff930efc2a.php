<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_6c7e108e0fb4f2939f5711e7617da614463e3fe829e3bc2468400ecb79b506ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_currency.html.twig", 12);
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
        $__internal_55a5bf5067680fdbdd07a8b845ddfbbcbb76526f64c8e7a3269744b7c7ad0ce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55a5bf5067680fdbdd07a8b845ddfbbcbb76526f64c8e7a3269744b7c7ad0ce7->enter($__internal_55a5bf5067680fdbdd07a8b845ddfbbcbb76526f64c8e7a3269744b7c7ad0ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55a5bf5067680fdbdd07a8b845ddfbbcbb76526f64c8e7a3269744b7c7ad0ce7->leave($__internal_55a5bf5067680fdbdd07a8b845ddfbbcbb76526f64c8e7a3269744b7c7ad0ce7_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ee7cab3158531ccd41d6763c81b11b0931339f3045b56832e832001f8bb1b931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee7cab3158531ccd41d6763c81b11b0931339f3045b56832e832001f8bb1b931->enter($__internal_ee7cab3158531ccd41d6763c81b11b0931339f3045b56832e832001f8bb1b931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === ($context["value"] ?? $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_ee7cab3158531ccd41d6763c81b11b0931339f3045b56832e832001f8bb1b931->leave($__internal_ee7cab3158531ccd41d6763c81b11b0931339f3045b56832e832001f8bb1b931_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_currency.html.twig", "/home/desenvolvimento/Projetos/testeSonata2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_currency.html.twig");
    }
}

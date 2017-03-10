<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_c015d4c0e967055bc95be0a41789a1eab82d9de80c41fd124fe392ebb09d5dac extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef6c84fecd5254f3a96ca71d8b9732a09a9612cf6a4079c1c305f63ae6204427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef6c84fecd5254f3a96ca71d8b9732a09a9612cf6a4079c1c305f63ae6204427->enter($__internal_ef6c84fecd5254f3a96ca71d8b9732a09a9612cf6a4079c1c305f63ae6204427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef6c84fecd5254f3a96ca71d8b9732a09a9612cf6a4079c1c305f63ae6204427->leave($__internal_ef6c84fecd5254f3a96ca71d8b9732a09a9612cf6a4079c1c305f63ae6204427_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_938993cac688ffca5ee5d506d931f76a22b3b1b5b16bc79a83c0d7fc0f8fbb1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_938993cac688ffca5ee5d506d931f76a22b3b1b5b16bc79a83c0d7fc0f8fbb1b->enter($__internal_938993cac688ffca5ee5d506d931f76a22b3b1b5b16bc79a83c0d7fc0f8fbb1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_938993cac688ffca5ee5d506d931f76a22b3b1b5b16bc79a83c0d7fc0f8fbb1b->leave($__internal_938993cac688ffca5ee5d506d931f76a22b3b1b5b16bc79a83c0d7fc0f8fbb1b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
", "SonataAdminBundle:CRUD:edit_file.html.twig", "/home/desenvolvimento/Projetos/testeSonata2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_file.html.twig");
    }
}

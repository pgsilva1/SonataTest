<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_aea35ca6c177faf5df8144bf6077a86d16f93f242baa1f15350a7771653c4472 extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2cfb8b84bd4556a926c054785de1520df3542f318610bf609f4a9be92af4ac73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cfb8b84bd4556a926c054785de1520df3542f318610bf609f4a9be92af4ac73->enter($__internal_2cfb8b84bd4556a926c054785de1520df3542f318610bf609f4a9be92af4ac73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cfb8b84bd4556a926c054785de1520df3542f318610bf609f4a9be92af4ac73->leave($__internal_2cfb8b84bd4556a926c054785de1520df3542f318610bf609f4a9be92af4ac73_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_92309c4f9077f4e1cdf48a5a30afc5359909669bd3b9a94c9f83cedbc239a5a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92309c4f9077f4e1cdf48a5a30afc5359909669bd3b9a94c9f83cedbc239a5a9->enter($__internal_92309c4f9077f4e1cdf48a5a30afc5359909669bd3b9a94c9f83cedbc239a5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_92309c4f9077f4e1cdf48a5a30afc5359909669bd3b9a94c9f83cedbc239a5a9->leave($__internal_92309c4f9077f4e1cdf48a5a30afc5359909669bd3b9a94c9f83cedbc239a5a9_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
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
", "SonataAdminBundle:CRUD:edit_string.html.twig", "/home/desenvolvimento/Projetos/testeSonata2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_string.html.twig");
    }
}

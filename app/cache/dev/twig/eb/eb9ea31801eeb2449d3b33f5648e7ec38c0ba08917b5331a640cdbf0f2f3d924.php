<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_df691ff4ee1e9e897cfcbaf6f0c0e27bce0a835903d4ede2627b651eff3fc447 extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5fab408529855f5268c6bd3cc35d522f7a5f232a59e7c2f361e90db77162ea53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fab408529855f5268c6bd3cc35d522f7a5f232a59e7c2f361e90db77162ea53->enter($__internal_5fab408529855f5268c6bd3cc35d522f7a5f232a59e7c2f361e90db77162ea53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fab408529855f5268c6bd3cc35d522f7a5f232a59e7c2f361e90db77162ea53->leave($__internal_5fab408529855f5268c6bd3cc35d522f7a5f232a59e7c2f361e90db77162ea53_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_264d0d0b00925a7961134896c24b90569b2aa8d35e7a31b7081efcebf10d699b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_264d0d0b00925a7961134896c24b90569b2aa8d35e7a31b7081efcebf10d699b->enter($__internal_264d0d0b00925a7961134896c24b90569b2aa8d35e7a31b7081efcebf10d699b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_264d0d0b00925a7961134896c24b90569b2aa8d35e7a31b7081efcebf10d699b->leave($__internal_264d0d0b00925a7961134896c24b90569b2aa8d35e7a31b7081efcebf10d699b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
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
", "SonataAdminBundle:CRUD:edit_integer.html.twig", "/home/desenvolvimento/Projetos/testeSonata2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_integer.html.twig");
    }
}

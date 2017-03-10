<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_90a4d534e15d0f19eb22c785335acfbb3a5203fa9709b9da9f7dbcf4ab270358 extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0cdb1e2237dbc18fdaef4dfabad9ea97b537924c339416580ea8324a8e755fb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cdb1e2237dbc18fdaef4dfabad9ea97b537924c339416580ea8324a8e755fb3->enter($__internal_0cdb1e2237dbc18fdaef4dfabad9ea97b537924c339416580ea8324a8e755fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cdb1e2237dbc18fdaef4dfabad9ea97b537924c339416580ea8324a8e755fb3->leave($__internal_0cdb1e2237dbc18fdaef4dfabad9ea97b537924c339416580ea8324a8e755fb3_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f326261b3ae95840936478406fb42f213d6287e1b6ffbea60e18d7e1d0771c78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f326261b3ae95840936478406fb42f213d6287e1b6ffbea60e18d7e1d0771c78->enter($__internal_f326261b3ae95840936478406fb42f213d6287e1b6ffbea60e18d7e1d0771c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_f326261b3ae95840936478406fb42f213d6287e1b6ffbea60e18d7e1d0771c78->leave($__internal_f326261b3ae95840936478406fb42f213d6287e1b6ffbea60e18d7e1d0771c78_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
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
", "SonataAdminBundle:CRUD:edit_text.html.twig", "/home/desenvolvimento/Projetos/testeSonata2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_text.html.twig");
    }
}

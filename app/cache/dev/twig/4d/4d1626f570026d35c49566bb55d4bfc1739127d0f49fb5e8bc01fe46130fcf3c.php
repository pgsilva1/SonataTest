<?php

/* SonataAdminBundle:CRUD:show_email.html.twig */
class __TwigTemplate_ca890180df386166a98d8847e4025d9af03fa49acca7cdc12d1c062b2838a756 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 1);
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
        $__internal_20d2794c28b967f67c500f0dcbc0130d537ad73327cbeafa57a705767a069a9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20d2794c28b967f67c500f0dcbc0130d537ad73327cbeafa57a705767a069a9a->enter($__internal_20d2794c28b967f67c500f0dcbc0130d537ad73327cbeafa57a705767a069a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20d2794c28b967f67c500f0dcbc0130d537ad73327cbeafa57a705767a069a9a->leave($__internal_20d2794c28b967f67c500f0dcbc0130d537ad73327cbeafa57a705767a069a9a_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_990e45d17a3a902454776df4dbbadca2fb4f61032890704a99f5f68b658f0928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_990e45d17a3a902454776df4dbbadca2fb4f61032890704a99f5f68b658f0928->enter($__internal_990e45d17a3a902454776df4dbbadca2fb4f61032890704a99f5f68b658f0928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 4)->display($context);
        
        $__internal_990e45d17a3a902454776df4dbbadca2fb4f61032890704a99f5f68b658f0928->leave($__internal_990e45d17a3a902454776df4dbbadca2fb4f61032890704a99f5f68b658f0928_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_email.html.twig", "/home/desenvolvimento/Projetos/testeSonata2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_email.html.twig");
    }
}
